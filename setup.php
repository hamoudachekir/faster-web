<?php
/**
 * Quick Setup Script for Laravel on Shared Hosting
 * 
 * INSTRUCTIONS:
 * 1. Upload this file to your public/ folder
 * 2. Visit: https://yourdomain.com/setup.php in your browser
 * 3. DELETE THIS FILE after successful setup!
 * 
 * WARNING: This file should ONLY be used once during initial deployment.
 * Delete it immediately after setup to prevent security issues.
 */

// Prevent direct access if already setup
if (file_exists(__DIR__.'/../storage/app/.setup_complete')) {
    die('<h1>Setup already completed!</h1><p>This script has already been run. Delete this file for security.</p>');
}

define('LARAVEL_START', microtime(true));

// Check if vendor directory exists
if (!file_exists(__DIR__.'/../vendor/autoload.php')) {
    die('<h1>Error: Vendor folder missing!</h1><p>Run <code>composer install</code> first.</p>');
}

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Start output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Setup - Faster Web</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2BD834;
            border-bottom: 3px solid #0000ff;
            padding-bottom: 10px;
        }
        .step {
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-left: 4px solid #2BD834;
        }
        .success {
            color: #2BD834;
            font-weight: bold;
        }
        .error {
            color: #dc3545;
            font-weight: bold;
            background: #ffe6e6;
            padding: 10px;
            border-radius: 4px;
        }
        .warning {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
        }
        pre {
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 15px;
            border-radius: 4px;
            overflow-x: auto;
        }
        .final-warning {
            background: #dc3545;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Laravel Setup for Faster Web</h1>
        <p>Running automated setup commands...</p>

        <?php
        try {
            // Step 1: Check environment file
            echo '<div class="step">';
            echo '<h3>Step 1: Checking environment configuration</h3>';
            if (!file_exists(__DIR__.'/../.env')) {
                echo '<p class="error">❌ .env file not found! Please create it from .env.production</p>';
                die('</div></div></body></html>');
            }
            echo '<p class="success">✅ .env file exists</p>';
            echo '</div>';

            // Step 2: Generate application key (if needed)
            echo '<div class="step">';
            echo '<h3>Step 2: Generating application key</h3>';
            $output = $kernel->call('key:generate', ['--force' => true]);
            echo '<p class="success">✅ Application key generated</p>';
            echo '</div>';

            // Step 3: Clear all caches first
            echo '<div class="step">';
            echo '<h3>Step 3: Clearing caches</h3>';
            $kernel->call('config:clear');
            $kernel->call('cache:clear');
            $kernel->call('view:clear');
            $kernel->call('route:clear');
            echo '<p class="success">✅ All caches cleared</p>';
            echo '</div>';

            // Step 4: Test database connection
            echo '<div class="step">';
            echo '<h3>Step 4: Testing database connection</h3>';
            try {
                DB::connection()->getPdo();
                echo '<p class="success">✅ Database connection successful</p>';
                echo '<p>Database: ' . config('database.connections.mysql.database') . '</p>';
            } catch (\Exception $e) {
                echo '<p class="error">❌ Database connection failed: ' . $e->getMessage() . '</p>';
                echo '<p>Please check your .env file database credentials.</p>';
                die('</div></div></body></html>');
            }
            echo '</div>';

            // Step 5: Run migrations
            echo '<div class="step">';
            echo '<h3>Step 5: Running database migrations</h3>';
            try {
                $kernel->call('migrate', ['--force' => true]);
                echo '<p class="success">✅ Migrations completed successfully</p>';
            } catch (\Exception $e) {
                echo '<p class="error">❌ Migration failed: ' . $e->getMessage() . '</p>';
            }
            echo '</div>';

            // Step 6: Seed database
            echo '<div class="step">';
            echo '<h3>Step 6: Seeding database</h3>';
            try {
                $kernel->call('db:seed', ['--force' => true]);
                echo '<p class="success">✅ Database seeded successfully</p>';
            } catch (\Exception $e) {
                echo '<p class="error">❌ Seeding failed: ' . $e->getMessage() . '</p>';
                echo '<p>This is not critical - you can continue.</p>';
            }
            echo '</div>';

            // Step 7: Create storage link
            echo '<div class="step">';
            echo '<h3>Step 7: Creating storage symlink</h3>';
            try {
                $kernel->call('storage:link');
                echo '<p class="success">✅ Storage link created</p>';
            } catch (\Exception $e) {
                echo '<p class="error">⚠️ Storage link warning: ' . $e->getMessage() . '</p>';
                echo '<p>If symlink failed, manually create it via cPanel or SSH.</p>';
            }
            echo '</div>';

            // Step 8: Cache configuration for production
            echo '<div class="step">';
            echo '<h3>Step 8: Caching configuration</h3>';
            $kernel->call('config:cache');
            $kernel->call('route:cache');
            $kernel->call('view:cache');
            echo '<p class="success">✅ Configuration cached for production</p>';
            echo '</div>';

            // Step 9: Check permissions
            echo '<div class="step">';
            echo '<h3>Step 9: Checking permissions</h3>';
            $storageWritable = is_writable(__DIR__.'/../storage');
            $cacheWritable = is_writable(__DIR__.'/../bootstrap/cache');
            
            if ($storageWritable && $cacheWritable) {
                echo '<p class="success">✅ Storage and cache directories are writable</p>';
            } else {
                echo '<div class="warning">';
                echo '<p><strong>⚠️ Permission Warning:</strong></p>';
                if (!$storageWritable) echo '<p>- storage/ is not writable</p>';
                if (!$cacheWritable) echo '<p>- bootstrap/cache/ is not writable</p>';
                echo '<p>Set permissions to 755 via File Manager or SSH</p>';
                echo '</div>';
            }
            echo '</div>';

            // Final success message
            echo '<div class="step" style="background: #d4edda; border-left-color: #28a745;">';
            echo '<h2 class="success">🎉 Setup Complete!</h2>';
            echo '<p>Your Laravel application is now configured and ready to use.</p>';
            echo '<ul>';
            echo '<li>✅ Application key generated</li>';
            echo '<li>✅ Database connected</li>';
            echo '<li>✅ Migrations run</li>';
            echo '<li>✅ Database seeded</li>';
            echo '<li>✅ Configuration cached</li>';
            echo '</ul>';
            echo '</div>';

            // Create marker file
            file_put_contents(__DIR__.'/../storage/app/.setup_complete', date('Y-m-d H:i:s'));

        } catch (\Exception $e) {
            echo '<div class="error">';
            echo '<h3>❌ Setup Error</h3>';
            echo '<p>' . $e->getMessage() . '</p>';
            echo '<pre>' . $e->getTraceAsString() . '</pre>';
            echo '</div>';
        }
        ?>

        <div class="final-warning">
            🚨 IMPORTANT: DELETE THIS FILE NOW! 🚨
            <p style="font-size: 14px; margin-top: 10px;">
                For security reasons, remove <code>setup.php</code> from your server immediately.
            </p>
        </div>

        <div class="step">
            <h3>Next Steps:</h3>
            <ol>
                <li><strong>DELETE this setup.php file</strong> from your public/ folder</li>
                <li>Visit your website: <a href="/" target="_blank">Go to homepage</a></li>
                <li>Test all functionality</li>
                <li>Check admin panel access</li>
                <li>Verify email configuration</li>
            </ol>
        </div>

        <div class="step">
            <h3>Useful Commands (via SSH):</h3>
            <pre>
# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Update configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check logs
tail -f storage/logs/laravel.log
            </pre>
        </div>
    </div>
</body>
</html>
