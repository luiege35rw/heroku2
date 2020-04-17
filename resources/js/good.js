$(function(){
    console.log(' =================== ');
    var $good = $('.btn-good'), //いいねボタンセレクタ
                goodPostId; //投稿ID
    
    var mode = 'add';
    $good.on('click',function(e){
        e.stopPropagation();
        var $this = $(this);
      
        var news_id = $(this).data('newsid');
        console.log('newsid = ' + news_id);
        console.log('===================');
        $.ajax({
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
            url: '/api/ajaxGood', //post送信を受けとるphpファイル
            data: { 'news_id': news_id} //{キー:投稿ID}
        }).done(function(data){
            console.log('Ajax Success');

            // いいねの総数を表示
            $this.children('span').html(data);
            // いいね取り消しのスタイル
            $this.children('i').toggleClass('far'); //空洞ハート
            // いいね押した時のスタイル
            $this.children('i').toggleClass('fas'); //塗りつぶしハート
            $this.children('i').toggleClass('active');
            $this.toggleClass('active');
        }).fail(function(msg) {
            console.log('Ajax Error');
            console.log(msg);
        });
    });
});