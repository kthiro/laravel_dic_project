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

    public static $rigistration_validation_rule = [
        'name' => 'required | max:30',
        'email' => 'required | email | max:255',
        'password' => 'required | min:8',
        'password_confirmation' => 'required | same:password'
    ];

    // レコード更新時は、パスワード等、更新しないカラムのパラメータ値がNULLでサブミットされることもあるので、nullableを定義している。
    public static $edition_validation_rule = [
        'name' => 'nullable | max:30',
        'email' => 'nullable | email | max:255',
        'password' => 'nullable | min:8',
        'password_confirmation' => 'nullable | same:password',
        'profile_image' => 'nullable',
        'sport_event' => 'nullable | max:100',
        'sport_event_career' => 'nullable | min:0 | max:6',
        'area' => 'nullable | max:100',
        'sex' => 'nullable | min:0 | max:2',
        'intorduction' => 'nullable | max:140'
    ];

    public static $sport_event_career_options = [
        0 => "未選択", 1 => "１年未満", 2 => "３年未満", 3 => "５年未満", 4 => "１０年未満", 5 => "１０年以上"
    ];

    public static $sex_options = [0 => "未選択", 1 => "男性", 2 => "女性"];
}
