# PowerShell Script to Fix PHP Upload Limits
# Run this script as Administrator

Write-Host "Fixing PHP Upload Limits..." -ForegroundColor Green

# Find PHP installation
$phpPath = (Get-Command php -ErrorAction SilentlyContinue).Source
if (-not $phpPath) {
    Write-Host "PHP not found in PATH. Please run 'php --ini' to find your php.ini location" -ForegroundColor Red
    exit
}

$phpDir = Split-Path $phpPath
Write-Host "PHP found at: $phpDir" -ForegroundColor Cyan

# Find php.ini
$iniPath = "$phpDir\php.ini"
if (-not (Test-Path $iniPath)) {
    Write-Host "php.ini not found at $iniPath" -ForegroundColor Yellow
    Write-Host "Checking for php.ini-development..." -ForegroundColor Yellow
    
    if (Test-Path "$phpDir\php.ini-development") {
        Copy-Item "$phpDir\php.ini-development" $iniPath
        Write-Host "Created php.ini from php.ini-development" -ForegroundColor Green
    } else {
        Write-Host "Please create php.ini manually" -ForegroundColor Red
        exit
    }
}

Write-Host "`nCurrent php.ini: $iniPath" -ForegroundColor Cyan

# Backup php.ini
$backupPath = "$iniPath.backup_$(Get-Date -Format 'yyyyMMdd_HHmmss')"
Copy-Item $iniPath $backupPath
Write-Host "Backup created: $backupPath" -ForegroundColor Green

# Read php.ini
$content = Get-Content $iniPath -Raw

# Update or add settings
$settings = @{
    'upload_max_filesize' = '20M'
    'post_max_size' = '25M'
    'max_execution_time' = '300'
    'max_input_time' = '300'
    'memory_limit' = '256M'
}

foreach ($key in $settings.Keys) {
    $value = $settings[$key]
    
    # Check if setting exists
    if ($content -match "(?m)^;?\s*$key\s*=.*$") {
        # Replace existing (commented or not)
        $content = $content -replace "(?m)^;?\s*$key\s*=.*$", "$key = $value"
        Write-Host "Updated: $key = $value" -ForegroundColor Yellow
    } else {
        # Add new setting
        $content += "`n$key = $value"
        Write-Host "Added: $key = $value" -ForegroundColor Green
    }
}

# Save php.ini
$content | Set-Content $iniPath -NoNewline

Write-Host "`n✅ PHP configuration updated successfully!" -ForegroundColor Green
Write-Host "`n📋 Applied Settings:" -ForegroundColor Cyan
foreach ($key in $settings.Keys) {
    Write-Host "  $key = $($settings[$key])" -ForegroundColor White
}

Write-Host "`n⚠️  Important: Restart your PHP development server!" -ForegroundColor Yellow
Write-Host "   Press Ctrl+C in the terminal running 'composer run dev'" -ForegroundColor Yellow
Write-Host "   Then run 'composer run dev' again" -ForegroundColor Yellow

Write-Host "`n✨ Done! You can now upload larger files." -ForegroundColor Green
