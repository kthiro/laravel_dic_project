<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $fillable = ['name', 'email', 'password', 'password_confirmation'];
    public static $rigistration_validation_rule = [
        'name' => 'required | max:30',
        'email' => 'required | email | max:255',
        'password' => 'required | min:8',
        'password_confirmation' => 'required | same:password'
    ];
}
