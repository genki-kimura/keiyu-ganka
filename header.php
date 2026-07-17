<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-TM4HP4S4');</script>
 <!-- End Google Tag Manager -->
    <!-- favicon OGP-->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg" type="image/svg+xml">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/OGP.jpg">
    <?php get_template_part('/json/json-basic'); ?>
    <?php get_template_part('/json/json-faq'); ?>
    <?php if(is_single()){get_template_part('/json/json-column');}; ?>
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/reset.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
 
 <!-- LCP用画像のプリロード -->
 <link rel="preload" as="image"
      href="<?php echo get_template_directory_uri(); ?>/img/mv.webp"
      type="image/webp"
      media="(min-width: 768px)">
<link rel="preload" as="image"
      href="<?php echo get_template_directory_uri(); ?>/img/mv-sp.webp"
      type="image/webp"
      media="(max-width: 767px)">

 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400;500;700&display=swap" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <?php if ( is_page( 567 ) || is_page_template( 'page-column-list.php' ) ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cataract/assets/css/style.css">
<?php endif; ?>
</head>
<body>
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM4HP4S4"
 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <!-- End Google Tag Manager (noscript) -->
<header class="header global" id="global__menu" >
    <a class="header__l-link" href="/">
        <div class="header__logo"></div>
        <?php if ( is_page(567) ) : ?>
          <h1 class="header__name">
            白内障手術なら足立区・五反野の足立慶友眼科
          </h1>
        <?php elseif ( is_front_page() ) : ?>
		  <h1 class="header__name">
			足立区五反野の眼科｜足立慶友眼科｜五反野駅徒歩8分
		  </h1>
		<?php else : ?>
		  <p class="header__name">
			足立区五反野の眼科｜足立慶友眼科｜五反野駅徒歩8分
		  </p>
		<?php endif; ?>
    </a>
    <div class="header__inbox pc">
        <div class="header__links">
            <a class="header__btn header__btn--01" href="<?php echo $basePath; ?>"><img src="<?php echo $basePath; ?>commons/img/h-btn01.png" alt=""></a>
            <a class="header__btn header__btn--02" href="<?php echo $basePath; ?>"><img src="<?php echo $basePath; ?>commons/img/h-btn02.png" alt=""></a>
        </div>
        <ul class="global__list pc">
            <li class="global__item menu">
                <a href="/" class="global__link">ホーム</a>
            </li>
            <li class="global__item menu">
                <a href="/doctor" class="global__link">医師紹介</a>
            </li>
            <li class="global__item menu">
                <a href="/clinic" class="global__link">医院紹介</a>
            </li>
            <li class="global__item menu">
                <a href="/services" class="global__link">診療案内</a>
            </li>
            <li class="global__item menu">
                <a href="/symptoms" class="global__link">症状から探す</a>
            </li>
            <li class="global__item menu">
                <a href="/first" class="global__link">初めての方へ</a>
            </li>
            <li class="global__item menu">
                <a href="/clinic#access" class="global__link">アクセス</a>
            </li>
            <li class="global__item menu">
                <a href="/columns/" class="global__link">コラム一覧</a>
            </li>
        </ul>
    </div>
    <div id="top_head">
        <div class="box">
            <div id="nav_toggle"><!-- hamburger menu -->
                <div>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                </div>
            </div><!-- hamburger menu -->
        </div><!-- box -->
        <div id="global_nav" class="global-n sp-nav">
            <div class="inner">
                <div class="global-n__logo"><a class="global-n__l-link" href="#"></a></div>
                <ul class="sp_menu">
                    <li><a class="sp-nav__ttl" href="/">ホーム</a></li>
                    <li><a class="sp-nav__ttl" href="/doctor">医師紹介</a></li>
                    <li><a class="sp-nav__ttl" href="/clinic">医院紹介</a></li>
                    <li><a class="sp-nav__ttl" href="/services">診療案内</a></li>
                    <li><a class="sp-nav__ttl" href="/symptoms">症状から探す</a></li>
                    <li><a class="sp-nav__ttl" href="/first">初めての方へ</a></li>
                    <li><a class="sp-nav__ttl" href="/clinic#access">アクセス</a></li>
                    <li><a class="sp-nav__ttl" href="/columns/">コラム一覧</a></li>
                </ul><!-- sp_menu -->
                <div class="global-n__links">
                    <a href="https://ssc11.doctorqube.com/keiyuganka/" class="global-n__btn global-n__btn--01" target="_blank"><span class="global-n__gld">WEB予約</span></a>
                    <a href="tel:03-5845-8200" class="global-n__btn global-n__btn--02"><span class="global-n__gld">03-5845-8200</span></a>
                </div>
                <div class="global-n__box">
                    <table class="n-table">
                        <tr class="n-table__tr"><th class="n-table__th table__th--time">診療時間</th><th class="n-table__th">月</th><th class="n-table__th">火</th><th class="n-table__th">水</th><th class="n-table__th">木</th><th class="n-table__th">土</th><th class="n-table__th">日祝</th></tr>
                        <tr class="n-table__tr"><td class="n-table__td n-table__td--ttl">
                            09:00～13:00<span class="n-table__info">（12:30最終受付）</span>
                        </td><td class="n-table__td">●</td><td class="n-table__td">●</td><td class="n-table__td">／</td><td class="n-table__td">●</td><td class="n-table__td">●</td><td class="n-table__td">／</td></tr>
                        <tr class="n-table__tr"><td class="n-table__td n-table__td--ttl">
                            14:00～18:00<span class="n-table__info">（17:30最終受付）</span>
                        </td><td class="n-table__td">●</td><td class="n-table__td">●</td><td class="n-table__td">／</td><td class="n-table__td">●</td><td class="n-table__td">／</td><td class="n-table__td">／</td></tr>
                    </table>
                    <div class="global-n__info">※ コンタクト、眼鏡処方は最終受付1時間前まで</div>
                </div>
            </div>
        </div><!-- #global_nav -->
    </div>
</header>
    <main>