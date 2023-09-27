<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

This is a simple project which displays list of products in grid view and you can add the product to cart and from cart you can buy this product using stripe

To use this application,

1. create a database named stripe
2. use php artisan migrate command to migrate all the tables to your database
3. use php artisan db:seed command to seed the table
4. use php artisan serve command to run the application
5. once you click the buy now button it will take you to the stripe payment page

use the following card details to make the payment
Card Number - 4242 4242 4242 4242
Expiry date - any date older the current date
CVV - any 3 digit number

once you make the payment it will take you to suceess page
