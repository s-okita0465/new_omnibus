<?php
/**
 * ニュース記事
 *
 * @use : /news/詳細
 */
 get_header();
 ?>
	<div class="titleBar">
    <h2>TOPICS<span>トピックス</span></h2>
 </div>

	<?php breadcrumb(); ?>

	<div class="newsCon _wrap_1130">
		<article class="newsCon_main">
			<div class="newsCon_main_inner">
				<?php
				while(have_posts()){ the_post(); ?>
				<div class="newsCon_main__header">
					<time class="newsItem__time"><?php the_time('Y.n.j'); ?></time>
					<?php echo term_list(); ?>
					<h1 class="newsItem__title"><?php the_title(); ?></h1>
				</div>
				<div class="newsItem__thumb">
					<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>
				</div>
				<div class="newsCon_main__body">
					<?php the_content(); ?>
					<?php if(SCF::get('event-form')==='挿入する'){ ?>
					
<!--
					<div class="eventFormArea">
						<p class="eventForm_title">イベントお申し込みフォーム</p>
						<div class="eventFormArea__formwrap">
							<div class="eventForm_item">
								<p class="eventForm_item__label">会社名<span class="eventForm_item__label_req">必須</span></p>
								<input type="text" placeholder="例）株式会社オムニバス">
							</div>
							<div class="eventForm_item">
								<p class="eventForm_item__label">氏名<span class="eventForm_item__label_req">必須</span></p>
								<input type="text" placeholder="例）山田太郎">
							</div>
							<div class="eventForm_item">
								<p class="eventForm_item__label">メールアドレス<span class="eventForm_item__label_req">必須</span></p>
								<input type="email" placeholder="例）example@xxxxx.com">
							</div>
							<div class="eventForm_item">
								<p class="eventForm_item__label">お申し込み経路<span class="eventForm_item__label_req">必須</span></p>
								<input>
							</div>
							<div class="eventForm_item">
								<p class="eventForm_item__label isMsg">今回のイベントに求めることはなんですか？</p>
								<textarea class="eventForm_item__textarea"></textarea>
							</div>
							<input type="submit" class="eventForm__btn" value="送信する">
						</div>
					</div>
-->
					
						<?php echo apply_shortcodes('[contact-form-7 id="1988" title="TOPICS/イベント申し込みフォーム"]'); ?>
					<?php } ?>
				</div>
				<?php } ?>
				<div class="pagesNavi space-a">
					<div class="prev">
						<?php
							$next = get_next_post();
							if(!empty($next)){
						?>
						<a href="<?php echo get_the_permalink($next->ID); ?>">前へ</a>
						<?php } ?>
					</div>
					<div><a href="<?php echo home_url('topics'); ?>">一覧へ戻る</a></div>
					<div class="next">
						<?php
							$prev = get_previous_post();
							if(!empty($prev)){
						?>
						<a href="<?php echo get_the_permalink($prev->ID); ?>">次へ</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</article>

    <?php get_sidebar(); ?>

  </div>
<?php
 get_footer();
