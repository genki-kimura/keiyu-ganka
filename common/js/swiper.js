
$(function(){
    var swiper3 = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        // spaceBetween: 15,
        loop: true,
        speed: 7000,
        // autoHeight: true,
        allowTouchMove: false, // ユーザーのスワイプ禁止（途切れ防止）
        autoplay: {
            delay: 0,// ← 次のスライドに行くまでの待ち時間
            disableOnInteraction: false
        },
        observer: true,
        observeParents: true,
        resizeObserver: true,
    });
});


