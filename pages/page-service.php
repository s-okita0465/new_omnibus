<?php
/**
 * Template Name: SERVICE new
 * 
 */
 get_header();
 ?>
 <div class="pc titleBar">
	 <h2 class="lato">SERVICE<span>サービス</span></h2>
 </div>
 
<div id="service_top" class="service_main service_top">
	<section>
    <div class="mv mvFirst">
      <img class="ofi" alt="SERVICE" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_add_mv_2104.jpg">
      <div class="mvInner">
        <p class="service__topTitle"><img alt="サービス概要" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_add_title.svg"></p>
      </div>
    </div>

		<div class="_wrap_1000">
			<div class="serviceIntro">
				<p class="serviceIntro__ext">最先端のアドテクノロジーを活用した各種広告サービスを通じ、<br class="pc">デジタル環境の進化によって変化したユーザーや社会に対する企業の<br class="pc">新たなコミュニケーション戦略の構築をサポートします。</p>
			</div>

			<div class="serviceList">
				<a href="<?php echo home_url('service/programaticads'); ?>" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_01.jpg?1" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_01.jpg?1 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_01@2x.jpg?1 2x"></figure>
					<div class="serviceBox__info">
						<h3>広告運用</h3>
						<div class="serviceBox__arrow">
							<div class="btnArrow"></div>
						</div>
					</div>
				</a>

				<a href="<?php echo home_url('service/video'); ?>" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_02.jpg" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_02@2x.jpg 2x"></figure>
					<div class="serviceBox__info">
						<h3>動画マーケティング</h3>
						<div class="serviceBox__arrow">
							<div class="btnArrow"></div>
						</div>
					</div>
				</a>

				<a href="<?php echo home_url('service/saisondata'); ?>" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_03.jpg?2" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_03.jpg?2 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_03@2x.jpg?2 2x"></figure>
					<div class="serviceBox__info">
						<h3>セゾンデータ活用</h3>
						<div class="serviceBox__arrow">
							<div class="btnArrow"></div>
						</div>
					</div>
				</a>

				<a href="<?php echo home_url('service/retail'); ?>" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_04.jpg?1" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_04.jpg?1 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_04@2x.jpg?1 2x"></figure>
					<div class="serviceBox__info">
						<h3>店舗ビジネス支援</h3>
						<div class="serviceBox__arrow">
							<div class="btnArrow"></div>
						</div>
					</div>
				</a>
			</div>
			
	  </div>
	</section>
	
	<?php /*
	<section>
		<div class="sevice__newsArea">
			<div class="_wrap_1000">
				<div id="topNews" class="topNews">
					<p class="subtitle posL"><img alt="NEWS" src="<?php echo get_template_directory_uri(); ?>/images/common/ttl_news.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/ttl_news.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/ttl_news@2x.png 2x"><span>事業最新情報</span></p>
					<div class="newsBoxOuter">
						<div class="newsBox">
							<?php
								$news = new WP_Query(array(
									'post_type' => 'post',
									'category_name' => 'business',
									'posts_per_page' => 3,
								));
								if($news->have_posts()):
									while($news->have_posts()):
										$news->the_post();
										$cat = get_the_category();
										$cat_name = $cat[0]->name;
										?>
										<article class="newsItem">
											<a href="<?php echo the_permalink(); ?>">
												<span class="newsItem__icon"><?php echo $cat_name; ?></span>
												<time class="newsItem__time"><?php the_time('Y.n.j'); ?></time>
												<h5><?php the_title(); ?></h5>
											</a>
										</article>
									<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							</div>
							<a class="arrMore" href="<?php echo get_category_link(2); ?>">
								<picture>
									<source media="(max-width:835px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/arr_bottom_more.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/arr_bottom_more@2x.png 2x">
									<source media="(min-width:836px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/arr_right_more.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/arr_right_more@2x.png 2x">
									<img alt="MORE" src="<?php echo get_template_directory_uri(); ?>/images/common/arr_right_more.png">
								</picture>
							</a>
						<?php else: ?>
							<p>記事がありません</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	*/?>
</div>

<?php
get_template_part('parts/under','link');

get_footer();
