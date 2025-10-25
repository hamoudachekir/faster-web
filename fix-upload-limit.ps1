# PowerShell script to increase PHP upload limits

$phpIniPath = "C:\Users\LM. SHOP\Downloads\php-8.4.12-Win32-vs17-x64\php.ini"

Write-Host "Updating PHP configuration at: $phpIniPath" -ForegroundColor Green

# Read the file content
$content = Get-Content $phpIniPath -Raw

# Update upload_max_filesize to 100M
$content = $content -replace 'upload_max_filesize\s*=\s*\d+[MG]', 'upload_max_filesize = 100M'

# Update post_max_size to 100M
$content = $content -replace 'post_max_size\s*=\s*\d+[MG]', 'post_max_size = 100M'

# Update memory_limit to 256M
$content = $content -replace 'memory_limit\s*=\s*\d+[MG]', 'memory_limit = 256M'

# Update max_execution_time to 300
$content = $content -replace 'max_execution_time\s*=\s*\d+', 'max_execution_time = 300'

# Update max_input_time to 300
$content = $content -replace 'max_input_time\s*=\s*\d+', 'max_input_time = 300'

# Write back to file
Set-Content $phpIniPath -Value $content

Write-Host "`nPHP configuration updated successfully!" -ForegroundColor Green
Write-Host "New settings:" -ForegroundColor Yellow
Write-Host "  upload_max_filesize = 100M"
Write-Host "  post_max_size = 100M"
Write-Host "  memory_limit = 256M"
Write-Host "  max_execution_time = 300"
Write-Host "  max_input_time = 300"
Write-Host "`nPlease restart your development server (php artisan serve)" -ForegroundColor Cyan
