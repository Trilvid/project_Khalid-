# #!/usr/bin/env sh

# # Run user scripts, if they exist
# for f in /var/www/html/.fly/scripts/*.sh; do
#     # Bail out this loop if any script exits with non-zero status code
#     bash "$f" -e
# done
# chown -R www-data:www-data /var/www/html

# if [ $# -gt 0 ]; then
#     # If we passed a command, run it as root
#     exec "$@"
# else
#     exec supervisord -c /etc/supervisor/supervisord.conf
# fi

#!/bin/sh

# Exit immediately if a command exits with a non-zero status
set -e

# Run any pending database migrations
php artisan migrate --force

# Clear any cached views, configurations, routes, etc.
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Cache the config, routes, and views for better performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start the web server (e.g., PHP-FPM, Nginx, etc.)
exec "$@"
