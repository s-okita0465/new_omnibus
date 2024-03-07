<?php
/**
 * Template Name: RECRUIT - オムニバスを知る
 * 
 * @use /recruit/omnibus
 */
 get_header();
 ?>
<div class="mv mvFirst recruitUnder">
  <img class="ofi" alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv_02.jpg">
  <div class="mvInner">
    <h2 class="pc"><img alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png"
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit@2x.png 2x" width="135"><span>採用情報</span></h2>
  </div>
</div>
 
<section>
  <div class="recruitIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
    <div class="wrap-f space-a">
      <h3 class="pointTitle">オムニバスを知る</h3>
      <p class="recruitIntro__ext">オムニバスでは「進化の連続で想いをつなぐ」を企業理念として、常に自ら新しいことへ挑戦し続けています。そんなオムニバスの「今」と「これから」を知るための様々な企画をご用意しました。</p>
    </div>
  </div>
</section>

<?php /* ?>
<section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
  <div class="recruitOmnibus">
    <div class="wrap-d">
      <a class="recruitOmnibusLink op" href="<?php echo home_url('/'); ?>recruit/omnibus/symposium/">
        <img alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/omnibus/recruit_omnibus.png"
   srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/omnibus/recruit_omnibus.png 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/omnibus/recruit_omnibus@2x.png 2x">
        <div class="recruitOmnibus__symposium">
          <p>2016年4月に新卒で入社した3人に、この2年を振り返って話をしてもらいました。</p>
          
          <div class="recruitOmnibus__btn">
            詳細を見る
            <div class="recruitOmnibus__out">
              <span class="recruitOmnibus__in"></span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>
<?php */

get_template_part('parts/recruit','under');
get_template_part('parts/under','link');
get_footer();
