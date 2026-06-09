@echo off
setlocal

set "PORT=4500"
set "ROOT=%~dp0"
set "PHP_EXE=C:\xampp\php\php.exe"

echo Starting Zecher Photography at http://localhost:%PORT%
echo Press Ctrl+C to stop.
echo.

if exist "%PHP_EXE%" (
  "%PHP_EXE%" -S localhost:%PORT% -t "%ROOT%"
  goto :eof
)

where php >nul 2>nul
if %errorlevel%==0 (
  php -S localhost:%PORT% -t "%ROOT%"
  goto :eof
)

echo PHP was not found. Install PHP or XAMPP, then run this file again.
exit /b 1
