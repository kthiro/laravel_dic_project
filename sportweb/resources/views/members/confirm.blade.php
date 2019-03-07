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
                            <td>{{$member->name}}</td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td>{{$member->email}}</td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td>セキュリティ保護のため表示されません</td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-center">
                    <div class="btn-group">
                        <form method="POST" action="/members/create">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{$member->name}}">
                            <input type="hidden" name="email" value="{{$member->email}}">
                            <input type="hidden" name="password" value="{{$member->password}}">
                            <input type="hidden" name="password_confirmation" value="{{$member->password_confirmation}}">
                            <input type="submit" name="subscribe" value="登録する" class="btn btn-outline-primary btn-sm" >
                        </form>

                        <form method="POST" action="/members/register">
                            {{ csrf_field() }}
                            <input type="hidden" name="name" value="{{$member->name}}">
                            <input type="hidden" name="email" value="{{$member->email}}">
                            <input type="hidden" name="password" value="{{$member->password}}">
                            <input type="hidden" name="password_confirmation" value="{{$member->password_confirmation}}">
                            <input type="submit" name="back" value="戻る" class="btn btn-outline-secondary btn-sm" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
