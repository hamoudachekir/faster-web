## Project cheat sheet for AI agents

- Stack: Laravel 12 (PHP ^8.2), PHPUnit 11, Vite + Tailwind. See `composer.json` and `vite.config.js`.
- Core scripts (always prefer these):
  - Setup: `composer run setup` (installs deps, creates `.env`, key:generate, migrate, `npm install`, build).
  - Dev loop: `composer run dev` (runs `php artisan serve`, `queue:listen --tries=1`, `pail --timeout=0`, and `npm run dev` via concurrently).
  - Tests: `composer run test` (phpunit with sqlite in-memory; queue is sync; array cache/session per `phpunit.xml`).

### Architecture at a glance

- Domains/models: `Service`, `Testimonial`, `DriverApplication`, `PartnerApplication`, `ContactSubmission`, `User` in `app/Models/`.
- Public UX: `HomeController@index`, `ServiceController@show` via `/services/{slug}`, About `/a-propos`, Contact `/contact` (GET/POST).
- Auth & dashboards (separate roles and middlewares):
  - Users: prefix `utilisateur.*` with `UserMiddleware`; routes for register/login/logout + dashboard, profile, password, orders, etc.
  - Drivers: prefix `driver.*` with `DriverMiddleware`; login + dashboard/profile.
  - Partners: prefix `partner.*` with `PartnerMiddleware`; login + dashboard/profile.
  - Admin: prefix `admin.*` with `AdminMiddleware`; login/logout + dashboard.
    - Manages applications and contacts: drivers/partners `index|show|status|regenerate-password|destroy`; contacts `index|show|status|destroy`.
- Wiring spot: `app/Providers/AppServiceProvider.php` for app-level bindings when needed.

### Conventions to follow (project-specific)

- Use typed `casts()` on models (see `app/Models/User.php`) instead of assuming a `$casts` array.
- Tests run with `DB_CONNECTION=sqlite` and `DB_DATABASE=:memory:` from `phpunit.xml`; don't hardcode DBs in tests.
- Jobs: in dev a real `queue:listen` runs; in tests `QUEUE_CONNECTION=sync` executes inline. Design code to work in both.
- Assets: edit `resources/js|css` and rely on Vite; commit only source, not `public/build`.
- Prefer named routes from `routes/web.php` (e.g., `admin.drivers.show`, `join.partner.store`) and keep prefixes/middleware consistent.

### Fast orientation files

- `routes/web.php` shows role boundaries, middleware, and route names.
- `composer.json` scripts encode the dev/test lifecycle and background processes.
- `phpunit.xml` documents the test environment (in-memory DB, array-backed services).
- `database/migrations/*` define schema for the application/contacts/services/testimonials tables.

### Common edits (how-to)

- Add a field to a model: create a migration, update the model fillable/casts, update the factory in `database/factories`, run tests.
- Add an admin action: add a route under the `admin` group, implement the controller method, ensure `AdminMiddleware`, and create/update a Blade view under `resources/views/admin/*`.

Questions or unclear areas? Tell me which section needs more detail (e.g., factories, middleware contracts, or admin flows), and I’ll refine this guide.
