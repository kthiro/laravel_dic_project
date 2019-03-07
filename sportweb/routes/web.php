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

Route::middleware(['members'])->group(function(){
    Route::match(['get', 'post'], 'members/register', 'MembersController@register')->middleware('members_register');

    Route::get('members/index', 'MembersController@index');
    Route::get('members/show', 'MembersController@show');
    Route::get('members/edit', 'MembersController@edit');
    Route::delete('members/delete', 'MembersController@delete');

    Route::middleware(['members_validation'])->group(function(){
        Route::post('members/confirm', 'MembersController@confirm');
        Route::post('members/create', 'MembersController@create');
        Route::post('members/update', 'MembersController@update');
    });
});
