<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="all">
	<div class="single-head__content" id="page-top">
		<h1 class="single-head__title">お知らせ</h1>
	</div>
<div class="single__inner-wrap">
	<div class="single__inner">
		
<?php if ( have_posts() ) : ?>
    <ul class="news-archive">
      <?php while ( have_posts() ) : the_post(); ?>
        <li class="news-item">
          <a href="<?php the_permalink(); ?>">
            <time class="news-date" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
              <?php echo esc_html( get_the_date() ); ?>
            </time><br>
            <span class="news-title"><?php the_title(); ?></span>
          </a>
          <?php if ( has_excerpt() ) : ?>
            <div class="news-excerpt"><?php the_excerpt(); ?></div>
          <?php endif; ?>
        </li>
      <?php endwhile; ?>
    </ul>

    <div class="pagination">
  <?php
  the_posts_pagination([
    'mid_size'           => 2,
    'end_size'           => 1,
    'prev_text'          => '&lt; Prev',   // 「< Prev」
    'next_text'          => 'Next &gt;',   // 「Next >」
    'screen_reader_text' => '',            // 視覚的見出しを非表示
  ]);
  ?>
</div>
  <?php else : ?>
    <p>現在お知らせはありません。</p>
  <?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>