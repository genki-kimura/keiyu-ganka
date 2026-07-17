<?php /* Template Name: IPCL */ ?>
<?php get_header(); ?>

<div class="p-ipclFv-wrap" id="page-top">

  <!-- ========================================
    FV（メインビジュアル）セクション
  ======================================== -->
  <section class="p-ipclFv">
    <!-- 背景レイヤー -->
    <div class="p-ipclFv__bg" aria-hidden="true">
      <div class="p-ipclFv__bgSlider">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fv-bg-pc-1.webp"
             alt="" class="p-ipclFv__bgPhoto is-active" loading="eager" width="1480" height="1049">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fv-bg-pc-2.webp"
             alt="" class="p-ipclFv__bgPhoto" loading="eager" width="1480" height="1049">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fv-bg-pc-3.webp"
             alt="" class="p-ipclFv__bgPhoto" loading="eager" width="1480" height="1049">
      </div>
      <div class="p-ipclFv__bgOverlay"></div>
    </div>
    <!-- お知らせバー -->
    <div class="p-ipclFv__noticebar">
      <!-- PC: 1行 -->
      <p class="p-ipclFv__noticeText pc-only">レーシックやICLを検討しているあなたへ、私たちから新しい提案があります。</p>
      <!-- SP: 2行 -->
      <div class="sp-only">
        <span class="p-ipclFv__noticeSpLine1">レーシックやICLを検討しているあなたへ、</span>
        <span class="p-ipclFv__noticeSpLine2">私たちから新しい提案があります。</span>
      </div>
    </div>
    <!-- フォトエリア（contentの外：1200px未満で右端固定するため） -->
    <div class="p-ipclFv__photoArea" aria-hidden="true">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fv-image.webp"
           alt="" class="p-ipclFv__photoImg--pc" width="1282" height="1242" loading="eager">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fv-image-sp.webp"
           alt="" class="p-ipclFv__photoImg--sp" width="728" height="780" loading="eager">
    </div>
    <div class="p-ipclFv__content">
      <!-- キャッチコピー行1（次世代型…）PC: 1行 -->
      <p class="p-ipclFv__catch1 pc-only">次世代型視力矯正手術。厚労省が認めた新しい視力矯正レンズ</p>
      <!-- キャッチコピー行1 SP: 2行 -->
      <div class="p-ipclFv__catch1Sp">
        <span class="p-ipclFv__catch1SpLine1">次世代型視力矯正手術</span>
        <span class="p-ipclFv__catch1SpLine2">厚労省が認めた新しい視力矯正レンズ</span>
      </div>
      <!-- メインタイトル「IPCL」-->
      <p class="p-ipclFv__title">IPCL</p>
      <!-- サブタイトル（装飾線 + 英語テキスト）PC専用 -->
      <div class="p-ipclFv__subtitle pc-only">
        <span class="p-ipclFv__subtitleLine" aria-hidden="true"></span>
        <span class="p-ipclFv__subtitleText">Implantable Phakic Contact Lens</span>
      </div>
      <!-- キャッチコピー行2（裸眼で…） -->
      <p class="p-ipclFv__catch2">裸眼で「生きる」をもっと"アクティブ"に！</p>
      <!-- サブキャッチ（翌朝…）-->
      <p class="p-ipclFv__subCatch">翌朝目覚めた瞬間から広がるクリアな世界。</p>
      <!-- CTAボタン -->
      <a href="https://ssc11.doctorqube.com/keiyuganka/" class="p-ipclFv__ctaBtn" target="_blank" rel="noopener noreferrer">
        <span class="p-ipclFv__ctaBtnText">無料適応検査はこちら</span>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fv_arrow.svg"
             alt="" class="p-ipclFv__ctaBtnArrow" width="59" height="25" loading="eager">
      </a>
    </div>
  </section>

  <!-- ========================================
    CTA Section
  ======================================== -->
  <div class="p-ipclCta">
    <!-- 背景装飾レイヤー（全幅） -->
    <div class="p-ipclCta__bg" aria-hidden="true">
      <div class="p-ipclCta__bgTexture"></div>
      <div class="p-ipclCta__bgE37">
        <div class="p-ipclCta__bgE37Inner">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e37.svg" loading="lazy" width="397" height="397" alt="">
        </div>
      </div>
      <div class="p-ipclCta__bgE41">
        <div class="p-ipclCta__bgE41Inner">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e41.svg" loading="lazy" width="238" height="238" alt="">
        </div>
      </div>
      <div class="p-ipclCta__bgE39L">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
      </div>
      <div class="p-ipclCta__bgE39R">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
      </div>
    </div>
    <!-- コンテンツ（max-width 1400px） -->
    <div class="p-ipclCta__inner">
      <div class="p-ipclCta__titleBlock">
        <p class="p-ipclCta__title"><span>裸眼の生活への第一歩は、</span><span>ご相談から</span></p>
      </div>
      <div class="p-ipclCta__body">
        <p class="p-ipclCta__text">当院ではICL認定医による執刀と、長年研鑽を積んだ視能訓練士による精密な術前検査を実施しています。</p>
        <p class="p-ipclCta__text">一人ひとりの目の状態に合わせた、<br class="sp-only">丁寧な治療を提供します。</p>
      </div>
      <a href="https://ssc11.doctorqube.com/keiyuganka/" class="c-btn" target="_blank" rel="noopener noreferrer">
        <span class="c-btn__label">無料適応検査はこちら</span>
        <div class="c-btn__arrow">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/cta_arrow.svg" loading="lazy" width="59" height="25" alt="">
        </div>
      </a>
    </div><!-- /.p-ipclCta__inner -->
  </div>
</div>

<!-- ========================================
  目次（アンカーナビゲーション）
======================================== -->
<section class="p-ipclToc">
  <div class="p-ipclToc__inner">
    <h2 class="p-ipclToc__heading"><span>目次</span></h2>
    <ul class="p-ipclToc__list">
      <li class="p-ipclToc__item">
        <a href="#about" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">IPCLとは</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">About IPCL</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#features" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">5つの特徴</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Features</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#comparison" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">ICLとの違い</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Comparison</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#merit" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">メリット・デメリット</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Merit&amp;<br class="sp-only">Demerit</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#record" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">世界での使用実績</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Record</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#candidates" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">向いている人</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Candidates</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#clinic-features" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">当院の特徴</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Our Clinic</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#specialist" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">執刀医</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Specialist</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#flow" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">治療の流れ</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Flow</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#notes" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">術後における諸注意</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Notes</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#fees" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">費用</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Fees</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
      <li class="p-ipclToc__item">
        <a href="#faq" class="p-ipclToc__link">
          <div class="p-ipclToc__text">
            <span class="p-ipclToc__ja">FAQ</span>
            <span class="p-ipclToc__sep" aria-hidden="true"></span>
            <span class="p-ipclToc__en">Question</span>
          </div>
          <span class="p-ipclToc__arrow" aria-hidden="true">↓</span>
        </a>
      </li>
    </ul>
  </div>
</section>

<!-- ========================================
  IPCLとは（About）セクション
======================================== -->
<section class="p-ipclAbout" id="about">
  <div class="p-ipclAbout__inner">
    <div class="c-sectionTitle">
      <h2 class="c-sectionTitle__ja">IPCLとは</h2>
      <div class="c-sectionTitle__sub">
        <span class="c-sectionTitle__line" aria-hidden="true"></span>
        <span class="c-sectionTitle__en">About IPCL</span>
      </div>
    </div>
    <div class="p-ipclAbout__body">
      <div class="p-ipclAbout__textArea">
        <p class="p-ipclAbout__lead">IPCLは、「Implantable Phakic Contact Lens」の略で、イギリスのEyeOL社が開発した眼内コンタクトレンズです。</p>
        <div class="p-ipclAbout__desc">
          <p class="p-ipclAbout__descText">ICLと同じように、角膜を削らずに、目の中へレンズを入れて視力を矯正します。</p>
          <p class="p-ipclAbout__descText">レンズは、虹彩（茶目）の後ろ、水晶体の前に入ります。</p>
          <p class="p-ipclAbout__descText">外から見えることはなく、つけている感覚もほとんどありません。</p>
        </div>
        <div class="p-ipclAbout__desc">
          <p class="p-ipclAbout__descText">海外では以前から使われており、日本でも一部の施設で使用されてきました。</p>
          <p class="p-ipclAbout__descText">そして2025年に、国内で正式に承認されました。</p>
          <p class="p-ipclAbout__descText">ICLよりもまだ新しい治療ですが、幅広い度数に対応しやすいことや、サイズの選択肢が多いことから、</p>
          <p class="p-ipclAbout__descText">選択肢の一つとして注目されています。</p>
        </div>
      </div>
      <div class="p-ipclAbout__visual" aria-hidden="true">
        <div class="p-ipclAbout__lensWrap">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/about-lens.webp" loading="lazy" alt="" class="p-ipclAbout__lensImg" width="536" height="531">
        </div>
        <div class="p-ipclAbout__logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/about-logo.webp" alt="IPCL" width="54" height="48">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
  IPCLの5つの特徴（Features）セクション
======================================== -->
<section class="p-ipclFeatures" id="features">
  <div class="p-ipclFeatures__bg" aria-hidden="true">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/features-bg-pc.webp" loading="lazy" alt="" class="p-ipclFeatures__bgImg p-ipclFeatures__bgImg--pc" width="1400" height="1015">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/features-bg-sp.webp" loading="lazy" alt="" class="p-ipclFeatures__bgImg p-ipclFeatures__bgImg--sp" width="373" height="2048">
  </div>
  <div class="p-ipclFeatures__inner">
    <div class="c-sectionTitle">
      <h2 class="c-sectionTitle__ja">IPCLの5つの特徴</h2>
      <div class="c-sectionTitle__sub">
        <span class="c-sectionTitle__line" aria-hidden="true"></span>
        <span class="c-sectionTitle__en">Features</span>
      </div>
    </div>
    <div class="p-ipclFeatures__cards">
      <!-- Row 1: Point 01 〜 03 -->
      <div class="p-ipclFeatures__row">
        <div class="p-ipclFeatures__item">
          <div class="p-ipclFeatures__badge">
            <div class="p-ipclFeatures__badgeInner">
              <span class="p-ipclFeatures__badgeLabel">point</span>
              <span class="p-ipclFeatures__badgeNum">01</span>
            </div>
          </div>
          <div class="p-ipclFeatures__card">
            <div class="p-ipclFeatures__cardBody">
              <h3 class="p-ipclFeatures__cardTitle">厚生労働省の承認を受けた新しい眼内コンタクトレンズ</h3>
              <p class="p-ipclFeatures__cardText">IPCLは、海外での使用実績を重ねたうえで、2025年に日本でも承認されました。新しい治療法ではありますが、国内の審査をクリアしたレンズです。</p>
            </div>
          </div>
        </div>
        <div class="p-ipclFeatures__item">
          <div class="p-ipclFeatures__badge">
            <div class="p-ipclFeatures__badgeInner">
              <span class="p-ipclFeatures__badgeLabel">point</span>
              <span class="p-ipclFeatures__badgeNum">02</span>
            </div>
          </div>
          <div class="p-ipclFeatures__card">
            <div class="p-ipclFeatures__cardBody">
              <h3 class="p-ipclFeatures__cardTitle">ICLやレーシックでは対応できない強度近視にも対応可能</h3>
              <div class="p-ipclFeatures__cardDesc">
                <p class="p-ipclFeatures__cardText">IPCLは、レンズのサイズ展開が多いのが特徴です。</p>
                <p class="p-ipclFeatures__cardText">ICLでは対応が難しい強い近視の方でも、選択肢になる場合があります。</p>
                <p class="p-ipclFeatures__cardText">「適応外と言われた」という方でも、IPCLなら検討できることがあります。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-ipclFeatures__item">
          <div class="p-ipclFeatures__badge">
            <div class="p-ipclFeatures__badgeInner">
              <span class="p-ipclFeatures__badgeLabel">point</span>
              <span class="p-ipclFeatures__badgeNum">03</span>
            </div>
          </div>
          <div class="p-ipclFeatures__card">
            <div class="p-ipclFeatures__cardBody">
              <h3 class="p-ipclFeatures__cardTitle">豊富なレンズサイズで、挿入後の位置ズレを最小限に</h3>
              <div class="p-ipclFeatures__cardDesc">
                <p class="p-ipclFeatures__cardText">ICLのレンズサイズが4種類であるのに対し、IPCLは13種類から選択できます。</p>
                <p class="p-ipclFeatures__cardText">眼の中のレンズ挿入スペース（前房の大きさ）は人によって異なるため、サイズの選択肢が豊富なほど、</p>
                <p class="p-ipclFeatures__cardText">その方の目にフィットしたレンズを選べる可能性が高まります。</p>
                <p class="p-ipclFeatures__cardText">術後のレンズ位置ズレのリスクを低減する設計です。</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.p-ipclFeatures__row -->
      <!-- Row 2: Point 04 〜 05（中央寄せ） -->
      <div class="p-ipclFeatures__row p-ipclFeatures__row--center">
        <div class="p-ipclFeatures__item p-ipclFeatures__item--fixed">
          <div class="p-ipclFeatures__badge">
            <div class="p-ipclFeatures__badgeInner">
              <span class="p-ipclFeatures__badgeLabel">point</span>
              <span class="p-ipclFeatures__badgeNum">04</span>
            </div>
          </div>
          <div class="p-ipclFeatures__card">
            <div class="p-ipclFeatures__cardBody">
              <h3 class="p-ipclFeatures__cardTitle">将来の目の健康にも配慮、白内障のリスクを軽減した設計</h3>
              <div class="p-ipclFeatures__cardDesc">
                <p class="p-ipclFeatures__cardText">IPCLは、レンズの形や小さな穴の工夫により、レンズと水晶体のあいだの空間を保ちやすく、</p>
                <p class="p-ipclFeatures__cardText">目の中の水の流れも妨げにくい設計です。</p>
                <p class="p-ipclFeatures__cardText">こうした特徴が、白内障などのリスクに配慮することにつながっています。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-ipclFeatures__item p-ipclFeatures__item--fixed">
          <div class="p-ipclFeatures__badge">
            <div class="p-ipclFeatures__badgeInner">
              <span class="p-ipclFeatures__badgeLabel">point</span>
              <span class="p-ipclFeatures__badgeNum">05</span>
            </div>
          </div>
          <div class="p-ipclFeatures__card">
            <div class="p-ipclFeatures__cardBody">
              <h3 class="p-ipclFeatures__cardTitle">ハイブリッド親水性アクリルを使用で見え方の質が高い</h3>
              <div class="p-ipclFeatures__cardDesc">
                <p class="p-ipclFeatures__cardText">IPCLの素材は、白内障手術の眼内レンズにも使用されているハイブリッド親水性アクリルです。</p>
                <p class="p-ipclFeatures__cardText">生体適合性が高く、眼の中で異物として認識されにくい素材のため、炎症リスクを抑えながら光学的に安定した見え方を提供します。</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.p-ipclFeatures__row -->
    </div><!-- /.p-ipclFeatures__cards -->
  </div><!-- /.p-ipclFeatures__inner -->
</section>

<!-- ========================================
  CTA Section
======================================== -->
<div class="p-ipclCta">
  <!-- 背景装飾レイヤー -->
  <div class="p-ipclCta__bg" aria-hidden="true">
    <div class="p-ipclCta__bgTexture"></div>
    <div class="p-ipclCta__bgE37">
      <div class="p-ipclCta__bgE37Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e37.svg" loading="lazy" width="397" height="397" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE41">
      <div class="p-ipclCta__bgE41Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e41.svg" loading="lazy" width="238" height="238" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE39L">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
    <div class="p-ipclCta__bgE39R">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
  </div>
  <div class="p-ipclCta__inner">
    <div class="p-ipclCta__titleBlock">
      <p class="p-ipclCta__title"><span>裸眼の生活への第一歩は、</span><span>ご相談から</span></p>
    </div>
    <div class="p-ipclCta__body">
      <p class="p-ipclCta__text">当院ではICL認定医による執刀と、長年研鑽を積んだ視能訓練士による精密な術前検査を実施しています。</p>
      <p class="p-ipclCta__text">一人ひとりの目の状態に合わせた、<br class="sp-only">丁寧な治療を提供します。</p>
    </div>
    <a href="https://ssc11.doctorqube.com/keiyuganka/" class="c-btn" target="_blank" rel="noopener noreferrer">
      <span class="c-btn__label">無料適応検査はこちら</span>
      <div class="c-btn__arrow">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/cta_arrow.svg" loading="lazy" width="59" height="25" alt="">
      </div>
    </a>
  </div>
</div>

<!-- ========================================
  IPCLとICLの違い（Comparison）セクション
======================================== -->
<section class="p-ipclComparison" id="comparison">
  <div class="p-ipclComparison__bg" aria-hidden="true">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/comparison-bg.webp" loading="lazy" alt="" width="1400" height="1407">
  </div>
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/comparison-mark-top.svg" loading="lazy" alt="" class="p-ipclComparison__markTop" aria-hidden="true">
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/comparison-mark-bottom.svg" loading="lazy" alt="" class="p-ipclComparison__markBottom" aria-hidden="true">
  <div class="p-ipclComparison__inner">
    <div class="p-ipclComparison__heading">
      <h2 class="p-ipclComparison__title">IPCLとICLの違い</h2>
      <div class="p-ipclComparison__subRow" aria-hidden="true">
        <span class="p-ipclComparison__subLine"></span>
        <span class="p-ipclComparison__subText">Comparison</span>
        <span class="p-ipclComparison__subLine"></span>
      </div>
    </div>
    <div class="p-ipclComparison__textBlock">
      <p class="p-ipclComparison__text">ICLとIPCLは、どちらも角膜を削らずに視力を矯正する治療です。</p>
      <p class="p-ipclComparison__text">ただし、レンズの素材やサイズ、対応できる度数には違いがあります。大きく言うと、ICLは実績の多さ、IPCLはサイズの選択肢の多さや幅広い度数への対応しやすさが特徴です。それぞれの特徴を、以下にまとめました。</p>
    </div>
    <div class="p-ipclComparison__tableWrap">
      <div class="p-ipclComparison__tableHeader">
        <div class="p-ipclComparison__thLabel"></div>
        <div class="p-ipclComparison__thIpcl">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/comparison-ipcl-lens.webp" loading="lazy" alt="" class="p-ipclComparison__thImg" width="136" height="78">
          <p class="p-ipclComparison__thName p-ipclComparison__thName--ipcl">IPCL</p>
        </div>
        <div class="p-ipclComparison__thIcl">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/comparison-icl-lens.webp" loading="lazy" alt="" class="p-ipclComparison__thImg" width="91" height="56">
          <p class="p-ipclComparison__thName p-ipclComparison__thName--icl">ICL</p>
        </div>
      </div>
      <div class="p-ipclComparison__tableBody">
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">作っている会社</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl p-ipclComparison__cellIpcl--top">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">EyeOL社<br><span class="p-ipclComparison__cellIpclBoxSub">（イギリス）</span></p></div>
              <p class="p-ipclComparison__cellIpclText">イギリスのEyeOL社</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">STAAR<br>Surgical社<br><span class="p-ipclComparison__cellIpclBoxSub">（アメリカ）</span></p></div>
              <p class="p-ipclComparison__cellIclText">アメリカのSTAAR<br>Surgical社</p>
            </div>
          </div>
        </div>
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">レンズ素材</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">ハイブリッド<br>親水性アクリル</p></div>
              <p class="p-ipclComparison__cellIpclText">ハイブリッド親水性アクリル</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">コラマー<br>(コラーゲン含有)</p></div>
              <p class="p-ipclComparison__cellIclText">コラマー(コラーゲン含有)</p>
            </div>
          </div>
        </div>
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">日本での承認時期</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">2025年</p></div>
              <p class="p-ipclComparison__cellIpclText">2025年</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">2014年</p></div>
              <p class="p-ipclComparison__cellIclText">2014年</p>
            </div>
          </div>
        </div>
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">世界での手術件数</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">10万件以上</p></div>
              <p class="p-ipclComparison__cellIpclText">10万件以上</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">300万件以上</p></div>
              <p class="p-ipclComparison__cellIclText">300万件以上</p>
            </div>
          </div>
        </div>
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">対応できる近視の強さ</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">+5D 〜 −30D</p></div>
              <p class="p-ipclComparison__cellIpclText">+5D 〜 −30D</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">+6D 〜 −18D</p></div>
              <p class="p-ipclComparison__cellIclText">+6D 〜 −18D</p>
            </div>
          </div>
        </div>
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">乱視・遠視への対応</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">より広い範囲に<br>対応しやすい</p></div>
              <p class="p-ipclComparison__cellIpclText">より広い範囲に対応しやすい</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">対応可能<br>（範囲に制限あり）</p></div>
              <p class="p-ipclComparison__cellIclText">対応可能(範囲に制限あり)</p>
            </div>
          </div>
        </div>
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">レンズのサイズ展開</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">13種類</p></div>
              <p class="p-ipclComparison__cellIpclText">13種類</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">4種類</p></div>
              <p class="p-ipclComparison__cellIclText">4種類</p>
            </div>
          </div>
        </div>
        <div class="p-ipclComparison__row">
          <p class="p-ipclComparison__rowLabel">費用感</p>
          <div class="p-ipclComparison__rowPair">
            <div class="p-ipclComparison__cellIpcl p-ipclComparison__cellIpcl--bottom">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--ipcl">IPCL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIpclBox">ICLより<br>抑えめな傾向</p></div>
              <p class="p-ipclComparison__cellIpclText">ICLより抑えめな傾向</p>
            </div>
            <div class="p-ipclComparison__cellIcl">
              <span class="p-ipclComparison__cellTag p-ipclComparison__cellTag--icl">ICL</span>
              <div class="p-ipclComparison__cellValueBox"><p class="p-ipclComparison__cellIclBox">やや高めの傾向</p></div>
              <p class="p-ipclComparison__cellIclText">やや高めの傾向</p>
            </div>
          </div>
        </div>
      </div><!-- /.p-ipclComparison__tableBody -->
    </div><!-- /.p-ipclComparison__tableWrap -->
    <p class="p-ipclComparison__textBottom">どちらが自分に向いているかは、目の状態を検査してみないとわかりません。まずは無料適応検査で、あなたの目に合った選択肢を一緒に確認しましょう。</p>
  </div><!-- /.p-ipclComparison__inner -->
</section>

<!-- ========================================
  IPCLのメリット・デメリット（Merit）セクション
======================================== -->
<section class="p-ipclMerit" id="merit">
  <div class="p-ipclMerit__ellipse" aria-hidden="true">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/merit-ellipse.webp" loading="lazy" alt="" width="388" height="367">
  </div>
  <div class="p-ipclMerit__inner">
    <div class="c-sectionTitle">
      <h2 class="c-sectionTitle__ja">IPCLのメリット・デメリット</h2>
      <div class="c-sectionTitle__sub">
        <span class="c-sectionTitle__line" aria-hidden="true"></span>
        <span class="c-sectionTitle__en">Merit &amp; Demerit</span>
      </div>
    </div>
    <div class="p-ipclMerit__intro">
      <p class="p-ipclMerit__introText">IPCLは、ICLに比べて歴史が浅い分、「本当に安心して受けられるの？」という疑問を持つ方も少なくありません。</p>
      <p class="p-ipclMerit__introText">メリットとデメリットの両面を解説します。</p>
    </div>
    <div class="p-ipclMerit__columns">
      <div class="p-ipclMerit__col p-ipclMerit__col--merit">
        <div class="p-ipclMerit__colHead">
          <p class="p-ipclMerit__colTitle p-ipclMerit__colTitle--merit">メリット</p>
          <div class="p-ipclMerit__colSubRow" aria-hidden="true">
            <span class="p-ipclMerit__colSubLine"></span>
            <span class="p-ipclMerit__colSubText">merit</span>
            <span class="p-ipclMerit__colSubLine"></span>
          </div>
        </div>
        <ul class="p-ipclMerit__cards">
          <!-- 1枚目: SP初期展開 -->
          <li class="p-ipclMerit__card">
            <button type="button" class="p-ipclMerit__cardToggle" aria-expanded="false">
              <span class="p-ipclMerit__cardTitle p-ipclMerit__cardTitle--merit">挿入後の位置ズレや回転が少ない</span>
              <span class="p-ipclMerit__cardChevron" aria-hidden="true"></span>
            </button>
            <div class="p-ipclMerit__cardBody">
              <div class="p-ipclMerit__cardSep" aria-hidden="true"></div>
              <p class="p-ipclMerit__cardText">6つのフットプレートで毛様体溝にしっかり固定される構造のため、術後にレンズが動いたり、乱視矯正の軸がずれたりするリスクを抑えやすい設計です。</p>
            </div>
          </li>
          <!-- 2〜3枚目: SP初期折りたたみ -->
          <li class="p-ipclMerit__card">
            <button type="button" class="p-ipclMerit__cardToggle" aria-expanded="false">
              <span class="p-ipclMerit__cardTitle p-ipclMerit__cardTitle--merit">サイズ展開が豊富で自分の目にフィットしやすい</span>
              <span class="p-ipclMerit__cardChevron" aria-hidden="true"></span>
            </button>
            <div class="p-ipclMerit__cardBody">
              <div class="p-ipclMerit__cardSep" aria-hidden="true"></div>
              <div class="p-ipclMerit__cardDesc">
                <p class="p-ipclMerit__cardText">13種類のサイズから選択できるため、眼の内部サイズ（前房深度・前房幅）に合わせた細かな調整が可能です。</p>
                <p class="p-ipclMerit__cardText">ICLのサイズが合わないと判断された方でも、IPCLであれば適切なサイズが見つかる場合があります。</p>
              </div>
            </div>
          </li>
          <li class="p-ipclMerit__card">
            <button type="button" class="p-ipclMerit__cardToggle" aria-expanded="false">
              <span class="p-ipclMerit__cardTitle p-ipclMerit__cardTitle--merit">将来の白内障リスクを軽減</span>
              <span class="p-ipclMerit__cardChevron" aria-hidden="true"></span>
            </button>
            <div class="p-ipclMerit__cardBody">
              <div class="p-ipclMerit__cardSep" aria-hidden="true"></div>
              <div class="p-ipclMerit__cardDesc">
                <p class="p-ipclMerit__cardText">7つの孔による安定した房水循環と、薄型の非球面レンズ設計により、白内障発症のリスクを低減できると考えられています。</p>
                <p class="p-ipclMerit__cardText">万が一将来的に白内障が生じた際も、レンズを取り出して白内障手術へ移行します。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="p-ipclMerit__col p-ipclMerit__col--demerit">
        <div class="p-ipclMerit__colHead">
          <p class="p-ipclMerit__colTitle p-ipclMerit__colTitle--demerit">デメリット</p>
          <div class="p-ipclMerit__colSubRow" aria-hidden="true">
            <span class="p-ipclMerit__colSubLine"></span>
            <span class="p-ipclMerit__colSubText">demerit</span>
            <span class="p-ipclMerit__colSubLine"></span>
          </div>
        </div>
        <ul class="p-ipclMerit__cards">
          <!-- デメリット: SP初期折りたたみ -->
          <li class="p-ipclMerit__card p-ipclMerit__card--demerit">
            <button type="button" class="p-ipclMerit__cardToggle" aria-expanded="false">
              <span class="p-ipclMerit__cardTitle p-ipclMerit__cardTitle--demerit">使用実績、論文数が少ない</span>
              <span class="p-ipclMerit__cardChevron" aria-hidden="true"></span>
            </button>
            <div class="p-ipclMerit__cardBody">
              <div class="p-ipclMerit__cardSep" aria-hidden="true"></div>
              <div class="p-ipclMerit__cardDesc">
                <p class="p-ipclMerit__cardText">世界全体での症例数はICLの300万件超に対し、IPCLは10万件超にとどまります。</p>
                <p class="p-ipclMerit__cardText">国内外の論文数も限られており、長期的な安全性データはICLと比べて蓄積が少ない段階です。</p>
                <p class="p-ipclMerit__cardText">ただし、2025年に厚生労働省の審査・承認を正式に取得しており、国内での使用基準は満たしています。</p>
              </div>
            </div>
          </li>
          <li class="p-ipclMerit__card p-ipclMerit__card--demerit">
            <button type="button" class="p-ipclMerit__cardToggle" aria-expanded="false">
              <span class="p-ipclMerit__cardTitle p-ipclMerit__cardTitle--demerit">実施している医院が限られる</span>
              <span class="p-ipclMerit__cardChevron" aria-hidden="true"></span>
            </button>
            <div class="p-ipclMerit__cardBody">
              <div class="p-ipclMerit__cardSep" aria-hidden="true"></div>
              <div class="p-ipclMerit__cardDesc">
                <p class="p-ipclMerit__cardText">IPCL手術を提供できる施設は現時点では国内でも限られています。</p>
                <p class="p-ipclMerit__cardText">執刀医の経験・技術がレンズサイズ選択や術後の見え方に影響しやすい術式のため、実施クリニックの選択が特に重要です。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div><!-- /.p-ipclMerit__columns -->
  </div><!-- /.p-ipclMerit__inner -->
</section>

<!-- ========================================
  IPCLの世界での使用実績について（Record）セクション
======================================== -->
<section class="p-ipclRecord" id="record">
  <!-- 背景画像（PC/SP切り替え） -->
  <div class="p-ipclRecord__bg">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/record-bg-pc.webp" loading="lazy" width="1400" height="787" alt="" class="p-ipclRecord__bgImg p-ipclRecord__bgImg--pc" aria-hidden="true">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/record-bg-sp.webp" loading="lazy" width="375" height="966" alt="" class="p-ipclRecord__bgImg p-ipclRecord__bgImg--sp" aria-hidden="true">
    <div class="p-ipclRecord__links">
      <span class="p-ipclRecord__link">参考：<a href="https://www.ipcl.sg/about/" target="_blank" rel="noopener noreferrer">https://www.ipcl.sg/about/</a></span>
      <span class="p-ipclRecord__link">参考：<a href="https://www.spectrumophthalmics.uk/product/ipcl-v2/" target="_blank" rel="noopener noreferrer">https://www.spectrumophthalmics.uk/product/ipcl-v2/</a></span>
    </div>
  </div>
  <div class="p-ipclRecord__inner">
    <div class="p-ipclRecord__head">
      <h2 class="p-ipclRecord__title">IPCLの世界での使用実績について</h2>
      <div class="p-ipclRecord__subRow">
        <span class="p-ipclRecord__subLine" aria-hidden="true"></span>
        <span class="p-ipclRecord__subText">Global Track Record</span>
        <span class="p-ipclRecord__subLine" aria-hidden="true"></span>
      </div>
    </div>
    <div class="p-ipclRecord__content">
      <p class="p-ipclRecord__lead pc-only">ICLに次ぐ新世代の眼内コンタクトレンズとして、世界各国で急速に普及が進んでいます。</p>
      <p class="p-ipclRecord__lead sp-only">
        <span>ICLに次ぐ新世代の眼内コンタクトレン</span>
        <span>ズとして、世界各国で急速に普及が進ん</span>
        <span>でいます。</span>
      </p>
      <ul class="p-ipclRecord__cards">
        <li class="p-ipclRecord__card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/record-laurel.webp" loading="lazy" width="273" height="266" alt="" class="p-ipclRecord__cardBg" aria-hidden="true">
          <p class="p-ipclRecord__cardContent">
            <span class="p-ipclRecord__cardNum">40</span><span class="p-ipclRecord__cardUnit">ヵ国</span><br><span class="p-ipclRecord__cardLabel">以上で使用</span>
          </p>
        </li>
        <li class="p-ipclRecord__card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/record-laurel.webp" loading="lazy" width="273" height="266" alt="" class="p-ipclRecord__cardBg" aria-hidden="true">
          <p class="p-ipclRecord__cardContent">
            <span class="p-ipclRecord__cardNum">15</span><span class="p-ipclRecord__cardUnit">万件</span><br><span class="p-ipclRecord__cardLabel">以上の施術実績</span>
          </p>
        </li>
        <li class="p-ipclRecord__card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/record-laurel.webp" loading="lazy" width="273" height="266" alt="" class="p-ipclRecord__cardBg" aria-hidden="true">
          <p class="p-ipclRecord__cardContent">
            <span class="p-ipclRecord__cardNum">1500</span><span class="p-ipclRecord__cardUnit">名</span><br><span class="p-ipclRecord__cardLabel">以上の執刀医</span>
          </p>
        </li>
        <li class="p-ipclRecord__card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/record-laurel.webp" loading="lazy" width="273" height="266" alt="" class="p-ipclRecord__cardBg" aria-hidden="true">
          <p class="p-ipclRecord__cardContent">
            <span class="p-ipclRecord__cardNum">2013</span><span class="p-ipclRecord__cardUnit">年</span><br><span class="p-ipclRecord__cardLabel">CEマーク取得</span>
          </p>
        </li>
      </ul><!-- /.p-ipclRecord__cards -->
      <p class="p-ipclRecord__body">IPCLは、海外を中心に使われてきた新しい眼内コンタクトレンズです。<br>ICLに比べると歴史は浅いものの、すでに多くの国で使用されています。国内では2025年に承認を受け、徐々に導入が広がっています。新しい治療法ではありますが、国際的な使用実績と国内の承認を経ていることは、一つの安心材料になります。</p>
    </div><!-- /.p-ipclRecord__content -->
  </div><!-- /.p-ipclRecord__inner -->
</section>

<!-- ========================================
  IPCLとICL どちらが向いているか（Candidates）セクション
======================================== -->
<section class="p-ipclCandidates" id="candidates">
  <div class="p-ipclCandidates__inner">
    <div class="p-ipclCandidates__head">
      <h2 class="p-ipclCandidates__title">IPCLとICL<span class="p-ipclCandidates__titleSep"> &mdash; </span><br class="p-ipclCandidates__titleBr">どちらが向いているか</h2>
      <div class="p-ipclCandidates__subRow">
        <span class="p-ipclCandidates__subLine" aria-hidden="true"></span>
        <span class="p-ipclCandidates__subText">Which is Right for You?</span>
      </div>
    </div>
    <p class="p-ipclCandidates__lead">どちらが「正解」というわけではなく、目の状態や重視するポイントによって向き不向きが変わります。</p>
    <div class="p-ipclCandidates__cardArea">
      <div class="p-ipclCandidates__cardWrap">
        <div class="p-ipclCandidates__cards">
          <!-- IPCLカード -->
          <div class="p-ipclCandidates__card p-ipclCandidates__card--ipcl">
            <h3 class="p-ipclCandidates__cardTitle">IPCLが向いている人</h3>
            <ul class="p-ipclCandidates__list">
              <li class="p-ipclCandidates__listItem">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/candidates-check-gold.svg" loading="lazy" alt="" class="p-ipclCandidates__icon" width="20" height="20">
                <p class="p-ipclCandidates__listText">ICLの度数規格では対応できない強度近視・<br class="pc-only">強度乱視・遠視の方</p>
              </li>
              <li class="p-ipclCandidates__listItem">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/candidates-check-gold.svg" loading="lazy" alt="" class="p-ipclCandidates__icon" width="20" height="20">
                <p class="p-ipclCandidates__listText">細かなサイズ調整に関心があり、目に合ったカスタマイズを求める方</p>
              </li>
              <li class="p-ipclCandidates__listItem">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/candidates-check-gold.svg" loading="lazy" alt="" class="p-ipclCandidates__icon" width="20" height="20">
                <p class="p-ipclCandidates__listText">比較的新しいレンズ技術に関心がある方</p>
              </li>
              <li class="p-ipclCandidates__listItem">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/candidates-check-gold.svg" loading="lazy" alt="" class="p-ipclCandidates__icon" width="20" height="20">
                <p class="p-ipclCandidates__listText">ICLよりも費用を抑えて手術を検討したい方</p>
              </li>
            </ul>
            <div class="p-ipclCandidates__cardFooter">
              <p class="p-ipclCandidates__footerText">→ 適応範囲の広さやカスタマイズ性を重視する方向け</p>
            </div>
          </div>
          <!-- ICLカード -->
          <div class="p-ipclCandidates__card p-ipclCandidates__card--icl">
            <h3 class="p-ipclCandidates__cardTitle">ICLが向いている人</h3>
            <ul class="p-ipclCandidates__list">
              <li class="p-ipclCandidates__listItem">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/candidates-check-gray.svg" loading="lazy" alt="" class="p-ipclCandidates__icon" width="20" height="20">
                <p class="p-ipclCandidates__listText">世界的な使用実績・日本国内の長期データを<br class="pc-only">重視したい方</p>
              </li>
              <li class="p-ipclCandidates__listItem">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/candidates-check-gray.svg" loading="lazy" alt="" class="p-ipclCandidates__icon" width="20" height="20">
                <p class="p-ipclCandidates__listText">安心感・実績の豊富さを最優先したい方</p>
              </li>
              <li class="p-ipclCandidates__listItem">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/candidates-check-gray.svg" loading="lazy" alt="" class="p-ipclCandidates__icon" width="20" height="20">
                <p class="p-ipclCandidates__listText">ICLの適応範囲（度数・眼の形状）に該当する方</p>
              </li>
            </ul>
            <div class="p-ipclCandidates__cardFooter">
              <p class="p-ipclCandidates__footerText">→ 実績と信頼性を重視したい方向け</p>
            </div>
          </div>
        </div><!-- /.p-ipclCandidates__cards -->
      </div><!-- /.p-ipclCandidates__cardWrap -->
    </div><!-- /.p-ipclCandidates__cardArea -->
    <p class="p-ipclCandidates__body">どちらが自分に向いているかは、術前の適応検査なしには判断できません。まずは無料適応検査でご自身の目の状態を確認されることをおすすめします。</p>
  </div><!-- /.p-ipclCandidates__inner -->
</section>

<!-- ========================================
  CTA Section
======================================== -->
<div class="p-ipclCta">
  <div class="p-ipclCta__bg" aria-hidden="true">
    <div class="p-ipclCta__bgTexture"></div>
    <div class="p-ipclCta__bgE37">
      <div class="p-ipclCta__bgE37Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e37.svg" loading="lazy" width="397" height="397" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE41">
      <div class="p-ipclCta__bgE41Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e41.svg" loading="lazy" width="238" height="238" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE39L">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
    <div class="p-ipclCta__bgE39R">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
  </div>
  <div class="p-ipclCta__inner">
    <div class="p-ipclCta__titleBlock">
      <p class="p-ipclCta__title"><span>裸眼の生活への第一歩は、</span><span>ご相談から</span></p>
    </div>
    <div class="p-ipclCta__body">
      <p class="p-ipclCta__text">当院ではICL認定医による執刀と、長年研鑽を積んだ視能訓練士による精密な術前検査を実施しています。</p>
      <p class="p-ipclCta__text">一人ひとりの目の状態に合わせた、<br class="sp-only">丁寧な治療を提供します。</p>
    </div>
    <a href="https://ssc11.doctorqube.com/keiyuganka/" class="c-btn" target="_blank" rel="noopener noreferrer">
      <span class="c-btn__label">無料適応検査はこちら</span>
      <div class="c-btn__arrow">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/cta_arrow.svg" loading="lazy" width="59" height="25" alt="">
      </div>
    </a>
  </div>
</div>

<!-- ========================================
  当院のIPCL手術の特徴
======================================== -->
<section class="p-ipclClinicFeatures" id="clinic-features">
  <!-- 背景SVG装飾 -->
  <div class="p-ipclClinicFeatures__svgBg" aria-hidden="true">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-svg-bg-pc.webp" loading="lazy" width="1440" height="1902"
         alt="" class="p-ipclClinicFeatures__svgBgImg p-ipclClinicFeatures__svgBgImg--pc">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-svg-bg-sp.webp" loading="lazy" width="844" height="3612"
         alt="" class="p-ipclClinicFeatures__svgBgImg p-ipclClinicFeatures__svgBgImg--sp">
  </div>
  <div class="p-ipclClinicFeatures__inner">
    <!-- 見出し -->
    <div class="p-ipclClinicFeatures__head">
      <h2 class="p-ipclClinicFeatures__title">当院のIPCL手術の特徴</h2>
      <div class="p-ipclClinicFeatures__subRow">
        <span class="p-ipclClinicFeatures__subLine" aria-hidden="true"></span>
        <span class="p-ipclClinicFeatures__subText">Our Clinic</span>
        <span class="p-ipclClinicFeatures__subLine" aria-hidden="true"></span>
      </div>
    </div>
    <!-- リード文 -->
    <p class="p-ipclClinicFeatures__lead">最大のメリットは、角膜を削るレーシックとは異なり、万が一の際にはレンズを取り出して元の状態に戻せる「<span class="p-ipclClinicFeatures__underline">可逆性</span>」にあります。また、従来のICLと異なり、近視・遠視・乱視だけでなく、40代以降の悩みである「老眼」の矯正にも対応している。</p>
    <!-- Feature一覧 -->
    <div class="p-ipclClinicFeatures__list">
      <!-- Feature 1: ICL認定医（写真右 / ボタンあり） -->
      <div class="p-ipclClinicFeatures__item p-ipclClinicFeatures__item--tall">
        <figure class="p-ipclClinicFeatures__photo p-ipclClinicFeatures__photo--right">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo1.webp" loading="lazy" width="888" height="590"
               alt="手術顕微鏡を覗き込む医師の様子" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--pc">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo1-sp.webp" loading="lazy" width="750" height="548"
               alt="手術顕微鏡を覗き込む医師の様子" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--sp">
        </figure>
        <div class="p-ipclClinicFeatures__card p-ipclClinicFeatures__card--left">
          <h3 class="p-ipclClinicFeatures__cardTitle">屈折矯正手術の実績豊富なICL認定医による執刀</h3>
          <div class="p-ipclClinicFeatures__cardBody">
            <p>当院の執刀医・小林一博は、ICLをはじめとする眼内レンズ手術の経験が豊富な医師です。IPCLは、レンズの選び方や挿入の正確さが大切な手術です。</p>
            <p>お一人おひとりの目の状態に合わせた、最適な治療を提供します。</p>
          </div>
          <div class="p-ipclClinicFeatures__cardBtnWrap">
            <a href="#specialist" class="p-ipclClinicFeatures__btn">
              <span class="p-ipclClinicFeatures__btnText">執刀医について</span>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-arrow.webp" loading="lazy" width="50" height="70"
                   alt="" class="p-ipclClinicFeatures__btnArrow" aria-hidden="true">
            </a>
          </div>
        </div>
      </div>
      <!-- Feature 2: 視能訓練士（写真左） -->
      <div class="p-ipclClinicFeatures__item">
        <figure class="p-ipclClinicFeatures__photo p-ipclClinicFeatures__photo--left">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo2.webp" loading="lazy" width="888" height="590"
               alt="視能訓練士が患者の視力検査を行う様子" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--pc">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo2-sp.webp" loading="lazy" width="750" height="420"
               alt="視能訓練士が患者の視力検査を行う様子" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--sp">
        </figure>
        <div class="p-ipclClinicFeatures__card p-ipclClinicFeatures__card--right">
          <h3 class="p-ipclClinicFeatures__cardTitle">屈折矯正技術に精通した視能訓練士による精密な検査制度</h3>
          <div class="p-ipclClinicFeatures__cardBody">
            <p>IPCL手術では、術前の精密検査がとても重要です。</p>
            <p>当院では、屈折矯正に精通した視能訓練士が術前・術後の検査を丁寧に担当します。</p>
            <p>患者さまの目の状態を正確に把握したうえで、医師が最適なレンズ設計を判断します。</p>
          </div>
        </div>
      </div>
      <!-- Feature 3: ダークカード（視能訓練士の重要性） -->
      <div class="p-ipclClinicFeatures__item p-ipclClinicFeatures__item--dark">
        <div class="p-ipclClinicFeatures__darkCard">
          <div class="p-ipclClinicFeatures__darkOverlay" aria-hidden="true"></div>
          <h3 class="p-ipclClinicFeatures__darkTitle">視能訓練士の重要性</h3>
          <p class="p-ipclClinicFeatures__darkBody">IPCLをはじめとする屈折矯正手術では、検査精度が術後の結果に大きく関わります。当院では、長年研鑽を積んできたベテランスタッフが中心となり、角膜形状・前房深度・眼軸長など多項目にわたる精密な術前検査を実施しています。<br>検査で得られたデータは、レンズ選定から手術計画のすべてに影響します。だからこそ、「誰が検査するか」が重要なのです。豊富な経験を持つスタッフが一人ひとりの目と向き合うことで、より安全で精度の高い手術結果につなげています。</p>
          <span class="p-ipclClinicFeatures__darkBorder" aria-hidden="true"></span>
          <div class="p-ipclClinicFeatures__darkEllipse" aria-hidden="true">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-ellipse.webp" loading="lazy" width="272" height="272"
                 alt="">
          </div>
        </div>
      </div>
      <!-- Feature 4: 感染症対策（写真右） -->
      <div class="p-ipclClinicFeatures__item">
        <figure class="p-ipclClinicFeatures__photo p-ipclClinicFeatures__photo--right">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo4.webp" loading="lazy" width="888" height="590"
               alt="眼科手術に使用する医療機器が設置された手術室" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--pc">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo4-sp.webp" loading="lazy" width="750" height="420"
               alt="眼科手術に使用する医療機器が設置された手術室" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--sp">
        </figure>
        <div class="p-ipclClinicFeatures__card p-ipclClinicFeatures__card--left">
          <h3 class="p-ipclClinicFeatures__cardTitle">感染症や合併症を減らす滅菌・感染症対策の徹底</h3>
          <div class="p-ipclClinicFeatures__cardBody">
            <p>眼内に直接レンズを挿入する手術だからこそ、感染症対策は大切です。</p>
            <p>当院では、清潔な手術環境づくりと滅菌管理を徹底しています。</p>
          </div>
        </div>
      </div>
      <!-- Feature 5: サポート体制（写真左 / カード幅760px） -->
      <div class="p-ipclClinicFeatures__item">
        <figure class="p-ipclClinicFeatures__photo p-ipclClinicFeatures__photo--left">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo5.webp" loading="lazy" width="888" height="590"
               alt="院内で並ぶ眼科クリニックの医師とスタッフ" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--pc">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo5-sp.webp" loading="lazy" width="750" height="420"
               alt="院内で並ぶ眼科クリニックの医師とスタッフ" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--sp">
        </figure>
        <div class="p-ipclClinicFeatures__card p-ipclClinicFeatures__card--right p-ipclClinicFeatures__card--narrow">
          <h3 class="p-ipclClinicFeatures__cardTitle">地域に根ざした総合眼科ならではの安心のサポート体制</h3>
          <div class="p-ipclClinicFeatures__cardBody">
            <p>当院は手術専門クリニックではなく、一般眼科診療も行っています。</p>
            <p>術後の定期検診はもちろん、術後だけでなく、将来の目の変化についても継続して診ることができます。</p>
          </div>
        </div>
      </div>
      <!-- Feature 6: カウンセリング（写真右） -->
      <div class="p-ipclClinicFeatures__item">
        <figure class="p-ipclClinicFeatures__photo p-ipclClinicFeatures__photo--right">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo6.webp" loading="lazy" width="888" height="590"
               alt="患者に眼内レンズを見せながら説明を行う医師" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--pc">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/clinic-features-photo6-sp.webp" loading="lazy" width="750" height="420"
               alt="患者に眼内レンズを見せながら説明を行う医師" class="p-ipclClinicFeatures__photoImg p-ipclClinicFeatures__photoImg--sp">
        </figure>
        <div class="p-ipclClinicFeatures__card p-ipclClinicFeatures__card--left">
          <h3 class="p-ipclClinicFeatures__cardTitle">迷いを取り除く誠実なカウンセリング</h3>
          <div class="p-ipclClinicFeatures__cardBody">
            <p>「IPCL手術を受けてほしい」という気持ちよりも、「あなたに本当に合った選択肢を一緒に考えたい」という姿勢を大切にしています。適応検査の結果、ICLや他の矯正方法のほうが向いていると判断した場合は、正直にその旨をお伝えします。</p>
            <p>利益優先ではなく、患者さまにとって最善の治療をご提案することが当院のカウンセリングの軸です。</p>
          </div>
        </div>
      </div>
    </div><!-- /.p-ipclClinicFeatures__list -->
  </div><!-- /.p-ipclClinicFeatures__inner -->
</section>

<!-- ========================================
  執刀医（Specialist）セクション
======================================== -->
<section class="p-ipclSpecialist" id="specialist">
  <div class="p-ipclSpecialist__bg" aria-hidden="true"></div>
  <div class="p-ipclSpecialist__inner">
    <!-- 見出しエリア -->
    <div class="p-ipclSpecialist__head">
      <div class="p-ipclSpecialist__headText">
        <p class="p-ipclSpecialist__headLabel">執刀医</p>
        <h2 class="p-ipclSpecialist__headTitle">ICL手術のスペシャリストが担当</h2>
      </div>
      <div class="p-ipclSpecialist__headDeco" aria-hidden="true">
        <span class="p-ipclSpecialist__headLine"></span>
        <span class="p-ipclSpecialist__headEn">Specialist</span>
        <span class="p-ipclSpecialist__headLine"></span>
      </div>
    </div>
    <!-- メインコンテンツ -->
    <div class="p-ipclSpecialist__body">
      <!-- SP専用: 上部写真コンテナ -->
      <div class="p-ipclSpecialist__photoWrap">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/specialist-photo-main.webp" loading="lazy" width="706" height="910"
             alt="小橋 英長の顔写真" class="p-ipclSpecialist__photoMain">
      </div>
      <!-- テキスト情報（PC: 左カラム706px, SP: 縦積み） -->
      <div class="p-ipclSpecialist__info">
        <!-- 医師名・プロフィール -->
        <div class="p-ipclSpecialist__profile">
          <div class="p-ipclSpecialist__nameRow">
            <span class="p-ipclSpecialist__nameJa">小橋 英長</span>
            <span class="p-ipclSpecialist__nameEn">Kobashi Hidenaga</span>
          </div>
          <span class="p-ipclSpecialist__nameDivider" aria-hidden="true"></span>
          <p class="p-ipclSpecialist__bio">ICL手術をはじめ、角膜疾患や近視治療を専門とする眼科専門医です。屈折矯正手術に豊富な経験を有し、患者さま一人ひとりに合わせた最適な治療を行っています。</p>
        </div>
        <!-- SP専用: 認定証サブ写真 -->
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/specialist-photo-sub.webp" loading="lazy" width="708" height="502"
             alt="" class="p-ipclSpecialist__photoSubSp">
        <!-- ICL認定医バッジ -->
        <a href="https://staaricl.jp/" class="p-ipclSpecialist__badge" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/specialist-badge.webp" loading="lazy"
               alt="STAAR SURGICAL EVO ICL 認定医" class="p-ipclSpecialist__badgeIcon" width="64" height="64">
          <div class="p-ipclSpecialist__badgeInfo">
            <p class="p-ipclSpecialist__badgeTitle">STAAR SURGICAL / EVO ICL 認定医</p>
            <p class="p-ipclSpecialist__badgeDate">Dr. Hidenaga Kobashi — 2015/09/26</p>
          </div>
        </a>
        <!-- 経歴・資格・所属学会 -->
        <div class="p-ipclSpecialist__career">
          <!-- 経歴ボックス -->
          <div class="p-ipclSpecialist__careerBox">
            <div class="p-ipclSpecialist__boxHead">
              <h3 class="p-ipclSpecialist__boxTitle">経歴</h3>
            </div>
            <div class="p-ipclSpecialist__careerList">
              <div class="p-ipclSpecialist__careerCol">
                <div class="p-ipclSpecialist__careerItem">
                  <span class="p-ipclSpecialist__careerYear">2006年</span>
                  <span class="p-ipclSpecialist__careerDesc">杏林大学医学部卒業</span>
                </div>
                <div class="p-ipclSpecialist__careerItem">
                  <span class="p-ipclSpecialist__careerYear">2006年</span>
                  <span class="p-ipclSpecialist__careerDesc">杏林大学病院 初期研修</span>
                </div>
                <div class="p-ipclSpecialist__careerItem">
                  <span class="p-ipclSpecialist__careerYear">2008年</span>
                  <span class="p-ipclSpecialist__careerDesc">北里大学眼科学教室</span>
                </div>
              </div>
              <div class="p-ipclSpecialist__careerCol">
                <div class="p-ipclSpecialist__careerItem">
                  <span class="p-ipclSpecialist__careerYear">2013年</span>
                  <span class="p-ipclSpecialist__careerDesc">北里大学眼科 助教</span>
                </div>
                <div class="p-ipclSpecialist__careerItem">
                  <span class="p-ipclSpecialist__careerYear">2016年</span>
                  <span class="p-ipclSpecialist__careerDesc">ハーバード大学<br><span>スケペンス眼研究所 留学</span></span>
                </div>
                <div class="p-ipclSpecialist__careerItem">
                  <span class="p-ipclSpecialist__careerYear">2017年</span>
                  <span class="p-ipclSpecialist__careerDesc">慶應義塾大学<br><span>眼科学教室特任講師</span></span>
                </div>
              </div>
              <div class="p-ipclSpecialist__careerCol">
                <div class="p-ipclSpecialist__careerItem">
                  <span class="p-ipclSpecialist__careerYear">2025年</span>
                  <span class="p-ipclSpecialist__careerDesc">医療法人新光会 入職<br><span>日本大学医学部視覚科学系</span><br><span>眼科学分野 兼任講師</span></span>
                </div>
              </div>
            </div><!-- /.p-ipclSpecialist__careerList -->
          </div><!-- /.p-ipclSpecialist__careerBox -->
          <!-- 資格・所属学会 -->
          <div class="p-ipclSpecialist__qualRow">
            <div class="p-ipclSpecialist__qualBox">
              <div class="p-ipclSpecialist__boxHead">
                <h3 class="p-ipclSpecialist__boxTitle">資格</h3>
              </div>
              <ul class="p-ipclSpecialist__qualList">
                <li class="p-ipclSpecialist__qualItem">日本眼科学会専門医</li>
                <li class="p-ipclSpecialist__qualItem">眼内コンタクトレンズ(ICL)認定医</li>
              </ul>
            </div>
            <div class="p-ipclSpecialist__qualBox">
              <div class="p-ipclSpecialist__boxHead">
                <h3 class="p-ipclSpecialist__boxTitle">所属学会</h3>
              </div>
              <ul class="p-ipclSpecialist__qualList">
                <li class="p-ipclSpecialist__qualItem"><a href="https://www.nichigan.or.jp/" target="_blank" rel="noopener noreferrer">日本眼科学会</a></li>
                <li class="p-ipclSpecialist__qualItem"><a href="https://www.jrvs.jp/" target="_blank" rel="noopener noreferrer">日本網膜硝子体学会</a></li>
                <li class="p-ipclSpecialist__qualItem"><a href="https://www.jsos.jp/" target="_blank" rel="noopener noreferrer">日本眼科手術学会</a></li>
                <li class="p-ipclSpecialist__qualItem"><a href="https://www.jscrs.org/" target="_blank" rel="noopener noreferrer">日本眼内レンズ屈折手術学会</a></li>
                <li class="p-ipclSpecialist__qualItem"><a href="https://cornea.gr.jp/" target="_blank" rel="noopener noreferrer">日本角膜学会</a></li>
                <li class="p-ipclSpecialist__qualItem"><a href="https://www.ryokunaisho.jp/" target="_blank" rel="noopener noreferrer">日本緑内障学会</a></li>
              </ul>
            </div>
          </div><!-- /.p-ipclSpecialist__qualRow -->
        </div><!-- /.p-ipclSpecialist__career -->
      </div><!-- /.p-ipclSpecialist__info -->
      <!-- PC専用: 写真エリア（absolute配置） -->
      <div class="p-ipclSpecialist__photoArea" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/specialist-photo-main.webp" loading="lazy" width="706" height="910"
             alt="小橋 英長の顔写真" class="p-ipclSpecialist__photoMainPc">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/specialist-photo-sub.webp" loading="lazy" width="708" height="502"
             alt="小橋 英長の名刺" class="p-ipclSpecialist__photoSubPc">
      </div>
    </div><!-- /.p-ipclSpecialist__body -->
  </div><!-- /.p-ipclSpecialist__inner -->
</section>

<!-- ========================================
  CTA Section
======================================== -->
<div class="p-ipclCta">
  <div class="p-ipclCta__bg" aria-hidden="true">
    <div class="p-ipclCta__bgTexture"></div>
    <div class="p-ipclCta__bgE37">
      <div class="p-ipclCta__bgE37Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e37.svg" loading="lazy" width="397" height="397" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE41">
      <div class="p-ipclCta__bgE41Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e41.svg" loading="lazy" width="238" height="238" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE39L">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
    <div class="p-ipclCta__bgE39R">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
  </div>
  <div class="p-ipclCta__inner">
    <div class="p-ipclCta__titleBlock">
      <p class="p-ipclCta__title"><span>裸眼の生活への第一歩は、</span><span>ご相談から</span></p>
    </div>
    <div class="p-ipclCta__body">
      <p class="p-ipclCta__text">当院ではICL認定医による執刀と、長年研鑽を積んだ視能訓練士による精密な術前検査を実施しています。</p>
      <p class="p-ipclCta__text">一人ひとりの目の状態に合わせた、<br class="sp-only">丁寧な治療を提供します。</p>
    </div>
    <a href="https://ssc11.doctorqube.com/keiyuganka/" class="c-btn" target="_blank" rel="noopener noreferrer">
      <span class="c-btn__label">無料適応検査はこちら</span>
      <div class="c-btn__arrow">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/cta_arrow.svg" loading="lazy" width="59" height="25" alt="">
      </div>
    </a>
  </div>
</div>

<!-- ========================================
  IPCLの治療の流れ（Flow）
======================================== -->
<section class="p-ipclFlow" id="flow">
  <div class="p-ipclFlow__inner">
    <!-- 見出し -->
    <div class="p-ipclFlow__head">
      <h2 class="p-ipclFlow__title">IPCLの治療の流れ</h2>
      <div class="p-ipclFlow__subRow" aria-hidden="true">
        <span class="p-ipclFlow__subLine"></span>
        <span class="p-ipclFlow__subText">Treatment Flow</span>
      </div>
    </div>
    <!-- リードテキスト -->
    <div class="p-ipclFlow__lead">
      <p class="p-ipclFlow__leadText">IPCL手術は、適応検査から術後検診まで、複数のステップを経て進みます。</p>
      <p class="p-ipclFlow__leadText">「いきなり手術」ではなく、検査・カウンセリング・準備をしっかり重ねてから手術を行うため、初めての方も安心して進めていただける流れになっています。</p>
    </div>
  </div><!-- /.p-ipclFlow__inner -->
  <!-- スライダーエリア（セクション全幅） -->
  <div class="p-ipclFlow__swiperWrap">
      <!-- 前後スライドの見切れ表示のためのオーバーフロー制御ラッパー -->
      <div class="p-ipclFlow__swiperOuter">
        <div class="swiper p-ipclFlow__swiper">
          <div class="swiper-wrapper">
            <!-- Step 1（初期アクティブ） -->
            <div class="swiper-slide p-ipclFlow__slide p-ipclFlow__slide--active">
              <div class="p-ipclFlow__card p-ipclFlow__card--active">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge p-ipclFlow__stepBadge--active">
                    <span class="p-ipclFlow__stepNum">1</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">無料適応検査のご予約</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>WEB予約フォームまたはお電話で、いつでも簡単にご予約いただけます。</p>
                  <p>「自分はIPCLに向いているのか知りたい」という気持ちだけで大丈夫です。適応検査は無料で受けられますので、まずは気軽にご予約ください。</p>
                  <p>コンタクトレンズをご使用の方は、ご予約時にその旨をお知らせください。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 2 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">2</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">適応検査の実施</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>視力・眼圧・角膜の形状・前房の深さなど、複数の項目を丁寧に検査します。担当するのは専門的なトレーニングを受けた視能訓練士です。</p>
                  <p>この検査データがレンズの種類やサイズを決める重要な根拠になるため、精度の高い計測を心がけています。</p>
                  <p>所要時間は1〜2時間程度です。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 3 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">3</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">医師による診察</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>検査結果をもとに、医師がお一人ずつ丁寧にご説明します。</p>
                  <p>IPCLが適しているか、ICLとどちらが向いているか、レンズの種類や度数の方針など、その方の目の状態に合わせた最適なプランをご提案します。疑問や不安はこの場で遠慮なくお聞かせください。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 4 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">4</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">IPCLレンズの作成</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>診察で決定したデータをもとに、あなたの目に合わせたレンズを発注します。</p>
                  <p>レンズはオーダーメイドのため、お手元に届くまで数週間〜数ヶ月ほどかかります。</p>
                  <p>レンズの到着後、改めて手術日をご連絡します。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 5 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">5</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">手術前の準備</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>感染予防のため、手術3日前から点眼薬を1日4回行っていただきます。点眼を忘れずに続けることが、術後の感染リスクを下げる大切な準備です。</p>
                  <p>また、コンタクトレンズは手術当日の使用ができません。眼鏡での来院をお願いします。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 6 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">6</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">手術当日に再診察</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>手術の前に、医師が目の状態を再度確認します。前回の検査から変化がないかをチェックし、問題がなければそのまま手術へ進みます。</p>
                  <p>緊張される方も多いですが、スタッフが丁寧にご案内しますのでご安心ください。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 7 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">7</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">手術前の点眼麻酔</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>手術開始の約30分前から、点眼麻酔を数回に分けて行います。注射ではなく目薬タイプの麻酔です。複数回に分けて点眼することで、眼の表面にしっかりと麻酔を効かせます。</p>
                  <p>「痛いのでは？」と心配される方も多いですが、ほとんどの方が「思っていたより楽だった」とおっしゃいます。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 8 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">8</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">手術の実施</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>点眼麻酔・散瞳剤を点眼した後、角膜と強膜の境目を数ミリだけ切開し、折り畳んだ状態のIPCLレンズを挿入します。レンズの位置を調整して虹彩と水晶体の間に固定したら、点眼で瞳孔を元の大きさに戻して完了です。</p>
                  <p>手術時間は片眼あたり平均15分程度です。縫合は不要なため、術後の回復も比較的スムーズです。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 9 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">9</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">術後</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>手術後は院内で30分ほど安静にお過ごしいただきます。まぶしさや軽い異物感を感じることがありますが、時間とともに落ち着いていきます。</p>
                  <p>入院は不要で、当日中にお帰りいただけます。ただし、術後は視力が安定するまで車の運転ができません。必ずお迎えか、公共交通機関でお越しください。</p>
                </div>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-arrow.svg" loading="lazy" alt="" class="p-ipclFlow__slideArrow" aria-hidden="true">
            </div>
            <!-- Step 10 -->
            <div class="swiper-slide p-ipclFlow__slide">
              <div class="p-ipclFlow__card">
                <div class="p-ipclFlow__cardHead">
                  <div class="p-ipclFlow__stepBadge">
                    <span class="p-ipclFlow__stepNum">10</span>
                  </div>
                  <h3 class="p-ipclFlow__cardTitle">術後検診</h3>
                </div>
                <div class="p-ipclFlow__cardText">
                  <p>術後は翌日・1週間後・1ヶ月後・3ヶ月後・6ヶ月後・1年後を目安に定期検診を行います。視力・眼圧・レンズの位置・角膜の状態などを継続して確認します。</p>
                  <p>気になる症状があれば検診の予定以外でもご連絡ください。当院は一般眼科としても診療を続けているため、数年後・数十年後も同じクリニックで目の健康を見守ることができます。</p>
                </div>
              </div>
            </div>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper -->
        <button type="button" class="p-ipclFlow__navBtn p-ipclFlow__navBtn--prev p-ipclFlow__navBtn--large" aria-label="前のスライドへ">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-slider-prev.svg" loading="lazy" alt="" width="70" height="70">
        </button>
        <button type="button" class="p-ipclFlow__navBtn p-ipclFlow__navBtn--next p-ipclFlow__navBtn--large" aria-label="次のスライドへ">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-slider-next.svg" loading="lazy" alt="" width="70" height="70">
        </button>
      </div><!-- /.p-ipclFlow__swiperOuter -->
      <!-- ページネーション（カスタム番号ドット） -->
      <div class="p-ipclFlow__paginationWrap">
        <button type="button" class="p-ipclFlow__navBtn p-ipclFlow__navBtn--prev p-ipclFlow__navBtn--pagination" aria-label="前のスライドへ">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-pagination-next.svg" loading="lazy" alt="" width="18" height="9">
        </button>
        <div class="p-ipclFlow__pagination">
          <button type="button" class="p-ipclFlow__paginationBtn is-active" aria-label="1枚目へ">1</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="2枚目へ">2</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="3枚目へ">3</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="4枚目へ">4</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="5枚目へ">5</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="6枚目へ">6</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="7枚目へ">7</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="8枚目へ">8</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="9枚目へ">9</button>
          <button type="button" class="p-ipclFlow__paginationBtn" aria-label="10枚目へ">10</button>
        </div>
        <button type="button" class="p-ipclFlow__navBtn p-ipclFlow__navBtn--next p-ipclFlow__navBtn--pagination" aria-label="次のスライドへ">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/flow-pagination-prev.svg" loading="lazy" alt="" width="18" height="9">
        </button>
      </div>
  </div><!-- /.p-ipclFlow__swiperWrap -->
</section>

<!-- ========================================
  術後における諸注意（Notes）セクション
======================================== -->
<section class="p-ipclNotes" id="notes">
  <!-- 背景装飾楕円 -->
  <div class="p-ipclNotes__bgEllipseSm p-ipclNotes__bgEllipseSm--tl" aria-hidden="true">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/notes-ellipse-sm.svg" loading="lazy" alt="" width="290" height="290">
  </div>
  <div class="p-ipclNotes__bgEllipseLg p-ipclNotes__bgEllipseLg--l" aria-hidden="true">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/notes-ellipse-lg.svg" loading="lazy" alt="" width="564" height="564">
  </div>
  <div class="p-ipclNotes__inner">
    <!-- 見出し -->
    <div class="p-ipclNotes__head">
      <h2 class="p-ipclNotes__title">IPCL手術後の生活・<br class="sp-only">注意点について</h2>
      <div class="p-ipclNotes__subRow" aria-hidden="true">
        <span class="p-ipclNotes__subLine"></span>
        <span class="p-ipclNotes__subText">Notes</span>
        <span class="p-ipclNotes__subLine"></span>
      </div>
    </div>
    <!-- リードテキスト -->
    <p class="p-ipclNotes__lead">手術後の日常生活については、<br class="sp-only">以下を参考にしてください。</p>
    <!-- テーブルラッパー -->
    <div class="p-ipclNotes__tableWrap">
      <!-- SP専用: スクロール案内バナー -->
      <div class="p-ipclNotes__scrollBanner" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/notes-scroll-icon.svg" loading="lazy" alt="" class="p-ipclNotes__scrollIcon" width="34" height="24">
        <span class="p-ipclNotes__scrollText">スクロールできます</span>
      </div>
      <!-- 横スクロールコンテナ -->
      <div class="p-ipclNotes__tableScroll">
        <div class="p-ipclNotes__tableInner">
          <table class="p-ipclNotes__table">
            <thead>
              <tr>
                <th class="p-ipclNotes__th p-ipclNotes__th--item" scope="col">項目</th>
                <th class="p-ipclNotes__th" scope="col">目安</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-ipclNotes__tdItem">入浴・シャワー</td>
                <td class="p-ipclNotes__tdGuide">術翌日から(顔への水かかりに注意)</td>
              </tr>
              <tr>
                <td class="p-ipclNotes__tdItem">洗顔・洗髪・メイク</td>
                <td class="p-ipclNotes__tdGuide">術後二日目から</td>
              </tr>
              <tr>
                <td class="p-ipclNotes__tdItem">デスクワーク</td>
                <td class="p-ipclNotes__tdGuide">術翌日〜可能</td>
              </tr>
              <tr>
                <td class="p-ipclNotes__tdItem">運動(軽い運動）</td>
                <td class="p-ipclNotes__tdGuide">術後一週間から</td>
              </tr>
              <tr>
                <td class="p-ipclNotes__tdItem">車の運転</td>
                <td class="p-ipclNotes__tdGuide">視力が安定したことを医師が確認してから</td>
              </tr>
              <tr>
                <td class="p-ipclNotes__tdItem">水泳・プール・海</td>
                <td class="p-ipclNotes__tdGuide">術後一か月から</td>
              </tr>
              <tr>
                <td class="p-ipclNotes__tdItem">コンタクトレンズ</td>
                <td class="p-ipclNotes__tdGuide">手術後は不要</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div><!-- /.p-ipclNotes__tableScroll -->
    </div><!-- /.p-ipclNotes__tableWrap -->
  </div><!-- /.p-ipclNotes__inner -->
</section>

<!-- ========================================
  IPCLの費用（Fees）セクション
======================================== -->
<section class="p-ipclFees" id="fees">
  <!-- 背景メッシュ -->
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-bg-mesh.webp" loading="lazy" alt="" class="p-ipclFees__bgMesh" aria-hidden="true" width="1592" height="1588">
  <div class="p-ipclFees__inner">
    <!-- 見出し -->
    <div class="p-ipclFees__head">
      <h2 class="p-ipclFees__title">IPCLの費用</h2>
      <div class="p-ipclFees__subRow" aria-hidden="true">
        <span class="p-ipclFees__subLine"></span>
        <span class="p-ipclFees__subText">Comparison</span>
        <span class="p-ipclFees__subLine"></span>
      </div>
    </div>
    <!-- リードテキスト -->
    <p class="p-ipclFees__lead">すべて片眼あたりの料金です（税抜）</p>
    <!-- 料金テーブルエリア -->
    <div class="p-ipclFees__priceArea">
      <table class="p-ipclFees__priceTable">
        <thead class="p-ipclFees__priceThead">
          <tr>
            <th class="p-ipclFees__priceTh p-ipclFees__priceTh--label" scope="col">種別</th>
            <th class="p-ipclFees__priceTh" scope="col">料金（片眼）</th>
          </tr>
        </thead>
        <tbody class="p-ipclFees__priceTbody">
          <tr class="p-ipclFees__priceTr">
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--label">
              <span class="p-ipclFees__priceTag p-ipclFees__priceTag--none">乱視なし</span>
              <span class="p-ipclFees__priceDegree pc-only">乱視なし（−5.50D以下）</span>
              <span class="p-ipclFees__priceDegree sp-only">−5.50D以下</span>
            </td>
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--amount">¥230,000<span class="p-ipclFees__tax">(税込：¥253,000)</span></td>
          </tr>
          <tr class="p-ipclFees__priceTr">
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--label">
              <span class="p-ipclFees__priceTag p-ipclFees__priceTag--none">乱視なし</span>
              <span class="p-ipclFees__priceDegree pc-only">乱視なし（−6.00D以上）</span>
              <span class="p-ipclFees__priceDegree sp-only">−6.00D以上</span>
            </td>
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--amount">¥250,000<span class="p-ipclFees__tax">(税込：¥275,000)</span></td>
          </tr>
          <tr class="p-ipclFees__priceTr">
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--label">
              <span class="p-ipclFees__priceTag p-ipclFees__priceTag--astig">乱視あり</span>
              <span class="p-ipclFees__priceDegree pc-only">乱視あり（−5.50D以下）</span>
              <span class="p-ipclFees__priceDegree sp-only">−5.50D以下</span>
            </td>
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--amount">¥275,000<span class="p-ipclFees__tax">(税込：¥302,500)</span></td>
          </tr>
          <tr class="p-ipclFees__priceTr">
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--label">
              <span class="p-ipclFees__priceTag p-ipclFees__priceTag--astig">乱視あり</span>
              <span class="p-ipclFees__priceDegree pc-only">乱視あり（−6.00D以上）</span>
              <span class="p-ipclFees__priceDegree sp-only">−6.00D以上</span>
            </td>
            <td class="p-ipclFees__priceTd p-ipclFees__priceTd--amount">¥295,000<span class="p-ipclFees__tax">(税込：¥324,500)</span></td>
          </tr>
        </tbody>
      </table>
      <p class="p-ipclFees__priceNote">※ 表示価格はすべて税抜です</p>
    </div><!-- /.p-ipclFees__priceArea -->
    <!-- 安心保証バナー -->
    <div class="p-ipclFees__guarantee">
      <!-- 背景装飾 -->
      <div class="p-ipclFees__guaranteeBgE37" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e37.svg" loading="lazy" alt="" width="397" height="397">
      </div>
      <div class="p-ipclFees__guaranteeBgE39L" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" alt="" width="200" height="200">
      </div>
      <!-- 見出し -->
      <div class="p-ipclFees__guaranteeHead">
        <h3 class="p-ipclFees__guaranteeTitle">術後1年間の安心保証</h3>
        <p class="p-ipclFees__guaranteeSub">手術後も責任を持ってサポートします</p>
      </div>
      <!-- 保証カード3枚 -->
      <ul class="p-ipclFees__guaranteeCards">
        <li class="p-ipclFees__guaranteeCard">
          <p class="p-ipclFees__guaranteeYear">1年間</p>
          <p class="p-ipclFees__guaranteeService">術後の定期検診</p>
          <p class="p-ipclFees__guaranteeFree">無料</p>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-guarantee-icon-1.svg" loading="lazy" alt="" class="p-ipclFees__guaranteeIcon" aria-hidden="true" width="64" height="64">
        </li>
        <li class="p-ipclFees__guaranteeCard">
          <p class="p-ipclFees__guaranteeYear">1年間</p>
          <p class="p-ipclFees__guaranteeService">レンズの入れ替え</p>
          <p class="p-ipclFees__guaranteeFree">無料</p>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-guarantee-icon-2.svg" loading="lazy" alt="" class="p-ipclFees__guaranteeIcon" aria-hidden="true" width="64" height="64">
        </li>
        <li class="p-ipclFees__guaranteeCard">
          <p class="p-ipclFees__guaranteeYear">1年間</p>
          <p class="p-ipclFees__guaranteeService">レンズの位置修正</p>
          <p class="p-ipclFees__guaranteeFree">無料</p>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-guarantee-icon-3.svg" loading="lazy" alt="" class="p-ipclFees__guaranteeIcon" aria-hidden="true" width="64" height="64">
        </li>
      </ul><!-- /.p-ipclFees__guaranteeCards -->
    </div><!-- /.p-ipclFees__guarantee -->
    <!-- 支払い方法 -->
    <div class="p-ipclFees__payment">
      <h3 class="p-ipclFees__paymentLabel">支払い方法</h3>
      <ul class="p-ipclFees__paymentCards">
        <li class="p-ipclFees__paymentCard">
          <div class="p-ipclFees__paymentIconWrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-payment-icon-1.svg" loading="lazy" alt="" class="p-ipclFees__paymentIcon" width="16" height="16">
          </div>
          <p class="p-ipclFees__paymentText">現金</p>
        </li>
        <li class="p-ipclFees__paymentCard">
          <div class="p-ipclFees__paymentIconWrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-payment-icon-2.svg" loading="lazy" alt="" class="p-ipclFees__paymentIcon" width="16" height="16">
          </div>
          <p class="p-ipclFees__paymentText">各種クレジットカード</p>
        </li>
        <li class="p-ipclFees__paymentCard">
          <div class="p-ipclFees__paymentIconWrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-payment-icon-3.svg" loading="lazy" alt="" class="p-ipclFees__paymentIcon" width="16" height="16">
          </div>
          <p class="p-ipclFees__paymentText">医療ローン</p>
        </li>
      </ul><!-- /.p-ipclFees__paymentCards -->
    </div><!-- /.p-ipclFees__payment -->
  </div><!-- /.p-ipclFees__inner -->
</section>

<!-- ========================================
  医療ローンについて（Loan）セクション
======================================== -->
<!-- <section class="p-ipclLoan">
  <div class="p-ipclLoan__inner">
    <div class="p-ipclLoan__head">
      <h2 class="p-ipclLoan__title">医療ローンについて</h2>
      <div class="p-ipclLoan__subRow" aria-hidden="true">
        <span class="p-ipclLoan__subLine"></span>
        <span class="p-ipclLoan__subText">Medical Loan</span>
      </div>
    </div>
    <p class="p-ipclLoan__lead">当院では、患者様の経済的なご負担を軽減するため、各種医療ローンをご利用いただけます。頭金不要・月々の分割払いで、費用のことをご安心してご検討いただけます。</p>
    <ul class="p-ipclLoan__cards">
      <li class="p-ipclLoan__card">
        <p class="p-ipclLoan__cardLabel">対応ローン会社</p>
        <div class="p-ipclLoan__cardNumber">
          <span class="p-ipclLoan__cardValue">3</span>
          <span class="p-ipclLoan__cardUnit">社</span>
        </div>
        <p class="p-ipclLoan__cardNote">（オリコ / ジャックス / アプラス）</p>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-payment-icon-4.svg" loading="lazy" alt="" class="p-ipclLoan__cardBgIcon" aria-hidden="true" width="160" height="160">
      </li>
      <li class="p-ipclLoan__card">
        <p class="p-ipclLoan__cardLabel">最大分割回数</p>
        <div class="p-ipclLoan__cardNumber">
          <span class="p-ipclLoan__cardValue">13</span>
          <span class="p-ipclLoan__cardUnit">回</span>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-payment-icon-5.svg" loading="lazy" alt="" class="p-ipclLoan__cardBgIcon" aria-hidden="true" width="160" height="160">
      </li>
      <li class="p-ipclLoan__card">
        <p class="p-ipclLoan__cardLabel">金利</p>
        <div class="p-ipclLoan__cardNumber">
          <span class="p-ipclLoan__cardValue">1.3</span>
          <span class="p-ipclLoan__cardUnit">%</span>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-payment-icon-6.svg" loading="lazy" alt="" class="p-ipclLoan__cardBgIcon" aria-hidden="true" width="160" height="160">
      </li>
    </ul>
  </div>
</section> -->

<!-- ========================================
  よくある質問（FAQ）セクション
======================================== -->
<section class="p-ipclFaq" id="faq">
  <div class="p-ipclFaq__inner">
    <!-- 見出し -->
    <div class="p-ipclFaq__head">
      <h2 class="p-ipclFaq__title">よくある質問</h2>
      <div class="p-ipclFaq__subRow" aria-hidden="true">
        <span class="p-ipclFaq__subLine"></span>
        <span class="p-ipclFaq__subText">Treatment Flow</span>
      </div>
    </div>
    <!-- Q&Aリスト -->
    <div class="p-ipclFaq__list">
      <!-- Q1（デフォルト開） -->
      <div class="p-ipclFaq__item">
        <div class="p-ipclFaq__q">
          <span class="p-ipclFaq__qLabel" aria-hidden="true">Q.</span>
          <p class="p-ipclFaq__qText">手術後カラコンはしていいですか？</p>
          <button class="p-ipclFaq__toggle" type="button" aria-expanded="false" aria-controls="faq-a-1" aria-label="手術後カラコンはしていいですか？ を開く">
          </button>
        </div>
        <div class="p-ipclFaq__aWrap" id="faq-a-1">
          <div class="p-ipclFaq__aTriangle" aria-hidden="true"></div>
          <div class="p-ipclFaq__a">
            <span class="p-ipclFaq__aLabel" aria-hidden="true">A.</span>
            <div class="p-ipclFaq__aBody">
              <p class="p-ipclFaq__aText">眼内にレンズが挿入されているため、術後はカラコンを含むコンタクトレンズの使用は基本的にお勧めしておりません。</p>
              <p class="p-ipclFaq__aText">詳しくは、診察時に医師にご相談ください。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Q2 -->
      <div class="p-ipclFaq__item">
        <div class="p-ipclFaq__q">
          <span class="p-ipclFaq__qLabel" aria-hidden="true">Q.</span>
          <p class="p-ipclFaq__qText">手術中、痛みはありますか？</p>
          <button class="p-ipclFaq__toggle" type="button" aria-expanded="false" aria-controls="faq-a-2" aria-label="手術中、痛みはありますか？ を開く">
          </button>
        </div>
        <div class="p-ipclFaq__aWrap" id="faq-a-2">
          <div class="p-ipclFaq__aTriangle" aria-hidden="true"></div>
          <div class="p-ipclFaq__a">
            <span class="p-ipclFaq__aLabel" aria-hidden="true">A.</span>
            <div class="p-ipclFaq__aBody">
              <p class="p-ipclFaq__aText">点眼麻酔を使用するため、手術中に強い痛みを感じることはほとんどありません。</p>
              <p class="p-ipclFaq__aText">圧迫感や違和感を少し感じる場合はありますが、多くの方が「思っていたより楽だった」とおっしゃっています。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Q3 -->
      <div class="p-ipclFaq__item">
        <div class="p-ipclFaq__q">
          <span class="p-ipclFaq__qLabel" aria-hidden="true">Q.</span>
          <p class="p-ipclFaq__qText">レンズはずっと入れっぱなしで大丈夫ですか？</p>
          <button class="p-ipclFaq__toggle" type="button" aria-expanded="false" aria-controls="faq-a-3" aria-label="レンズはずっと入れっぱなしで大丈夫ですか？ を開く">
          </button>
        </div>
        <div class="p-ipclFaq__aWrap" id="faq-a-3">
          <div class="p-ipclFaq__aTriangle" aria-hidden="true"></div>
          <div class="p-ipclFaq__a">
            <span class="p-ipclFaq__aLabel" aria-hidden="true">A.</span>
            <div class="p-ipclFaq__aBody">
              <p class="p-ipclFaq__aText">基本的には半永久的にそのままご使用いただけます。</p>
              <p class="p-ipclFaq__aText">将来的に白内障が発生した場合や、度数の大きな変化があった場合は、レンズを取り出して対処できます。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Q4 -->
      <div class="p-ipclFaq__item">
        <div class="p-ipclFaq__q">
          <span class="p-ipclFaq__qLabel" aria-hidden="true">Q.</span>
          <p class="p-ipclFaq__qText">将来、白内障になったらどうなりますか？</p>
          <button class="p-ipclFaq__toggle" type="button" aria-expanded="false" aria-controls="faq-a-4" aria-label="将来、白内障になったらどうなりますか？ を開く">
          </button>
        </div>
        <div class="p-ipclFaq__aWrap" id="faq-a-4">
          <div class="p-ipclFaq__aTriangle" aria-hidden="true"></div>
          <div class="p-ipclFaq__a">
            <span class="p-ipclFaq__aLabel" aria-hidden="true">A.</span>
            <div class="p-ipclFaq__aBody">
              <p class="p-ipclFaq__aText">IPCLは取り外しが可能なレンズです。</p>
              <p class="p-ipclFaq__aText">白内障が進行した場合は、IPCLを摘出してから白内障手術（眼内レンズ挿入術）を行うことができます。</p>
              <p class="p-ipclFaq__aText">当院は白内障手術も対応しておりますので、長期的なサポートが可能です。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Q5 -->
      <div class="p-ipclFaq__item">
        <div class="p-ipclFaq__q">
          <span class="p-ipclFaq__qLabel" aria-hidden="true">Q.</span>
          <p class="p-ipclFaq__qText">両目同時に手術できますか？</p>
          <button class="p-ipclFaq__toggle" type="button" aria-expanded="false" aria-controls="faq-a-5" aria-label="両目同時に手術できますか？ を開く">
          </button>
        </div>
        <div class="p-ipclFaq__aWrap" id="faq-a-5">
          <div class="p-ipclFaq__aTriangle" aria-hidden="true"></div>
          <div class="p-ipclFaq__a">
            <span class="p-ipclFaq__aLabel" aria-hidden="true">A.</span>
            <div class="p-ipclFaq__aBody">
              <p class="p-ipclFaq__aText">可能です。</p>
              <p class="p-ipclFaq__aText">両眼同日手術を行う場合は、術前にその旨をご相談ください。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Q6 -->
      <div class="p-ipclFaq__item">
        <div class="p-ipclFaq__q">
          <span class="p-ipclFaq__qLabel" aria-hidden="true">Q.</span>
          <p class="p-ipclFaq__qText">車の運転はいつから可能ですか？</p>
          <button class="p-ipclFaq__toggle" type="button" aria-expanded="false" aria-controls="faq-a-6" aria-label="車の運転はいつから可能ですか？ を開く">
          </button>
        </div>
        <div class="p-ipclFaq__aWrap" id="faq-a-6">
          <div class="p-ipclFaq__aTriangle" aria-hidden="true"></div>
          <div class="p-ipclFaq__a">
            <span class="p-ipclFaq__aLabel" aria-hidden="true">A.</span>
            <div class="p-ipclFaq__aBody">
              <p class="p-ipclFaq__aText">術翌日の検診で医師が視力の安定を確認した後、運転の可否をご案内します。</p>
              <p class="p-ipclFaq__aText">手術当日は必ず送迎または公共交通機関をご利用ください。</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.p-ipclFaq__list -->
  </div><!-- /.p-ipclFaq__inner -->
</section>

<!-- ========================================
  CTA Section
======================================== -->
<div class="p-ipclCta">
  <div class="p-ipclCta__bg" aria-hidden="true">
    <div class="p-ipclCta__bgTexture"></div>
    <div class="p-ipclCta__bgE37">
      <div class="p-ipclCta__bgE37Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e37.svg" loading="lazy" width="397" height="397" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE41">
      <div class="p-ipclCta__bgE41Inner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e41.svg" loading="lazy" width="238" height="238" alt="">
      </div>
    </div>
    <div class="p-ipclCta__bgE39L">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
    <div class="p-ipclCta__bgE39R">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/common-ellipse-e39.svg" loading="lazy" width="200" height="200" alt="">
    </div>
  </div>
  <div class="p-ipclCta__inner">
    <div class="p-ipclCta__titleBlock">
      <p class="p-ipclCta__title"><span>裸眼の生活への第一歩は、</span><span>ご相談から</span></p>
    </div>
    <div class="p-ipclCta__body">
      <p class="p-ipclCta__text">当院ではICL認定医による執刀と、長年研鑽を積んだ視能訓練士による精密な術前検査を実施しています。</p>
      <p class="p-ipclCta__text">一人ひとりの目の状態に合わせた、<br class="sp-only">丁寧な治療を提供します。</p>
    </div>
    <a href="https://ssc11.doctorqube.com/keiyuganka/" class="c-btn" target="_blank" rel="noopener noreferrer">
      <span class="c-btn__label">無料適応検査はこちら</span>
      <div class="c-btn__arrow">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/cta_arrow.svg" loading="lazy" width="59" height="25" alt="">
      </div>
    </a>
  </div>
</div>

<!-- ========================================
  関連記事一覧（Articles）セクション
======================================== -->
<!-- <section class="p-ipclArticles">
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/fees-bg-mesh.webp" loading="lazy" alt="" class="p-ipclArticles__bgMesh" aria-hidden="true" width="1592" height="1588">
  <div class="p-ipclArticles__inner">
    <div class="p-ipclArticles__head">
      <h2 class="p-ipclArticles__title">関連記事一覧</h2>
      <div class="p-ipclArticles__subRow" aria-hidden="true">
        <span class="p-ipclArticles__subLine"></span>
        <span class="p-ipclArticles__subText">Related Articles</span>
        <span class="p-ipclArticles__subLine"></span>
      </div>
    </div>
    <div class="p-ipclArticles__grid">
      <article class="p-ipclArticles__article">
        <a href="#" class="p-ipclArticles__card">
          <figure class="p-ipclArticles__cardThumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-dummy.webp" width="318" height="205" alt="" loading="lazy"></figure>
          <div class="p-ipclArticles__cardBody">
            <p class="p-ipclArticles__cardTitle">ここにタイトル</p>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-arrow.svg" loading="lazy" alt="" class="p-ipclArticles__cardArrow" aria-hidden="true">
          </div>
        </a>
      </article>
      <article class="p-ipclArticles__article">
        <a href="#" class="p-ipclArticles__card">
          <figure class="p-ipclArticles__cardThumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-dummy.webp" width="318" height="205" alt="" loading="lazy"></figure>
          <div class="p-ipclArticles__cardBody">
            <p class="p-ipclArticles__cardTitle">ここにタイトル</p>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-arrow.svg" loading="lazy" alt="" class="p-ipclArticles__cardArrow" aria-hidden="true">
          </div>
        </a>
      </article>
      <article class="p-ipclArticles__article">
        <a href="#" class="p-ipclArticles__card">
          <figure class="p-ipclArticles__cardThumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-dummy.webp" width="318" height="205" alt="" loading="lazy"></figure>
          <div class="p-ipclArticles__cardBody">
            <p class="p-ipclArticles__cardTitle">ここにタイトル</p>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-arrow.svg" loading="lazy" alt="" class="p-ipclArticles__cardArrow" aria-hidden="true">
          </div>
        </a>
      </article>
      <article class="p-ipclArticles__article">
        <a href="#" class="p-ipclArticles__card">
          <figure class="p-ipclArticles__cardThumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-dummy.webp" width="318" height="205" alt="" loading="lazy"></figure>
          <div class="p-ipclArticles__cardBody">
            <p class="p-ipclArticles__cardTitle">ここにタイトル</p>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-arrow.svg" loading="lazy" alt="" class="p-ipclArticles__cardArrow" aria-hidden="true">
          </div>
        </a>
      </article>
      <article class="p-ipclArticles__article">
        <a href="#" class="p-ipclArticles__card">
          <figure class="p-ipclArticles__cardThumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-dummy.webp" width="318" height="205" alt="" loading="lazy"></figure>
          <div class="p-ipclArticles__cardBody">
            <p class="p-ipclArticles__cardTitle">ここにタイトル</p>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-arrow.svg" loading="lazy" alt="" class="p-ipclArticles__cardArrow" aria-hidden="true">
          </div>
        </a>
      </article>
      <article class="p-ipclArticles__article">
        <a href="#" class="p-ipclArticles__card">
          <figure class="p-ipclArticles__cardThumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-dummy.webp" width="318" height="205" alt="" loading="lazy"></figure>
          <div class="p-ipclArticles__cardBody">
            <p class="p-ipclArticles__cardTitle">ここにタイトル</p>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ipcl/assets/img/articles-arrow.svg" loading="lazy" alt="" class="p-ipclArticles__cardArrow" aria-hidden="true">
          </div>
        </a>
      </article>
    </div>
  </div>
</section> -->


<!-- ========================================
  Scripts
======================================== -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>

/* ----------------------------------------
  FV 背景スライドショー（4秒ごとに1秒フェードでクロスフェード）
---------------------------------------- */
(function () {
  var photos = document.querySelectorAll('.p-ipclFv__bgPhoto');
  if (photos.length < 2) return;
  var current = 0;
  setInterval(function () {
    photos[current].classList.remove('is-active');
    current = (current + 1) % photos.length;
    photos[current].classList.add('is-active');
  }, 4000);
})();

/* ----------------------------------------
  FV コンテンツ スケール（1200-1600px: vw追従 / 1601px+: センタリング）
  基準: 1400px = Figmaカンプ通り
---------------------------------------- */
(function () {
  function updateFvScale() {
    var vw = window.innerWidth;
    var scale;
    if (vw <= 767) {
      // SP: スケール不要（SP独自レイアウト）
      document.documentElement.style.removeProperty('--fv-content-scale');
      return;
    } else if (vw > 1600) {
      scale = 1600 / 1400;
    } else if (vw >= 1200) {
      scale = vw / 1400;
    } else {
      // 768-1199px: 1200px基準で固定
      scale = 1200 / 1400;
    }
    document.documentElement.style.setProperty('--fv-content-scale', String(scale));
  }
  updateFvScale();
  window.addEventListener('resize', updateFvScale);
})();

/* ----------------------------------------
  治療の流れ スライダー
---------------------------------------- */
(function () {
  var slides = document.querySelectorAll('.p-ipclFlow__swiper .swiper-slide');
  if (slides.length < 2) return;
  var paginationBtns = document.querySelectorAll('.p-ipclFlow__paginationBtn');
  var paginationPrev = document.querySelector('.p-ipclFlow__navBtn--pagination.p-ipclFlow__navBtn--prev');
  var paginationNext = document.querySelector('.p-ipclFlow__navBtn--pagination.p-ipclFlow__navBtn--next');
  var PAGINATION_WINDOW = 5;
  function updatePagination(index) {
    var total = paginationBtns.length;
    var windowStart = 0;
    if (total > PAGINATION_WINDOW) {
      windowStart = Math.max(0, Math.min(index - 2, total - PAGINATION_WINDOW));
    }
    var windowEnd = windowStart + PAGINATION_WINDOW - 1;
    paginationBtns.forEach(function (btn, i) {
      btn.classList.toggle('is-active', i === index);
      btn.classList.toggle('is-hidden', i < windowStart || i > windowEnd);
    });
  }
  function updateActiveSlide(index) {
    slides.forEach(function (slide) {
      slide.classList.remove('p-ipclFlow__slide--active');
      var card = slide.querySelector('.p-ipclFlow__card');
      if (card) card.classList.remove('p-ipclFlow__card--active');
      var badge = slide.querySelector('.p-ipclFlow__stepBadge');
      if (badge) badge.classList.remove('p-ipclFlow__stepBadge--active');
    });
    var active = slides[index];
    if (active) {
      active.classList.add('p-ipclFlow__slide--active');
      var card = active.querySelector('.p-ipclFlow__card');
      if (card) card.classList.add('p-ipclFlow__card--active');
      var badge = active.querySelector('.p-ipclFlow__stepBadge');
      if (badge) badge.classList.add('p-ipclFlow__stepBadge--active');
    }
  }
  function updatePaginationNav(index) {
    if (paginationPrev) paginationPrev.classList.toggle('swiper-button-disabled', index === 0);
    if (paginationNext) paginationNext.classList.toggle('swiper-button-disabled', index === slides.length - 1);
  }
  var flowSwiper = new Swiper('.p-ipclFlow__swiper', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 60,
    loop: false,
    initialSlide: 0,
    uniqueNavElements: false,
    navigation: {
      prevEl: '.p-ipclFlow__navBtn--large.p-ipclFlow__navBtn--prev',
      nextEl: '.p-ipclFlow__navBtn--large.p-ipclFlow__navBtn--next',
    },
    mousewheel: {
      forceToAxis: true,
      releaseOnEdges: true,
      thresholdTime: 1000,
      thresholdDelta: 5,
    },
    breakpoints: {
      0: {
        spaceBetween: 34,
      },
      768: {
        spaceBetween: 60,
      }
    },
    on: {
      slideChange: function () {
        var idx = this.realIndex;
        updateActiveSlide(idx);
        updatePagination(idx);
        updatePaginationNav(idx);
      },
      slideChangeTransitionEnd: function () {
        this.update();
      }
    }
  });
  slides.forEach(function (slide, i) {
    slide.addEventListener('click', function () {
      flowSwiper.slideTo(i);
    });
  });
  paginationBtns.forEach(function (btn, i) {
    btn.addEventListener('click', function () {
      flowSwiper.slideTo(i);
    });
  });
  if (paginationPrev) {
    paginationPrev.addEventListener('click', function () {
      flowSwiper.slidePrev();
    });
  }
  if (paginationNext) {
    paginationNext.addEventListener('click', function () {
      flowSwiper.slideNext();
    });
  }
  // HTMLにinitial activeクラスを持つため初期updatePaginationのみ実行
  updatePagination(0);
  updatePaginationNav(0);
})();

/* ----------------------------------------
  メリット・デメリット アコーディオン（SP専用）
---------------------------------------- */
(function () {
  var cards = document.querySelectorAll('.p-ipclMerit__card');
  if (cards.length === 0) return;
  function isSP() { return window.innerWidth <= 767; }
  function bindToggle(card) {
    var btn = card.querySelector('.p-ipclMerit__cardToggle');
    if (!btn) return;
    btn.addEventListener('click', function () {
      if (!isSP()) return;
      var isOpen = card.classList.contains('is-open');
      card.classList.toggle('is-open', !isOpen);
      btn.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
    });
  }
  cards.forEach(function (card) { bindToggle(card); });
})();

/* ----------------------------------------
  FAQ アコーディオン（PC/SP共通）
---------------------------------------- */
(function () {
  var items = document.querySelectorAll('.p-ipclFaq__item');
  if (items.length === 0) return;
  items.forEach(function (item) {
    var toggle = item.querySelector('.p-ipclFaq__toggle');
    var q = item.querySelector('.p-ipclFaq__q');
    if (!toggle || !q) return;
    q.addEventListener('click', function () {
      var isOpen = item.classList.contains('is-open');
      item.classList.toggle('is-open', !isOpen);
      toggle.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
    });
  });
})();

/* ----------------------------------------
  スムーススクロール（ヘッダー高さ考慮）
---------------------------------------- */
(function () {
  var header = document.querySelector('.header');

  document.addEventListener('click', function (e) {
    var link = e.target.closest('a[href^="#"]:not([href="#"])');
    if (!link) return;

    var href = link.getAttribute('href');
    var id = href.slice(1);
    var target = document.getElementById(id);
    if (!target) return;

    e.preventDefault();
    e.stopImmediatePropagation();

    var headerHeight = header ? header.getBoundingClientRect().height : 0;
    var rect = target.getBoundingClientRect().top;
    var scrollTop = window.pageYOffset;
    var position = rect + scrollTop - headerHeight;

    window.scrollTo({
      top: Math.max(0, position),
      behavior: 'smooth'
    });
  }, true);
})();
</script>

<?php get_footer(); ?>
