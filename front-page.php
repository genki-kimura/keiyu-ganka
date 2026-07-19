<?php get_header(); ?>
<div class="wrapper page-top" id="page-top">
	<div class="mv">

		<div class="mv__main">
			<!-- 1つだけのスライダー -->
			<div class="swiper mv__slider" id="mvSlider">
				<div class="swiper-wrapper">
					<!-- slide 1（LCP想定。lazy付けない・高優先） -->
					<div class="swiper-slide">
						<picture>
							<source media="(max-width: 767px)"
								srcset="<?php echo get_template_directory_uri(); ?>/img/mv-sp.webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mv.webp" alt="メインビジュアル"
								fetchpriority="high" decoding="async">
						</picture>
					</div>
					<!-- slide 2〜 以降はlazy + srcset -->
					<div class="swiper-slide">
						<picture>
							<source media="(max-width: 767px)"
								srcset="<?php echo get_template_directory_uri(); ?>/img/mv2-sp.webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mv2.webp" alt="スライド2"
								loading="lazy" decoding="async">
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source media="(max-width: 767px)"
								srcset="<?php echo get_template_directory_uri(); ?>/img/mv3-sp.webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mv1.webp" alt="スライド3"
								loading="lazy" decoding="async">
						</picture>
					</div>
				</div>
			</div>
		</div>

		<!-- Swiper スクリプト -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<!-- ページ下部で読み込む旧Swiper(v4)にグローバルを上書きされる前に、v11のコンストラクタを退避 -->
		<script>
			window.SwiperV11 = window.Swiper;
		</script>

		<script>
			let pcSwiper;

			function initSwiper() {
				const windowWidth = window.innerWidth;

				pcSwiper = new Swiper('.mv__slider', {
					loop: true,
					autoplay: {
						delay: 3000,
						disableOnInteraction: false
					},
					effect: 'fade',
					speed: 1000,
				});
			}

			window.addEventListener('load', initSwiper);
			window.addEventListener('resize', () => {
				// 画面サイズに応じてリロード推奨またはSwiperを再初期化してもOK
			});

		</script>

		<div class="mv__inner">
			<div class="mv__left">
				<div class="mv__h2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mv_h2.png" alt="人生100年時代に備えた目の未来づくり">
				</div>
				<div class="mv__txt">人生100年時代を支える“受診体験”を届けます</div>
				<ul class="mv__list">
					<li class="mv__item mv__item--01">
						<div class="mv__point">
							point<div class="mv__num">1</div>
						</div>
						<div class="mv__body">
							<div class="mv__bold"><span class="mv__gold">最新</span>の</div>医療設備
						</div>
					</li>
					<li class="mv__item mv__item--02">
						<div class="mv__point">
							point<div class="mv__num">2</div>
						</div>
						<div class="mv__body">
							<div class="mv__bold"><span class="mv__gold">女性医師</span></div>在籍
						</div>
					</li>
					<li class="mv__item mv__item--03">
						<div class="mv__point">
							point<div class="mv__num">3</div>
						</div>
						<div class="mv__body">
							<div class="mv__bold"><span class="mv__gold">日帰り</span>手術</div>対応
						</div>
					</li>
					<li class="mv__item mv__item--04">
						<div class="mv__point">
							point<div class="mv__num">4</div>
						</div>
						<div class="mv__body">
							<div class="mv__bold"><span class="mv__gold">国家資格保有者</span></div>による検査
						</div>
					</li>
					<li class="mv__item mv__item--05">
						<div class="mv__point">
							point<div class="mv__num">5</div>
						</div>
						<div class="mv__body">
							<div class="mv__bold"><span class="mv__gold">子どもの近視</span></div>抑制治療
						</div>
					</li>
				</ul>
			</div>
			<div class="mv__right">
				<table class="mv-table">
					<tr class="mv-table__tr">
						<th class="mv-table__th table__th--time">診療時間</th>
						<th class="mv-table__th">月</th>
						<th class="mv-table__th">火</th>
						<th class="mv-table__th">水</th>
						<th class="mv-table__th">木</th>
						<th class="mv-table__th">金</th>
						<th class="mv-table__th">土</th>
						<th class="mv-table__th">日祝</th>
					</tr>
					<tr class="mv-table__tr">
						<td class="mv-table__td mv-table__td--ttl">
							09:00～13:00<span class="mv-table__info">（12:30最終受付）</span>
						</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">／</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">／</td>
					</tr>
					<tr class="mv-table__tr">
						<td class="mv-table__td mv-table__td--ttl">
							14:00～18:00<span class="mv-table__info">（17:30最終受付）</span>
						</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">／</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">●</td>
						<td class="mv-table__td">／</td>
						<td class="mv-table__td">／</td>
					</tr>
				</table>
				<div class="mv-table__info">※ コンタクト、眼鏡処方は最終受付1時間前まで</div>
			</div>
		</div>
	</div>
	<style>
		.pc02 {
			display: block;
		}

		.sp {
			display: none;
		}

		@media screen and (max-width: 767px) {
			.pc02 {
				display: none;
			}

			.sp {
				display: block;
			}
		}
	</style>
	<?php
	/**
	 * MV下バナースライダーのデータ定義
	 * 各バナーのリンク先・画像ファイル名・代替テキスト・画像実寸を保持する。
	 *
	 * @var array<int, array{href:string, img:string, alt:string, w:int, h:int}> $keiyu_bnr_items
	 */
	$keiyu_bnr_items = [
		['href' => '/cataract/', 'img' => 'btn01.webp', 'alt' => '白内障手術についてはこちら', 'w' => 1104, 'h' => 480],
		['href' => '/cataract/multifocal/', 'img' => 'btn02.webp', 'alt' => '多焦点眼内レンズについてはこちら', 'w' => 1104, 'h' => 480],
		['href' => '/pediatric/orthokeratology/', 'img' => 'btn03.webp', 'alt' => 'オルソケラトロジーについてはこちら', 'w' => 1104, 'h' => 480],
		['href' => '/pediatric#a01', 'img' => 'btn04.webp', 'alt' => '学校検診で指摘された方はこちら', 'w' => 1104, 'h' => 480],
		['href' => '/first/', 'img' => 'beginner.jpg', 'alt' => '初めての方はこちら', 'w' => 2208, 'h' => 960],
	];

	/** @var string $keiyu_tpl_uri テーマディレクトリURI */
	$keiyu_tpl_uri = get_template_directory_uri();

	/** @var int $keiyu_bnr_repeat スライド複製回数（枚数不足によるループの隙間を防ぐため2周分を描画） */
	$keiyu_bnr_repeat = 2;

	/** @var array<int, int> $keiyu_acuity_angles ランドルト環（視標）の開口部の向き（度）。あらゆる方向を向くよう分散 */
	$keiyu_acuity_angles = [0, 90, 180, 270, 45];
	?>
	<!-- MV下バナースライダー（左右矢印＋視標ページネーション） -->
	<div class="bnr">
		<div class="bnr-swiper__wrap">
			<button type="button" class="bnr-swiper__arrow bnr-swiper__arrow--prev" aria-label="前のバナーを表示"></button>
			<div class="swiper bnr-swiper" id="bnrSlider">
				<div class="swiper-wrapper">
					<?php for ($keiyu_r = 0; $keiyu_r < $keiyu_bnr_repeat; $keiyu_r++): ?>
						<?php foreach ($keiyu_bnr_items as $keiyu_item): ?>
							<div class="swiper-slide"<?php echo $keiyu_r > 0 ? ' aria-hidden="true"' : ''; ?>>
								<a href="<?php echo esc_url($keiyu_item['href']); ?>" class="bnr__link"<?php echo $keiyu_r > 0 ? ' tabindex="-1"' : ''; ?>>
									<img src="<?php echo esc_url($keiyu_tpl_uri . '/img/' . $keiyu_item['img']); ?>"
										alt="<?php echo $keiyu_r > 0 ? '' : esc_attr($keiyu_item['alt']); ?>"
										width="<?php echo (int) $keiyu_item['w']; ?>" height="<?php echo (int) $keiyu_item['h']; ?>"
										loading="lazy" decoding="async">
								</a>
							</div>
						<?php endforeach; ?>
					<?php endfor; ?>
				</div>
			</div>
			<button type="button" class="bnr-swiper__arrow bnr-swiper__arrow--next" aria-label="次のバナーを表示"></button>
		</div>

		<!-- ページネーション（視力検査の視標＝ランドルト環。選択中は紺色の画像に切り替わる） -->
		<div class="bnr-swiper__pagination" role="tablist" aria-label="バナーの選択">
			<?php foreach ($keiyu_bnr_items as $keiyu_i => $keiyu_item): ?>
				<button type="button" class="bnr-swiper__dot<?php echo 0 === $keiyu_i ? ' is-active' : ''; ?>"
					data-index="<?php echo (int) $keiyu_i; ?>"
					style="transform: rotate(<?php echo (int) $keiyu_acuity_angles[$keiyu_i % count($keiyu_acuity_angles)]; ?>deg);"
					aria-label="<?php echo (int) ($keiyu_i + 1); ?>枚目のバナーへ"<?php echo 0 === $keiyu_i ? ' aria-current="true"' : ''; ?>></button>
			<?php endforeach; ?>
		</div>
	</div>

	<style>
		/* MV下バナースライダー */
		.page-top .bnr {
			padding: 24px 0 40px;
			background-color: #fff;
		}

		/* 矢印＋トラックの行 */
		.page-top .bnr-swiper__wrap {
			display: flex;
			align-items: center;
			gap: 16px;
			max-width: 1440px;
			width: 98%;
			margin: 0 auto;
		}

		/* スライダー本体（残り幅いっぱい・はみ出しをクリップ） */
		.page-top .bnr-swiper {
			flex: 1 1 0;
			min-width: 0;
			overflow: hidden;
		}

		.page-top .bnr-swiper .swiper-wrapper {
			display: flex;
			align-items: stretch;
			box-sizing: content-box;
		}

		.page-top .bnr-swiper .swiper-slide {
			flex-shrink: 0;
			height: auto;
			box-sizing: border-box;
		}

		.page-top .bnr-swiper .bnr__link {
			display: block;
			/* index.css の旧レイアウト用ルール（width:44% / max-width:552px）を打ち消し、スライド幅いっぱいに表示する */
			width: 100%;
			max-width: none;
			border-radius: 3px;
			overflow: hidden;
		}

		.page-top .bnr-swiper .bnr__link img {
			display: block;
			width: 100%;
			height: auto;
			border-radius: 3px;
		}

		/* 左右の矢印（丸背景なしのシェブロン） */
		.page-top .bnr-swiper__arrow {
			flex: 0 0 auto;
			width: 16px;
			height: 16px;
			padding: 0;
			border: 0;
			background: transparent;
			cursor: pointer;
			position: relative;
		}

		.page-top .bnr-swiper__arrow::before {
			content: "";
			position: absolute;
			top: 50%;
			left: 50%;
			width: 9px;
			height: 9px;
			border-top: 2px solid #333333;
			border-right: 2px solid #333333;
		}

		.page-top .bnr-swiper__arrow--next::before {
			transform: translate(-70%, -50%) rotate(45deg);
		}

		.page-top .bnr-swiper__arrow--prev::before {
			transform: translate(-30%, -50%) rotate(-135deg);
		}

		/* ページネーション（視標＝ランドルト環の画像） */
		.page-top .bnr-swiper__pagination {
			display: flex;
			justify-content: center;
			align-items: center;
			gap: 12px;
			margin-top: 24px;
		}

		.page-top .bnr-swiper__dot {
			width: 16px;
			height: 16px;
			padding: 0;
			border: 0;
			cursor: pointer;
			background: transparent url("<?php echo esc_url($keiyu_tpl_uri); ?>/img/pager-ring.png") center / contain no-repeat;
		}

		/* 選択中：紺色の視標画像に切り替え */
		.page-top .bnr-swiper__dot.is-active {
			background-image: url("<?php echo esc_url($keiyu_tpl_uri); ?>/img/pager-ring-active.png");
		}

		@media only screen and (max-width: 768px) {
			.page-top .bnr {
				padding: 20px 0 24px;
			}

			.page-top .bnr-swiper__wrap {
				width: calc(100% - 30px);
				gap: 8px;
			}

			.page-top .bnr-swiper__pagination {
				margin-top: 16px;
			}
		}
	</style>

	<script>
		/**
		 * MV下バナースライダーの初期化
		 * - 表示: PC(900px〜)は中央3枚＋左右半分ずつ / タブレット(600〜)は2.4枚 / SPは1.2枚（いずれも中央寄せ）。
		 * - スライドはPHP側で2周分描画済みのため、少ないバナー数でもループの隙間が出ない。
		 * - 旧Swiper(v4)ではなく退避しておいたv11で初期化する（v4はbreakpointsがmax-width基準のため）。
		 * - ページネーションは自前のボタン（視標画像）をrealIndexと同期させて制御する。
		 */
		document.addEventListener('DOMContentLoaded', function () {
			var SwiperCtor = window.SwiperV11 || window.Swiper;
			var bnrEl = document.querySelector('.bnr-swiper');

			if (typeof SwiperCtor === 'undefined' || !bnrEl) {
				return;
			}

			var dots = Array.prototype.slice.call(
				document.querySelectorAll('.bnr-swiper__pagination .bnr-swiper__dot')
			);
			var originalCount = dots.length;

			var bnrSwiper = new SwiperCtor(bnrEl, {
				loop: true,
				centeredSlides: true,
				slidesPerView: 1.2,
				spaceBetween: 12,
				speed: 600,
				autoplay: {
					delay: 4000,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: '.bnr-swiper__arrow--next',
					prevEl: '.bnr-swiper__arrow--prev',
				},
				breakpoints: {
					600: {
						slidesPerView: 2.4,
						spaceBetween: 16,
					},
					900: {
						slidesPerView: 4,
						spaceBetween: 24,
					},
				},
			});

			/**
			 * 現在表示中のバナーに対応するドットを選択状態にする
			 * @return {void}
			 */
			function updateDots() {
				if (0 === originalCount) {
					return;
				}

				var active = bnrSwiper.realIndex % originalCount;

				dots.forEach(function (dot, index) {
					var isActive = index === active;
					dot.classList.toggle('is-active', isActive);

					if (isActive) {
						dot.setAttribute('aria-current', 'true');
					} else {
						dot.removeAttribute('aria-current');
					}
				});
			}

			bnrSwiper.on('slideChange', updateDots);
			updateDots();

			// ドットクリックで該当バナーへ移動
			dots.forEach(function (dot) {
				dot.addEventListener('click', function () {
					var targetIndex = parseInt(dot.getAttribute('data-index'), 10) || 0;
					bnrSwiper.slideToLoop(targetIndex);
				});
			});
		});
	</script>

	<?php
	// 最新3件の「news」を取得
	$news_q = new WP_Query([
		'post_type' => 'news',
		'posts_per_page' => 3,
		'post_status' => 'publish',
		'orderby' => 'date',
		'order' => 'DESC',
		'no_found_rows' => true, // パフォーマンス最適化
	]);

	// アーカイブURL（存在しない場合は /news/ にフォールバック）
	$news_archive_url = get_post_type_archive_link('news') ?: home_url('/news/');
	?>

	<div class="news" <?php echo $news_q->have_posts() ? '' : ' style="display:none;"'; ?>>
		<div class="news__inner">
			<h2 class="news__ttl">お知らせ</h2>

			<ul class="news__list">
				<?php if ($news_q->have_posts()): ?>
					<?php while ($news_q->have_posts()):
						$news_q->the_post(); ?>
						<li class="news__item">
							<div class="news__day"><?php echo esc_html(get_the_date('Y/n/j')); ?></div>
							<a class="news__link" href="<?php the_permalink(); ?>">
								<?php echo esc_html(get_the_title()); ?>
							</a>
						</li>
					<?php endwhile; ?>
				<?php else: ?>
					<li class="news__item">
						<div class="news__link">現在、お知らせはありません。</div>
					</li>
				<?php endif; ?>
			</ul>

			<a href="<?php echo esc_url($news_archive_url); ?>" class="news__btn">すべて見る</a>
		</div>
	</div>

	<?php wp_reset_postdata(); ?>


	<div class="info">
		<div class="info__inner">
			<h2 class="info__ttl">医院情報</h2>
			<div class="info__box">
				<div class="info__left">
					<h3 class="info__s-ttl"><img src="<?php echo get_template_directory_uri(); ?>/img/ttl_logo.webp"
							alt="足立慶友眼科" loading="lazy"></h3>
					<ul class="info__list">
						<li class="info__item">
							<div class="info__day info__day--01">所在地</div>
							<div class="info__link">〒120-0015 <br class="sp">東京都足立区足立１丁目１２−１２ 足立メディカルモール2F</div>
						</li>
						<li class="info__item">
							<div class="info__day info__day--02">アクセス</div>
							<div class="info__link">東武スカイツリーライン「五反野駅」から徒歩8分</div>
						</li>
						<li class="info__item">
							<div class="info__day info__day--03">電話番号</div>
							<div class="info__link">03-5845-8200</div>
						</li>
					</ul>
					<div class="info__in-box">
						<table class="n-table">
							<tr class="n-table__tr">
								<th class="n-table__th table__th--time">診療時間</th>
								<th class="n-table__th">月</th>
								<th class="n-table__th">火</th>
								<th class="n-table__th">水</th>
								<th class="n-table__th">木</th>
								<th class="n-table__th">金</th>
								<th class="n-table__th">土</th>
								<th class="n-table__th">日祝</th>
							</tr>
							<tr class="n-table__tr">
								<td class="n-table__td n-table__td--ttl">
									09:00～13:00<span class="n-table__info">（12:30最終受付）</span>
								</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">／</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">／</td>
							</tr>
							<tr class="n-table__tr">
								<td class="n-table__td n-table__td--ttl">
									14:00～18:00<span class="n-table__info">（17:30最終受付）</span>
								</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">／</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">●</td>
								<td class="n-table__td">／</td>
								<td class="n-table__td">／</td>
							</tr>
						</table>
					</div>
					<div class="info__info">※ コンタクト、眼鏡処方は最終受付1時間前まで</div>
				</div>
				<div class="info__right">
					<div class="info__map">
						<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/pict_map.webp" alt="map"
							loading="lazy">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/pict_map-sp.webp" alt="map"
							loading="lazy">
					</div>
					<div class="info__m-btn">
						<a href="https://maps.app.goo.gl/LjfuwCXEc7fhi1ej6" class="info__m-link info__m-link--01"
							target="_blank">五反野駅からはこちら</a>
						<a href="https://maps.app.goo.gl/EN2vq7GPr3KB8SQb6" class="info__m-link info__m-link--02"
							target="_blank">Google Mapはこちら</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="come">
		<div class="come__inner">
			<h2 class="come__ttl">当院を受診する方へ</h2>
			<div class="come__s-box">
				<h3 class="come__s-ttl">スマホ・パソコンから<br class="sp">診療の予約ができます</h3>
				<div class="come__body">当院では、患者さんをお待たせする時間を少しでも減らし、スムーズに診療を受けていただけるよう、<br
						class="pc">スマホやPCから、来院前に診療の予約を取れるようにしています。</div>
			</div>
			<div class="come__box">
				<div class="come__w-box">
					<div class="come__em">WEB予約で受付時間を短縮</div>
					<div class="come__w-body">順番予約をご利用いただくと、ネットで待ち時間の確認ができるため、院内での待ち時間を短縮できます。スマホやPCから、お気軽にご利用ください。
					</div>
					<a href="https://ssc11.doctorqube.com/keiyuganka/" class="come__btn" target="_blank">WEB予約</a>
				</div>
				<div class="come__w-box">
					<div class="come__em">初診時には下記のものをお持ちください</div>
					<ul class="come__list">
						<li class="come__item come__item--01">診察券</li>
						<li class="come__item come__item--02">お薬手帳</li>
						<li class="come__item come__item--03">マイナンバーカード　<span class="come__sm">※コピーは不可</span></li>
						<li class="come__item come__item--04">各種受給者証（老人・身障医療・医療券等） <br class="sp"><span
								class="come__sm">※お持ちの方のみ</span></li>
						<li class="come__item come__item--05">現在お使いの眼鏡・コンタクトレンズ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="toin">
		<div class="toin__inner">
			<h2 class="toin__ttl">足立慶友眼科の5つの特徴</h2>
			<div class="toin__box">
				<h3 class="toin__s-ttl">
					<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/ttl_02.webp"
						alt="5つのCで100年時代に寄り添う時代" loading="lazy">
					<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/ttl_02-sp.webp"
						alt="5つのCで100年時代に寄り添う時代" loading="lazy">
				</h3>
				<div class="toin__body">目の健康を守ることは、人生の質を支えること。<br>足立慶友眼科は、下記の5つの”C”を大切に、人生100年時代を支える“受診体験”を届けます。
				</div>
			</div>
			<ul class="toin__list">
				<li class="toin__item">
					<div class="toin__c-ttl">
						<div class="toin__num toin__num--01">1.0</div>
						<div class="toin__name">
							<div class="toin__bld">対話</div>
							<div class="toin__sub">Communication</div>
						</div>
					</div>
					<div class="toin__link">患者さんの“やりたいこと”を引き出し、<br class="sp">不安や疑問に寄り添う、<br
							class="sp">対話を大切にした医療体験を提供する。</div>
				</li>
				<li class="toin__item">
					<div class="toin__c-ttl">
						<div class="toin__num toin__num--02">2.0</div>
						<div class="toin__name">
							<div class="toin__bld">技術力</div>
							<div class="toin__sub">Capability</div>
						</div>
					</div>
					<div class="toin__link">視能訓練士（ORT）による精密検査、<br class="sp">専門性の高い医師陣、高度医療設備の<br
							class="sp">整った環境で支える診断と治療。</div>
				</li>
				<li class="toin__item">
					<div class="toin__c-ttl">
						<div class="toin__num toin__num--03">3.0</div>
						<div class="toin__name">
							<div class="toin__bld">明快な説明</div>
							<div class="toin__sub">Clarity</div>
						</div>
					</div>
					<div class="toin__link">専門用語だけで終わらせない、<br>患者さんが納得して治療を受けられるよ<br class="sp">う明快な説明。</div>
				</li>
				<li class="toin__item">
					<div class="toin__c-ttl">
						<div class="toin__num toin__num--04">4.0</div>
						<div class="toin__name">
							<div class="toin__bld">医療的責務</div>
							<div class="toin__sub">Commitment</div>
						</div>
					</div>
					<div class="toin__link">新しい医療技術の導入や治療選択におい<br class="sp">て、常に“患者さんのためになるか”を<br
							class="sp">プロフェッショナルとして判断する。</div>
				</li>
				<li class="toin__item">
					<div class="toin__c-ttl">
						<div class="toin__num toin__num--05">5.0</div>
						<div class="toin__name">
							<div class="toin__bld">医療連携</div>
							<div class="toin__sub">Collaboration</div>
						</div>
					</div>
					<div class="toin__link">整形外科・内科など、他の診療科との連<br class="sp">携や、多くの健康産業と連携で、<br
							class="sp">目だけでなく“全身”の視点から支える医療提供。</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="anshin">
		<div class="anshin__inner">
			<p class="anshin__ttl">だから、安心。</p>
			<div class="anshin__txt">人生100年時代に寄り添う足立慶友眼科なら、<br>どんな症状、年齢の患者さまも治療が可能です。安心してご来院ください。</div>
			<ul class="anshin__list">
				<li class="anshin__item">
					<a href="/services#a01" class="anshin__link">
						<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/age01.png" alt="0-5歳"
							loading="lazy">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/age01-sp.png" alt="0-5歳"
							loading="lazy">
					</a>
				</li>
				<li class="anshin__item">
					<a href="/services#a02" class="anshin__link">
						<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/age02.png" alt="6-12歳"
							loading="lazy">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/age02-sp.png" alt="6-12歳"
							loading="lazy">
					</a>
				</li>
				<li class="anshin__item">
					<a href="/services#a03" class="anshin__link">
						<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/age03.png" alt="13〜39歳"
							loading="lazy">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/age03-sp.png" alt="13〜39歳"
							loading="lazy">
					</a>
				</li>
				<li class="anshin__item">
					<a href="/services#a04" class="anshin__link">
						<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/age04.png" alt="40〜64歳"
							loading="lazy">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/age04-sp.png" alt="40〜64歳"
							loading="lazy">
					</a>
				</li>
				<li class="anshin__item">
					<a href="/services#a05" class="anshin__link">
						<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/age05.png" alt="65歳以上"
							loading="lazy">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/age05-sp.png" alt="65歳以上"
							loading="lazy">
					</a>
				</li>
			</ul>
		</div>
		<div class="anshin__anime">

		</div>
	</div>
	<div class="slider">
		<div class="swiper-container">
			<ul class="swiper-wrapper">
				<li class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/slide01.webp" alt="仕事風景" loading="lazy">
				</li>
				<li class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/slide02.webp" alt="仕事風景" loading="lazy">
				</li>
				<li class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/slide03.webp" alt="仕事風景" loading="lazy">
				</li>
				<li class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/slide04.webp" alt="仕事風景" loading="lazy">
				</li>
			</ul>
		</div>
	</div>
	<div class="hellow">
		<div class="hellow__inner">
			<h2 class="hellow__ttl">ご挨拶</h2>
			<div class="hellow__txt">地域に根ざした気持ちの通う<br class="sp">医療を行いながら、<br>皆様に親しまれる眼科を目指しています。</div>
			<div class="hellow__body">
				<p>患者様の立場に立ち、地域に根ざした気持ちの通う医療を行いながら、皆様に親しまれる眼科として、より多くの方々により「よく見える生活」を送っていただくお手伝いをすることを目標としております。<br>目に関するお悩みなら、なんでもお気軽に当院へご相談いただければ幸いです。どうぞよろしくお願い致します。
				</p>
				<div class="hellow__sain">
					<div class="hellow__kata">日本眼科学会専門医 / 院長</div>
					<div class="hellow__name"><span class="hellow__kanji">上村 文</span>Aya Uemura</div>
				</div>
			</div>
			<a href="/doctor/" class="hellow__btn"><span class="hellow__inlink">院長紹介はこちら</span></a>
		</div>
		<div class="hellow__pict sp"><img src="<?php echo get_template_directory_uri(); ?>/img/bg05-sp.webp" alt="スタッフ"
				loading="lazy"></div>
	</div>

	<div class="year">
		<div class="year__inner">
			<h2 class="year__ttl"><span class="year__ttl year__ttl--100">100</span>年時代という視点</h2>
			<ul class="year__list">
				<li class="year__item">かつては、白内障の手術を<br>受けないという選択もありました。</li>
				<li class="year__item">当時は、平均寿命が短く、<br>視力を失う前に人生を終える方が多かったためです。</li>
				<li class="year__item">しかし今は人生100年時代。<br>長寿命化に伴い、生活の質を高めるために<br>目と向き合うことが欠かせない時代となりました。</li>
				<li class="year__item">私たちは診療体験を最高のものにすることで、</li>
				<li class="year__item year__item--bld">100年にわたり寄り添い、<br>頼られるクリニックを目指します。</li>
			</ul>
		</div>
	</div>

	<div class="annai">
		<div class="annai__inner">
			<h2 class="annai__ttl">診療案内</h2>
			<div class="annai__sub">当院が得意としている診療</div>
		</div>
		<div class="annai__sec annai__sec--01">
			<div class="annai__in-inner">
				<div class="annai__box">
					<div class="annai__contents">
						<div class="annai__in-ttl">白内障手術</div>
						<div class="annai__txt">
							白内障は、加齢などにより水晶体が濁り、視界がかすんだり、まぶしく感じる病気です。<br>当院では、白内障の診断から日帰り手術、術後のフォローまで一貫して対応しています。経験豊富な医師が丁寧に診察し、眼内レンズの種類や手術内容についても、わかりやすくご説明します。
						</div>
						<div class="annai__dl">
							<div class="annai__dd">
								<div class="annai__dt">眼科専門病院同等の最新設備を導入</div>
								<div class="annai__p">ARTEVO
									800（3D手術顕微鏡）やセンチュリオン（白内障手術装置）、コンステレーション（硝子体手術装置）など、眼科専門病院と同等の最新設備を導入しています。精度の高い診断と、安全で負担の少ない日帰り白内障手術を実現しています。
								</div>
							</div>
							<div class="annai__pict">
								<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/pict_med01.webp"
									alt="医療機器" loading="lazy">
								<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/pict_med01-sp.webp"
									alt="医療機器" loading="lazy">
							</div>
						</div>
					</div>
				</div>
				<a href="/cataract/" class="annai__btn">
					<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/top-btn01.webp"
						alt="白内障手術について詳しく見る" loading="lazy">
					<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/btn01-sp.webp"
						alt="白内障手術について詳しく見る" loading="lazy">
				</a>
			</div>
		</div>
		<div class="annai__sec annai__sec--02">
			<div class="annai__in-inner">
				<div class="annai__box annai__box--02">
					<div class="annai__contents">
						<div class="annai__in-ttl">小児眼科</div>
						<div class="annai__txt">
							当院の小児眼科では、発達段階にあるお子さまの目の健康を守るため、幅広い診療を行っています。視力の発達チェックや、近視の進行を抑えるためのオルソケラトロジーやマイオピン点眼治療にも対応。また、弱視や斜視など、見逃されやすい目の異常についても早期発見・治療を心がけています。
						</div>
						<div class="annai__dl">
							<div class="annai__dd">
								<div class="annai__dt">院長は学校医として、地域のこどもたちの目の健康をサポートしています。</div>
								<div class="annai__p">
									日頃から多くのお子さまと接しており、年齢や性格に合わせた声かけや診療を大切にしています。学校検診の結果で気になる点があった場合は、どの学校のお子さまでもお気軽にご相談ください。
								</div>
							</div>
							<div class="annai__pict">
								<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/pict_med02.webp"
									alt="医院長" loading="lazy">
								<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/pict_med02-sp.webp"
									alt="医院長" loading="lazy">
							</div>
						</div>
					</div>
				</div>
				<a href="/pediatric/#a01" class="annai__btn annai__btn--02">
					<img class="pc02" src="<?php echo get_template_directory_uri(); ?>/img/top-btn02.webp"
						alt="小児眼科について詳しく見る" loading="lazy">
					<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/btn02-sp.webp"
						alt="小児眼科について詳しく見る" loading="lazy">
				</a>
			</div>
		</div>
		<div class="etc">
			<div class="etc__inner">
				<div class="etc__sub">その他診療一覧</div>
				<ul class="etc__list">
					<li class="etc__item">
						<a href="/glaucoma/" class="etc__link">
							<div class="etc__pict etc__pict--01"></div>
							<div class="etc__name">緑内障</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/cataract/" class="etc__link">
							<div class="etc__pict etc__pict--02"></div>
							<div class="etc__name">白内障</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/cataract/multifocal/" class="etc__link">
							<div class="etc__pict etc__pict--03"></div>
							<div class="etc__name">多焦点眼内レンズ</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/refractive-error/" class="etc__link">
							<div class="etc__pict etc__pict--04"></div>
							<div class="etc__name">屈折異常</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/pediatric/" class="etc__link">
							<div class="etc__pict etc__pict--05"></div>
							<div class="etc__name">小児眼科</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/eyestrain/" class="etc__link">
							<div class="etc__pict etc__pict--06"></div>
							<div class="etc__name">眼精疲労</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/conjunctiva/" class="etc__link">
							<div class="etc__pict etc__pict--07"></div>
							<div class="etc__name">結膜の病気</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/eyelid/" class="etc__link">
							<div class="etc__pict etc__pict--08"></div>
							<div class="etc__name">まぶたの病気</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/retina/" class="etc__link">
							<div class="etc__pict etc__pict--09"></div>
							<div class="etc__name">網膜硝子体疾患</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/dryeye/" class="etc__link">
							<div class="etc__pict etc__pict--10"></div>
							<div class="etc__name">ドライアイ</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/glasses-contact/" class="etc__link">
							<div class="etc__pict etc__pict--11"></div>
							<div class="etc__name">メガネ・コンタクトレンズ</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/pediatric/orthokeratology/" class="etc__link">
							<div class="etc__pict etc__pict--12"></div>
							<div class="etc__name">オルソケラトロジー</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/pediatric/myopin/" class="etc__link">
							<div class="etc__pict etc__pict--13"></div>
							<div class="etc__name">マイオピン点眼</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/retina/surgery/" class="etc__link">
							<div class="etc__pict etc__pict--14"></div>
							<div class="etc__name">硝子体注射</div>
						</a>
					</li>
					<li class="etc__item">
						<a href="/retina/floaters/" class="etc__link">
							<div class="etc__pict etc__pict--15"></div>
							<div class="etc__name">飛蚊症</div>
						</a>
					</li>
				</ul>
				<a href="/services/" class="etc__btn"><span class="etc__inlink">診療内容の一覧へ</span></a>
			</div>
		</div>

		<div class="whats">
			<div class="whats__inner">
				<h2 class="whats__ttl">どのような症状で、<br class="sp">お悩みですか？</h2>
				<div class="whats__pict"></div>
				<ul class="whats__list">
					<li class="whats__item"><a href="/symptoms#a01" class="whats__link">目が痒い</a></li>
					<li class="whats__item"><a href="/symptoms#a02" class="whats__link">目が痛い</a></li>
					<li class="whats__item"><a href="/symptoms#a03" class="whats__link">目が充血する</a></li>
					<li class="whats__item"><a href="/symptoms#a04" class="whats__link">目が充血する</a></li>
					<li class="whats__item"><a href="/symptoms#a05" class="whats__link">目が乾く</a></li>
					<li class="whats__item"><a href="/symptoms#a06" class="whats__link">かすんで見える</a></li>
					<li class="whats__item"><a href="/symptoms#a07" class="whats__link">見える範囲が狭い</a></li>
					<li class="whats__item"><a href="/symptoms#a08" class="whats__link">二重に見える</a></li>
					<li class="whats__item"><a href="/symptoms#a09" class="whats__link">歪んで見える</a></li>
					<li class="whats__item"><a href="/symptoms#a10" class="whats__link">暗いところで見えにくい</a></li>
					<li class="whats__item"><a href="/symptoms#a11" class="whats__link">まぶたが腫れる</a></li>
					<li class="whats__item"><a href="/symptoms#a12" class="whats__link">涙が出る</a></li>
					<li class="whats__item"><a href="/symptoms#a13" class="whats__link">視力が急に落ちた</a></li>
					<li class="whats__item"><a href="/symptoms#a14" class="whats__link">光がちらつく・光が走る</a></li>
					<li class="whats__item"><a href="/symptoms#a15" class="whats__link">虫が飛んでいるように見える</a></li>
					<li class="whats__item"><a href="/symptoms#a16" class="whats__link">まぶたがピクピクする</a></li>
					<li class="whats__item"><a href="/symptoms#a17" class="whats__link">手術を受けた目がまた見えにくい</a></li>
					<li class="whats__item"><a href="/symptoms#a18" class="whats__link">目がゴロゴロする・異物感がある</a></li>
					<li class="whats__item"><a href="/symptoms#a19" class="whats__link">ぼやけて見える</a></li>
					<li class="whats__item"><a href="/symptoms#a20" class="whats__link">光がまぶしく感じる</a></li>
				</ul>
				<a href="/symptoms/" class="whats__btn"><span class="whats__inlink">よくある症状の一覧へ</span></a>
			</div>
		</div>

		<?php $co_q = keiyu_ganka_query_cataract_child_pages_with_thumbnail(3); ?>

		<div class="co" <?php echo $co_q->have_posts() ? '' : ' style="display:none;"'; ?>>
			<div class="co__inner">
				<h2 class="co__ttl">医療コラム</h2>
				<ul class="co__list">
					<?php
					while ($co_q->have_posts()):
						$co_q->the_post();
						$co_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
						$co_excerpt = wp_strip_all_tags(get_the_excerpt());
						if (mb_strlen($co_excerpt) > 80) {
							$co_excerpt = mb_substr($co_excerpt, 0, 80) . '…';
						}
						?>
						<li class="co__item">
							<a href="<?php the_permalink(); ?>" class="co__link">
								<div class="co__pict">
									<img src="<?php echo esc_url($co_thumb); ?>"
										alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy"></div>
								<div class="co__body">
									<div class="co__data">
										<div class="co__cat">コラム</div>
										<div class="co__day"><?php echo esc_html(get_the_date('Y/n/j')); ?></div>
									</div>
									<div class="co__s-ttl"><?php echo esc_html(get_the_title()); ?></div>
									<div class="co__txt"><?php echo esc_html($co_excerpt); ?></div>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>

		<?php wp_reset_postdata(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
	</div>
	<?php get_footer(); ?>