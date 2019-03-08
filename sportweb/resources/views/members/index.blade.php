@extends('layouts.application')

@section('title', 'Sportweb　ユーザー一覧')

@section('additional_js')
    <script src="/js/serch.js"></script>
@endsection

@section('content')

    <div class="jumbotron user">
        <h1 class="text-white">ユーザー一覧</h1>
        <p class="lead text-white">Sportwebの登録ユーザーの一覧が表示されます。</p>
        <hr class="my-4">

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

    </div>
    <div class="container-fluid">
        <div class="card-group row justify-content-center">
            <div id="user_search_results" class='col-12 row'></div> <!-- Ajaxでこのdivに表示するレコードを取ってくる -->
        </div>
    </div>

@endsection
