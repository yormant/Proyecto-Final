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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('/usuarios', 'usuariosController');
Route::resource('/categories', 'categoriesController');

Route::resource('/clients', 'clientsController');

Route::resource('/products', 'productsController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clients/{client}/sendEmail', 'clientsController@sendEmail')->name('products.sendEmail');






