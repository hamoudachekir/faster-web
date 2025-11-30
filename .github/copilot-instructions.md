# Copilot Instructions for Faster Web

Multi-service platform (ride-hailing, delivery, logistics) built with Laravel 12. This guide helps AI agents be immediately productive.

## Stack & Core Commands

**Tech Stack**: Laravel 12 (PHP 8.2+), PHPUnit 11, Vite, Tailwind v4, Alpine.js

**Critical Scripts** (always use these):
```bash
composer run setup  # Full setup: deps, .env, key:generate, migrate, seed, npm install, build
composer run dev    # Dev loop: artisan serve + queue:listen + pail + vite (via concurrently)
composer run test   # PHPUnit with in-memory SQLite, sync queues, array cache/session
```

## Architecture Overview

### Four-Role System with Isolated Auth
Each role has separate login/session/middleware (no Laravel's default auth guards):

1. **Users** (`utilisateur.*` routes, `UserMiddleware`)
   - Public registration + login
   - Dashboard: profile, wallet, orders, promos, feedback
   - Model: `User` (standard Authenticatable)

2. **Drivers** (`driver.*` routes, `DriverMiddleware`)
   - Apply via `/rejoindre/conducteur` → `DriverApplication` model
   - Admin approves → gets login credentials (generated password)
   - Dashboard: profile, settings
   - **No password reset** - admin regenerates via `admin.drivers.regenerate-password`

3. **Partners** (`partner.*` routes, `PartnerMiddleware`)
   - Apply via `/rejoindre/partenaire` → `PartnerApplication` model
   - Admin approves → gets login credentials
   - Dashboard: profile, settings
   - **No password reset** - admin regenerates via `admin.partners.regenerate-password`

4. **Admin** (`admin.*` routes, `AdminMiddleware`)
   - Simple session-based auth (no User model): `session('admin_authenticated')`
   - Hardcoded password check in `Admin\DashboardController@login`
   - Manages: driver/partner applications, contact submissions, users, feedback
   - Routes: `index|show|status|regenerate-password|destroy` for drivers/partners/contacts

**Key Insight**: Middleware checks `session('role_authenticated')`, NOT `Auth::check()`. See `app/Http/Middleware/{Admin,Driver,Partner,User}Middleware.php`.

### Domain Models
- **Service**: 3 core services (ride, delivery, business) with features stored as JSON. Seeded by `DatabaseSeeder`.
- **Testimonial**: Featured reviews on homepage.
- **DriverApplication** / **PartnerApplication**: Pending/approved applications with file uploads (documents stored in `storage/app/public`).
- **ContactSubmission**: Public contact form submissions (status: new/read/closed).
- **User** + **UserFeedback**: Standard users with feedback relationship.

**Models Convention**: Use typed `casts()` method (not `$casts` property). Always set `$fillable` or `$guarded`. Example: `app/Models/User.php`.

### Public Routes
- `/` → `HomeController@index` (services + testimonials)
- `/services/{slug}` → `ServiceController@show` (ride, delivery, business)
- `/a-propos`, `/contact`, `/privacy-policy`
- `/rejoindre/{conducteur|partenaire}` → `JoinController` (application forms)

### Critical File Locations
- Routes: `routes/web.php` (groups by prefix + middleware)
- Controllers: `app/Http/Controllers/{Admin,Auth,Driver,Partner,User}/`
- Views: `resources/views/{admin,auth,driver,partner,user,join,services}/`
- Seeders: `database/seeders/DatabaseSeeder.php` (seeds services + testimonials + test user)
- Migrations: `database/migrations/` (follow `YYYY_MM_DD_HHMMSS_*.php` pattern)

## Project-Specific Conventions

### 1. Adding Model Fields (Standard Flow)
```
1. Create migration: php artisan make:migration add_field_to_table
2. Update model: add to $fillable + add typed cast in casts() method
3. Update factory: database/factories/*Factory.php (if testing)
4. Run tests: composer run test
```

### 2. Route Naming
Always use named routes from `routes/web.php`:
- ✅ `route('admin.drivers.show', $id)`
- ❌ `/admin/drivers/{$id}` (hard-coded URL)

Prefixes: `utilisateur.*`, `driver.*`, `partner.*`, `admin.*`, `join.*`

### 3. Frontend Assets
- Edit: `resources/js/` and `resources/css/`
- **Never commit**: `public/build/` (Vite output, gitignored)
- Vite config: `vite.config.js` with Tailwind v4 plugin

### 4. Admin Actions Pattern
To add admin CRUD for a new entity:
1. Add routes in `routes/web.php` under `admin` prefix group
2. Controller: `app/Http/Controllers/Admin/NewEntityController.php`
3. Ensure `AdminMiddleware` is applied (group middleware)
4. Views: `resources/views/admin/new_entity/{index,show}.blade.php`

Example: See `Admin\DriverApplicationController` for standard CRUD + status updates + password regeneration.

### 5. Authentication Pattern
**NOT using Laravel's default auth system**. Each role has custom session checks:
```php
// Example: DriverMiddleware
if (!session('driver_authenticated')) {
    return redirect()->route('driver.login');
}
```

Login controllers set `session(['role_authenticated' => true])` manually. See `Auth\{User,Driver,Partner}AuthController` and `Admin\DashboardController`.

### 6. File Uploads
Driver/partner applications include file uploads (selfie, permis_conduire, photo_vehicule, carte_grise, licence_taxi). Files stored in `storage/app/public/`. Access via `Storage::url($path)` or `asset('storage/' . $path)`.

## Testing & Environment

**Test Environment** (`phpunit.xml`):
- Database: SQLite in-memory (`:memory:`)
- Queue: sync (inline execution)
- Cache/Session: array (no persistence)
- Mail: array (captured, not sent)

**Never hardcode DB connections in tests** - rely on `phpunit.xml` env vars.

**Dev vs Test Queue Behavior**:
- Dev: real `queue:listen` worker (async)
- Tests: `QUEUE_CONNECTION=sync` (inline)
- Design code to work in both modes (don't assume instant queue execution in dev).

## Development Workflow

```bash
# Fresh setup
composer run setup

# Daily dev (starts 4 processes: server, queue, logs, vite)
composer run dev
# Access: http://127.0.0.1:8000

# Run tests
composer run test

# Check logs in real-time (or use `composer run dev` which includes pail)
php artisan pail --timeout=0
```

**Test Credentials** (after seeding):
- Email: `admin@faster.com`
- Password: `password` (from UserFactory)

**Admin Login**:
- URL: `/admin/login`
- Password: `admin123` (hardcoded in `Admin\DashboardController@login` - change for production!)

## Common Patterns & Examples

### Model Definition
```php
// app/Models/DriverApplication.php
protected $fillable = ['first_name', 'email', 'status', ...];
protected $hidden = ['password'];

protected function casts(): array {  // <-- Use method, not property
    return [
        'has_vehicle' => 'boolean',
        'approved_at' => 'datetime',
    ];
}
```

### Seeder Pattern
See `database/seeders/DatabaseSeeder.php`:
- Use `updateOrCreate()` for idempotent seeding (safe for re-runs)
- Services use JSON `features` column
- Check existence before creating test data (`if (!Model::where(...)->exists())`)

### Named Routes in Controllers
```php
// ✅ Correct
return redirect()->route('admin.drivers.show', $application->id);

// ❌ Avoid
return redirect("/admin/drivers/{$application->id}");
```

### Middleware Application
```php
// routes/web.php
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // ...
    });
});
```

## Production Notes

**Construction Mode Override** (`routes/web.php` bottom):
```php
if (env('APP_ENV') === 'production') {
    Route::get('/{any}', fn() => view('construction'))->where('any', '.*');
}
```
This catch-all shows maintenance page in production. **Remove or comment out** when deploying live.

**Admin Security**: Change hardcoded admin password (`admin123` in `Admin\DashboardController@login`) before production deployment.

## Quick Reference

| Need | Look Here |
|------|-----------|
| Add route | `routes/web.php` (use prefixes + middleware groups) |
| Add model field | Migration → Model ($fillable + casts()) → Factory → Test |
| Admin CRUD | `app/Http/Controllers/Admin/` + `AdminMiddleware` |
| Auth flow | `app/Http/Middleware/{Role}Middleware.php` |
| Test config | `phpunit.xml` (in-memory SQLite, sync queues) |
| Dev scripts | `composer.json` "scripts" section |
| Seeded data | `database/seeders/DatabaseSeeder.php` |
| View layouts | `resources/views/layouts/` (app.blade.php, guest.blade.php) |

## Unclear or Need Examples?

Tell me which area needs expansion:
- Authentication flows (custom session-based patterns)
- File upload handling (driver/partner applications)
- Admin approval workflows (status changes + password generation)
- Middleware contracts and route protection
- Testing patterns (factories, feature tests)
- Deployment configuration (Railway, Heroku, cPanel)
