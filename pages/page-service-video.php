<?php
/**
 * Template Name: SERVICE 動画マーケティング
 * 
 * @use /service
 */
 get_header();
 ?>
 <div class="pc titleBar">
	 <h2 class="lato">SERVICE<span>サービス</span></h2>
 </div>

 
<section>
  <div class="service_main service_video">
		<div class="_wrap_1000">
			<h2 class="service_title">動画マーケティング</h2>
			<p class="service_mv">
				<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/video/mv_video.jpg" width="1000" height="400" srcset="<?php echo get_template_directory_uri(); ?>/images/service/video/mv_video@2x.jpg 2x">
			</p>

			<div class="serviceIntro">
				<p class="serviceIntro__ext">
					動画を基点としたマーケティング支援サービス。<br>
					国内でいち早く動画広告サービスを手掛け、市場を牽引してきたオムニバスのノウハウをもとに、動画を活用したマーケティング戦略からプランニング、制作、広告配信などワンストップでサポートします。
				</p>
			</div>

			<div class="service__detail">
				<div class="service__detail__item service__detail__item_01" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<h3 class="service__detail__title">企画</h3>
					<div class="service__detail__flexBox">
						<p class="service__detail__image">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/video/video_01.jpg" width="350" height="200" srcset="<?php echo get_template_directory_uri(); ?>/images/service/video/video_01.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/service/video/video_01@2x.jpg 2x">
						</p>
						<div class="service__detail__text">
							<p>お客様のマーケティング課題に応じた戦略を立案し、ブランディング、販促、Howtoなどの動画コンテンツ企画、メディアプランを設計します。<br>TVCMとの連携や統合型マーケティングにおける動画活用など、各種キャンペーンに応じたプランニングもご提案いたします。</p>
						</div>
					</div>
				</div>

				<div class="service__detail__item service__detail__item_02" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<h3 class="service__detail__title">制作</h3>
					<div class="service__detail__flexBox">
						<p class="service__detail__image">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/video/video_02.jpg" width="350" height="200" srcset="<?php echo get_template_directory_uri(); ?>/images/service/video/video_02@2x.jpg 2x">
						</p>
						<div class="service__detail__text">
							<p>目的、スケジュール、ご予算に応じて制作のご提案が可能です。<br>実写やアニメーション、短尺や長尺など様々な制作実績がございます。お気軽にご相談ください。</p>
							<a class="service__detail__link" href="https://www.creative-omnibus.com/" target="_blank">
								<p class="service__detail__link__inner">
									過去の動画制作実績はこちら
									<span class="service__detail__link__arrow"></span>
								</p>
							</a>
						</div>
					</div>
				</div>

				<div class="service__detail__item service__detail__item_03" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<h3 class="service__detail__title">配信</h3>
					<div class="service__detail__flexBox">
						<p class="service__detail__image">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/video/video_03-2.jpg?2" width="350" height="200" srcset="<?php echo get_template_directory_uri(); ?>/images/service/video/video_03-2@2x.jpg?2 2x">
						</p>
						<div class="service__detail__text">
							<p>YouTubeや各種SNSなど主要なプラットフォームへの広告配信が可能です。目的に合わせた適切な配信設計・配信後のフィードバックを行います。</p>
						</div>
					</div>
				</div>
			</div> 
		
			<?php echo get_template_part('parts/service','toContact'); ?>
			
		</div>
	</div>
</section>

<?php
get_template_part('parts/under','link');

get_footer();
