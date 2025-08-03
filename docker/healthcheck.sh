#!/bin/sh

# Health check script for Laravel application
set -e

# Check if nginx is running
if ! pgrep nginx > /dev/null; then
    echo "Nginx is not running"
    exit 1
fi

# Check if PHP-FPM is running
if ! pgrep php-fpm > /dev/null; then
    echo "PHP-FPM is not running"
    exit 1
fi

# Check if the application responds
if ! curl -f http://localhost/health > /dev/null 2>&1; then
    echo "Application health check failed"
    exit 1
fi

# Check database connection (if applicable)
if ! php /var/www/html/artisan tinker --execute="DB::connection()->getPdo();" > /dev/null 2>&1; then
    echo "Database connection failed"
    exit 1
fi

echo "All health checks passed"
exit 0
