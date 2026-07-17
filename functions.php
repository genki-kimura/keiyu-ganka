<?php
/* ----------------------------------------
// テーマのセットアップ
---------------------------------------- */
function my_setup()
{
  add_theme_support('post-thumbnails'); 
  add_theme_support('automatic-feed-links'); 
  add_theme_support('title-tag'); 
  add_theme_support(
    'html5',
    array( 
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/* ----------------------------------------
// css,jsのセットアップ
---------------------------------------- */
function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_style('destyle', get_template_directory_uri() . '/css/destyle.css', array(), '1.0.0', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js"integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous' , array(), '1.0.0', true);
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/* ----------------------------------------
// 基本の投稿を任意の名前に変更
---------------------------------------- */
function post_has_archive( $args, $post_type ) {
if ( 'post' == $post_type ) {
  $args['rewrite'] = true;
  $args['has_archive'] = 'column'; //任意のスラッグ名　←アーカイブページを有効に
  $args['label'] = 'コラム'; //管理画面左ナビに「投稿」の代わりに表示される
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

add_filter( 'post_type_archive_link', function( $link, $post_type ) {
  if ( 'post' === $post_type ) {
  $post_type_object = get_post_type_object( 'post' );
  $slug = $post_type_object->has_archive;
  $link = get_home_url( null, '/' . $slug . '/' );
  }
  return $link;
 }, 10, 2 );
 function add_article_post_permalink( $permalink ) {
 $permalink = '/column' . $permalink; //「blog」は任意のものに変えて下さい。
  return $permalink;
 }
 add_filter( 'pre_post_link', 'add_article_post_permalink' );
 function add_article_post_rewrite_rules( $post_rewrite ) {
  $return_rule = array();
  foreach ( $post_rewrite as $regex => $rewrite ) {
  $return_rule['column/' . $regex] = $rewrite; //「blog」は任意のものに変えて下さい。
  }
 return $return_rule;
 }
 add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );

/* ----------------------------------------
// cf7の自動挿入タグを無効
---------------------------------------- */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 

//----------------------------------------------------
// ビジュアルエディタにスタイルを適用
//----------------------------------------------------

function my_theme_setup() {
  // editor-styles を指定
  add_theme_support('editor-styles');
  // 読み込むスタイルシートの場所を指定
  add_editor_style('editor-style.css'); 
}
add_action('after_setup_theme', 'my_theme_setup');

//----------------------------------------------------
// 抜粋の記号と文字数の設定
//----------------------------------------------------

function excerpt_word() {
  return '...';
}
add_filter('excerpt_more','excerpt_word');

function excerpt_length() {
  return 80;
}
add_filter( 'excerpt_mblength', 'excerpt_length');

//----------------------------------------------------
// アーカイブTOPのパンクズ
//----------------------------------------------------
function my_static_breadcrumb_adder( $breadcrumb_trail ) {
  // 投稿タイプが 'post' またはカテゴリページ、検索結果ページ、単一投稿ページの場合に実行する
  if ( is_post_type_archive('post') || is_category() || is_search() || is_single() ) {

    $item = null; // $item を初期化

    if ( is_post_type_archive('post') || is_category() || is_search() ) { // 投稿一覧ページ、カテゴリページ、検索結果ページの場合
      $item = new bcn_breadcrumb('コラム一覧', null, array('post'), home_url('columns/'), null, true);
    } elseif ( is_single() && get_post_type() === 'post' ) { // 単一投稿ページで投稿タイプが 'post' の場合
      $item = new bcn_breadcrumb('コラム一覧', null, array('post'), home_url('columns/'), null, true);
    }

    if ( $item ) {
      $stuck = array_pop( $breadcrumb_trail->breadcrumbs ); // HOME 一時退避
      $breadcrumb_trail->breadcrumbs[] = $item; // コラム一覧 追加
      $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す
    }
  }
}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');

//----------------------------------------------------
// エディター
//----------------------------------------------------
add_action('after_setup_theme', 'block_editor_css');
function block_editor_css() {
	add_theme_support('editor-styles');
	add_editor_style('css/style.css'); //サイトオリジナル
	add_editor_style('editor-style.css'); //エディタ専用
}

//----------------------------------------------------
// メディアwebpアップ対応
//----------------------------------------------------
function custom_mime_types( $mimes ) {
  $mimes['webp'] = 'image/webp';
  return $mimes;
}

//----------------------------------------------------
// Yoast SEO：タイトル＆ディスクリプション設定のカスタマイズ
//----------------------------------------------------

// タイトル設定
function custom_wpseo_title($title){ 
  if ( is_post_type_archive( 'post' ) ) {
    $title = '新着コラム一覧 | 足立区五反野 足立慶友眼科';
  }elseif( is_single() ){
    $title = get_the_title().' | 足立区五反野 足立慶友眼科';
  }
  
  // 
  return $title; 
} 
add_filter('wpseo_title', 'custom_wpseo_title');

//----------------------------------------------------
// タグアーカイブページを無効に
//----------------------------------------------------
function disable_tag_archive( $query ) {
  if ( $query->is_tag() ) {
      $query->set_404();
  }
}
add_action( 'pre_get_posts', 'disable_tag_archive' );

//----------------------------------------------------
// パンクズの構造化データ
//----------------------------------------------------
function json_breadcrumb() {
 
  if( is_admin() || is_home() || is_front_page() ){ return; }
 
  $position  = 1;
  $query_obj = get_queried_object();
  // 現在のページURL（HTTPS 前提で WordPress 設定に従う）
  if ( is_page() || is_single() ) {
    $permalink = esc_url( get_permalink() );
  } else {
    $permalink = esc_url( home_url( $_SERVER['REQUEST_URI'] ) );
  }
 
  $json_breadcrumb = array(
    "@context"        => "http://schema.org",
    "@type"           => "BreadcrumbList",
    "name"            => "パンくずリスト",
    "itemListElement" => array(
      array(
        "@type"    => "ListItem",
        "position" => $position++,
        "item"     => array(
          "name" => "HOME",
          "@id"  => esc_url( home_url('/') ),
        )
      ),
    ),
  );
 
  if( is_page() ) {
 
    $ancestors   = get_ancestors( $query_obj->ID, 'page' );
    $ancestors_r = array_reverse($ancestors);
    if ( count( $ancestors_r ) != 0 ) {
      foreach ($ancestors_r as $key => $ancestor_id) {
        $ancestor_obj = get_post($ancestor_id);
        $json_breadcrumb['itemListElement'][] = array(
          "@type"    => "ListItem",
          "position" => $position++,
          "item"     => array(
            "name" => esc_html($ancestor_obj->post_title),
            "@id"  => esc_url( get_the_permalink($ancestor_obj->ID) ),
          )
        );
      }
    }
    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "name" => esc_html($query_obj->post_title),
        "@id"  => $permalink,
      )
    );
 
  } elseif( is_post_type_archive() ) {
 
    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "name" => $query_obj->label,
        "@id"  => esc_url( get_post_type_archive_link( $query_obj->name ) ),
      )
    );
 
  } elseif( is_tax() || is_category() ) {
 
    if ( !is_category() ) {
      $post_type = get_taxonomy( $query_obj->taxonomy )->object_type[0];
      $pt_obj    = get_post_type_object( $post_type );
      $json_breadcrumb['itemListElement'][] = array(
        "@type"    => "ListItem",
        "position" => $position++,
        "item"     => array(
          "name" => $pt_obj->label,
          "@id"  => esc_url( get_post_type_archive_link($pt_obj->name) ),
        )
      );
    }
 
    $ancestors   = get_ancestors( $query_obj->term_id, $query_obj->taxonomy );
    $ancestors_r = array_reverse($ancestors);
    foreach ($ancestors_r as $key => $ancestor_id) {
      $json_breadcrumb['itemListElement'][] = array(
        "@type"    => "ListItem",
        "position" => $position++,
        "item"     => array(
          "name" => esc_html( get_cat_name($ancestor_id) ),
          "@id"  => esc_url( get_term_link($ancestor_id, $query_obj->taxonomy) ),
        )
      );
    }
 
    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "name" => esc_html( $query_obj->name ),
        "@id"  => esc_url( get_term_link($query_obj) ),
      )
    );
 
  } elseif( is_single() ) {
 
    if ( !is_single('post') ) {
      $pt_obj = get_post_type_object( $query_obj->post_type );
      $json_breadcrumb['itemListElement'][] = array(
        "@type"    => "ListItem",
        "position" => $position++,
        "item"     => array(
          "name" => $pt_obj->label,
          "@id"  => esc_url( get_post_type_archive_link($pt_obj->name) ),
        )
      );
    }
 
    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "name" => esc_html( $query_obj->post_title ),
        "@id"  => $permalink,
      )
    );
 
  } elseif( is_404() ) {
 
    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "name" => "404 Not found",
        "@id"  => $permalink,
      )
    );
 
  } elseif( is_search() ) {
 
    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "name" => "「" . get_search_query(). "」の検索結果",
        "@id"  => $permalink,
      )
    );
 
  }
 
  echo '<script type="application/ld+json">'.json_encode($json_breadcrumb).'</script>';
}
 
add_action( 'wp_head', 'json_breadcrumb' );

//----------------------------------------------------
// 白内障固定ページの子で、アイキャッチ付きを公開日新しい順に取得
// $posts_per_page に -1 を渡すと件数無制限（一覧ページ用）
//----------------------------------------------------
function keiyu_ganka_query_cataract_child_pages_with_thumbnail( $posts_per_page = 3, $exclude_ids = array() ) {
  $parent_id = (int) url_to_postid( home_url( '/cataract/' ) );
  if ( ! $parent_id ) {
    $p = get_page_by_path( 'cataract', OBJECT, 'page' );
    $parent_id = $p ? (int) $p->ID : 0;
  }
  $args = array(
    'post_type'      => 'page',
    'post_status'    => 'publish',
    'posts_per_page' => (int) $posts_per_page,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'no_found_rows'  => true,
    'meta_query'     => array(
      array(
        'key'     => '_thumbnail_id',
        'compare' => 'EXISTS',
      ),
    ),
  );
  if ( $parent_id ) {
    $args['post_parent'] = $parent_id;
  } else {
    $args['post__in'] = array( 0 );
  }
  $exclude_ids = array_filter( array_map( 'intval', (array) $exclude_ids ) );
  if ( $exclude_ids ) {
    $args['post__not_in'] = $exclude_ids;
  }
  return new WP_Query( $args );
}

add_theme_support( 'pop-up-banner' );

//----------------------------------------------------
// HTTPからHTTPSへのリダイレクト
//----------------------------------------------------
function force_https_redirect() {
  $host = isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : '';
  if ( strpos( $host, 'localhost' ) !== false || strpos( $host, '127.0.0.1' ) !== false || strpos( $host, '.local' ) !== false ) {
    return;
  }
  if ( ! is_ssl() && ! is_admin() ) {
    $redirect_url = 'https://' . $host . $_SERVER['REQUEST_URI'];
    wp_redirect( $redirect_url, 301 );
    exit;
  }
}
add_action( 'template_redirect', 'force_https_redirect' );

// メジャーアップデート停止（大きな変更は手動）
add_filter( 'allow_major_auto_core_updates', '__return_false' );