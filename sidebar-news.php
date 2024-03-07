<?php
/**
 * ニュース用サイドバー
 * 
 * @use /news, /category/*, /アーカイブ
 */
 ?>
<div class="newsWrapSide">
  <div class="newsWrapSide__title">CATEGORY</div>
  <ul class="newsWrapSide__parent">
    <?php
//      wp_list_categories(array(
//        'title_li' => '',
//        'depth' => 1,
//      ));
		
		$categories = get_categories();
		foreach($categories as $category) {
			echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
		}
    ?>
  </ul>

  <div class="newsWrapSide__title">ARCHIVE</div>
  <ul class="newsWrapSide__parent">
    <?php
      wp_get_archives(array(
        'type' => 'yearly',
      ));
    ?>
  </ul>
</div>