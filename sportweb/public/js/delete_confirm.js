$(document).ready(function(){
    $("#delete_btn").on('click', function(){
        if (confirm('本当に削除しますか？')) {
        } else {
            return false;
        }
    })
})
