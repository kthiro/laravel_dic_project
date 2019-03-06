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

use App\Http\Middleware\MemberRegisterFormMiddleware;
Route::get('members/register_form', 'MembersController@register')
    ->middleware(MemberRegisterFormMiddleware::class);
Route::post('members/register_form', 'MembersController@register');
Route::post('members/confirm', 'MembersController@confirm');
Route::post('members/create', 'MembersController@create');
