<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopsController extends Controller
{
    public function index() // アクションが呼ばれた時の処理を{}内へ記述
    {
        return view('tops.index'); // (resources/)views/tops/index.php をレンダリング表示する
    }
}
