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
Route::match(['get', 'post'], 'members/register_form', 'MembersController@register')
    ->middleware(MemberRegisterFormMiddleware::class);
Route::post('members/confirm', 'MembersController@confirm');
Route::post('members/create', 'MembersController@create');
Route::get('members/index', 'MembersController@index');
Route::get('members/show', 'MembersController@show');
Route::get('members/edit', 'MembersController@edit');
Route::post('members/update', 'MembersController@update')
    ->middleware('members_update');
// Route::middleware(['member_update'])->group(function(){
