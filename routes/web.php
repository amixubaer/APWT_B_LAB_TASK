<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');

Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@insert')->name('registration.insert');

Route::get('/system', 'SystemController@index')->name('system.index');


Route::get('/system/sales', 'SalesController@index')->name('Sales.index');

Route::get('/system/sales/physical_store', 'PhysicalController@index')->name('Physical.index');
Route::get('/system/sales/social_media', 'SocialController@index')->name('Social.index');
Route::get('/system/sales/ecommerce', 'EcommerceController@index')->name('Ecommerce.index');

Route::get('/system/product_management', 'ProductController@index')->name('Product.index');

Route::get('/system/product_management/existing_products', 'ProductController@existingIndex')->name('Product.existingIndex');
Route::get('/system/product_management/upcoming_products', 'ProductController@upcomingIndex')->name('Product.upcomingIndex');
Route::get('/system/product_management/add_product', 'ProductController@addIndex')->name('Product.addIndex');
Route::post('/system/product_management/add_product', 'ProductController@addProduct')->name('Product.addProduct');

Route::get('/system/product_management', 'ProductController@index')->name('Product.index');

Route::get('/system/product_management/existing_products', 'ProductController@existingIndex')->name('Product.existingIndex');
Route::get('/system/product_management/upcoming_products', 'ProductController@upcomingIndex')->name('Product.upcomingIndex');
Route::get('/system/product_management/add_product', 'ProductController@addIndex')->name('Product.addIndex');
Route::post('/system/product_management/add_product', 'ProductController@addProduct')->name('Product.addProduct');