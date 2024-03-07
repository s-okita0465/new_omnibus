<?php
/**
 * Functions Class
 */

class BO{

  private static $prefix;

  /**
   * prefix
   * @param none
   * @return string
   */
  public static function prefix(){
    $prefix_tmp = explode('.',$_SERVER['SERVER_NAME']);
    if(!empty($prefix_tmp[0])){
      self::$prefix = $prefix_tmp[0];
    } else {
      self::$prefix = 'bn';
    }
    return self::$prefix;
  }

  /**
   * js_is_root
   * @param none
   * @return html
   */
  public static function js_is_root(){
    if(is_home() || is_front_page()){
      echo '<script>var is_root=true;</script>';
    } else {
      echo '<script>var is_root=false;</script>';
    }
  }

 /**
  * title
  * @param none
  * @return string
  */
 public static function title(){
   $title = wp_get_document_title();
   return $title;
 }

 /**
  * page_slug
  * @param none
  * @return string
  */
 public static function page_slug(){
   global $post;
   $slug_name = $post->post_name;
   return $slug_name;
 }

 /**
  * body_class
  * @param none
  * @return string
  */
 public static function body_class(){
   if(is_front_page()){
     $class = 'home';
   } else {
     $class = 'underpage';
      if(is_archive() && get_post_type() == 'news'){
        $class .= ' news';
      } elseif(is_404()){
        $class .= ' page404';
      } else {
        if(is_single()){
          $class .= ' single';
        }
        if(! is_single()){
          $class .= ' '.self::page_slug();
        }

        // 祖先スラッグ
        /*
        $parent_slug = self::parent_page_slug();
        if(!empty($parent_slug) && $parent_slug != self::page_slug()){
          $class .= ' '.$parent_slug;
        }
        */
        $parent_slug = self::ancestors_page_slug();
        if(!empty($parent_slug) && $parent_slug != self::page_slug()){
          $class .= ' '.$parent_slug;
        }
      }
   }
   echo 'class="'.$class.'"';
 }

 /**
  * get parent page slug
  * 一つ目の </p> まで抜粋してタグ除去
  */
  public static function parent_page_slug(){
    global $post;
    $parent_id = $post->post_parent;
    $parent_slug = get_post($parent_id)->post_name;
    return !empty($parent_slug) ? $parent_slug : '';
  }

/**
  * get ancestors page slug
  * 祖先のページスラッグを取得
  */
  public static function ancestors_page_slug(){
    global $post;
    $ancestors = get_ancestors($post->ID,'page');
    $ancestor_id = array_pop($ancestors);
    $ancestor_slug = get_post($ancestor_id)->post_name;
    return !empty($ancestor_slug) ? $ancestor_slug : '';
  }


 /**
  * make plain excerpt
  * 一つ目の </p> まで抜粋してタグ除去
  */
  public static function excerpt($s){
    $content = apply_filters('the_content', $s);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = explode('</p>',$content);
    return strip_tags($content[0]);
  }

  /**
   * pagination
   */
  public static function pagination($query=''){
    if(!empty($query)){
      $max_num_pages = $query->max_num_pages;
    } else {
      global $wp_query;
      $max_num_pages = $wp_query->max_num_pages;
    }

    $big = 9999999999;
    $arg = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $max_num_pages,
        'prev_text' => '<img src="'.get_template_directory_uri().'/images/common/ico_prev_arrow.png" alt="">',
        'next_text' => '<img src="'.get_template_directory_uri().'/images/common/ico_next_arrow.png" alt="">',
        'mid_size' => 2,
    );

    $baselink = home_url().$_SERVER["REQUEST_URI"];
    $baselink = preg_replace('/page\/[0-9]+/','',$baselink);

    $pagination_pc = '<div class="pagination pc">';
    $pagination_sp = '<div class="pagination sp">';

    if($arg['current'] > 1){
      $pagination_pc .= "\n".'<a href="'.$baselink.'/page/1"><img src="'.get_template_directory_uri().'/images/common/ico_start_arrow.png" alt=""></a>'."\n";

      $pagination_sp .= '<a class="prev" href="'.$baselink.'/page/'.($arg['current']-1).'"><img src="'.get_template_directory_uri().'/images/common/ico_prev_arrow.png" alt="">前</a>';
    }
    $pagination_pc .= paginate_links($arg);
    if($arg['current'] != $max_num_pages){
      $pagination_pc .= "\n".'<a href="'.$baselink.'/page/'.$max_num_pages.'"><img src="'.get_template_directory_uri().'/images/common/ico_end_arrow.png" alt=""></a>';

      $pagination_sp .= '<a class="next" href="'.$baselink.'/page/'.($arg['current']+1).'">次<img src="'.get_template_directory_uri().'/images/common/ico_next_arrow.png" alt=""></a>';
    }
    $pagination_pc .= '</div>';
    $pagination_sp .= '</div>';

    if(2 < ($arg['current']-$arg['mid_size'])){
      $pagination_pc = str_replace("<a class='page-numbers' href='".$baselink."page/1'>1</a>", '', $pagination_pc);
    }

    if(3 < ($arg['total']-$arg['current'])){
      $pagination_pc = str_replace("<a class='page-numbers' href='".$baselink."/page/".$arg['total']."'>".$arg['total']."</a>", '', $pagination_pc);
    }

    $pagination = $pagination_pc.$pagination_sp;
    return $pagination;
  }
  
  /**
   * 一枚目を取得するコード
   */
  public static function first_img(){
     global $post;
     $first_img = '';
     if(has_post_thumbnail($post)){
       $image_id = get_post_thumbnail_id($post);
       $image_url = wp_get_attachment_image_src($image_id, true);
       $first_img = $image_url[0];
     } else {
       ob_start();
       ob_end_clean();
       $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
       $first_img = $matches[1][0];
     }
     return $first_img;
  }
  
  /**
   * get_total_count
   * 記事総数の取得
   * @param array array('post_type' => array('post',...))
   * @return int 記事数
   */
  public static function get_total_count($param=array()){
    global $wpdb;

    // param
    $def = array(
      'post_type' => array(),
    );
    $p = array_merge($def, $param);

    // base query
    $q = 'select count(*) from '.$wpdb->posts.' where post_status="publish"';

    // where
    if(!empty($p['post_type'])){
      $q .= 'and post_type in ("'.implode('","',$p['post_type']).'")';
    }

    // exec
    $r = $wpdb->get_var($q);

    // return
    return is_null($r) ? false : intval($r);
  }
  
  /**
   * chache control href & src
   * キャッシュの日時を変更
   * @return string
   */
  public static function get_file_cache_date($test_string='test'){
    // テストは time() を返却
    var_dump( $_SERVER['SCRIPT_NAME'] );
  
  }
}
