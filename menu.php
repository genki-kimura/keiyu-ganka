<?php /* Template Name: 診療案内 */ ?>
<?php get_header(); ?>

<div class="single-head__content" id="page-top">
    <h1 class="single-head__title">
        <?php the_title(); ?>
    </h1>
</div>
<div class="pan-kuzu">
	<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
</div>
<div class="menu-page-content">
    <div class="menu-page-inner-wrap">
        <section id="menu-page-message">
            <div class="section-inner">
                <p class="menu-page-message-text">
                    100年時代と言われる今、<br class="sp">長い人生を健やかに過ごすためには、<br>
                    「見る力」を守ることがますます大切になっています。<br>
                    目の病気は年齢によってかかりやすいものが異なり、それぞれの年代で注意すべき症状や疾患があります。<br><br>
                    足立慶友眼科では、お子さまからご高齢の方まで、<br class="pc">
                    一人ひとりのライフステージに合わせた幅広い診療を行っています。
                </p>
            </div>
        </section>
        <style>
            #menu-page-message {
                background-image: url(https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-message-bg.webp);
                background-size: cover;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #menu-page-message .section-inner {
                padding: 80px 40px;
            }

            #menu-page-message .menu-page-message-text {
                font-size: 18px;
                line-height: 1.8;
                text-align: center;
                color: #000000;
                font-family: var(--font-mincho);
                font-weight: 500;
            }

            @media screen and (max-width: 767px) {
                #menu-page-message {
                    background-image: url(https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-message-bg-sp.webp);
                    background-position: top right;
                }

                #menu-page-message .menu-page-message-text {
                    font-size: 14px;
                }
            }
        </style>

        <section id="menu-page-medical-department">
            <div class="section-inner">
                <h2 class="menu-page-medical-department-title">診療内容一覧</h2>
                <div class="menu-page-medical-department-list">
                    <ul class="medical-department-btn-ul">
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/glaucoma'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-緑内障.svg">
                                </div>
                                <p class="medical-department-btn-title">緑内障</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/cataract'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-白内障.svg">
                                </div>
                                <p class="medical-department-btn-title">白内障</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/cataract/multifocal'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-多焦点眼内レンズ.svg">
                                </div>
                                <p class="medical-department-btn-title">多焦点<br class="sp">眼内レンズ</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/refractive-error'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-屈折異常.svg">
                                </div>
                                <p class="medical-department-btn-title">屈折異常</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/pediatric'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-小児眼科.svg">
                                </div>
                                <p class="medical-department-btn-title">小児眼科</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/eyestrain'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-眼精疲労.svg">
                                </div>
                                <p class="medical-department-btn-title">眼精疲労</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/conjunctiva'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-結膜の病気.svg">
                                </div>
                                <p class="medical-department-btn-title">結膜の病気</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/eyelid'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-まぶたの病気.svg">
                                </div>
                                <p class="medical-department-btn-title">まぶたの病気</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/retina'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-網膜硝子体疾患.svg">
                                </div>
                                <p class="medical-department-btn-title">網膜硝子体<br class="sp">疾患</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/dryeye'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-ドライアイ.svg">
                                </div>
                                <p class="medical-department-btn-title">ドライアイ</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/glasses-contact'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-メガネコンタクト.svg">
                                </div>
                                <p class="medical-department-btn-title">メガネ・コンタクトレンズ</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/pediatric/orthokeratology'); ?>"
                                class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-オルソケラトロジー.svg">
                                </div>
                                <p class="medical-department-btn-title">オルソケラ<br class="sp">トロジー</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/pediatric/myopin'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-マイオピン点眼.svg">
                                </div>
                                <p class="medical-department-btn-title">マイオピン<br class="sp">点眼</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/retina/injection'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-硝子体注射.svg">
                                </div>
                                <p class="medical-department-btn-title">硝子体注射</p>
                            </a>
                        </li>
                        <li class="medical-department-btn-li">
                            <a href="<?php echo home_url('/retina/floaters'); ?>" class="medical-department-btn">
                                <div class="medical-department-icon-box"><img
                                        src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-icon-飛蚊症.svg">
                                </div>
                                <p class="medical-department-btn-title">飛蚊症</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <style>
            #menu-page-medical-department {
                background-color: #F5F5F5;
            }

            #menu-page-medical-department .section-inner {
                padding: 80px 40px;
            }

            @media screen and (max-width: 767px) {
                #menu-page-medical-department .section-inner {
                    padding: 80px 20px;
                }
            }

            #menu-page-medical-department .menu-page-medical-department-title {
                font-size: 26px;
                text-align: center;
                font-weight: 500;
                margin-bottom: 30px;
            }

            #menu-page-medical-department .medical-department-btn-ul {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 20px;
            }

            #menu-page-medical-department .medical-department-btn-li {
                width: calc(20% - 20px);
                text-align: center;
            }

            @media screen and (max-width: 767px) {
                #menu-page-medical-department .medical-department-btn-ul {
                    gap: 10px;
                }

                #menu-page-medical-department .medical-department-btn-li {
                    width: calc(33.3333333% - 12px);
                }
            }

            #menu-page-medical-department .medical-department-btn {
                width: 100%;
                height: 100%;
                display: block;
                padding: 20px;
                background-color: #ffffff;
                border: 1px solid #DDDDDD;
                text-align: center;
            }

            #menu-page-medical-department .medical-department-btn:hover {
                opacity: 1;
            }

            @media screen and (max-width: 767px) {
                #menu-page-medical-department .medical-department-btn {
                    padding: 10px;
                }
            }

            #menu-page-medical-department .medical-department-icon-box {
                width: 80px;
                height: 80px;
                margin: 10px auto;
                background: #B5B5B5;
                border-radius: var(--border-radius-full);
                text-align: center;
                align-content: center;
                transition: all 0.3s ease;
            }

            #menu-page-medical-department .medical-department-btn:hover .medical-department-icon-box {
                background: #19275B;
            }

            #menu-page-medical-department .medical-department-icon-box img {
                width: 48px;
                height: 48px;
                margin: 0 auto;
                transition: transform 0.3s ease;
            }

            #menu-page-medical-department .medical-department-btn:hover .medical-department-icon-box img {
                transform: scale(1.05);
            }

            @media screen and (max-width: 767px) {
                #menu-page-medical-department .medical-department-icon-box {
                    width: 56px;
                    height: 56px;
                }

                #menu-page-medical-department .medical-department-icon-box img {
                    width: 36px;
                    height: 36px;
                }
            }

            #menu-page-medical-department .medical-department-btn-title {
                font-size: min(15px, 1.1vw);
                letter-spacing: 0.01em;
                font-family: var(--font-gothic);
            }

            @media screen and (max-width: 767px) {
                #menu-page-medical-department .medical-department-btn-title {
                    font-size: min(3.2vw, 14px);
                }
            }
        </style>

        <section id="menu-page-age-disease">
            <div class="section-inner">
                <div class="menu-page-age-disease-title-box">
                    <h2 class="menu-page-age-disease-title">世代別に見る目の疾患</h2>
                    <p class="menu-page-age-disease-title-text">
                        眼は加齢に伴って発症する疾患が多いので、人生100年時代の超高齢社会ではますます重要な診療科となります。<br>
                        年代別に比較的発症頻度の多い眼の疾患をみてみましょう。
                    </p>
                </div>

                <div class="age-disease-item" id="a01">
                    <div class="age-disease-image-box">
                        <img class="age-disease-image-box"
                            src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-image-01.png">
                    </div>
                    <div class="age-disease-content-box">
                        <div class="age-disease-title-box">
                            <img class="age-disease-icon"
                                src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-icon-01.png">
                            <h3 class="age-disease-title">新生児期・乳児期・幼児期<br class="sp">（0～5歳）</h3>
                        </div>
                        <div class="age-disease-text-box">
                            <p class="age-disease-text">
                                この時期は、目の機能が発達していくとても大切な時期です。<br>
                                生まれつきの病気（先天性白内障や斜視、弱視など）は、早く見つけて治療を始めることで、将来の視力を守ることができます。お子さまの「見る力」を育てるために、定期的な目のチェックをおすすめします。
                            </p>
                            <div class="main-disease-list">
                                <p class="main-disease-list-title">主な疾患</p>
                                <ul class="main-disease-list-ul main-disease-list-ul-flex">
                                    <li class="main-disease-list-li">先天性白内障</li>
                                    <li class="main-disease-list-li">鼻涙管閉塞</li>
                                    <li class="main-disease-list-li">弱視</li>
                                    <li class="main-disease-list-li">乱視（先天性）</li>
                                    <li class="main-disease-list-li">斜視</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="age-disease-item-bg-text">Early<br>Childhood</p>
                </div>

                <div class="age-disease-item age-disease-item-reverse" id="a02">
                    <div class="age-disease-image-box">
                        <img class="age-disease-image-box"
                            src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-image-02.png">
                    </div>
                    <div class="age-disease-content-box">
                        <div class="age-disease-title-box">
                            <img class="age-disease-icon"
                                src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-icon-02.png">
                            <h3 class="age-disease-title">学童期（6～12歳）</h3>
                        </div>
                        <div class="age-disease-text-box">
                            <p class="age-disease-text">
                                学校生活が始まると、黒板の文字が見えづらくなったり、本を読むと目が疲れやすくなったりすることがあります。<br>
                                この時期は近視が進みやすく、特に日本では多くの子どもが悩んでいます。<br>
                                また、スマートフォンやゲームなど、目を使いすぎることで視力に負担がかかることもあります。「目を細めて見る」「テレビに近づいて見る」といったサインがあれば、早めにご相談ください。
                            </p>
                            <div class="main-disease-list">
                                <p class="main-disease-list-title">主な疾患</p>
                                <ul class="main-disease-list-ul">
                                    <li class="main-disease-list-li">近視</li>
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/eyelid/stye'); ?>">麦粒腫・霰粒腫</a></li>
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/glasses-contact'); ?>">コンタクトレンズトラブル</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="age-disease-item-bg-text">Childhood</p>
                </div>

                <div class="age-disease-item" id="a03">
                    <div class="age-disease-image-box">
                        <img class="age-disease-image-box"
                            src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-image-03.png">
                    </div>
                    <div class="age-disease-content-box">
                        <div class="age-disease-title-box">
                            <img class="age-disease-icon"
                                src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-icon-03.png">
                            <h3 class="age-disease-title">青年期・成人期（13～39歳）</h3>
                        </div>
                        <div class="age-disease-text-box">
                            <p class="age-disease-text">
                                進学や就職、日々の生活が忙しくなるこの時期は、目の不調を感じてもつい後回しにしてしまいがちです。パソコンやスマートフォンの長時間使用により、目の乾きや疲れ、かすみなどの「ドライアイ」や「眼精疲労」が起こりやすくなります。<br>
                                <br>
                                また、コンタクトレンズを使用する方も多く、不適切な使い方によって感染症などのトラブルが起きることもあります。生活に支障が出る前に、気になる症状があれば早めに受診することが大切です。目の負担が増える時期だからこそ、意識的なケアを心がけましょう。
                            </p>
                            <div class="main-disease-list">
                                <p class="main-disease-list-title">主な疾患</p>
                                <ul class="main-disease-list-ul">
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/dryeye'); ?>">ドライアイ</a></li>
                                    <li class="main-disease-list-li">VDT症候群</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="age-disease-item-bg-text">Adolescence<br> & Young Adulthood</p>
                </div>

                <div class="age-disease-item age-disease-item-reverse" id="a04">
                    <div class="age-disease-image-box">
                        <img class="age-disease-image-box"
                            src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-image-04.png">
                    </div>
                    <div class="age-disease-content-box">
                        <div class="age-disease-title-box">
                            <img class="age-disease-icon"
                                src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-icon-04.png">
                            <h3 class="age-disease-title">壮年期（40～64歳）</h3>
                        </div>
                        <div class="age-disease-text-box">
                            <p class="age-disease-text">
                                40代を過ぎると、だんだんと「手元が見えにくい」「文字がぼやける」といった老眼の症状が出てきます。<br>
                                この時期に注意したいのが「緑内障」や「網膜剥離」などの見えにくくなる病気。<br>
                                自覚症状が少ないこともあり、知らないうちに進行していることもあります。また、飛蚊症やまぶたのたるみ、目の疲れなど、加齢や生活習慣に伴う症状も現れやすくなります。<br>
                                40歳を過ぎたら、定期的な眼科検診で“見え方の変化”をチェックしましょう。
                            </p>
                            <div class="main-disease-list">
                                <p class="main-disease-list-title">主な疾患</p>
                                <ul class="main-disease-list-ul main-disease-list-ul-flex">
                                    <li class="main-disease-list-li">老子</li>
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/glaucoma'); ?>">緑内障</a></li>
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/retina/floaters'); ?>">飛蚊症</a></li>
                                    <li class="main-disease-list-li">網膜剥離</li>
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/eyestrain'); ?>">眼精疲労・眼瞼痙攣</a></li>
                                    <li class="main-disease-list-li">眼瞼下垂</li>
                                    <li class="main-disease-list-li">翼状片</li>
                                    <li class="main-disease-list-li">結膜脂肪腫</li>
                                    <li class="main-disease-list-li">結膜下出血</li>
                                    <li class="main-disease-list-li">結膜弛緩症</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="age-disease-item-bg-text age-disease-item-bg-text-right">Middle<br>Adulthood</p>
                </div>

                <div class="age-disease-item" id="a05">
                    <div class="age-disease-image-box">
                        <img class="age-disease-image-box"
                            src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-image-05.png">
                    </div>
                    <div class="age-disease-content-box">
                        <div class="age-disease-title-box">
                            <img class="age-disease-icon"
                                src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-icon-05.png">
                            <h3 class="age-disease-title">老年期（65歳～）</h3>
                        </div>
                        <div class="age-disease-text-box">
                            <p class="age-disease-text">
                                年齢を重ねると、「白内障」や「加齢黄斑変性」といった病気のリスクが高まります。<br>
                                「物がかすむ」「ゆがんで見える」「視野が欠ける」といった症状は、加齢による変化かもしれません。最近では、手術や治療の選択肢も増え、視力の回復が期待できるケースも多くなっています。<br>
                                見え方に不安を感じたら、我慢せずにご相談ください。目の健康を守ることで、これからの毎日がもっと快適になります。
                            </p>
                            <div class="main-disease-list">
                                <p class="main-disease-list-title">主な疾患</p>
                                <ul class="main-disease-list-ul">
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/cataract'); ?>">白内障</a></li>
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/retina/amd'); ?>">加齢黄斑変性</a></li>
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/cataract/after-cataract'); ?>">後発白内障・前嚢収縮</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="age-disease-item-bg-text">Older<br>Adulthood</p>
                </div>

                <div class="age-disease-item age-disease-item-reverse">
                    <div class="age-disease-image-box">
                        <img class="age-disease-image-box"
                            src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-image-06.png">
                    </div>
                    <div class="age-disease-content-box">
                        <div class="age-disease-title-box">
                            <img class="age-disease-icon"
                                src="https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-age-icon-06.png">
                            <h3 class="age-disease-title">すべての年代を通じて</h3>
                        </div>
                        <div class="age-disease-text-box">
                            <p class="age-disease-text">
                                目の病気は、年齢だけでなく全身の病気や生活環境とも深く関わっています。<br>
                                たとえば糖尿病や膠原病などの持病がある方は、目にも影響が出ることがあります。<br>
                                また、季節の変わり目にはアレルギー性結膜炎、感染症が流行することもあり、症状がつらくなる方も少なくありません。<br>
                                どんな年代の方でも、「いつもと違う」と感じたときが受診のタイミングです。<br>
                                目の健康を守ることは、毎日の暮らしの安心につながります。
                            </p>
                            <div class="main-disease-list">
                                <p class="main-disease-list-title">主な疾患</p>
                                <ul class="main-disease-list-ul">
                                    <li class="main-disease-list-li"><a class="main-disease-list-btn"
                                            href="<?php echo home_url('/retina/diabetic'); ?>">糖尿病網膜症</a></li>
                                    <li class="main-disease-list-li">結膜炎</li>
                                    <li class="main-disease-list-li">眼瞼内反症</li>
                                    <li class="main-disease-list-li">乱視（後天性）</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="age-disease-item-bg-text">All Ages</p>
                </div>

            </div>
        </section>
        <style>
            #menu-page-age-disease {
                background-image: url(https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-main-content-bg.webp);
                background-size: cover;
                background-position: top center;
                background-repeat: no-repeat;
            }

            @media screen and (max-width: 767px) {
                #menu-page-age-disease {
                    background-image: url(https://ophthalmology.adachikeiyu.com/wp-content/themes/keiyu-ganka/img/menu-main-content-bg-sp.webp);
                }
            }

            #menu-page-age-disease .section-inner {
                padding: 80px;
            }

            @media screen and (max-width: 767px) {
                #menu-page-age-disease .section-inner {
                    padding: 80px 20px;
                }
            }

            #menu-page-age-disease .menu-page-age-disease-title-box {
                text-align: center;
                margin-bottom: 100px;
            }

            #menu-page-age-disease .menu-page-age-disease-title {
                font-size: 26px;
                margin-bottom: 30px;
                font-weight: 500;
                color: #000000;
            }

            #menu-page-age-disease .menu-page-age-disease-title-text {
                font-size: 16px;
                color: #666666;
            }

            #menu-page-age-disease .age-disease-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 40px;
                padding-bottom: 40px;
                position: relative;
            }

            #menu-page-age-disease .age-disease-item-reverse {
                flex-direction: row-reverse;
            }

            @media screen and (max-width: 767px) {
                #menu-page-age-disease .age-disease-item {
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }
            }

            #menu-page-age-disease .age-disease-image-box img {
                width: 90%;
                height: auto;
                margin: 0 auto;
                position: relative;
                z-index: 1;
            }

            #menu-page-age-disease .age-disease-content-box {
                z-index: 1;
            }

            @media screen and (min-width: 767px) {
                #menu-page-age-disease .age-disease-image-box {
                    width: 36%;
                }

                #menu-page-age-disease .age-disease-content-box {
                    width: 62%;
                }
            }

            @media screen and (max-width: 767px) {
                #menu-page-age-disease .age-disease-content-box {
                    display: contents;
                }
            }

            #menu-page-age-disease .age-disease-title-box {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }

            @media screen and (max-width: 767px) {
                #menu-page-age-disease .age-disease-title-box {
                    justify-content: left;
                    width: 100%;
                    margin-bottom: 10px;
                    order: 1;
                }

                #menu-page-age-disease .age-disease-image-box {
                    order: 2;
                    margin-bottom: 20px;
                }

                #menu-page-age-disease .age-disease-text-box {
                    order: 3;
                    text-align: left;
                }
            }

            #menu-page-age-disease .age-disease-icon {
                width: 50px;
                height: auto;
                margin-right: 20px;
            }

            #menu-page-age-disease .age-disease-title {
                font-size: 26px;
                font-weight: 500;
                color: #19275B;
                font-family: var(--font-gothic);
            }

            #menu-page-age-disease .age-disease-text {
                margin-bottom: 20px;
            }

            #menu-page-age-disease .main-disease-list {
                padding: 1rem;
                border-left: 4px solid #19275B;
            }

            #menu-page-age-disease .main-disease-list-title {
                font-weight: 500;
                font-family: var(--font-gothic);
                color: #19275B;
                font-size: 20px;
                margin-bottom: 10px;
            }

            #menu-page-age-disease .main-disease-list-ul-flex {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            #menu-page-age-disease .main-disease-list-ul-flex .main-disease-list-li {
                width: 49%;
            }

            #menu-page-age-disease .main-disease-list-li {
                padding-left: 2em;
                position: relative;
                margin-bottom: 10px;
            }

            #menu-page-age-disease .main-disease-list-li::before {
                content: "";
                position: absolute;
                width: 0.4em;
                height: 0.4em;
                border-radius: 50%;
                background-color: #19275B;
                transform: translate(-50%, -50%);
                left: 1em;
                top: 50%;
            }

            #menu-page-age-disease .age-disease-item-bg-text {
                position: absolute;
                font-size: 60px;
                font-weight: bold;
                font-family: var(--font-english);
                color: rgba(145, 149, 165, 0.2);
                text-transform: uppercase;
                letter-spacing: 0.01em;
                text-align: right;
                bottom: 0;
                right: 0;
                z-index: 0;
            }

            #menu-page-age-disease .age-disease-item-reverse .age-disease-item-bg-text {
                text-align: left;
                right: 40%;
            }

            #menu-page-age-disease .age-disease-item-reverse .age-disease-item-bg-text-right {
                right: 25%;
            }

            @media screen and (max-width: 767px) {
                #menu-page-age-disease .age-disease-title {
                    font-size: 18px;
                }

                #menu-page-age-disease .age-disease-item-bg-text {
                    font-size: 26px;
                    text-align: right !important;
                    right: 0 !important;
                    bottom: 0 !important;
                }
            }

            #menu-page-age-disease .main-disease-list-btn{
                color: #19275B;
	            text-decoration: underline;
            }
        </style>
    </div>

</div>

<?php get_footer(); ?>




<style>
    :root {
        --page-lr-space: min(120px, 8.3vw);
        --page-lr-space-sp: 5vw;
        --font-mincho: "Shippori Mincho", serif;
        --font-gothic: "Noto Sans JP", sans-serif;
        --font-english: "Jost", serif;
        --body-text-color: #333333;
        --body-font-size: min(1.25vw, 18px);
        --body-font-size-sp: min(3.73vw, 18px);
        --body-line-height: 1.5;
        --body-letter-spacing: 0.1em;
        --body-background-color: #ffffff;
        --section-inner-width: 1440px;
        --border-radius-full: calc(infinity * 1px);
    }

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        color: inherit;
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    section {
        width: 100%;
        padding: 0;
        margin: 0;
    }

    img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    body {
        display: block;
        width: 100%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        background: var(--body-background-color);
        color: var(--body-text-color);
        font-family: var(--font-mincho);
        letter-spacing: var(--body-letter-spacing);
        font-size: var(--body-font-size);
        line-height: var(--body-line-height);
        font-weight: 500;
    }

    @media screen and (max-width: 767px) {
        body {
            font-weight: 500;
            font-size: var(--body-font-size-sp);
            line-height: 1.5;
        }
    }

    .section-inner {
        width: 100%;
        max-width: var(--section-inner-width);
        height: 100%;
        margin: 0 auto;
        padding: 0 var(--page-lr-space);
        box-sizing: border-box;
    }

    @media screen and (max-width: 767px) {
        .section-inner {
            padding: 0 var(--page-lr-space-sp);
        }
    }

    .link-none {
        pointer-events: none;
    }

    @media screen and (max-width: 767px) {
        .pc {
            display: none;
        }
    }

    @media screen and (min-width: 768px) {
        .sp {
            display: none;
        }
    }
</style>