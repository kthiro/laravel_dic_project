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

    public function index(Request $request)
    {
        $members = Member::all();

        return view('members.index', ['members' => $members]);
    }

    public function show(Request $request)
    {
        $member = Member::find($request->query('id'));
        return view('members.show', ['member' => $member]);
    }

    public function edit(Request $request)
    {
        $member = Member::find($request->query('id'));
        return view(
            'members.edit',
            [
                'member' => $member,
                'sport_event_careers' => Member::$sport_event_career_options,
                'sexes' => Member::$sex_options
            ]
        );
    }

    public function update(Request $request)
    {
        $member = Member::find($request->id);
        $member->fill($request->member_params)->save();

        return redirect("/members/show/?id={$member->id}");
    }
}
