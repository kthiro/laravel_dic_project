<?php

use Illuminate\Http\Request;
use App\Member;
use App\Http\Resources\MemberResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/members/search', function(Request $request){
    $members = Member::where('name'       , 'like', "%{$request->name}%")
                     ->where('sport_event', 'like', "%{$request->sport_event}%")
                     ->get();

    return MemberResource::collection($members);
});
