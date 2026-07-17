<?php
get_header();
?>

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
<div class="single__inner-wrap">

    <div class="single__inner">
        <?php the_content(); ?>

<?php get_footer(); ?>
		
		<script>
/* ==========================
   目次生成スクリプト（h2/h3抽出）
   ========================== */
(function () {
  // ---- 設定 ----
  const CONTENT_SELECTOR = '.single__inner-wrap'; // 記事本文のラッパー
  const TOC_BOX_SELECTOR = '.toc-box';
  const HEADING_SELECTOR = 'h2, h3'; // 対象見出し
  const HEADER_OFFSET_PX = 80; // 固定ヘッダー対策用マージン

  // 日本語対応の簡易スラッグ生成
  const slugify = (text) => {
    const base = (text || '').trim();
    const normalized = base.normalize ? base.normalize('NFKC') : base;
    const ascii = normalized
      .replace(/[・。、「」『』（）()\[\]{}【】〈〉《》—―ー…！!？：:；;、\.\,\/\\~^`'"“”’\s]+/g, '-')
      .replace(/-+/g, '-')
      .replace(/^-|-$/g, '');
    return (ascii || 'section').toLowerCase();
  };

  function buildTOC() {
    const content = document.querySelector(CONTENT_SELECTOR);
    const tocBox = document.querySelector(TOC_BOX_SELECTOR);
    if (!content || !tocBox) return;

    const headings = Array.from(content.querySelectorAll(HEADING_SELECTOR));
    if (!headings.length) return;

    // ID付与（既存IDがなければ生成、重複回避）
    const used = new Set(headings.map(h => h.id).filter(Boolean));
    headings.forEach(h => {
      if (!h.id) {
        let base = slugify(h.textContent);
        let id = base;
        let n = 2;
        while (used.has(id)) { id = `${base}-${n++}`; }
        h.id = id;
        used.add(id);
      }
      h.style.scrollMarginTop = HEADER_OFFSET_PX + 'px';
    });

    // UL/LIを階層化（h2直下にh3をぶら下げる）
    const rootUl = document.createElement('ul');
    rootUl.className = 'toc-list';
    let currentH2Li = null;
    let currentSubUl = null;

    headings.forEach(h => {
      const level = h.tagName.toLowerCase() === 'h2' ? 2 : 3;
      const a = document.createElement('a');
      a.href = `#${h.id}`;
      a.textContent = h.textContent.trim();

      const li = document.createElement('li');
      li.className = `toc-item toc-lv${level}`;
      li.appendChild(a);

      if (level === 2) {
        rootUl.appendChild(li);
        currentH2Li = li;
        currentSubUl = null;
      } else {
        if (!currentH2Li) {
          // h3が先に来るケースの保険
          const miscLi = document.createElement('li');
          miscLi.className = 'toc-item toc-lv2';
          const span = document.createElement('span');
          span.textContent = 'その他';
          miscLi.appendChild(span);
          rootUl.appendChild(miscLi);
          currentH2Li = miscLi;
        }
        if (!currentSubUl) {
          currentSubUl = document.createElement('ul');
          currentSubUl.className = 'toc-sub';
          currentH2Li.appendChild(currentSubUl);
        }
        currentSubUl.appendChild(li);
      }
    });

    // 差し込み
    const tocContent = tocBox.querySelector('.toc-content');
    if (tocContent) {
      tocContent.innerHTML = '';
      tocContent.appendChild(rootUl);
    }

    // トグル（[表示]/[非表示] 切り替え）
    const btn = tocBox.querySelector('.toc-toggle');
    const txt = tocBox.querySelector('.toc-toggle-text');
    if (btn && txt) {
      btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!expanded));
        tocBox.classList.toggle('is-collapsed', expanded);
        txt.textContent = expanded ? '[表示]' : '[非表示]';
      });
    }

    // 現在位置ハイライト（IntersectionObserver）
    if ('IntersectionObserver' in window) {
      const mapIdToLi = new Map();
      rootUl.querySelectorAll('a[href^="#"]').forEach(a => {
        const id = decodeURIComponent(a.getAttribute('href').slice(1));
        mapIdToLi.set(id, a.parentElement);
      });

      const observer = new IntersectionObserver((entries) => {
        // 一番上に近い（大きく見えている）見出しをアクティブに
        const visible = entries
          .filter(e => e.isIntersecting)
          .sort((a, b) => b.intersectionRatio - a.intersectionRatio);
        if (visible.length) {
          const id = visible[0].target.id;
          // リセット
          rootUl.querySelectorAll('.is-active').forEach(li => li.classList.remove('is-active'));
          const li = mapIdToLi.get(id);
          if (li) li.classList.add('is-active');
        }
      }, { rootMargin: `-${HEADER_OFFSET_PX + 10}px 0px -60% 0px`, threshold: [0, 0.2, 0.5, 1] });

      headings.forEach(h => observer.observe(h));
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', buildTOC);
  } else {
    buildTOC();
  }
})();
</script>