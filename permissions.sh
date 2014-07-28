sudo chown -R jose:www-data juanjose
find . -type d -exec chmod 775 {} \;
find . -type f -exec chmod 664 {} \;