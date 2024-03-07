<?php

/**
 * Template Name: RECRUIT - 採用情報を知る
 * 
 * @use /recruit/outline
 */
get_header();
?>
<div class="mv mvFirst recruitUnder">
	<img class="ofi" alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv_03@2x.jpg 2x">
	<div class="mvInner">
		<h2 class="pc"><img alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit@2x.png 2x" width="135"><span>採用情報</span></h2>
	</div>
</div>

<section>
	<div class="recruitIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
		<div class="wrap-f space-a">
			<h3 class="pointTitle">採用情報を知る</h3>
			<p class="recruitIntro__ext">オムニバスでは、デジタルとテクノロジーという専門性を強みとしつつ、コミュニケーションサービスを提供する事業会社として「ネット広告を更に良いものに」すべく、自由な発想と行動力で会社をさらに成長させていく仲間を募集しています。</p>
		</div>
	</div>
</section>

<?php
$recruitment = new WP_Query(array(
	'post_type' => 'recruitment',
	'posts_per_page' => -1,
));

if ($recruitment->have_posts()) {
	while ($recruitment->have_posts()) {
		$recruitment->the_post();

		$rinfo = SCF::get('recruitinfo');
?>
		<section id="<?php echo $post->post_name; ?>" class="idCon">
			<div data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
				<div class="wrap-d">
					<div class="recruitmentInfo bg-gray">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>

						<div class="recruitmentInfo__label">募集要項</div>
						<dl>
							<?php foreach ($rinfo as $r) { ?>
								<dt><?php echo $r['label']; ?></dt>
								<dd><?php echo nl2br($r['body']); ?></dd>
							<?php } ?>
						</dl>

						<?php
						$entry_url = SCF::get('entryurl');
						$entry_email = SCF::get('recruit_email');
						if (!empty($entry_url) && !empty($entry_email)) {
						?>
							<div class="alignleft">
								ご応募の際は、
								<a target="_blank" href="<?php echo $entry_url; ?>" class="blueArrowBtn">
									リクルートポリシー
								</a>に同意の上、以下メールアドレス宛に履歴書と職務経歴書をお送りください。<br>
								<a href="mailto:<?php echo $entry_email; ?>"><?php echo $entry_email; ?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
<?php
	}
	wp_reset_postdata();
}
?>

<?php get_template_part('parts/under-link-company'); ?>
<?php get_template_part('parts/under', 'link'); ?>

<?php get_footer();
