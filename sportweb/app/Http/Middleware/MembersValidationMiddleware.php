<?php

namespace App\Http\Middleware;

use Closure;

class MembersValidationMiddleware
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
        // Beforeアクション：uri毎のバリデーションを定義
        $uri = $request->path();

        // 新規登録時
        if ($uri == 'members/confirm' || $uri == 'members/create') {
            $request->validate([
                'name' => 'required | max:30',
                'email' => 'required | email | max:255',
                'password' => 'required | min:8',
                'password_confirmation' => 'required | same:password'
            ]);
        }

        // 更新時：パスワード等、更新しないカラムのパラメータ値がNULLでサブミットされることもあるので、nullableを定義している。
        if ($uri === 'members/update') {
            $request->validate([
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
            ]);
        }

        return $next($request);
    }
}
