/**
 * Ajaxで検索フォームのパラメータを乗せてGETでPHPへリクエストし、
 * レスポンスを受け取り、検索結果のユーザー情報を表示するための
 * HTMLを作成する関数 getUsers() を定義
*/
function getUsers(){
    $.ajax({
        url: "/api/members/search",
        type: "GET",
        data: {
            "name": $("#search_by_name").val(),
            "sport_event": $("#search_by_sport_event").val(),
            "search": "検索"
        }
    })
    .done(function(users){
        alert(JSON.stringify(users)); // for debug
        let user_search_results = "";
        $.each(users.data, function(key, user){
            user_search_results = user_search_results +
                "<div class='col-sm-6 col-md-4 col-lg-3'>\
                    <div class='card sm-6 mb-4 lg-3 shadow'>\
                        <div class='card-img-top' alt='Card image cap'>\
                            <img src='"+user.profile_image+"' class='card-img-top' alt='Card image cap'>\
                        </div>\
                        <div class='card-body'>\
                            <h5 class='card-title text-center'>" +
                                user.name +
                                "<br>\
                                ♥<small>" + user.sport_event + "</small>\
                                <br>\
                                @<small>"+user.area+"</small>\
                            </h5>\
                            <hr class='my-4'>\
                            <div class='card-text'>" +
                                user.introduction +
                                "<hr class='my-4'>\
                                <a class='btn btn-outline-danger btn-sm' href='/users/show?id=" + user.id + "' >\
                                    ユーザー詳細\
                                </a>\
                            </div>\
                        </div>\
                    </div>\
                </div>"
            ;
        })
        $("#user_search_results").html(user_search_results);
    })
}

$(window).on('load', function(){
    getUsers(); // 初回アクセス時のアクション
    $("#user_search").on('click', function(){ // 検索ボタンがクリックされた場合のアクション
        getUsers();
    })
})
