mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/app/public

composer install --no-scripts --no-autoloader
composer dump-autoload --optimize

cp .env.example .env

php artisan cache:clear
php artisan key:generate
php artisan serve --host=0.0.0.0 --port=80