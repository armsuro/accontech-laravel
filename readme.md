## Fast Run

``` bash
# 1. install dependencies
composer install

# 2. setup environment (create .env file)
APP_URL=http://localhost
DB_CONNECTION=sqlite

# 3. migrate DB
php artisan migrate

# 4. Run
php artisan serve