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

Route::get('/main', 'MainController@index');


Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/main/register','MainController@register');
Route::get('/main/home', 'Maincontroller@home');

Route::get('/main/logout', 'MainController@logout');

Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

Route::get("/test", 'CoinController');




