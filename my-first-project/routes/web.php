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

Route::get('/customers', function () {
    $customers = [
        "Ahmed sami",
        'Ali Ghazal',
        'Amr Diab',
        'Ahmed Lotfy',

    ];
    return view('internals/customers' , [
        'customers' => $customers,
        ]);
});

// Another way

Route::view('/' , 'welcome');
Route::view('/ali' , 'ali');
Route::view('contact' , 'contact');
Route::view('about' , 'about');
