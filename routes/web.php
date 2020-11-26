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



Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/all-users/{campus}','UserController@getUsers')->name('all-users');
Route::get('/admin/election/{campus}','ElectionController@election')->name('election');


Route::get('/admin/user','UserController@campusUser')->name('single-user');
Route::get('/admin/varify-user/{id}','UserController@varifyUser')->name('varify-user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
