<?php
/**
 * TOPページ
 */
 get_header();
 ?>
<div class="mvArea">
	<div class="video_wrapper">
		<video class="video_pc" poster="/video/mv_poster_pc.jpg" webkit-playsinline playsinline muted autoplay loop>
			<source src="<?php echo get_template_directory_uri() ?>/video/mv_pc.mp4?2" type="video/mp4">
			<p>動画を再生できる環境ではありません。</p>
		</video>
		<video class="video_sp" poster="/video/mv_poster_sp.jpg?2" webkit-playsinline playsinline muted autoplay loop>
			<source src="<?php echo get_template_directory_uri() ?>/video/mv_sp.mp4?3" type="video/mp4">
			<p>動画を再生できる環境ではありません。</p>
		</video>
		<?php /*
			poster：動画ファイルが利用できない環境で代替表示される画像
			webkit-playsinline：iOS 9までのSafari用インライン再生指定
			playsinline：iOS 10以降のSafari用インライン再生指定
			muted：音声をミュートさせる
			autoplay：動画を自動再生させる
			loop：動画をループさせる
			controls：コントロールバーを表示する
		*/ ?>
		<div class="video_message">
			<p class="video_message_en">Connect <br>Everyone,<br class="video_message_br">Everything.</p>
			<p class="video_message_ja">今日、明日、そして未来の<br class="video_message_br">つながりを創造しよう</p>
		</div>
	</div>
<!--
	<picture>
		<source media="(max-width: 559px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_2022_sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/top/mv_2022_sp@2x.jpg 2x">
		<img class="mv" src="<?php echo get_template_directory_uri(); ?>/images/top/mv_2022.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_2022@2x.jpg 2x" alt="">
	</picture>
-->
</div>

<?php
$news = new WP_Query(array(
	'post_type' => 'topics',
	'posts_per_page' => 2,
	'tax_query' => array(
      array(
        'taxonomy' => 'postcategory',
        'field' => 'slug',
        'terms' => array( 'news' )
      ),
	)
));
if($news->have_posts()){ ?>
<section id="topNews">
  <div class="topNews topCon">
    <div class="_wrap_1080">
      <h2 class="top_conTitle lato">TOPICS</h2>
      <div class="topNews_box topNews_box_news">
				<?php
				while($news->have_posts()){
					$news->the_post(); ?>

					<article class="topNews_item">
						<a class="op" href="<?php echo the_permalink(); ?>">
							<time class="newsItem__time"><?php the_time('Y.n.j'); ?></time>
							<?php echo term_list(); ?>
							<h3 class="newsItem__title"><?php the_title(); ?></h3>
						</a>
					</article>
					<?php
				} wp_reset_postdata(); ?>
			</div>
			<a class="btn_more op" href="<?php echo home_url('topics/category/news'); ?>">
				もっと見る<span class="btn_more_arrow"></span>
			</a>
    </div>
  </div>
</section>
<?php } ?>


<?php
$free_item = SCF::get('資料');
if(!empty($free_item)){
?>
<section id="topDownload">
  <div class="topDownload _bg_gray">
		<div class="_wrap_1080">
			<div class="download_lists">
				<?php foreach ($free_item as $fields){ ?>
					<article class="download_item">
						<a class="op" href="<?php echo $fields['資料リンク']; ?>" target="_blank">
							<div class="download_item_img" style="background-image:url(<?php echo wp_get_attachment_image_url($fields['資料画像'], 'large');?>);"></div>
						</a>
						<p class="download_item_title"><?php echo nl2br($fields['資料タイトル']); ?></p>
						<p class="download_item_btn op"><a href="<?php echo $fields['資料リンク']; ?>" target="_blank"><?php echo $fields['リンクボタン文字']; ?>
						</a></p>
					</article>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php
$news = new WP_Query(array(
	'post_type' => 'topics',
	'posts_per_page' => 3,
	'tax_query' => array(
      array(
        'taxonomy' => 'postcategory',
        'field' => 'slug',
        'terms' => array( 'event' )
      ),
	)
));
if($news->have_posts()){
?>
<section id="topEvent">
  <div class="topEvent topCon">
    <div class="_wrap_1080">
      <h2 class="top_conTitle lato">EVENT</h2>
      <div class="newsLists topNews_box topNews_box_event">
				<?php
				while($news->have_posts()){
					$news->the_post(); ?>
					<article class="newsItem">
						<a class="op" href="<?php echo the_permalink(); ?>">
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
									<?php echo mb_strimwidth(strip_tags(get_the_content()),0,200,'...','UTF-8'); ?>
								</p>
							</div>
						</a>
					</article>
					<?php
				} wp_reset_postdata(); ?>
			</div>
			<a class="btn_more op" href="<?php echo home_url('topics/category/event'); ?>">
				もっと見る<span class="btn_more_arrow"></span>
			</a>
    </div>
  </div>
</section>
<?php } ?>

<section id="topService">
  <div class="topService topCon _bg_lightblue">
		<div class="_wrap_1080">
			<h2 class="top_conTitle lato">SERVICE</h2>

			<div class="serviceList">
				<a href="<?php echo home_url('service/programaticads'); ?>" class="serviceBox" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
					<div class="serviceBox_inner">
						<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_01.jpg?1" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_01.jpg?1 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_01@2x.jpg?1 2x"></figure>
						<div class="serviceBox__info">
							<div class="serviceBox__info_titleArea">
								<h3 class="serviceBox__title">広告運用</h3>
								<div class="serviceBox__arrow">
									<div class="btnArrow"></div>
								</div>
							</div>
							<p class="serviceBox__text">戦略設計から制作・分析までをカバーする大型キャンペーンから、低予算で運用改善を行う広告運用まで、知識と経験豊富な専門スタッフがお客様のビジネスに寄り添います。</p>
						</div>
					</div>
				</a>

				<a href="<?php echo home_url('service/video'); ?>" class="serviceBox" data-aos="fade-up" data-aos-delay="150" data-aos-once="true">
					<div class="serviceBox_inner">
						<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_02.jpg" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_02.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_02@2x.jpg 2x"></figure>
						<div class="serviceBox__info">
							<div class="serviceBox__info_titleArea">
								<h3 class="serviceBox__title">動画マーケティング</h3>
								<div class="serviceBox__arrow">
									<div class="btnArrow"></div>
								</div>
							</div>
							<p class="serviceBox__text">国内でいち早く動画広告サービスを手掛け、市場を牽引してきたオムニバスのノウハウをもとに、マーケティング戦略からプランニング、制作、広告配信などワンストップでサポートします。</p>
						</div>
					</div>
				</a>

				<a href="<?php echo home_url('service/saisondata'); ?>" class="serviceBox" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<div class="serviceBox_inner">
						<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_03.jpg?2" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_03.jpg?2 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_03@2x.jpg?2 2x"></figure>
						<div class="serviceBox__info">
							<div class="serviceBox__info_titleArea">
								<h3 class="serviceBox__title">セゾンデータ活用</h3>
								<div class="serviceBox__arrow">
									<div class="btnArrow"></div>
								</div>
							</div>
							<p class="serviceBox__text">クレジットカード国内最大規模の会員数を有するクレディセゾンのデータを、オンラインとオフライン双方のマーケティングに活用することができる国内唯一のサービス。</p>
						</div>
					</div>
				</a>

				<a href="<?php echo home_url('service/retail'); ?>" class="serviceBox" data-aos="fade-up" data-aos-delay="450" data-aos-once="true">
					<div class="serviceBox_inner">
						<figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_04.jpg?1" width="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_04.jpg?1 1x,<?php echo get_template_directory_uri(); ?>/images/service/top/service_top_04@2x.jpg?1 2x"></figure>
						<div class="serviceBox__info">
							<div class="serviceBox__info_titleArea">
								<h3 class="serviceBox__title">店舗ビジネス支援</h3>
								<div class="serviceBox__arrow">
									<div class="btnArrow"></div>
								</div>
							</div>
							<p class="serviceBox__text">店舗をお持ちのお客様のデジタル領域の活動をサポート。ECサイトも実店舗も、個人店舗から大規模チェーン店まで幅広く対応可能です。</p>
						</div>
					</div>
				</a>
			</div>
			
    </div>
  </div>
</section>

<?php
get_footer();
