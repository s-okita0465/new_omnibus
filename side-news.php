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
    <?php wp_list_categories('title_li='); ?>
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