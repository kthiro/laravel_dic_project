<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register(Request $request)
    {
        return view('users.register', ['form_elements' => $request->form_elements]);
    }

    public function confirm(Request $request){
        $validation_rule = [
            'name' => 'required | max:30', 
            'email' => 'required | email | max:255', 
            'password' => 'required | min:8', 
            'password_confirmation' => 'required | same:password'
        ];

        $this->validate($request, $validation_rule);

        return view('users.confirm', ['user' => $_POST]);
    }
}
