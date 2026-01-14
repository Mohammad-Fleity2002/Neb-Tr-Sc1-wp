#!/bin/bash
set -e

echo "Mounting EFS..."
mount -a

echo "Fixing permissions..."
chown -R apache:apache /var/www/html
find /var/www/html -type d -exec chmod 755 {} \;
find /var/www/html -type f -exec chmod 644 {} \;

echo "Restarting services..."
systemctl restart php-fpm
systemctl restart httpd
