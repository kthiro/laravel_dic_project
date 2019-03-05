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

Route::get('top', 'TopsController@index');

use App\Http\Middleware\UserRegisterFormMiddleware;
Route::get('/users/register', 'UsersController@register')
    ->middleware(UserRegisterFormMiddleware::class);
