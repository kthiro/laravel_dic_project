<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
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

    public static $sport_event_career_options = [
        0 => "未選択", 1 => "１年未満", 2 => "３年未満", 3 => "５年未満", 4 => "１０年未満", 5 => "１０年以上"
    ];

    public static $sex_options = [0 => "未選択", 1 => "男性", 2 => "女性"];
}
