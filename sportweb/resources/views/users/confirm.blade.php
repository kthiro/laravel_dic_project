@extends('layouts.application')

@section('title', 'Sportweb ユーザー登録内容の確認')

@section('content')

    @component('components.content_header')
        @slot('content_title', '登録内容の確認')
    @endcomponent

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>ユーザーネーム</td>
                            <td>{{$user['name']}}</td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td>{{$user['email']}}</td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td>セキュリティ保護のため表示されません</td>
                        </tr>
                    </tbody>
                </table>
                    
                <!-- 以降は未着手
                    <div class="text-center">
                        <div class="btn-group">
                            <form method="POST" action="./create">
                                {foreach $user as $key => $value}
                                    <input type="hidden" name="{$key}" value="{$value}">
                                {/foreach}
                                <input type="hidden" name="profile_image" value="/images/no_image.png">
                                <input type="hidden" name="sport_event" value="未登録">
                                <input type="hidden" name="sport_event_career" value="0">
                                <input type="hidden" name="area" value="未登録">
                                <input type="hidden" name="sex" value="0">
                                <input type="hidden" name="introduction" value="未登録">
                                <input type="submit" name="subscribe" value="登録する" class="btn btn-outline-primary btn-sm" >
                            </form>
                            
                            <form method="POST" action="./new">
                                {foreach $user as $key => $value}
                                    <input type="hidden" name="{$key}" value="{$value}">
                                {/foreach}
                                <input type="submit" name="back" value="戻る" class="btn btn-outline-secondary btn-sm" >
                            </form>
                        </div>
                    </div>
                -->
            </div>
        </div>
    </div>
@endsection
