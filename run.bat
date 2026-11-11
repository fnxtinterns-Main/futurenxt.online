@echo off
echo ===================================================
echo   FutureNxt Development Server
echo   Running with Clean URLs at http://127.0.0.1:8000
echo ===================================================
echo.
cd /d "%~dp0"
php -S 127.0.0.1:8000 router.php
