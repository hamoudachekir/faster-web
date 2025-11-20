# Fix Upload Limit - Manual Steps

## The Problem
Your uploaded files total 9.2MB but PHP default limit is around 2-8MB.

## Quick Fix (Follow these steps)

### Step 1: Edit php.ini

1. Open this file in Notepad (Run as Administrator):
   ```
   C:\Users\hamou\Downloads\Compressed\php-8.4.14-nts-Win32-vs17-x64\php.ini
   ```

2. Find and change these lines (use Ctrl+F to search):

   ```ini
   upload_max_filesize = 20M
   post_max_size = 25M
   max_execution_time = 300
   max_input_time = 300
   memory_limit = 256M
   ```

   **Important:** Remove the semicolon (;) at the start of the line if present!

### Step 2: Restart PHP Server

1. In your terminal running `composer run dev`, press **Ctrl+C** to stop
2. Run again: `composer run dev`

### Step 3: Test Again

Go back to: http://127.0.0.1:8000/rejoindre/conducteur

## Alternative: Compress Your Images First

If you can't edit php.ini, compress your images to under 2MB each:
- Use: https://tinypng.com/ or https://squoosh.app/
- Or use smaller resolution photos

## Changes Already Made

✅ Increased Laravel validation from 5MB to 10MB per file
✅ Created .user.ini with proper settings (for some servers)

## Verification

After restarting, run this to verify:
```powershell
php -r "echo 'Upload Max: ' . ini_get('upload_max_filesize') . PHP_EOL; echo 'Post Max: ' . ini_get('post_max_size') . PHP_EOL;"
```

Should show:
```
Upload Max: 20M
Post Max: 25M
```
