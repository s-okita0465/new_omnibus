<?php
/**
 * 関連ブログ
 */
 ?>
<section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
  <div class="topBlog bg-white">
    <div class="wrap-a">
      <h3 class="subtitle posL"><img alt="BLOG" src="<?php echo get_template_directory_uri(); ?>/images/common/ttl_blog.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/ttl_blog.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/ttl_blog@2x.png 2x"><span>ブログ</span></h3>
      <div class="newsBoxOuter">
        <div class="newsBox">
          
          <?php // ブログ記事 ?>
          <article class="blogItem">
            <a href="#">
              <img class="blogItem__photo" src="<?php echo get_template_directory_uri(); ?>/images/sample/blog_sample.jpg" alt="">
              <div class="blogItem__info">
                <time class="newsItem__time">2018.1.1</time>
                <h4>動画で振り返る 2017年〜クリエイター&amp;マーケターの視点で語るあの動画のすごいところ〜</h4>
              </div>
            </a>
          </article>
          <?php // ブログ記事 ?>

          <article class="blogItem">
            <a href="#">
              <img class="blogItem__photo" src="<?php echo get_template_directory_uri(); ?>/images/sample/blog_sample.jpg" alt="">
              <div class="blogItem__info">
                <time class="newsItem__time">2018.1.1</time>
                <h4>動画で振り返る 2017年〜クリエイター&amp;マーケターの視点で語るあの動画のすごいところ〜</h4>
              </div>
            </a>
          </article>
          <article class="blogItem">
            <a href="#">
              <img class="blogItem__photo" src="<?php echo get_template_directory_uri(); ?>/images/sample/blog_sample.jpg" alt="">
              <div class="blogItem__info">
                <time class="newsItem__time">2018.1.1</time>
                <h4>動画で振り返る 2017年〜クリエイター&amp;マーケターの視点で語るあの動画のすごいところ〜</h4>
              </div>
            </a>
          </article>
        </div>
        <a class="arrMore" href="#">
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
