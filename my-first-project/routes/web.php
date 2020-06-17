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
    //return "Coders step";
});

//Route::get('/contact', function () {
//    return view('contact');
//});

//Route::get('/about', function () {
//    return view('about');
//});

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::post('/customers', 'CustomersController@store');

// Another way

Route::view('/' , 'home');
Route::view('contact' , 'contact');
Route::view('about' , 'about');


Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/show/{id}', 'ProductController@show');

Route::post('/products', 'ProductController@store');
Route::get('/search', 'ProductController@search');

