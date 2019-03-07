@extends('layouts.application')

@section('title', 'Sportweb　ユーザー一覧')

@section('content')

    <div class="jumbotron user">
        <h1 class="text-white">ユーザー一覧</h1>
        <p class="lead text-white">Sportwebの登録ユーザーの一覧が表示されます。</p>
        <hr class="my-4">

        {{-- 検索機能の実装は後に行う
        <div class="container-fluid">
            <div class="row">
                <form class="col-12 row"> <!-- Ajaxを使う場合、submitする必要がないため、methodやactionの指定は削除 -->
                    <div class="col-sm-5">
                        <input id="search_by_name" type="search" name="name" class="form-control" placeholder="ユーザーネームで検索">
                    </div>
                    <div class="col-sm-5">
                        <input id="search_by_sport_event" type="search" name="sport_event" class="form-control" placeholder="スポーツ種目で検索">
                    </div>
                    <div class="col-sm-2 text-center">
                        <button id="user_search" type="button" class="btn btn-secondary"> <!-- Ajaxを使う場合、submitする必要はないため、buttonタグへ変更 -->
                            検索
                        </button>
                    </div>
                </form>
            </div>
        </div>
        --}}

    </div>
    <div class="container-fluid">
        <div class="card-group row justify-content-center">
            <div id="user_search_results" class='col-12 row'>
                @foreach ($members as $member)
                    <div class='col-sm-6 col-md-4 col-lg-3'>
                        <div class='card sm-6 mb-4 lg-3 shadow'>
                            <div class='card-img-top' alt='Card image cap'>
                                <img src='{{$member->profile_image}}' class='card-img-top' alt='Card image cap'>
                            </div>
                            <div class='card-body'>
                                <h5 class='card-title text-center'>
                                    {{$member->name}}
                                    <br>
                                    ♥<small>{{$member->sport_event}}</small>
                                    <br>
                                    @<small>{{$member->area}}</small>
                                </h5>
                                <hr class='my-4'>
                                <div class='card-text'>
                                    {{$member->introduction}}
                                    <hr class='my-4'>
                                    <a class='btn btn-outline-danger btn-sm' href='/members/show?id={{$member->id}}' >
                                        ユーザー詳細
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
