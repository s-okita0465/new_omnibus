<?php
/**
 * Index
 *
 * ページコンテンツをそのまま出力
 *
 * @use : 
 */
if(is_404()){
  wp_redirect(home_url('/'));
  exit;
}
 get_header();
 if(have_posts()){
   while(have_posts()){
     the_post();
     echo do_shortcode(get_the_content());
   }
 }
 get_footer();
