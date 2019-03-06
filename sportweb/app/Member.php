<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // ストロングパラメータ
    public $fillable = [
        'name',
        'email',
        'password',
        'password_confirmation',
        'profile_image',
        'sport_event',
        'sport_event_career',
        'area',
        'sex',
        'intorduction'
    ];

    public static $rigistration_validation_rule = [
        'name' => 'required | max:30',
        'email' => 'required | email | max:255',
        'password' => 'required | min:8',
        'password_confirmation' => 'required | same:password'
    ];
}
