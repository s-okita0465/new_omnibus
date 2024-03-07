<?php get_header('hajimete');

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

<div class="pageMain">
	<div class="mainvIn">
		<h1 class="pageTtl">お知らせ</h1>
		<p>オムニバスからのお知らせや、<br>
インターネット広告関連の最新情報<br class="sp_visible">をお伝えします</p>
	</div>
</div>
<div class="container">
	<div class="midInner">
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<div class="newsDetail">
			<div class="ttlBox">
				<time><?php the_time('Y.m.d'); ?></time>
				<div class="tag"><?php echo $cate_name; ?></div>
				<h2><?php the_title(); ?></h2>
				<?php if ($tags) { ?>
				<ul class="hash">
					<li>#<?php echo $tag_name; ?></li>
				</ul>
				<?php } ?>
			</div>
			<div class="contents">
				<?php the_content(''); ?>
			</div>
			<div class="postLinkBox">
				<a href="<?php echo home_url('hajimete-news'); ?>" class="linkBtn">一覧に戻る</a>
						<div class="postLink">
					<?php previous_post_link('%link', '前の記事へ'); ?>
					<?php next_post_link('%link', '次の記事へ'); ?>
				</div>
					</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer('hajimete');