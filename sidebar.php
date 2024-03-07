<?php
/**
 * ニュース用サイドバー
 * 
 * @use /news, /category/*, /アーカイブ
 */
 ?>
<div class="newsCon_side">
	<div class="newsCon_side_inner">
		<div class="newsCon_side__title">CATEGORY</div>
		<ul class="newsCon_side__content">
			<?php
			// タームアーカイブ時
				$current_term_id =  get_queried_object_id();
//				$taxonomy_terms = get_terms(
//					'postcategory',
//					array(
//						'hide_empty' => 1,
//						'child_of' => $current_term_id,
//					)
//				);
//				if(!empty($taxonomy_terms)&&!is_wp_error($taxonomy_terms)){
//					echo '<ul>';
//					foreach($taxonomy_terms as $taxonomy_term){
//					 echo '<li class="cat-item"><a href="'. get_term_link($taxonomy_term) .'">' . $taxonomy_term->name . '</a></li>';
//					}
//					echo '</ul>';
//				}
				$terms = get_terms(
					'postcategory',
					array(
						'hide_empty' => 1,
						'exclude_tree' => 24,
					)
				);
				echo walk_category_tree( $terms, 0 , array(
						'style' => 'list',  //wp_list_categories() のようなリスト構造になる
						'use_desc_for_title' => false,
				));
			?>
		</ul>

		<div class="newsCon_side__title">ARCHIVE</div>
		<ul class="newsCon_side__content">
			<?php
				wp_get_archives(array(
					'post_type'=>'topics',
					'type' => 'yearly'
				));
			?>
		</ul>
	</div>
</div>