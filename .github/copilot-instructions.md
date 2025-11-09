## Project cheat sheet for AI agents (concise)

This file tells an AI coding agent what matters to be productive in this Laravel repo. Keep entries short and implementable.

- Stack: Laravel 12 (PHP ^8.2), PHPUnit 11, Vite + Tailwind. See `composer.json` and `vite.config.js`.

Core scripts (use these; they encapsulate common flows):
- Setup: `composer run setup` — installs PHP deps, creates `.env`, `key:generate`, runs migrations, `npm install`, and builds assets.
- Dev: `composer run dev` — starts `php artisan serve`, queue worker(s) and Vite dev for hot reload.
- Tests: `composer run test` — runs PHPUnit with in-memory SQLite; CI/tests rely on `phpunit.xml` config.

Architecture & quick map
- Domain models (see `app/Models`): `Service`, `Testimonial`, `DriverApplication`, `PartnerApplication`, `ContactSubmission`, `User`, `UserFeedback`.
- Public UX: `HomeController@index`, `ServiceController@show` -> `/services/{slug}`. Views live in `resources/views` (e.g. `about.blade.php`).
- Route grouping by role: `routes/web.php` defines groups with prefixes and middleware (examples: `admin.*`, `driver.*`, `partner.*`, `utilisateur.*`).
- App-level wiring: use `app/Providers/AppServiceProvider.php` for small bindings and global bootstrapping.

Repo-specific conventions (follow exactly)
- Models use typed `casts()` and explicit `fillable`/`guarded`. Mirror the style in `app/Models/User.php`.
- Add model fields via: migration -> model (`casts`/`fillable`) -> factory (`database/factories`) -> tests.
- Prefer named routes from `routes/web.php` (e.g., `admin.drivers.show`, `join.partner.store`) rather than raw URLs.
- Frontend: edit `resources/js` and `resources/css`; do NOT commit `public/build` (Vite output). Use the provided scripts to build.

Testing & environment notes
- `phpunit.xml` config: in-memory SQLite (`DB_CONNECTION=sqlite`, `DB_DATABASE=:memory:`), array-backed cache/session. Tests must not hardcode DB connections.
- Queue behavior: dev uses real workers (`queue:listen`); tests use `QUEUE_CONNECTION=sync`. Code should work in both modes.

Concrete examples (where to change things)
- Add a migration: `database/migrations/2025_10_25_130221_create_services_table.php` (follow date-stamp pattern).
- Update model: `app/Models/Service.php` — add property to `$fillable` and a typed entry in `casts()`.
- Update factory: `database/factories/*Factory.php` for new defaults used in tests.
- Admin UI: add route in `routes/web.php` under `admin` group, controller in `app/Http/Controllers/Admin/`, blade in `resources/views/admin/` and protect with `AdminMiddleware`.

Where to look first (fast links)
- `routes/web.php` — role boundaries and named routes.
- `app/Models` — data shapes and `casts()` usage.
- `app/Http/Controllers` — controller patterns.
- `app/Providers/AppServiceProvider.php` — app-level bindings.
- `database/migrations` and `database/factories` — schema and test data.
- `tests/Feature` and `tests/Unit` — examples of expected test patterns.
- `composer.json`, `phpunit.xml`, `vite.config.js` — scripts and environment wiring.

Integration points
- Check `config/queue.php`, `config/mail.php`, `config/cache.php` for env-driven behaviors and 3rd-party integrations.

Small operational rules
- Use `composer run setup` for fresh environments. Use `composer run dev` for the local development loop. Use `composer run test` for the test suite.
- Never commit `public/build` (Vite output). Commit only source files under `resources/`.

If any part of this is unclear or you want examples (small PRs, tests, or migration templates), tell me which area and I will expand with exact file edits and tests.
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
