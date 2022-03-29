$(function(){
    var $good = $('.btn-good'), //いいねボタンセレクタ
                goodPostId; //投稿ID
    $good.on('click',function(e){
        e.stopPropagation();
        //カスタム属性（postid）に格納された投稿ID取得
        var $this = $(this);
        goodPostId = $this.parents('.post').data('beer_id');
        
        $.ajax({
            type: 'POST',
            url: '/Users/ajaxLike.php', 
            dataType: 'text',
            data: { beer_id: goodPostId } 
            }).done(function(data){
            console.log('Ajax Success');
            // いいね取り消しのスタイル
            $this.children('i').toggleClass('far'); //空洞ハート
            // いいね押した時のスタイル
            $this.children('i').toggleClass('fas'); //塗りつぶしハート
            $this.children('i').toggleClass('active');
            $this.toggleClass('active');
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log('Ajax Error');
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
            console.log("URL            : " + url);
        });
    });
});


// $(function () {
//     $(".btn-good").on('click', function (e) { 
//         e.preventDefault();
//         var obj = document.forms["form_favorite"];
//         $.ajax({
//             type: 'post',
//             url: '../Controllers/UserController.php', 
//             data: $(obj).serialize(), 
//             dataType: 'json'
//         }).done(function(data) {
//             console.log("成功");

//         }).fail(function(data) {
//             console.log("失敗");
//         });
//     });
// });


