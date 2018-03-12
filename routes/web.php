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

Route::get('/login', 'LoginController@login');
Route::post('/verify_user', [
    "as" => "verify-user",
    "uses" => 'LoginController@verifyUser'
]);

Route::get('/register', 'LoginController@register');
Route::post('/save_user', [
    "as" => "save-user",
    "uses" => 'LoginController@saveUser'
]);
