@extends('layouts.application')

@section('title', 'Sportweb 新規会員登録')

@section('additional_js')
    <script src="/js/users.js"></script>
@endsection

@section('content') <!-- TODO: インデント要整頓 -->

    @component('components.content_header')
        @slot('content_title', '新規会員登録')
    @endcomponent
        
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <form method="POST" action="./confirm">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="text-center"><label name="name">ユーザーネーム</label></td>
                                    <td>
                                        <input
                                            type="text"
                                            name="name"
                                            value=""
                                            class="form-control"
                                            placeholder="ユーザーネームを設定し記入"
                                        >
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><label name="email">メールアドレス</label></td>
                                    <td>
                                        <input
                                            type="text"
                                            name="email"
                                            value=""
                                            class="form-control"
                                            placeholder="メールアドレスを記入"
                                        >
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><label name="password">パスワード</label></td>
                                    <td>
                                        <input
                                            type="password"
                                            name="password"
                                            value=""
                                            class="form-control"
                                            placeholder="パスワードを設定し記入"
                                            id="password"
                                        >
                                        <small class="text-info" id="password_validation">パスワードは8文字以上で設定して下さい。</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><label name="password_confirmation">パスワードの再入力</label></td>
                                    <td>
                                        <input
                                            type="password"
                                            name="password_confirmation"
                                            value=""
                                            class="form-control"
                                            placeholder="確認のためパスワードを再記入"
                                            id="password_confirmation"
                                        >
                                        <small class="text-info" id="password_confirmation_validation">パスワードが一致しません。</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr class="my-4">
                        <div class="text-center">
                            <input type="submit" value="登録内容を確認する", class="btn btn-outline-info" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
