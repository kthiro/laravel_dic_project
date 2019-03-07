<?php

namespace App\Http\Middleware;

use Closure;
use App\Member;

class MembersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Beforeアクション：uri毎にMemberインスタンスを作成
        $uri = $request->path();

        switch ($uri) {
            case 'members/register':
                $member = new Member();
                break;

            case 'members/confirm':
            case 'members/create':
                $member = new Member($request->except('_token'));
                break;

            case 'members/index':
                $member = Member::all();
                break;

            case 'members/show':
            case 'members/edit':
            case 'members/delete':
                $member = Member::find($request->id);
                break;

            case 'members/update':
                $member = Member::find($request->id);

                // updateだけはパラメータの加工も行う。
                // 値がNULLのパラメータを除去した$member_paramsを真の更新データとして定義する。
                $member_params = [];
                foreach ($request->except('_token') as $key => $value) {
                    if ($request->filled($key)) {
                        $member_params[$key] = $value;
                    }
                }
                $request->merge(['member_params' => $member_params]);
                break;
        }

        $request->merge(['member' => $member]);
        return $next($request);
    }
}
