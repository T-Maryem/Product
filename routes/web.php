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
//Route::resource('/home/products', 'ProductController');

Auth::routes();

Route::resource('/home/products', ProductController::class);

Route::resource('/home/packs', PackController::class);



Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@authenticationValidateAdmin')->name('admin.route')->middleware('authentic');
Route::get('user/home', 'HomeController@authenticationValidateUser')->name('user.route')->middleware('authentic');



//Route::resource('/packs', 'PackController'); 

