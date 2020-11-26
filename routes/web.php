<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','IndexController@index')->name('home');

Route::get('/admin/elections/{campus}','ElectionController@elections')->name('elections')->middleware('commissioner');
Route::get('/admin/voters','UserController@voters')->name('voters')->middleware('adminCommissioner');

Route::get('/admin','AdminController@index')->name('admin');


Route::get('/admin/varify-user/{id}','UserController@varifyUser')->name('varify-user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
