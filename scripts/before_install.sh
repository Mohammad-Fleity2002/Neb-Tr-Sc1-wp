#!/bin/bash
set -e

echo "Stopping Apache..."
systemctl stop httpd

echo "Unmounting EFS if mounted..."
if mount | grep -q "/var/www/html/wp-content"; then
    umount -f /var/www/html/wp-content
fi
