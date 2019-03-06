<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
    public function register(Request $request)
    {
        $member = new Member();
        return view('members.register_form',
            [
                'member' => $member,
                'form_elements' => $request->form_elements
            ]
        );
    }

    public function confirm(Request $request)
    {
        $this->validate($request, Member::$rigistration_validation_rule);

        $member_params = $request->all();
        unset($member_params['_token']);

        $member = new Member($member_params);
        error_log(var_export($member, 1));

        return view('members.confirm', ['member' => $member]);
    }
}
