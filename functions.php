<?php
/**
 * Functions
 */

/* ----------------------
dena functions */
require_once get_theme_file_path().'/functions-class.php';

/* ----------------------
Remove catch frase */
add_filter( 'document_title_parts', 'remove_title_description', 10, 1 );
function remove_title_description ($title){
  unset($title['tagline']);
  return $title;
}

/* ----------------------
Remove version */
remove_action('wp_head', 'wp_generator');
function remove_wp_ver_css_js($src){
  if(strpos($src, 'ver=')){
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('style_loader_src', 'remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'remove_wp_ver_css_js', 9999);

/* ----------------------
Remove dns-prefetch */
add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);
function remove_dns_prefetch($hints, $relation_type) {
	if ('dns-prefetch' === $relation_type){
		return array_diff( wp_dependencies_unique_hosts(), $hints);
	}
	return $hints;
}

/* ----------------------
Remove Emoji */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* ----------------------
Remove Rest */
remove_action('wp_head','rest_output_link_wp_head');

/*-----------------------------------------------------*/
/*  管理画面メニュー：項目名非表示
/*-----------------------------------------------------*/
function remove_menus () {
    global $menu;
     unset($menu[5]);  // 投稿
}
add_action( 'admin_menu', 'remove_menus' );
/*-------------------------------------------*/
/*  親ページの判定
/*-------------------------------------------*/
function is_parent_slug() {
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}
/*-------------------------------------------*/
/*  管理画面　メニューの並び替え
/*-------------------------------------------*/
function my_custom_menu_order($menu_order) {
    if (!$menu_order) return true;
    return array(
        'index.php', //ダッシュボード
//        'separator1', //セパレータ１
        'edit.php?post_type=topics', //カスタムポスト
        'edit.php?post_type=member', //カスタムポスト
        'edit.php?post_type=recruitment', //カスタムポスト
        'edit.php?post_type=hajimete', //カスタムポスト
        'separator2', //セパレータ２
//        'edit.php?post_type=page', //固定ページ
//        'upload.php', //メディア (一番下に移動しました)
//        'edit-comments.php', //コメント
//        'separator-last', //最後のセパレータ
//        'themes.php', //外観
//        'plugins.php', //プラグイン
//        'users.php', //ユーザー
//        'tools.php', //ツール
//        'options-general.php', //設定
    );
}
add_filter('custom_menu_order', 'my_custom_menu_order'); 
add_filter('menu_order', 'my_custom_menu_order');
/*-----------------------------------------------------*/
/*  管理画面メニューに固定ページ(トップページ)追加
/*-----------------------------------------------------*/
function add_page_to_admin_menu() {
  add_menu_page( 'トップページ', 'トップページ(資料)', 'manage_options', 'post.php?post=1417&action=edit', '', 'dashicons-admin-page', 4);
}
add_action( 'admin_menu', 'add_page_to_admin_menu' );


/*
* css & scripts
*/
/* ----------------------
header */
function add_style_scripts(){
		if(strstr($_SERVER['REQUEST_URI'],'hajimete')==false){ //デジタルはじめてパックページ以外で呼び出し
//		$timestamp = '?220106-2';
	  $timestamp = '?'.time();

		// CSS
		wp_enqueue_style(BO::prefix().'-reset',get_template_directory_uri().'/css/reset.css');
		wp_enqueue_style(BO::prefix().'-util',get_template_directory_uri().'/css/util.css',array(BO::prefix().'-reset'));
		wp_enqueue_style(BO::prefix().'-aos',get_template_directory_uri().'/lib/aos/aos.css');
		wp_enqueue_style(BO::prefix().'-common',get_template_directory_uri().'/css/common.css'.$timestamp,array(BO::prefix().'-reset',BO::prefix().'-util'));

		if(is_front_page()){
			wp_enqueue_style(BO::prefix().'-home',get_template_directory_uri().'/css/home.css'.$timestamp,array(BO::prefix().'-common'));
		}

		if(is_page()){
			/*
			// 親ページ
			$csspath = '/css/'.BO::parent_page_slug().'.css';
			$cssfullpath = get_template_directory().$csspath;
			if(file_exists($cssfullpath)){
				wp_enqueue_style(BO::prefix().'-'.BO::parent_page_slug(),get_template_directory_uri().$csspath,array(BO::prefix().'-common'));
			}
			*/
			// 祖先ページ
			$csspath = '/css/'.BO::ancestors_page_slug().'.css';
			$cssfullpath = get_template_directory().$csspath;
			if(file_exists($cssfullpath)){
				wp_enqueue_style(BO::prefix().'-'.BO::ancestors_page_slug(),get_template_directory_uri().$csspath.$timestamp,array(BO::prefix().'-common'));
			}
			// 本ページ
			$csspath = '/css/'.BO::page_slug().'.css';
			$cssfullpath = get_template_directory().$csspath;
			if(file_exists($cssfullpath)){
				wp_enqueue_style(BO::prefix().'-'.BO::page_slug(),get_template_directory_uri().$csspath.$timestamp,array(BO::prefix().'-common'));
			}
		}
		if(is_page('environment')){
			wp_enqueue_style(BO::prefix().'-swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css');
		}
			
		if(is_page('adsafety')||is_page('privacy-policy-agree')||is_page('recruit-policy')){
			wp_enqueue_style(BO::prefix().'-privacy',get_template_directory_uri().'/css/privacy.css?2',array(BO::prefix().'-common'));
		}

		if(is_singular('member')||is_singular('human')){
			wp_enqueue_style(BO::prefix().'-recruit',get_template_directory_uri().'/css/recruit.css',array(BO::prefix().'-common'));
		}

		if(is_parent_slug()==='service-old'){
			wp_enqueue_style(BO::prefix().'-service-old',get_template_directory_uri().'/css/service-old.css',array(BO::prefix().'-common'));
		}
		// page-contactform.php、page-transaction_application.php、page-simulation_form.phpテンプレートにcontactform.cssを適用
		if (is_page_template('page-contactform.php') || ('page-transaction_application.php') || ('page-simulation_form.php') || ('page-subcontracting_form.php')) {
			wp_enqueue_style('contactform-style', get_template_directory_uri() . '/css/contactform.css');
		}

		// JS
		wp_enqueue_script(BO::prefix().'-jquery',get_template_directory_uri().'/js/jquery.min.js');
		wp_enqueue_script(BO::prefix().'-ofi',get_template_directory_uri().'/lib/ofi.min.js');
		wp_enqueue_script(BO::prefix().'-vue',get_template_directory_uri().'/lib/vue.min.js');
		wp_enqueue_script(BO::prefix().'-vue-scrollto',get_template_directory_uri().'/lib/vue-scrollto.js');
		wp_enqueue_script(BO::prefix().'-aos',get_template_directory_uri().'/lib/aos/aos.js');
		wp_enqueue_script('jquery-ui-datepicker');

		if(is_page('environment')){
			wp_enqueue_script(BO::prefix().'-swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js');
		}
	}
}
add_action('wp_enqueue_scripts', 'add_style_scripts');


	/* ----------------------
	footer */
	function add_footer_scripts(){
		$timestamp = '?202012';
  $timestamp = '?'.time();


	// JS
	wp_enqueue_script(BO::prefix().'-site',get_template_directory_uri().'/js/site.js'.$timestamp,array(BO::prefix().'-vue',BO::prefix().'-ofi'));
}
add_action('wp_head','add_footer_scripts');


/* ----------------------
thumbnail */
if(!is_page('hajimete') && !is_singular('hajimete') && !is_archive('hajimete') && !is_tax('hajimete_tax')){
	add_theme_support('post-thumbnails');
}

/* ----------------------
editor style */
add_editor_style('css/editor-style.css');

/* ----------------------
single on current-cat class */
function sgr_show_current_cat_on_single($output) {
	if(!is_page('hajimete') && !is_singular('hajimete') && !is_archive('hajimete') && !is_tax('hajimete_tax')){
		global $post;
		if(is_single()){
		$categories = wp_get_post_categories($post->ID);
			foreach($categories as $catid){
				$cat = get_category($catid);

				// Find cat-item-ID in the string
				if(preg_match('#cat-item-' . $cat->cat_ID . '#', $output)){
					$output = str_replace('cat-item-'.$cat->cat_ID, 'cat-item-'.$cat->cat_ID . ' current-cat', $output);
				}
			}
		}
		return $output;
	}
}
add_filter('wp_list_categories', 'sgr_show_current_cat_on_single');

/* ----------------------
text only in page */
function disable_visual_editor_in_page(){
	global $typenow;
	if( $typenow == 'page'){
		add_filter('user_can_richedit', 'disable_visual_editor_filter');
	}
}
function disable_visual_editor_filter(){
	return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );


/* ----------------------
抜粋 文字数 */
function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

/*-----------------------------------------------------
	topics タクソノミー未選択時に特定のタームを選択させる
----------------------------------------------------- */
function add_defaultcategory_automatically($post_ID) {
  global $wpdb;
  $curTerm = wp_get_object_terms($post_ID, 'postcategory');
  if (0 == count($curTerm)) {
    $defaultTerm= array(65); //事業
    wp_set_object_terms($post_ID, $defaultTerm, 'postcategory');
  }
}
add_action('publish_topics', 'add_defaultcategory_automatically');

/*-----------------------------------------------------
	管理画面 topics投稿 タクソノミーソート
----------------------------------------------------- */
function my_add_filter() {
  global $post_type;
  if ( 'topics' == $post_type ) {
?>
    <select name="postcategory">
      <option value="">カテゴリー指定なし</option>
<?php
      $terms = get_terms('postcategory');
      foreach ($terms as $term) { ?>
        <option value="<?php echo $term->slug; ?>" <?php if ( $_GET['postcategory'] == $term->slug ) { print 'selected'; } ?>><?php echo $term->name; ?></option>
<?php
      }
?>
    </select>
<?php
  }
}
add_action( 'restrict_manage_posts', 'my_add_filter' );

/*-----------------------------------------------------
	topics タクソノミーリスト取得
----------------------------------------------------- */
function term_list(){
  global $post;

  $local_post = get_post( $post->ID );
  $post_type = $local_post->post_type;
  $taxonomies = get_object_taxonomies( $post_type, 'postcategory' );
  $out = array();
	
  foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

    // 投稿に付けられたタームを取得
    $terms = get_the_terms( $post->ID, $taxonomy_slug );

    if ( !empty( $terms ) ) {
			$out[] = '<div class="newsItem_cateArea">';
      foreach ( $terms as $term ) {
        $out[] .=
          '  <div class="newsItem__cate ' . $term->slug . '">' .$term->name . "</div>";
      }
			$out[] .= '</div>';
    }
  }
  return implode('', $out );
}
/*-----------------------------------------------------
	管理画面 topics 記事並び順
----------------------------------------------------- */
function admin_custom_posttype_order($wp_query) {
  if( is_admin() ) {
    $post_type = $wp_query->query['post_type'];
    if($post_type == 'topics') {
      $wp_query->set('orderby','date'); //並べ替えの基準(日付)
      $wp_query->set('order','DESC'); //新しい順
    }
  }
}
add_filter('pre_get_posts', 'admin_custom_posttype_order');
/*-----------------------------------------------------
	パンくずリスト
----------------------------------------------------- */
/*
 カスタム投稿タイプを取得
*/
function get_current_post_type() {
	$post_type = get_post_type();
   if( empty($post_type) ) {
	  if( is_category() ) {
		$tax = get_taxonomy('category');
		$post_type = $tax->object_type[0];
	  } else
	  if( is_tax() ) {
		$term = get_query_var('taxonomy');
		$tax = get_taxonomy( $term );
		$post_type = $tax->object_type[0];
	  } else
	  if( is_archive() ) {
		$post_type = get_query_var( 'post_type' );
	  } else
	  if( is_home() ) {
		$post_type = 'info';
	  }
	}
	return $post_type;
}

/*
 パンくず表示設定
*/
function breadcrumb() {
	global $post;
	$post_type = get_current_post_type();
	$str ='';
	if(!is_home()&&!is_admin()){
		$str.= '<div id="breadcrumb"><div class="home">';
		$str.= '<a href="'. home_url() .'"><span>TOP</span></a> &gt;</div>';
		if($post_type != 'post' && $post_type != 'page' && !is_search()){
			$post_type_name = get_post_type_object($post_type);
			$post_type_name = $post_type_name->label;
			
			if(is_post_type_archive($post_type)) {
				$str.='<div><span><span>'. $post_type_name . '</span></span>';
				$str.='</div>';
			} else {
				$str.='<div><a href="'. get_post_type_archive_link($post_type) .'"><span>'. $post_type_name . '</span></a>';
				$str.=' &gt;</div>';
			}
		}
		if(is_search()) {
			$this_type = htmlspecialchars($_GET['posttype']);
			$key = htmlspecialchars($_GET['s']);
			$post_type_name = get_post_type_object($this_type);
			$post_type_name = $post_type_name->label;
			$str.='<div><a href="'. get_post_type_archive_link($this_type) .'"><span>'. $post_type_name . '</span></a>';
			$str.=' &gt;</div>';
			$str.='<div><span><span>「'. $key . '」に関する記事</span></span>';
			$str.='</div>';
		} elseif(is_archive()) {
			$cat = get_queried_object();
			if(!is_post_type_archive($post_type)){
				if($cat -> parent != 0){
					$taxonomy = $cat->taxonomy;
					$ancestors = array_reverse(get_ancestors($cat->term_id, $taxonomy));
					foreach($ancestors as $ancestor){
						$term_name = get_term($ancestor, $taxonomy);
						$term_name = $term_name->name;
						$str.='<div><span><span>'. $term_name .'</span></span> &gt;</div>';
					}
				}
				$str.='<div><span><span>'. $cat->name . '</span></span></div>';
			}
		}elseif(is_page()) {
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestord) {
					$str.='<div><a href="'. get_permalink($ancestord).'"><span>'. get_the_title($ancestord) .'</span></a> &gt;</div>';
				}
			}
			$str.='<div><span><span>'. get_the_title() .'</span></span></div>';
		}elseif(is_single()) {
			$str.='<div><span><span>'. get_the_title() .'</span></span></div>';
		} else {
			$str.='<div>'. trim(wp_title('', false)) .'</div>';
		}
		$str.='</div>';
	}
	echo $str;
}

add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_NAME;
}

// mw wp formへの<p>タグや<br>の自動挿入しないようにする
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();
