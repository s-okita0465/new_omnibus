<?php
/**
 * Template Name: NEWS
 *
 * @use : /news/
 */
 get_header();
 ?>
  <div class="pc titleBar">
    <h2><img alt="NEWS" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_news.png" width="88" height="22" 
    srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_news.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_news@2x.png 2x">
    <span>ニュース</span></h2>
 </div>

 <div class="newsWrap mvFirst">

   <div class="newsWrapMain">
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $news = new WP_Query(array(
            'post_type' => 'post',
            'paged' => $paged,
          ));
          if($news->have_posts()){
            while($news->have_posts()){
              $news->the_post();

              get_template_part('parts/news','list');
              
            }
            
            if(function_exists('wp_pagenavi')){
              wp_pagenavi(array('query'=>$news));
            }
            wp_reset_postdata();
            
          } else {
            echo '記事が見つかりませんでした。';
          }
        ?>
    </div>

    <?php get_sidebar('news'); ?>

  </div>
<?php
 get_footer();
