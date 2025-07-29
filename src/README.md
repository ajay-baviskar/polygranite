docker-compose up --build

docker exec -it poly bash
composer install
php artisan key:generate
php artisan migrate

chown -R www-data:www-data /var/www/html
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
