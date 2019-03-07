@extends('layouts.application')

@section('title', 'Sportweb　ユーザー詳細')

@section('additional_js')
    <script src="/js/delete_confirm.js"></script>
@endsection

@section('content')
    @component('components.content_header')
        @slot('content_title', 'ユーザー詳細')
    @endcomponent

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 row justify-content-center">
                    <div class="col-sm-7">
                        <div class="card-group justify-content-center">
                            <div class="card shadow">
                                <div class='card-img-top' alt='Card image cap'>
                                    <img src="{{$member->profile_image}}" class="card-img-top" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title text-center">
                                        {{$member->name}}
                                        <br>
                                        ♥<small>{{$member->sport_event}}</small>
                                        <br>
                                        @<small>{{$member->area}}</small>
                                    </h4>
                                    <hr class="my-4">
                                    <div class="card-text">
                                        {{$member->introduction}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p><a href="/members/index">ユーザー一覧</a></p>
                    <p><a href="/members/edit?id={{$member->id}}">ユーザー情報編集</a></p>
                    <div>
                        <!-- TODO:確認ボタンの挙動を確かめる必要あり！ -->
                        <form method="POST" action="/members/delete">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete"> <!-- この1行でルーティングでdeleteのHTTPメソッド指定ができる -->
                            <input type="hidden" name="id" value="{{$member->id}}">
                            <input id="delete_btn" type="submit" value="ユーザーアカウントの削除">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
