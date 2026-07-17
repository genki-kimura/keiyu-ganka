<?php
get_header();
?>

<div class="single-head__content news-archive" id="page-top">
    <h1 class="single-head__title">
        <?php the_title(); ?>
    </h1>
</div>
<div class="single__inner-wrap news-wrap">

    <div class="single__inner">
        <?php the_content(); ?>
		<a href="/news/" class="hellow__btn"><span class="hellow__inlink">お知らせ一覧はこちら</span></a>

<?php get_footer(); ?>