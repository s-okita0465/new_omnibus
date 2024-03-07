<?php
/**
 * 関連ブログ
 */

 // OVX
 // http://e-omnibus.sakura.ne.jp/e-omnibus.co.jp/blog/search/ovx/feed/rss2/
 // CCR
 // http://e-omnibus.sakura.ne.jp/e-omnibus.co.jp/blog/search/CCR/feed/rss2/

 // 画像がない場合
 $img = '
 <div class="noimg">
   <img alt="Omnibus" src="'.get_template_directory_uri().'/images/common/noimg.png" srcset="'.get_template_directory_uri().'/images/common/noimg.png 1x,'.get_template_directory_uri().'/images/common/noimg@2x.png">
 </div>
 ';
 ?>
<section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
  <div class="relatedBlog bg-white">
    <div class="wrap-a">
      <div class="subtitle posL">
        <img alt="RELATED BLOG" src="<?php echo get_template_directory_uri(); ?>/images/common/related_info.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/related_info.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/related_info@2x.png 2x"><span>関連ブログ</span>
      </div>
      <div class="newsBoxOuter">
        <div class="newsBox">
          
          <?php // ブログ記事 ?>
          <article class="blogItem">
            <a href="#">
              <?php echo $img; ?>
              <div class="blogItem__info">
                <time class="newsItem__time">2018.1.1</time>
                <h4>動画で振り返る 2017年〜クリエイター&amp;マーケターの視点で語るあの動画のすごいところ〜</h4>
              </div>
            </a>
          </article>
          <?php // ブログ記事 ?>

          <article class="blogItem">
            <a href="#">
              <?php echo $img; ?>
              <div class="blogItem__info">
                <time class="newsItem__time">2018.1.1</time>
                <h4>動画で振り返る 2017年〜クリエイター&amp;マーケターの視点で語るあの動画のすごいところ〜</h4>
              </div>
            </a>
          </article>
          <article class="blogItem">
            <a href="#">
              <?php echo $img; ?>
              <div class="blogItem__info">
                <time class="newsItem__time">2018.1.1</time>
                <h4>動画で振り返る 2017年〜クリエイター&amp;マーケターの視点で語るあの動画のすごいところ〜</h4>
              </div>
            </a>
          </article>
        </div>
        <a target="_blank" class="arrMore" href="<?php echo home_url('/'); ?>blog">
          <picture>
            <source media="(max-width:835px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/arr_bottom_more.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/arr_bottom_more@2x.png 2x">
            <source media="(min-width:836px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/arr_right_more.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/arr_right_more@2x.png 2x">
            <img alt="MORE" src="<?php echo get_template_directory_uri(); ?>/images/common/arr_right_more.png">
          </picture>
        </a>
      </div>
    </div>
  </div>
</section>
