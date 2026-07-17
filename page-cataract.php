<?php /* Template Name: 白内障手術 */ ?>
<?php get_header(); ?>
<div class="top-block" id="page-top">
	<p class="header__note">足立区で白内障手術をご検討中の<br class="sp_only"><span>60〜80<span class="header__old">歳</span></span>のあなたへ
    </p>
</div>
<!-- ============ KV ============ -->
<section class="section kv" id="kv">
    <div class="container kv__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/mv_bg-sp.jpg"
            class="kv__media sp_only">
        <div class="kv__copywrap">
            <p class="kv__subtitle">眼科専門病院と同等の設備を完備</p>
            <p class="kv__title">白内障手術</p>
            <p class="kv__lead"><span>“見えづらさ”</span>を、歳のせいにしていませんか？</p>
            <div class="kv__cta">
                <a href="https://ssc11.doctorqube.com/keiyuganka/" class="kv__cta-button" aria-label="白内障手術のご予約はこちら">
                    <span class="kv__cta-label">白内障手術のご予約はこちら</span>
                    <span class="kv__cta-sub">※無理な手術はおすすめしていません。まずは状態の確認から</span>
                </a>
                <span class="kv__cta-tag">初診でもお気軽にご来院いただけます</span>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/point.png" class="kv__points">
</section>

<!-- ============ Intro ============ -->
<section class="intro">
    <div class="intro__inner">
        <div class="intro__text">
            <p class="intro__text-lead">
                人生100年時代に寄り添う眼科<br>
                足立慶友眼科 が、<br>
                あなたの目をお守りします。
            </p>
        </div>
        <div class="intro__images">
        </div>
    </div>
    <img src="https://keiyu-ganka.mark1-web.com/wp-content/uploads/2025/08/Frame-1000003500.png" alt=""
        class="intro__images pc_only">
    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/intro_images-sp.jpg" alt=""
        class="intro__images sp_only">
</section>

<!-- ============ TOC ============ -->
<section class="section toc" id="toc" style="display: none;">
    <div class="container">
        <div class="toc__grid">
            <div class="toc__col">
				<div class="toc__col-flex">
					<a class="toc__item" href="#a01"><span>白内障ってどんな病気？</span><span class="toc__arrow"></span></a>
					<a class="toc__item" href="#a02"><span>白内障の症状は？</span><span class="toc__arrow"></span></a>
				</div>
				<div class="toc__col-flex">
					<a class="toc__item" href="#a03"><span>白内障になる原因は？</span><span class="toc__arrow"></span></a>
					<a class="toc__item" href="#a04"><span>白内障手術を受けるタイミング</span><span class="toc__arrow"></span></a>
				</div>
				
				<div class="toc__col-flex">
					<a class="toc__item" href="#a05"><span>足立慶友眼科の白内障手術が選ばれる理由</span><span class="toc__arrow"></span></a>
                <a class="toc__item" href="#cataract-flow-title"><span>白内障手術の流れ</span><span class="toc__arrow"></span></a>
				</div>
				<div class="toc__col-flex">
					<a class="toc__item" href="#a07"><span>白内障手術に使用するレンズの種類</span><span class="toc__arrow"></span></a>
                <a class="toc__item" href="#a08"><span>当院で採用している多焦点眼内レンズ</span><span class="toc__arrow"></span></a>
				</div>
				<div class="toc__col-flex">
					<a class="toc__item" href="#a09"><span>費用</span><span class="toc__arrow"></span></a>
					<a class="toc__item" href="#a10"><span>よくある質問</span><span class="toc__arrow"></span></a>
				</div>
				<div class="toc__col-flex">
					<a class="toc__item" href="#a11"><span>まとめ</span><span class="toc__arrow"></span></a>
					
				</div>
            </div>
			
        </div>
    </div>
</section>
<script>
(function () {
  // 固定ヘッダーの高さに合わせて調整
  const OFFSET = 80;

  document.querySelectorAll('.toc__item[href^="#"]').forEach(a => {
    a.addEventListener('click', function (e) {
      const hash = this.getAttribute('href');
      const id = hash.slice(1);
      const target = document.getElementById(id);
      if (!target) return; // 飛び先が無ければ何もしない（ハッシュだけ変わる）

      // どこかで preventDefault されていても上書きするため、こちらでも抑止
      e.preventDefault();

      const y = window.scrollY + target.getBoundingClientRect().top - OFFSET;
      window.scrollTo({ top: y, behavior: 'smooth' });

      // URLのハッシュ更新（履歴を汚さない）
      history.replaceState(null, '', '#' + id);
    });
  });
})();
</script>
<style>
.toc__item { position: relative; z-index: 1; pointer-events: auto; }
</style>

<!-- ============ ABOUT（どんな病気？／症状） ============ -->
<section class="section about" id="about">
    <div class="about__container">
        <p class="about__kicker">足立区で白内障にお悩みの方へ</p>
        <div class="about__grid">
            <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/about_img01.png"
                class="about__media">
            <div class="about__body">
                <h2 class="about__title" id="a01">白内障ってどんな病気？</h2>
                <p>白内障は、目の中でレンズの役割を果たしている「水晶体」が濁ってしまう病気です。</p>
                <p>水晶体は本来、透明で光を通す構造ですが、加齢やその他の要因によって濁りが生じると、視界がぼやけたり、光がまぶしく感じられたりするようになります。</p>
                <p>白内障は進行性の疾患で、放置すると視力が著しく低下し、日常生活に支障をきたすこともあります。加齢に伴う症状の一つとして多くの方に見られる身近な病気ですが、手術によって改善が期待できます。</p>
            </div>
        </div>

        <div class="about__grid about__grid--reverse" id="symptom">
            <div class="about__body">
                <h2 class="about__title" id="a02">白内障の症状は？</h2>
				<p>白内障の原因となる水晶体の濁り方は、人それぞれ異なるため、あらわれる症状も人によって変わります。<br>
					中でもよくみられる症状が目のかすみで、物がぼやけたりかすんでみえる場合は、白内障が進行し始めているかもしれません、進行すると視力が著しく低下し、読書や運転が困難になることもあります。
                </p>
                <div class="bullet-panel">
                    <h4 class="bullet-panel__title">症状について</h4>
                    <ul class="bullet-panel__list">
                        <li>ものがぼやける</li>
                        <li>目がかすむ</li>
                        <li>目が疲れる</li>
                        <li>人や物の輪郭が二重に見える</li>
                        <li>近視がひどくなった気がする</li>
                        <li>晴れた日の太陽がまぶしい</li>
                        <li>対向車のライトがまぶしい</li>
                    </ul>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/about_img02.png"
                class="about__media">
        </div>

        <div class="about__compare">
            <p class="about__compare-title c-sectionTitle">見え方の違い</p>
            <div class="about__compare-grid">
                <div class="about__compare-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/about_img03.png"
                        class="about__compare-media">
                    <div class="about__compare-label">正常</div>
                </div>
                <div class="about__compare-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/about_img04.png"
                        class="about__compare-media">
                    <div class="about__compare-label">白内障</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ 原因（Cause） ============ -->
<section class="section cause" id="cause">
    <div class="container">
        <h2 class="cause__title" id="a03">白内障になる原因は？</h2>
        <div class="cause__grid">
            <div class="cause__body">
                <h3 class="cause__item-title">原因の90％は加齢</h3>
                <p>白内障の大半は加齢が原因で発症します。<br>
                    加齢により水晶体内のタンパク質が変性し、透明だったレンズが少しずつ白く濁っていくのです。</p>
                <p>60歳を過ぎると約80％の人で白内障が見られ、80歳以上ではほぼ100％の人に何らかの濁りが見られるといわれています。</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/cause_img01.png"
                class="cause__media">
        </div>

        <div class="cause__grid cause__grid--reverse">
            <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/cause_img02.png"
                class="cause__media">
            <div class="cause__body">
                <h3 class="cause__item-title">その他の原因</h3>
                <p>外傷や糖尿病、アトピー性皮膚炎、長期間のステロイド使用、放射線曝露なども白内障の原因となることがあります。<br>
                    この場合、若い世代でも発症することがあります。<br>
                    以下の方は白内障に気をつけましょう。
                </p>
                <div class="bullet-panel">
                    <h4 class="bullet-panel__title">白内障の原因</h4>
                    <ul class="bullet-panel__list">
                        <li>糖尿病</li>
                        <li>先天性（生まれつき）</li>
                        <li>アトピー性皮膚炎</li>
                        <li>他の目の病気</li>
                        <li>眼科手術</li>
                        <li>薬剤による副作用</li>
                        <li>全身疾患の合併症</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ 注意書き ============ -->
<section class="section alert">
    <div class="alert__cta container">
        <h3 class="alert__cta-title">白内障の症状が進む前に、<br>早めに受診しましょう！</h3>
        <p class="alert__cta-contents">白内障はゆっくりと進行するため、初期段階では症状に気づきにくいこともあります。<br>
            また、水晶体全体が均一に濁ってくるのではなく、周辺部（皮質）から濁り始める方がいる一方で中心部（核）から濁る方もいます。</p>

        <p class="alert__cta-contents">「最近、視界がかすむ」「以前よりまぶしさを感じる」といった変化は、白内障のはじまりかもしれません。<br>
            白内障が進行すると視力が大きく低下し、日常生活に支障をきたすようになります。<br>
            白内障は決して怖い病気ではありませんが、手術のタイミングを逃すと、より難しい治療が必要になる場合もあります。<br>
            視力の違和感や見え方の変化を感じたら、早めの眼科受診をおすすめします。
        </p>
        <p class="alert__cta-text">定期的な目の健康チェックも、白内障の早期発見・早期治療につながります。</p>
    </div>
</section>

<!-- ============ 手術を受けるタイミング ============ -->
<section class="section timing" id="timing">
    <div class="timing__inner container">
        <h2 class="timing__title" id="a04">白内障手術を受けるタイミング</h2>

        <p class="timing__text">白内障の症状があるからといって、すぐに手術をしなければならないわけではありません。<br>
            手術は、視力の低下によってライフスタイルの変化を余儀なくされたり、日常生活に不便を感じ始めたときが目安です。<br>
            運転や読書、仕事に支障が出ている場合は、医師と相談のうえ、手術を検討しましょう。</p>

        <div class="timing__intro card">
            <h3 class="timing__subtitle c-sectionTitle">以下の場合はお早めにご相談ください</h3>
            <ul class="timing__list">
                <li>症状により日常生活に支障をきたす程度に白内障が進行している場合</li>
                <li>自動車の運転に影響及ぼしたり、免許更新ができなくなる「視力0.7未満」となっている場合</li>
                <li>集中力が必要であったり安全性が重視される仕事に必要な場合</li>
                <li>他の合併症により白内障の進行が早い場合</li>
                <li>緑内障等の目の疾患や糖尿病等の持病により、先伸ばすことによって白内障手術が困難になる場合</li>
            </ul>
        </div>

    </div>
</section>

<!-- ============ 不安 ============ -->
<section class="section concerns" id="concerns">
    <div class="concerns">
        <div class="concerns__titile-wrap">
            <h3 class="concerns__title">手術を受けた方の<br>多くが抱えていた</h3>
            <h3 class="concerns__title title-lg">不安</h3>
            <h3 class="concerns__title">あなたも<br>感じていませんか？</h3>
        </div>
        <div class="concerns__list--01">
            <div class="concerns__item">
                <p class="concerns__lead">
                    「手術って痛い？本当に大丈夫？<br>
                    術後にトラブルがあったらどうしよう...」
                </p>
            </div>
            <div class="concerns-hero__visual">
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/concers_bg.png"
                    alt="concerns_bg">
            </div>

        </div>

        <div class="concerns__list--02">
            <div class="concerns-hero__visual">
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/concers_bg02.png"
                    alt="concerns_bg">
            </div>
            <div class="concerns__item">
                <p class="concerns__lead">
                    「どのレンズを選べばいいのかわからない…」
                </p>
            </div>
        </div>

        <div class="concerns__list--01">
            <div class="concerns__item">
                <p class="concerns__lead">
                    「設備や機器が古いと不安...<br>駅から遠いと通院が大変…」
                </p>
            </div>
            <div class="concerns-hero__visual">
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/concers_bg.png"
                    alt="concerns_bg">
            </div>

        </div>
    </div>
</section>

<!-- ============ 選ばれる理由 ============ -->
<section class="section reason" id="reason">
    <div class="">
        <h2 class="reason__title" id="a05">足立慶友眼科の白内障手術が選ばれる理由</h2>
        <div class="reason__list">
            <article class="reason__item">
                <div class="reason__item-wrap">
                    <h3 class="reason__item-title">最新の白内障手術機器を導入</h3>
                    <p class="reason__item-text">当院では、精度と安全性の高い白内障手術を実現するために、「ARTEVO 800」「センチュリオン」「コンステレーション」等、<br>
                        眼科専門病院レベルの最新設備を導入しています。<br>
                        これによって、水晶体を効率よく砕いて吸引したり、術中の眼内環境を安定させることができ、手術中の患者様への負担を軽減。<br><br>
                        ただ最新だからといって機器を導入するのではなく、患者様に必要か否かを院長自らが吟味し、セレクトしたものを採用。<br>
                        熟練の医師による知見と手技、最先端機器の組み合わせが、より安心・安全な白内障手術を可能にしています。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/fe01.webp"
                    class="reason__media">
            </article>
            <article class="reason__item">
                <div class="reason__item-wrap">
                    <h3 class="reason__item-title">豊富な眼内レンズから、<br>最適な1枚を提案</h3>
                    <p class="reason__item-text">
                        白内障手術では、水晶体の代わりに眼内レンズを挿入しますが、当院では多数のレンズから患者様のライフスタイルや希望に合わせて最適な1枚を選定しています。<br>
                        遠くにピントを合わせたい方、近くも見える多焦点を希望される方、夜間の光のにじみが気になる方など、それぞれの悩みに応じたご提案が可能です。手術前にしっかりとご相談いただける体制を整えています。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/fe02.webp"
                    class="reason__media">
            </article>
            <article class="reason__item">
                <div class="reason__item-wrap">
                    <h3 class="reason__item-title">経験豊富な眼科専門医が執刀</h3>
                    <p class="reason__item-text">
                        手術はすべて、白内障手術の経験を豊富に持つ眼科専門医が担当いたします。眼科専門医とは、眼科領域に関する知識と技術を専門的に習得し、厳しい基準をクリアした医師です。数多くの白内障手術を手がけてきた医師が、患者様一人ひとりの目の状態に合わせた繊細な対応で、安心の手術を提供しています。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/fe03.webp"
                    class="reason__media">
            </article>
            <article class="reason__item">
                <div class="reason__item-wrap">
                    <h3 class="reason__item-title">徹底した滅菌・感染対策</h3>
                    <p class="reason__item-text">
                        手術では、術後感染を防ぐために万全な滅菌・衛生管理が求められます。当院では、手術器具の洗浄・滅菌工程を徹底し、使い捨て可能な器具の活用も行っています。<br><br>
                        また、手術室はクリーンルーム仕様とし、空気中の微粒子や細菌の制御にも努めています。スタッフの衛生管理も徹底し、安心して手術を受けていただける環境を整えています。
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/fe04.webp"
                    class="reason__media">
            </article>
            <article class="reason__item">
                <div class="reason__item-wrap">
                    <h3 class="reason__item-title">術後まで一貫したサポート体制</h3>
                    <p class="reason__item-text">
                        白内障手術では、術前・術中だけでなく、術後のフォローも非常に大切となります。当院では、術後の定期検診を通じて回復状況を丁寧に確認し、必要に応じたアドバイスやケアを行います。<br><br>
                        また、不安なことや気になる症状があればいつでもご相談いただける体制を整え、患者様の不安解消に勤め、安心を最優先にサポートいたします。</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/fe05.webp"
                    class="reason__media">
            </article>
        </div>
        <div class="kv__cta">
            <a href="https://ssc11.doctorqube.com/keiyuganka/" class="kv__cta-button" aria-label="白内障手術のご予約はこちら">
                <span class="kv__cta-label">白内障手術のご予約はこちら</span>
                <span class="kv__cta-sub">※無理な手術はおすすめしていません。まずは状態の確認から</span>
            </a>
            <span class="kv__cta-tag">初診でもお気軽にご来院いただけます</span>
        </div>
    </div>
</section>

<!-- ============ 手術の具体的な流れ ============ -->

<section class="c-surgery-flow section" aria-labelledby="cataract-flow-title">
    <div class="container c-surgery-inner">
        <h2 id="cataract-flow-title" class="c-surgery-flow__title">足立慶友眼科の白内障手術の流れ</h2>
        <p class="c-surgery-flow__subtitle c-sectionTitle">ご予約から手術まで</p>
        <div class="c-surgery-flow__inner pc_only">

            <!-- 1.0 ご予約・初診 -->
            <article class="c-step" id="flow-1">
                <div class="c-step__rail">
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/eye-line01.png"
                        class="c-step__dot">
                    <span class="c-step__index">1.0</span>
                </div>
                <div class="c-step__card">
                    <div class="c-step__body">
                        <div class="c-step__flex">

                            <div class="c-step__content">
                                <h3 class="c-step__heading">ご予約・初診（診察）</h3>
                                <dl class="c-step__desc">
                                    <div class="c-step__row">
                                        <dd>
                                            所要時間：約30分〜1時間<br>※WEBまたはお電話にてご予約ください。</dd>
                                    </div>
                                    <div class="c-step__row">
                                        <dd>医師による診察と視力測定・眼の状態のチェックを行います。</dd>
                                    </div>
                                </dl>
                            </div>

                            <div class="c-step__media" aria-hidden="true">
                                <div class="c-media-ph">
                                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow01.webp"
										 alt="" />
                                </div>
                            </div>

                        </div>
                        <section class="c-step__section">
                            <h4 class="c-step__label">持ち物</h4>
                            <ul class="c-step__bullets">
                                <li>健康保険証</li>
                                <li>紹介状（お持ちの方）</li>
                                <li>お薬手帳</li>
                                <li>眼鏡（お持ちの方のみ）</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </article>

            <!-- 2.0 術前検査 -->
            <article class="c-step" id="flow-2">
                <div class="c-step__rail">
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/eye-line02.png"
                        class="c-step__dot">
                    <span class="c-step__index">2.0</span>
                </div>
                <div class="c-step__card">

                    <div class="c-step__body">
                        <div class="c-step__flex">
                            <div class="c-step__content">
                                <h3 class="c-step__heading">術前検査</h3>
                                <dl class="c-step__desc">
                                    <div class="c-step__row">
                                        <dd>所要時間：約1時間〜1時間半（予約制）</dd>
                                        <dd>白内障の進行度や眼内レンズの選定に必要な検査を行います。<br>ご希望や生活スタイルをヒアリングし、最適なレンズをご提案いたします。</dd>
                                    </div>
                                </dl>
                            </div>

                            <div class="c-step__media" aria-hidden="true">
                                <div class="c-media-ph"><img
                                        src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow02.webp"
                                        alt="" /></div>
                            </div>
                        </div>
                        <section class="c-step__section">
                            <h4 class="c-step__label">検査項目</h4>
                            <div class="c-step__grid">
                                <ul class="c-step__bullets">
                                    <li>視力検査</li>
                                    <li>眼圧検査</li>
                                    <li>眼底/角膜検査</li>
                                    <li>屈折検査・眼軸長検査</li>
                                </ul>
                                <ul class="c-step__bullets">
                                    <li>瞳孔径評価</li>
                                    <li>角膜内皮細胞検査</li>
                                    <li>全身検査（血液検査・血圧・心電図）</li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </article>

            <!-- 3.0 ご自宅での点眼 -->
            <article class="c-step" id="flow-3">
                <div class="c-step__rail">
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/eye-line03.png"
                        class="c-step__dot">
                    <span class="c-step__index">3.0</span>
                </div>
                <div class="c-step__card">
                    <div class="c-step__body">
                        <div class="c-step__flex">
                            <div class="c-step__content">
                                <h3 class="c-step__heading">ご自宅での点眼</h3>
                                <p class="c-step__text">
                                    手術の数日前から、指定された点眼薬を決まったスケジュールで使用していただきます。<br>
                                    これにより感染予防と炎症抑制を行います。
                                </p>
                                <p class="c-step__text">処方された日数／頻度の開始日・回数は医師の指示に従ってください。</p>
                            </div>

                            <div class="c-step__media" aria-hidden="true">
                                <div class="c-media-ph"><img
                                        src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow03.webp"
                                        alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 4.0 手術当日 -->
            <article class="c-step" id="flow-4">
                <div class="c-step__rail">
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/eye-line04.png"
                        class="c-step__dot">
                    <span class="c-step__index">4.0</span>
                </div>
                <div class="c-step__card">
                    <div class="c-step__body">
                        <div class="c-step__flex">
                            <div class="c-step__content">
                                <h3 class="c-step__heading">手術当日</h3>
                                <dl class="c-step__desc">
                                    <div class="c-step__row">
                                        <dd>所要時間：受付からご滞在で約2〜3時間（手術自体は10分程度）
                                        </dd>
                                    </div>
                                </dl>

                                <ul class="c-step__bullets">
                                    <li>点眼麻酔を使用（痛みはほとんどありません）</li>
                                    <li>混み具合を踏まえ、順番にご案内</li>
                                    <li>手術後は少し休んでからご帰宅可能です</li>
                                </ul>
                            </div>

                            <div class="c-step__media" aria-hidden="true">
                                <div class="c-media-ph"><img
                                        src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow04.webp"
                                        alt="" /></div>
                            </div>
                        </div>
                        <section class="c-step__section">
                            <h4 class="c-step__label c-step__label--blue">諸注意</h4>
                            <ul class="c-step__bullets">
                                <li>手術当日の公共交通機関でのご来院・ご帰宅をお願いいたします（お車の運転不可）。</li>
                                <li>健康保険証、サングラスや帽子（まぶしさ対策）、前開きの楽な服装、薬剤は不可のため公共交通機関または送迎をご利用ください。</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </article>

            <!-- 5.0 術後検診 -->
            <article class="c-step_last" id="flow-5">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/eye-line05.png"
                        class="c-step__dot">
                    <span class="c-step__index">5.0</span>
                </div>
                <div class="c-step__card">
                    <div class="c-step__body">
                        <div class="c-step__flex">
                            <div class="c-step__content">
                                <h3 class="c-step__heading">術後検診</h3>
                                <p class="c-step__text">術後も安心してお過ごしいただけるよう、下記のスケジュールで経過観察を行います。</p>
                                <ul class="c-step__bullets">
                                    <li>手術翌日（必須）</li>
                                    <li>1週間後</li>
                                    <li>1ヶ月後</li>
                                    <li>3ヶ月後（必要に応じて）</li>
                                </ul>

                            </div>

                            <div class="c-step__media" aria-hidden="true">
                                <div class="c-media-ph"><img
                                        src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow05.webp"
                                        alt="" /></div>
                            </div>
                        </div>
                        <section class="c-step__section">
                            <h4 class="c-step__label c-step__label--blue">諸注意</h4>
                            <p class="c-step__note">
                                異常に気づいた場合（強い痛み・急激な充血・視覚症状の悪化など）は、医師の指示があるまで目を擦らずにご連絡ください。<br>
                                自己判断で中止・変更すると、感染や炎症を起こす可能性があります。
                            </p>
                        </section>
                    </div>
                </div>
            </article>
        </div>

        <div class="surgery-flow__inner sp_only">

            <!-- 1. ご予約・初診（診察） -->
            <article class="flow-step" aria-label="ご予約・初診（診察）">

                <div class="flow-step__card">
                    <div class="flow-step__head">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/num01.png"
                            class="flow-step__num">
                        <h3 class="flow-step__title">ご予約・初診（診察）</h3>
                    </div>
                    <figure class="flow-step__media" aria-label="イメージ写真">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow01.webp"
                            alt="" />
                        <figcaption class="visually-hidden">初診のイメージ</figcaption>
                    </figure>

                    <div class="flow-step__text">
                        <p class="flow-step__note">
                            受付時間：終診の30〜1時間前<br>
                            ※WEBまたはお電話にてご予約ください。<br>
                            来院当日は、担当医による診察と視力測定・眼の状態のチェックを行います。
                        </p>

                        <section class="flow-box">
                            <h4 class="flow-box__title">持ち物</h4>
                            <ul class="flow-box__list">
                                <li>健康保険証</li>
                                <li>診察券（お持ちの方）</li>
                                <li>お薬手帳</li>
                                <li>紹介状（お持ちの方のみ）</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </article>

            <!-- 2. 術前検査 -->
            <article class="flow-step" aria-label="術前検査">

                <div class="flow-step__card">
                    <div class="flow-step__head">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/num02.png"
                            class="flow-step__num">
                        <h3 class="flow-step__title">術前検査</h3>
                    </div>
                    <figure class="flow-step__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow02.webp"
                            alt="" />
                        <figcaption class="visually-hidden">術前検査のイメージ</figcaption>
                    </figure>

                    <div class="flow-step__text">
                        <p class="flow-step__note">
                            受付時間：終診1時間〜1時間半（予約制）<br>
                            白内障の進行度や眼内レンズの適正を判定し、必要な検査を行います。<br>
                            ※当日は点眼で散瞳を行うため、強い光を眩しく感じます。
                        </p>

                        <section class="flow-box">
                            <h4 class="flow-box__title">検査項目</h4>
                            <ul class="flow-box__list">
                                <li>視力検査</li>
                                <li>眼圧検査</li>
                                <li>細隙灯顕微鏡検査</li>
                                <li>眼底検査・前房深度</li>
                                <li>眼軸長測定</li>
                                <li>角膜内皮細胞検査</li>
                                <li>全身検査（血圧・糖尿 ほか）</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </article>

            <!-- 3. ご自宅での点眼 -->
            <article class="flow-step" aria-label="ご自宅での点眼">
                <div class="flow-step__card">
                    <div class="flow-step__head">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/num03.png"
                            class="flow-step__num">
                        <h3 class="flow-step__title">ご自宅での点眼</h3>
                    </div>
                    <figure class="flow-step__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow03.webp"
                            alt="" />
                        <figcaption class="visually-hidden">点眼のイメージ</figcaption>
                    </figure>

                    <div class="flow-step__text">
                        <p class="flow-step__note">
                            手術の数日前から、指示された点眼薬を決められたスケジュールで使用していただきます。これにより感染予防と炎症抑制が期待できます。<br>
                            処方された用量／期間の厳守と、破棄と保管の指示に従ってください。
                        </p>
                    </div>
                </div>
            </article>

            <!-- 4. 手術当日 -->
            <article class="flow-step" aria-label="手術当日">

                <div class="flow-step__card">
                    <div class="flow-step__head">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/num04.png"
                            class="flow-step__num">
                        <h3 class="flow-step__title">手術当日</h3>
                    </div>
                    <figure class="flow-step__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow04.webp"
                            alt="" />
                        <figcaption class="visually-hidden">手術当日のイメージ</figcaption>
                    </figure>

                    <div class="flow-step__text">
                        <p class="flow-step__note">
                            受付時間：午前/午後いずれかで2〜3時間（予約制）<br>
                            日帰り手術が基本です。<br>
                            ※運転は不可（送迎はご遠慮ください）<br>
                            ※コンタクトレンズは、種類により中止期間が異なります。予約時にご確認ください。
                        </p>

                        <section class="flow-box">
                            <h4 class="flow-box__title">諸注意</h4>
                            <ul class="flow-box__list">
                                <li>手術当日の食事は医師の指示に従ってください。</li>
                                <li>整髪料・化粧・マニキュア等は不可。</li>
                                <li>眼帯が外れるまでは洗顔・洗髪は避けてください。</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </article>

            <!-- 5. 術後検診 -->
            <article class="flow-step" aria-label="術後検診">

                <div class="flow-step__card">
                    <div class="flow-step__head">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/num05.png"
                            class="flow-step__num">
                        <h3 class="flow-step__title">術後検診</h3>
                    </div>
                    <figure class="flow-step__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/flow05.webp"
                            alt="" />
                        <figcaption class="visually-hidden">術後検診のイメージ</figcaption>
                    </figure>

                    <div class="flow-step__text">
                        <p class="flow-step__note">
                            術後も安心してお過ごしいただけるよう、下記のスケジュールで経過観察を行います。
                        </p>

                        <ul class="flow-step__bullets">
                            <li>手術翌日（必須）</li>
                            <li>1週間後</li>
                            <li>1ヶ月後</li>
                            <li>3ヶ月後（必要に応じて）</li>
                        </ul>

                        <section class="flow-box">
                            <h4 class="flow-box__title">諸注意</h4>
                            <ul class="flow-box__list">
                                <li>痛み・かゆみ・見えづらさ・飛蚊症の悪化は、医師の指示があるまで自己判断せずにご相談ください。</li>
                                <li>自己判断で中断・変更すると、感染や炎症を長引かせる可能性があります。</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section lg__section-bg">

    <!-- ============ 手術の具体的手順 ============ -->
    <section class=" procedure" id="procedure">
        <div class="container">
            <h2 class="procedure__title">白内障手術の具体的な手順</h2>
            <div class="procedure__grid">
                <article class="procedure__item">
                    <div class="procedure__flex">
                        <div class="procedure__num num_01">01</div>
                        <h3 class="procedure__item-title">麻酔をかける</h3>
                    </div>
                    <p class="procedure__item-text">ほとんどの白内障手術は点眼麻酔。麻酔によって手術はほとんど痛みを感じません。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/img-01.webp"
                        class="procedure__item-img" alt="点眼のイメージ">
                </article>
                <article class="procedure__item">
                    <div class="procedure__flex">
                        <div class="procedure__num num_02">02</div>
                        <h3 class="procedure__item-title">眼内レンズを入れる穴を作る</h3>
                    </div>
                    <p class="procedure__item-text">水晶体を包む袋（水晶体嚢）の前面に小さく切れ目を入れます。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/img-02.webp"
                        class="procedure__item-img" alt="点眼のイメージ">
                </article>
                <article class="procedure__item">
                    <div class="procedure__flex">
                        <div class="procedure__num num_03">03</div>
                        <h3 class="procedure__item-title">濁った水晶体を取り除く</h3>
                    </div>
                    <p class="procedure__item-text">水晶体嚢の切れ目から器具を入れ、超音波で水晶体を砕きながら吸引して取り除きます。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/img-03.webp"
                        class="procedure__item-img" alt="点眼のイメージ">
                </article>
                <article class="procedure__item">
                    <div class="procedure__flex">
                        <div class="procedure__num num_04">04</div>
                        <h3 class="procedure__item-title">眼内レンズを入れる</h3>
                    </div>

                    <p class="procedure__item-text">空になった水晶体嚢の中に眼内レンズを入れ、固定します。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/img-04.webp"
                        class="procedure__item-img" alt="点眼のイメージ">
                </article>
            </div>
        </div>
    </section>

    <!-- ============ レンズの種類 ============ -->
    <section class="lens" id="lens">
        <div class="container">
            <h2 class="lens__title" id="a07">白内障手術に使用するレンズの種類</h2>

            <article class="lens__panel lens__panel--muted">
                <h3 class="lens__panel-title">単焦点眼内レンズ<br class="sp_only">（保険適用）</h3>
                <p>単焦点眼内レンズは、保険適用下で広く使用されている基本的な人工レンズです。ピントが合う距離が「1カ所のみ（遠くまたは近く）」に限られるため、手術後も生活の中で眼鏡の併用が必要な場合があります。
                </p>
                <p>ただし趣味や生活に合わせたタイプを選択した場合、新聞を読む、スマートフォンを操作するなどの近くを見る作業には眼鏡の度数を合わせるケースがほとんどです。費用負担が抑えられ、安定性や視力回復効果も十分に期待できるため、多くの方に選ばれているレンズです。
                </p>
                <p>眼鏡の使用に抵抗がない方や、コストを抑えたい方にとって有効な選択肢といえるでしょう。</p>
            </article>

            <article class="lens__panel">
                <h3 class="lens__panel-title">多焦点眼内レンズ<br class="sp_only">（選定療養・自由診療）</h3>
                <p>多焦点眼内レンズは、遠方・中間・近方の複数の距離にピントを合わせられる先進的なレンズで、白内障手術後の眼鏡依存を大きく減らすことが可能です。従来の単焦点レンズではカバーできなかった日常生活の幅広いシーンをサポートし、より自然な見え方が期待できます。
                </p>
                <p>最近では、焦点を滑らかに連続させる「連続焦点型」や、夜間の光にじみ（ハロー・グレア）を軽減する改良タイプなども登場しており、生活スタイルやご希望に合わせたご提案ができます。</p>
                <p>ただし、多焦点レンズはすべての患者様に適しているわけではありません。裸眼の見え方や夜間の見え方に個人差が生じることがあり、医師による詳細な検査とカウンセリングを行ったうえで選択することが大切です。
                </p>
                <div class="lens__cta"><a href="/cataract/multifocal" class="btn btn--primary">多焦点眼内レンズについて詳しく</a></div>
            </article>
        </div>
    </section>


</section>

<!-- ============ 選定療養とは？ ============ -->
<section class="co-pay">
    <div class="co-pay__inner container">
        <h2 class="co-pay__title">選定療養とは？</h2>
        <p class="co-pay__note">
            選定療養とは、健康保険が適用される治療に加えて、保険対象外の治療・追加費用の自己負担で受けられる仕組みです。
        </p>
        <p class="co-pay__note">
            2020年4月からは、この制度を利用して多焦点眼内レンズを用いた白内障手術が可能になりました。
        </p>
        <p class="co-pay__desc">
            手術の方法自体は単焦点眼内レンズの場合と同じく保険が適用されますが、レンズを多焦点のタイプに変更する際に発生する差額分のみを自己負担すればよい形となります。
            これにより、これまで全額自己負担であった多焦点眼内レンズの手術費用が、大幅に軽減された形で受けられるようになりました。
        </p>

        <figure class="co-pay__card">
			
            <img class="co-pay__graph"
                src="https://keiyu-ganka.mark1-web.com/wp-content/uploads/2025/08/Frame-1000003600.png"
                alt="単焦点レンズと多焦点レンズの費用比較図" width="864" height="560" decoding="async" loading="lazy" />
        </figure>
    </div>
</section>

<!-- ============ 採用レンズ一覧（比較表） ============ -->
<section class="section lenslist" id="adopted-lens">
    <div class="container">
        <h2 class="lenslist__title" id="a08">
            足立慶友眼科の白内障手術で使用する<br>多焦点眼内レンズ一覧
        </h2>
		
<div class="lenslist__hint" aria-hidden="true">
  <span class="lenslist__hint-arrow lenslist__hint-arrow--left"></span>
  <img class="lenslist__hint-icon"
       src="http://keiyu-ganka.mark1-web.com/wp-content/uploads/2025/08/icon.png"
       alt="">
  <span class="lenslist__hint-arrow lenslist__hint-arrow--right"></span>
  <span class="lenslist__hint-label">横向きにスクロールできます</span>
</div>

        <div class="lenslist__wrap">
			    <div class="lenslist__heads" aria-hidden="true">
        <div class="headcell"></div><!-- 左の行見出しスペーサー（col--rowhead と対応） -->

        <div class="headcell">
          <div class="lenshead">
            <img class="lenshead__img"
                 src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/lens_panoptix.png"
                 alt="">
            <span class="lenshead__name">PanOptix</span>
          </div>
        </div>

        <div class="headcell">
          <div class="lenshead">
            <img class="lenshead__img"
                 src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/lens_vivity.png"
                 alt="">
            <span class="lenshead__name">Vivity</span>
          </div>
        </div>

        <div class="headcell">
          <div class="lenshead">
            <img class="lenshead__img"
                 src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/lens_intencity.png"
                 alt="">
            <span class="lenshead__name">INTENCITY</span>
          </div>
        </div>

        <div class="headcell">
          <div class="lenshead">
            <img class="lenshead__img"
                 src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/lens_finevision.png"
                 alt="">
            <span class="lenshead__name">FineVision</span>
          </div>
        </div>
      </div>
            <table class="lenslist__table">
                <colgroup>
                    <col class="col--rowhead">
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>

                <thead>
                    <tr>
                        <th class="is-sticky th--corner" aria-hidden="true"></th>

                                    <th class="th-lens" scope="col" aria-label="PanOptix"></th>
            <th class="th-lens" scope="col" aria-label="Vivity"></th>
            <th class="th-lens" scope="col" aria-label="INTENCITY"></th>
            <th class="th-lens" scope="col" aria-label="FineVision"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="lenslist--01">
                        <th class="is-sticky">特徴</th>
                        <td>
                            初めて国内承認を取得した3焦点レンズ。レンズの特性はENLIGHTENテクノロジーを採用しており、遠方から近方まで幅広い距離で良好な見え方が期待できる。
                        </td>
                        <td>
                            遠方から中間、近方まで連続して広がるように見えるのが特徴。本来の水晶体の働きに近い、自然な見え方が実現可能。<br><br>
                            表面に独自の技術が取り入れられており、多焦点眼内レンズの弱点であるハローグレアなどの異常光視症が単焦点眼内レンズと同程度である0%に近いといわれている。
                        </td>
                        <td>
                            これまでの2焦点や3焦点眼内レンよりさらに進化し、遠距離〜40cmの全距離でスムーズな見え方を実現できる。<br><br>“5焦点” 眼内レンズであることが最大の特徴。
                        </td>
                        <td>
                            「遠方と近方」、「遠方と中間」の2種類の2焦点眼内レンズを組み合わされている3焦点レンズ。<br><br>遠方と近方だけでなく、中間距離へのピント調整も優れている。レンズの構造により光学的エネルギーロスが抑えられていることからコントラスト感度が良く、ハローグレアもほとんどない。
                        </td>
                    </tr>

                    <tr class="lenslist--02">
                        <th class="is-sticky">光学部デザイン</th>
                        <td>3焦点回折型</td>
                        <td>屈折型<br>（焦点深度拡張型：EDOF）</td>
                        <td>5焦点回析型</td>
                        <td>3焦点回折型</td>
                    </tr>

                    <tr class="lenslist--03">
                        <th class="is-sticky">ピント</th>
                        <td>3焦点<br>（∞・60cm・40cm）</td>
                        <td>遠視焦点<br>（∞・40cm）</td>
                        <td>5焦点<br>（∞・135cm・80cm・60cm・40cm）</td>
                        <td>3焦点<br>（∞・75cm・35cm）</td>
                    </tr>

                    <tr class="lenslist--04">
                        <th class="is-sticky">乱視矯正</th>
                        <td class="mark mark--yes" aria-label="あり"></td>
                        <td class="mark mark--yes" aria-label="あり"></td>
                        <td class="mark mark--yes" aria-label="あり"></td>
                        <td class="mark mark--yes" aria-label="あり"></td>
                    </tr>

                    <tr class="lenslist--05">
                        <th class="is-sticky">ハロー・グレア</th>
                        <td>やや少ない</td>
                        <td>なし</td>
                        <td>少ない</td>
                        <td>少ない</td>
                    </tr>

                    <tr class="lenslist--06">
                        <th class="is-sticky">コントラスト感度</th>
                        <td>高い</td>
                        <td>低い</td>
                        <td>高い</td>
                        <td>やや高い</td>
                    </tr>

                    <tr class="lenslist--07">
                        <th class="is-sticky">生産国（会社）</th>
                        <td>アメリカ<br>（Alcon）</td>
                        <td>アメリカ<br>（Alcon）</td>
                        <td>イスラエル<br>（Hanita）</td>
                        <td>ベルギー<br>（Phys IOL）</td>
                    </tr>

                    <tr class="lenslist--08">
                        <th class="is-sticky">費用区分</th>
                        <td>選定療養</td>
                        <td>選定療養</td>
                        <td>自由診療</td>
                        <td>選定療養</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
	<div class="lens__cta multi-btn"><a href="/cataract/multifocal" class="btn btn--primary">当院の多焦点眼内レンズ一覧</a></div>
</section>

<!-- ============ 料金（Price） ============ -->
<section class="section price" id="price">
    <div class="container">
        <h2 class="price__title" id="a09">費用</h2>
        <p class="price__lead">入院を伴わない日帰り手術の場合における、費用の目安です。</p>

        <div class="price__block">
            <h3 class="price__block-title c-sectionTitle">単焦点眼内レンズ（保険適用）</h3>
            <div class="price-table">
                <div class="price-table__head">
                    <div class="price-table__th">施術内容</div>
                    <div class="price-table__th">費用</div>
                </div>
                <div class="price-table__row">
                    <div class="price-table__td">1割負担の方</div>
                    <div class="price-table__td">約15,000円</div>
                </div>
                <div class="price-table__row">
                    <div class="price-table__td">3割負担の方</div>
                    <div class="price-table__td">約45,000円</div>
                </div>
            </div>
            <p class="price__note">※症状の程度により、注射や薬剤が変わるため、費用は多少前後する場合があります。</p>
        </div>

        <div class="price__block">
            <h3 class="price__block-title c-sectionTitle">多焦点眼内レンズ（選定療養）</h3>
            <div class="price-table">
                <div class="price-table__head">
                    <div class="price-table__th">施術内容</div>
                    <div class="price-table__th">費用</div>
                </div>
                <div class="price-table__row">
                    <div class="price-table__td">Pan Optix(パンオプティクス)</div>
                    <div class="price-table__td">330,000円</div>
                </div>
				<div class="price-table__row">
                    <div class="price-table__td">Clareon Vivity（クラレオン ビビティ）</div>
                    <div class="price-table__td">330,000円</div>
                </div>
                <div class="price-table__row">
                    <div class="price-table__td">FINE VISION(ファインビジョン)</div>
                    <div class="price-table__td">280,000円</div>
                </div>
            </div>
            <p class="price__note">※上記レンズ代金に加え、保険で算定される費用があります。</p>
        </div>

        <div class="price__block">
            <h3 class="price__block-title c-sectionTitle">多焦点眼内レンズ（自由診療）</h3>
            <div class="price-table">
                <div class="price-table__head">
                    <div class="price-table__th">施術内容</div>
                    <div class="price-table__th">費用</div>
                </div>
                <div class="price-table__row">
                    <div class="price-table__td">Intensity（インテンシティ）</div>
                    <div class="price-table__td">660,000円</div>
                </div>
            </div>
			<p class="price__note">※上記レンズ代金に加え、手術代金がかかります。</p>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section faq" id="faq" style="display:none;">
    <div class="container">
        <h2 class="faq__title" id="a10">よくある質問</h2>
        <div class="faq__list">
            <details class="faq__item" open>
				<summary class="faq__q"><span>テキストテキストテキストテキストテキストテキストテキスト</span><div class="i_box"></div></summary>
                <div class="faq__a"><span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span>
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__q"><span>テキストテキストテキストテキストテキストテキストテキスト</span><div class="i_box"></div></summary>
                <div class="faq__a">テキストテキストテキストテキストテキストテキストテキストテキスト</div>
            </details>
            <details class="faq__item">
                <summary class="faq__q"><span>テキストテキストテキストテキストテキストテキストテキスト</span><div class="i_box"></div></summary>
                <div class="faq__a">テキストテキストテキストテキストテキストテキストテキストテキスト</div>
            </details>
            <details class="faq__item">
                <summary class="faq__q"><span>テキストテキストテキストテキストテキストテキストテキスト</span><div class="i_box"></div></summary>
                <div class="faq__a">テキストテキストテキストテキストテキストテキストテキストテキスト</div>
            </details>
        </div>
    </div>
</section>

<!-- ============ 監修医（Doctor） ============ -->
<section class="section doctor" id="doctor">
    <div class="container">
        <p class="doctor__title">このページの監修者</p>
        <article class="doctor__card card">
            <img src="<?php echo get_template_directory_uri(); ?>/cataract/assets/img/doctor_img.png"
                class="doctor__media">
            <div class="doctor__body">
                <div class="doctor__header">
                    <p class="doctor__name">上村 文 <span class="doctor__name-en">Aya Uemura</span></p>
                </div>
                <p class="doctor__desc">
                    大学病院レベルの最新設備を備え、地域の皆様に安心して受診いただける“かかりつけ眼科”を目指しております。<br>一般的な眼科診療から高度な治療まで幅広く対応し、患者様に寄り添った医療を大切にしています。 <br>また、学校医として、地域の子どもたちの目の健康にも力を入れております。
                </p>
                <div class="doctor__more">
                    <a class="btn btn--ghost" href="/doctor/">医師について詳しく</a>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- ============ 関連コンテンツ（カード） ============ -->
<?php
$summary_q = keiyu_ganka_query_cataract_child_pages_with_thumbnail(6);
?>
<section class="section articles" id="summary" <?php echo $summary_q->have_posts() ? '' : ' style="display:none;"'; ?>>
    <div class="container">
        <h2 class="articles__title">白内障についてもっと詳しく知りたい方へ</h2>
        <div class="articles__grid">
            <?php
            while ($summary_q->have_posts()) :
                $summary_q->the_post();
                $summary_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>
                <a class="article-card" href="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url($summary_thumb); ?>"
                        alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
                    <div class="article-card__title"><?php echo esc_html(get_the_title()); ?></div>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>