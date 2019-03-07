<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
    public function register(Request $request)
    {
        return view('members.register',
            [
                'member' => $request->members,
                'form_elements' => $request->form_elements
            ]
        );
    }

    public function confirm(Request $request)
    {
        return view('members.confirm', ['member' => $request->members]);
    }

    public function create(Request $request)
    {
        ($request->members)->save(); // 初回登録時に入力不要なカラムには、DB側でデフォルト値を定義してある

        return redirect('/members/register');
    }

    public function index(Request $request)
    {
        return view('members.index', ['members' => $request->members]);
    }

    public function show(Request $request)
    {
        return view('members.show', ['member' => $request->members]);
    }

    public function edit(Request $request)
    {
        return view(
            'members.edit',
            [
                'member' => $request->members,
                'sport_event_careers' => Member::$sport_event_career_options,
                'sexes' => Member::$sex_options
            ]
        );
    }

    public function update(Request $request)
    {
        $member = $request->members;
        $member->fill($request->member_params)->save();

        return redirect("/members/show/?id={$member->id}");
    }
}
