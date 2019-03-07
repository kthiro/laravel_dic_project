@extends('layouts.application')

@section('title', 'Sportweb　ユーザー情報編集')

@section('additional_js')
    <script src="/js/members.js"></script>
@endsection

@section('content')

   @component('components.content_header')
       @slot('content_title', 'ユーザー情報編集')
   @endcomponent

   <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card shadow">
                        <div class='card-img-top' alt='Card image cap'>
                            <img src="{{$member->profile_image}}" class="card-img-top" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <form method="POST" action="/members/update" enctype="multipart/form-data"> <!-- サーバー側にファイルアップロードを明示するために、enctype指定が必要 -->
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label name="profile_image">プロフィール画像を変更する場合は選択</label>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="max_file_size" value="1048576">
                                                    <input type="file" name="img_upload">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="name">ユーザーネーム</label>
                                                </td>
                                                <td>
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        class="form-control"
                                                        value="{{$member->name}}"
                                                        placeholder="ユーザーネームを記入"
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="sport_event">スポーツ種目</label>
                                                </td>
                                                <td>
                                                    <input
                                                        type="text"
                                                        name="sport_event"
                                                        class="form-control"
                                                        id="sport_event"
                                                        value="{{$member->sport_event}}"
                                                        placeholder="スポーツ種目を記入"
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="sport_event_career">種目の経験年数</label>
                                                </td>
                                                <td>
                                                    <select name="sport_event_career" class="form-control">
                                                        @component('components.generate_option_tags')
                                                            @slot('options', $sport_event_careers)
                                                            @slot('property', $member->sport_event_career)
                                                        @endcomponent
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="area">活動希望地域</label>
                                                </td>
                                                <td>
                                                    <input
                                                        type="text"
                                                        name="area"
                                                        class="form-control"
                                                        id="area"
                                                        value="{{$member->area}}"
                                                        placeholder="活動希望地域を記入"
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="sex">性別</label>
                                                </td>
                                                <td>
                                                    <select name="sex" class="form-control" >
                                                        @component('components.generate_option_tags')
                                                            @slot('options', $sexes)
                                                            @slot('property', $member->sex)
                                                        @endcomponent
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="introduction">自己紹介</label>
                                                </td>
                                                <td>
                                                    <textarea
                                                        name="introduction"
                                                        class="form-control"
                                                        id="introduction"
                                                        placeholder="自己紹介を記入"
                                                    >{{$member->introduction}}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="email">メールアドレス</label>
                                                </td>
                                                <td>
                                                    <input
                                                        type="text"
                                                        name="email"
                                                        class="form-control"
                                                        value="{{$member->email}}"
                                                        placeholder="メールアドレスを記入"
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="password">パスワード</label>
                                                </td>
                                                <td>
                                                    <small class="text-danger">変更する場合のみ記入し、変更しない場合は空欄のまま登録して下さい。</small>
                                                    <input
                                                        type="password"
                                                        name="password"
                                                        class="form-control"
                                                        id="password"
                                                    >
                                                    <small class="text-info", id="password_validation">パスワードは8文字以上で設定して下さい。</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label name="password_confirmation">パスワードの再入力</label>
                                                </td>
                                                <td>
                                                    <small class="text-danger">変更する場合のみ記入し、変更しない場合は空欄のまま登録して下さい。</small>
                                                    <input
                                                        type="password"
                                                        name="password_confirmation"
                                                        class="form-control"
                                                        id="password_confirmation"
                                                    >
                                                    <small class="text-info", id="password_confirmation_validation">パスワードが一致しません。</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr class="my-4">
                                    <div class="text-center">
                                        <input type="hidden" name="id" value={{$member->id}}>
                                        <input type="submit" class="btn btn-outline-info" value="編集完了">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
