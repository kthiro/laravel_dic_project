<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register(Request $request)
    {
        return view('users.register', ['form_elements' => $request->form_elements]);
    }
}
