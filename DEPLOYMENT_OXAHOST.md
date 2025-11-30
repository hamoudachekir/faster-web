# OxaHost Deployment Guide - Faster Web

## Step-by-Step Deployment Process

### Step 1: Prepare Your Local Project

#### 1.1 Build Production Assets
```powershell
npm run build
```

#### 1.2 Create a deployment package (exclude unnecessary files)
Create a `.deployignore` file with:
- node_modules/
- .git/
- storage/logs/*
- .env

---

### Step 2: Access Your OxaHost cPanel

1. Log into: **my.oxahost.tn**
2. Navigate to your hosting service: **Hébergement Web Mutualisé cPanel - Plus**
3. Click on **"DNS Manager"** or **"File Manager"**

---

### Step 3: Setup MySQL Database

1. In cPanel, go to **"MySQL Databases"**
2. Create a new database:
   - Database name: `faster_web` (or similar, OxaHost will prefix it)
   - Note the full database name (e.g., `username_faster_web`)

3. Create a database user:
   - Username: `faster_user`
   - Password: Generate a strong password and save it
   - Note the full username (e.g., `username_faster_user`)

4. Add user to database with **ALL PRIVILEGES**

5. **Save these credentials** (you'll need them for .env):
   - DB_HOST: `localhost`
   - DB_DATABASE: `ahmed_faster_web`
   - DB_USERNAME: `ahmed_faster_ahmed`
   - DB_PASSWORD: `):H;Ou1pe~n,`

---

### Step 4: Upload Files

#### Option A: File Manager (for smaller projects)
1. In cPanel, open **File Manager**
2. Navigate to `public_html` (or your domain folder)
3. Upload all files EXCEPT:
   - `node_modules/`
   - `.git/`
   - `.env` (we'll create this on server)
   - `storage/logs/*`

#### Option B: FTP (Recommended)
1. In cPanel, create FTP account or use main account
2. Use FileZilla:
   - Host: `ftp.yourdomain.com` or `ftp.oxahost.tn`
   - Username: Your cPanel username
   - Password: Your cPanel password
   - Port: 21

3. Upload entire project to `public_html/`

---

### Step 5: Create Production .env File

1. In File Manager, navigate to your project root
2. Create new file named `.env`
3. Copy content from `.env.production` (provided below)
4. Update with your database credentials from Step 3

---

### Step 6: Setup PHP Version

1. In cPanel, go to **"Select PHP Version"** or **"MultiPHP Manager"**
2. Select **PHP 8.2** or higher
3. Enable these extensions:
   - ✅ mbstring
   - ✅ openssl
   - ✅ pdo
   - ✅ pdo_mysql
   - ✅ tokenizer
   - ✅ xml
   - ✅ ctype
   - ✅ json
   - ✅ bcmath
   - ✅ fileinfo

---

### Step 7: Set Document Root

1. In cPanel, go to **"Domains"** or **"Addon Domains"**
2. Find your domain
3. Change **Document Root** to: `public_html/public` (or `yourdomain/public`)
4. Save changes

**Important:** Laravel's `public` folder must be the web root!

---

### Step 8: Run Setup Commands via SSH or Terminal

If OxaHost provides SSH access:

```bash
cd public_html

# Install Composer dependencies (production only)
composer install --optimize-autoloader --no-dev

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate --force

# Seed database
php artisan db:seed --force

# Clear and cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link
php artisan storage:link
```

**If NO SSH Access:** Skip to Step 9 for alternative method.

---

### Step 9: Alternative Setup (No SSH)

If you don't have SSH, create a setup script:

1. Create `setup.php` in your `public` folder:

```php
<?php
// setup.php - Run once then DELETE THIS FILE!

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "<pre>";
echo "Running Laravel Setup...\n\n";

// Generate key if needed
echo "1. Generating application key...\n";
$kernel->call('key:generate', ['--force' => true]);

// Run migrations
echo "\n2. Running migrations...\n";
$kernel->call('migrate', ['--force' => true]);

// Seed database
echo "\n3. Seeding database...\n";
$kernel->call('db:seed', ['--force' => true]);

// Clear caches
echo "\n4. Clearing caches...\n";
$kernel->call('config:clear');
$kernel->call('cache:clear');
$kernel->call('view:clear');

// Cache config
echo "\n5. Caching configuration...\n";
$kernel->call('config:cache');
$kernel->call('route:cache');
$kernel->call('view:cache');

// Create storage link
echo "\n6. Creating storage link...\n";
$kernel->call('storage:link');

echo "\n✅ Setup complete! DELETE THIS FILE NOW!\n";
echo "</pre>";
```

2. Visit: `https://yourdomain.com/setup.php`
3. **DELETE `setup.php` after successful run!**

---

### Step 10: Set Permissions

Via File Manager, set these permissions:

```
storage/ → 755 (and all subdirectories)
bootstrap/cache/ → 755
```

Or via SSH:
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

---

### Step 11: Setup Queue Worker (Optional)

For background jobs, create a cron job in cPanel:

1. Go to **"Cron Jobs"**
2. Add new cron job:
   - Minute: `*`
   - Hour: `*`
   - Day: `*`
   - Month: `*`
   - Weekday: `*`
   - Command: `/usr/bin/php /home/username/public_html/artisan queue:work --stop-when-empty`

Or for scheduler:
```
* * * * * cd /home/username/public_html && php artisan schedule:run >> /dev/null 2>&1
```

---

### Step 12: Configure Email (Optional)

Update `.env` with OxaHost SMTP or use a service like Gmail:

```env
MAIL_MAILER=smtp
MAIL_HOST=mail.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="Faster"
```

---

### Step 13: Test Your Site

1. Visit: `https://yourdomain.com`
2. Check all pages work correctly
3. Test image uploads
4. Verify database connections

---

## Common Issues & Solutions

### Issue 1: 500 Internal Server Error
**Solution:**
- Check `storage/logs/laravel.log`
- Verify permissions on `storage/` and `bootstrap/cache/`
- Check `.env` file exists and has correct values

### Issue 2: White/Blank Screen
**Solution:**
- Ensure document root points to `/public` folder
- Check PHP version is 8.2+
- Verify `.htaccess` file exists in `public/` folder

### Issue 3: Assets Not Loading (CSS/JS)
**Solution:**
- Run `php artisan storage:link`
- Check `APP_URL` in `.env` matches your domain
- Verify `public/build/` folder was uploaded

### Issue 4: Database Connection Failed
**Solution:**
- Double-check database credentials in `.env`
- Ensure database user has all privileges
- Verify database exists

### Issue 5: "No application encryption key"
**Solution:**
- Run `php artisan key:generate`
- Or manually add `APP_KEY=` to `.env` then run the command

---

## Security Checklist

- [ ] `.env` file is NOT in public folder
- [ ] `APP_DEBUG=false` in production
- [ ] Strong `APP_KEY` generated
- [ ] Database user has strong password
- [ ] File permissions set correctly (755 for directories, 644 for files)
- [ ] Remove `setup.php` after use
- [ ] SSL certificate installed (HTTPS)

---

## Need Help?

If you encounter issues:
1. Check `storage/logs/laravel.log` for errors
2. Contact OxaHost support for server-specific issues
3. Verify all steps were completed in order

---

**Deployment Date:** _____________________

**Database Name:** _____________________

**Database User:** _____________________

**Domain:** _____________________

**PHP Version:** _____________________
