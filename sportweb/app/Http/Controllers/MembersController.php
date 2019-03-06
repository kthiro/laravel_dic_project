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

        return view('members.confirm', ['member' => $member]);
    }

    public function create(Request $request)
    {
        $member_params = $request->all();
        unset($member_params['_token']);

        $member = new Member($member_params);
        $member->save();
        // 初回登録時$member_paramsでは受け取らないカラムには、DB側でデフォルト値を定義してある

        return redirect('/members/register_form');
    }

    public function show(Request $request)
    {
        $member_params=$request->all();
        error_log(var_export($member_params, 1));

        $member = Member::find($member_params['id']);

        return view('members.show', ['member' => $member]);
    }

}
