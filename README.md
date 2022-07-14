# Create Filters In Laravel 

## Install Laravel

composer create-project laravel/laravel filters --prefer-dist

## Create migration and dummy data

php artisan make:model Product -m

php artisan migrate

php artisan make:factory ProductFactory --model=Product

php artisan make:seed ProductTableSeeder

php artisan db:seed --class=ProductTableSeeder

## Create an endpoint

php artisan make:controller ProductController

### define a route 

Route::get('/products', 'ProductController@index')->name('products')


## Create a filter

http://127.0.0.1:8000/products?type=Gift