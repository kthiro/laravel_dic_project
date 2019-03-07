<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Http\Request;
use App\Member;

class MembersUpdateMiddleware
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
        $uri = $request->path();

        if ($uri === 'members/update') {
            $request->validate(Member::$edition_validation_rule);

            $member_params = [];
            foreach ($request->except('_token') as $key => $value) {
                if ($request->filled($key)) {
                    $member_params[$key] = $value;
                }
            }

            $request->merge(['member_params' => $member_params]);
        }

        return $next($request);
    }
}
