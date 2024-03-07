<?php
/**
 * Template Name: RECRUIT
 * 
 * @use /recruit
 */
 get_header();
 ?>
<div class="mv mvFirst recruitTop">
  <img class="ofi" alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv_03@2x.jpg 2x">
  <div class="mvInner">
    <h2 class="pc"><img alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_title.png" 
    srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_title@2x.png 2x" width="183" height="29">
    <span>採用情報</span></h2>
  </div>
</div>
 
<section>
  <div class="recruitIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
    <div class="wrap-f space-a">
      <p class="recruitIntro__ext">オムニバスでは、会社の未来を創っていく事のできるチャレンジ精神にあふれる人材を求めています。</p>
    </div>

    <div class="recruitBanners wrap-d">
      <a class="op" href="<?php echo home_url('/'); ?>recruit/member">
        <img alt="人を知る" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_01_b_2105.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_01_b_2105.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_01_b_2105@2x.jpg 2x" width="458">
        <p>自由でフラットな社風の元、それぞれ専門性と個性を併せ持ったオムニバスのメンバーを紹介します。</p>
        <div class="sp sp-btnMore">
          詳しくはこちら
        </div>
      </a>
      <a class="op" href="<?php echo home_url('/'); ?>recruit/environment">
        <img alt="働く環境を知る" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_02_b.png?202012" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_02_b@2x.png?202012 2x" width="458">
        <p>オムニバスの「今」と「これから」を知るための様々な企画をご用意しました。</p>
        <div class="sp sp-btnMore">
          詳しくはこちら
        </div>
      </a>
    </div>
  </div>
</section>

<section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
    <div class="recruitBanners wrap-d">
      <a class="op" href="<?php echo home_url('/'); ?>company">
        <img alt="会社を知る" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_03.png?180305" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_03.png?180305 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_03@2x.png?180305 2x" width="458">
        <p>オムニバスのオフィス環境・企業情報などをお知らせします。</p>
        <div class="sp sp-btnMore">
          詳しくはこちら
        </div>
      </a>
      <a class="op" href="<?php echo home_url('/'); ?>recruit/outline">
        <img alt="採用情報を知る" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_04_b.png" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_04_b.png 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_04_b@2x.png 2x" width="458">
        <p>オムニバスでは、自由な発想と行動力で会社をさらに成長させていく仲間を募集しています。</p>
        <div class="sp sp-btnMore">
          詳しくはこちら
        </div>
      </a>
  </div>
</section>

<?php
 $news = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'category_name' => 'recruit',
));
if($news->have_posts()){
?>
<section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
  <div class="recruitNews bg-white">
    <div class="wrap-a">
      <h3 class="subtitle posL"><img alt="RECRUIT NEWS" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_news.png" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_news.png 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_news@2x.png 2x" width="201"><span>採用最新ニュース</span></h3>
      <div class="newsBoxOuter">
        <div class="newsBox">
          <?php
            while($news->have_posts()){
              $news->the_post();
              ?>
              <article class="newsItem">
                <a href="<?php echo the_permalink(); ?>">
                  <span class="newsItem__icon">採用</span>
                  <time class="newsItem__time"><?php the_time('Y.n.j'); ?></time>
                  <h4><?php the_title(); ?></h4>
                </a>
              </article>
              <?php
            }
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php
get_template_part('parts/under','link');
get_footer();
