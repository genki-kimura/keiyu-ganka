const target = document.querySelectorAll('.js-target');

//オプション設定
const options = {
  root: null,
  rootMargin: '-100px 0px',
  threshold: 0,
};

//Intersection Observerの呼び出し
const observer = new IntersectionObserver(callback, options);
target.forEach((tgt) => {
  observer.observe(tgt);
});

//要素が交差したときの指示
function callback(entries) {
  entries.forEach((entry) => {
    const target = entry.target;
    if (entry.isIntersecting) {
      target.classList.add('bgextend');
    }
  });
}



  
//ハンバーガーにかかわる記述
$(function() {
	var $global = $('.global');
	var $header = $('header');
	// Nav Fixed
		$(window).scroll(function() {
			if ($(window).scrollTop() > 30) {
				$global.addClass('fixed');
			} else {
				$global.removeClass('fixed');
			}
		});
	// Nav Toggle Button
	$('#nav_toggle').click(function(){
		$header.toggleClass('open');
	});
});


//=============================================================================================
//	ハンバーガーメニューをクリックした時のアクション	//=============================================================================================

var switch_flg = false;
$(function() {
	
//該当のリンクをクリックした際、ハンバーガーメニューを閉じる
$('#global_nav a.menu__link').on('click',function() {
	$('.header').removeClass('open');
});

});


//TOPに戻るボタンの記述
$(document).ready(function(){
	$("#topBtn").hide();
	$(window).on("scroll", function() {
		if ($(this).scrollTop() > 280) {
			$("#topBtn").fadeIn("fast");
		} else {
			$("#topBtn").fadeOut("fast");
		}
	});
	$('#topBtn').click(function () {
		$('body,html').animate({
		scrollTop: 0
		}, 400);
		return false;
	});
});

$(function(){
	//ヘッダー
	var g_menu = $("#global__menu");

	//親ボタン
	var parentButton = $('.js-megaMenu');

	//親ボタン押下時処理
	parentButton.on('click', function(){
		//既に下層メニューを展開中であれば閉じる処理。未展開であれば展開処理。
		if($(this).hasClass('switch-active')){
			closeMenu();
		}else{
			OpenMenu($(this));
		}
	});

	//メニュー収束処理
	function closeMenu(e){
		//全てのボタンからswitch-activeクラスを削除
		parentButton.removeClass('switch-active');
		//
		g_menu.children('.menu__child').slideUp(150, function(){
			$(this).remove();
		});
		//オーバーレイのフェードアウトが終わったら自身を削除
		$('.overlay').animate({
			'opacity':0
		}, 200, function(){
			$(this).remove();
		});
	}

	//メニュー展開処理
	function OpenMenu(e){
		//既に他のボタンが押下されている場合一旦全てクラス削除
		if(parentButton.hasClass('switch-active')){
			parentButton.removeClass('switch-active');
		}
		//押下したボタンにswitch-activeクラス付与
		e.addClass('switch-active');
		//既にオーバーレイが存在していれば処理終了
		if(!$('.overlay').length){
			//念のため事前にオーバーレイ削除処理
			$('body > .overlay').remove();
			//body直下にオーバーレイ追加。クリック時に閉じるイベント登録
			$('body').prepend('<div class="overlay"></div>');
			$('.overlay').css({
				'position':'fixed',
				'background':'rgba(0,0,0,0.6)',
				'width':'100%',
				'height':'100%',
				'top':0,
				'left':0,
				'zIndex':'11',
				'opacity':0
			}).animate({
				'opacity':1
			}, 200).on('click',function(){
				closeMenu();
			});
		}
		//既に一旦下層メニューがある場合は削除
		if(g_menu.children('.menu__child').length){
			g_menu.children('.menu__child').remove();
		}
		//ヘッダー直下に下層メニューをクローン
		e.parent().find('.menu__child').clone().appendTo(header).slideDown(200);
	}
});

$(function(){
  $('.tabs__button').on('click', function(){
    const target = $(this).data('tab');

    $('.tabs__button').removeClass('is-active');
    $(this).addClass('is-active');

    $('.tabs__content').removeClass('is-active');
    $('#' + target).addClass('is-active');
  });

  // 初期表示は2024年
  $('.tabs__button[data-tab="tab2024"]').trigger('click');
});

