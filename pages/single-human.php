<?php
/**
 * 人を知るの詳細ページ
 * 
 * @use /human
 */
 get_header();
 ?>
<div class="mv mvFirst recruitUnder">
  <img class="ofi" alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv.jpg">
  <div class="mvInner">
    <h2 class="pc"><img alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png"
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit@2x.png 2x" width="135"><span>採用情報</span></h2>
  </div>
</div>
 
<section>
  <div class="recruitIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
    <div class="wrap-f space-a">
      <h3 class="pointTitle">人を知る</h3>
      <p class="recruitIntro__ext">オムニバスでは「チームプレイ」を合言葉に、チームでの仕事を通じ一生涯の仲間を創ることを何より大切に考えています。自由でフラットな社風の元、それぞれ専門性と個性を併せ持ったオムニバスのメンバーを紹介します。</p>
    </div>
  </div>
</section>

<section>
  <div class="recruitHumanList wrap-d">
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
  </div>
</section>

<?php
get_template_part('parts/recruit','under');
 get_footer();
