<?php
/**
 * Template Name: コラム一覧
 *
 * 白内障固定ページ直下の子ページのうち、アイキャッチ画像があるものを
 * 公開日の新しい順に3列グリッドで表示します。
 * 固定ページに本文を入れた場合は一覧の上に表示されます。
 */
get_header();
?>

<div class="single-head__content" id="page-top">
	<h1 class="single-head__title"><?php the_title(); ?></h1>
</div>
<div class="pan-kuzu">
	<?php
	if ( function_exists( 'yoast_breadcrumb' ) ) {
		yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
	}
	?>
</div>

<div class="single__inner-wrap column-list">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			if ( trim( (string) get_post()->post_content ) !== '' ) :
				?>
				<div class="single__inner column-list__intro">
					<?php the_content(); ?>
				</div>
				<?php
			endif;
		endwhile;
	endif;

	$list_query = keiyu_ganka_query_cataract_child_pages_with_thumbnail(
		-1,
		array( get_queried_object_id() )
	);
	?>
	<section class="section articles column-list__articles" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
		<div class="container">
			<?php if ( $list_query->have_posts() ) : ?>
				<div class="articles__grid">
					<?php
					while ( $list_query->have_posts() ) :
						$list_query->the_post();
						$thumb = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
						?>
						<a class="article-card" href="<?php the_permalink(); ?>">
							<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy" decoding="async">
							<div class="article-card__title"><?php echo esc_html( get_the_title() ); ?></div>
						</a>
					<?php endwhile; ?>
				</div>
			<?php else : ?>
				<p class="column-list__empty">該当するページがありません。</p>
			<?php endif; ?>
		</div>
	</section>
	<?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
