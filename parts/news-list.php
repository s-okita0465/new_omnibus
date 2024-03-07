<?php
/**
 * NEWSのリスト表記
 */

$cat = get_the_category();
$cat = $cat[0];
switch($cat->slug){
	case 'company':
		$label = '企業運営';
//                $icon = 'ico_company';
		break;
	case 'recruit':
		$label = '採用';
//                $icon = 'ico_recruit';
		break;
	default:
		$label = '事業';
//                $icon = 'ico_news';
		break;
}
 ?>
<a class="newsListsItem" href="<?php the_permalink(); ?>">
<!--  <span class="newsItem__icon"><img alt="<?php echo $label; ?>" src="<?php echo get_template_directory_uri(); ?>/images/common/<?php echo $icon; ?>.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/<?php echo $icon; ?>.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/<?php echo $icon; ?>@2x.png 2x"></span>-->
	<span class="newsItem__icon"><?php echo $label; ?></span>
  <time><?php the_time('Y.n.j'); ?></time>
  <h3 class="newsLists__title"><?php the_title(); ?></h3>
  <p><?php echo mb_strimwidth(strip_tags(get_the_content()),0,200,'...','UTF-8'); ?></p>
  <div class="newsLists__more">詳細を見る</div>
</a>
