<?php
/**
 * Template Name: NEWS
 *
 * @use : /news/
 */
 get_header();
 ?>
<div class="titleBar">
	<h2 class="lato">TOPICS<span>トピックス</span></h2>
</div>

<?php breadcrumb(); ?>

 <div class="newsCon _wrap_1130">
   <div class="newsCon_main">
		 <div class="newsCon_main_inner">
					<?php if(have_posts()){ ?>
						<ul clasS="newsLists">
							<?php while(have_posts()){
								the_post();

								//カテゴリ名を取得
								$terms = get_the_terms($post->ID, 'postcategory');
								$post_terms_id = $terms[0]->term_id;
								if($post_terms_id) {
									foreach ($terms as $term) {
										$cat_slug = $term->slug;
										$cat_name = $term->name;
									}
								}
							?>

							<a class="newsItem op" href="<?php the_permalink(); ?>">
								<?php 
									if( has_post_thumbnail() ){
										$thumb_url = get_the_post_thumbnail_url($post->ID,'large');
									} else {
										$thumb_url = get_template_directory_uri() .'/images/common/news_noimage.svg';
									}
								?>
								<div class="newsItem_thumbArea">
									<div style='background-image: url("<?php echo $thumb_url; ?>")'></div>
								</div>
								<div class="newsItem_textArea">
									<time class="newsItem__time"><?php the_time('Y.n.j'); ?></time>
									<?php echo term_list(); ?>
									<h3 class="newsItem__title"><?php the_title(); ?></h3>
									<p class="newsItem__excerpt">
										<?php echo mb_strimwidth(strip_tags(get_the_content()),0,100,'...','UTF-8'); ?>
									</p>
<!--									<div class="newsLists__more">詳細を見る</div>-->
								</div>
							</a>
						<?php } ?>
					 </ul>

						<?php if(function_exists('wp_pagenavi')){
							wp_pagenavi($custom_wp_pagenavi = array(
								'wrapper_class' => 'wp-pagenavi space-a'
							));
						}
						wp_reset_postdata();

					} else {
						echo 'まだ記事がありません。';
					}
				?>
			</div>
		</div>

    <?php get_sidebar(); ?>

  </div>
<?php
 get_footer();