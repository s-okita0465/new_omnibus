<?php get_header('hajimete'); ?>

<div class="pageMain">
	<div class="mainvIn">
		<h1 class="pageTtl">お知らせ</h1>
		<p>オムニバスからのお知らせや、<br>インターネット広告関連の最新情報<br class="sp_visible">をお伝えします</p>
	</div>
</div>
<div class="container">
	<div class="cateCnt">
		<div class="midInner">
			<div class="cateBox">
				<div class="head">カテゴリー</div>
				<div class="in">
					<ul>
						<li><a href="<?php echo home_url('hajimete-news'); ?>">すべて</a></li>
						<?php
						$categories = get_terms(array(
							'taxonomy' => 'hajimete_category',
							'hide_empty' => false,
						));
						if (is_array($categories)) {
							foreach($categories as $category):
								$cat_id = $category->term_id;
								$cat_title = $category->name;
								$cat_url = get_category_link($cat_id);
								echo "<li";
								if (is_tax($cat_id)) {
									echo ' class="current"';
								}
								echo '><a href="'.$cat_url.'" title="'.$cat_title.'">'.$cat_title.'</a></li>';
							endforeach;
							}
						?>
					</ul>
				</div>
			</div>
			<div class="cateBox tagBox">
				<div class="head">タグ</div>
				<div class="in">
					<?php
						// パラメータを指定
						$args = array(
							'taxonomy' => 'hajimete_tag',
							// タグ名順で指定
							'orderby' => 'name',
							// 昇順で指定
							'order' => 'ASC'
						);
						$posttags = get_tags( $args );

						if ( $posttags ){
							echo ' <ul> ';
							foreach( $posttags as $tag ) {
								echo '<li><a href="'. get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li>';
							}
							echo ' </ul> ';
						}
					?>
				</div>
			</div>
		</div>
	</div>
	
	<?php if(have_posts()):?>
	<div class="newsCnt">
		<div class="midInner">
			<ul class="newsList">
				<?php while(have_posts()):the_post();?>
				<li><a href="<?php the_permalink(); ?>" class="newsBox">
					<time><?php the_time('Y.n.j'); ?></time>
					<?php
					// カスタム カテゴリー名
					$terms = wp_get_object_terms($post->ID, 'hajimete_category');
					foreach( $terms as $term ) {
						$cate_name = $term->name;
						$cate_slug = $term->slug;
						$cate_link = get_term_link($cate_slug,'hajimete_category');
					}
					// カスタム タグ名
					$tags = wp_get_object_terms($post->ID, 'hajimete_tag');
					foreach( $tags as $tag ) {
						$tag_name = $tag->name;
						$tag_slug = $tag->slug;
						$tag_link = get_term_link($tag_slug,'hajimete_tag');
					}
					?>
					<span class="tag"><?php echo $cate_name; ?></span>
					<span class="txt"><?php echo wp_trim_words( get_the_title(), 40 , '…' ); ?>
						<?php if ($tags) { ?>
						<ul class="hash">
							<li>#<?php echo $tag_name; ?></li>
						</ul>
						<?php } ?>
					</span>
				</a></li>
				<?php endwhile;?>
			</ul>
			<?php 
			if( function_exists('pagenation') ){ // 関数が定義されていたらtrueになる
					pagenation(); 
			}?>
		</div>
	</div>
	<?php else: ?><!-- 投稿が存在しない時の処理 -->
	<div class="midInner">
		<p class="notFound">記事がありません。</p>
	</div>
	<?php endif;?>
</div>
<?php get_footer('hajimete');