<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['uses' => 'FrontController@index' ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController');

Route::get('product/{id}' , ['uses' => 'FrontController@product'  , 'as' => 'products.product']);

Route::resource('cart',  'ShoppingController');

Route::post('cart/add', ['uses' => 'ShoppingController@addToCart' , 'as' => 'cart.add']);

Route::get('cart' , ['uses' => 'ShoppingController@cart' ,  'as' => 'cart']); 

Route::get('cart/delete/{id}' , [
    'uses' => 'ShoppingController@delete',
    'as'   => 'cart.delete'
]);