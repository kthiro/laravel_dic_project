<?php

namespace App\Http\Middleware;

use Closure;

class UserRegisterFormMiddleware
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
        $form_elements = [
            ['label_attribute_name' => 'name', 
            'label_content' => 'ユーザーネーム', 
            'input_attribute_id' => '', 
            'input_attribute_type' => 'text', 
            'input_attribute_name' => 'name', 
            'input_attribute_value' => '', 
            'input_attribute_placeholder' => 'ユーザーネームを設定し記入', 
            'info_attribute_id' => '', 
            'info_content' => ''
            ], 
            ['label_attribute_name' => 'email', 
            'label_content' => 'メールアドレス', 
            'input_attribute_id' => '',  
            'input_attribute_type' => 'text', 
            'input_attribute_name' => 'email', 
            'input_attribute_value' => '', 
            'input_attribute_placeholder' => 'メールアドレスを記入', 
            'info_attribute_id' => '', 
            'info_content' => ''
            ], 
            ['label_attribute_name' => 'password', 
            'label_content' => 'パスワード', 
            'input_attribute_id' => 'password', 
            'input_attribute_type' => 'password', 
            'input_attribute_name' => 'password', 
            'input_attribute_value' => '', 
            'input_attribute_placeholder' => 'パスワードを設定し記入', 
            'info_attribute_id' => 'password_validation', 
            'info_content' => 'パスワードは8文字以上で設定して下さい。'
            ], 
            ['label_attribute_name' => 'password_confirmation', 
            'label_content' => 'パスワードの再入力', 
            'input_attribute_id' => 'password_confirmation', 
            'input_attribute_type' => 'password', 
            'input_attribute_name' => 'password_confirmation', 
            'input_attribute_value' => '', 
            'input_attribute_placeholder' => '確認のためパスワードを再記入', 
            'info_attribute_id' => 'password_confirmation_validation', 
            'info_content' => 'パスワードが一致しません。'
            ], 
        ];

        $request->merge(['form_elements' => $form_elements]);

        return $next($request);
    }
}
