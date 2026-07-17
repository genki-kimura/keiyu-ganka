

$(function(){

    $('.Toggle').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.NavMenu').addClass('active');　 //クラスを付与
        } else {
            $('.NavMenu').removeClass('active'); //クラスを外す
        }
    });
    window.onscroll = function() {
        var check = window.pageYOffset;
        var docHeight = $(document).height();
        var dispHeight = $(window).height();

        if (check > docHeight - dispHeight - 500) {
            $('#btn_fixed').fadeOut(1000);

        } else {
            $('#btn_fixed').fadeIn(1000);
        }
    };
    function fadeInOnScroll() {
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top,
                scroll = $(window).scrollTop(),
                windowHeight = $(window).height();

            if (scroll > elemPos - windowHeight + 150){
            $(this).addClass('scrollin');
            }
        });
    }

    // スクロール時
    $(window).on('scroll', fadeInOnScroll);
    // ページ読み込み時にも一回実行！
    $(window).on('load', fadeInOnScroll);

    
});


