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


Route::get('/login', 'loginController@showLoginPage')->name('showLogin');
Route::post('/login', 'loginController@loginVarify');

Route::get('/registration', 'loginController@showRegistrationPage')->name('showReg');
Route::post('/registration', 'userController@confirmRegistration');

Route::get('/login/dashbord', 'userController@admindashbord')->name('admin');
Route::get('/login/dashbord/logout', 'logout@logout')->name('logout');

Route::get('/login/dashbord/customerLists', 'userController@customerLists')->name('customerLists');
