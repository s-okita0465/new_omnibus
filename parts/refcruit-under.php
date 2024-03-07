<?php
/**
 * リクルートのアンダーバナー
 */

 // カテゴリの分岐
 ?>
<section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
    <div class="recruitBanners wrap-d recruitUnderBanner">
      <a class="op" href="<?php echo home_url('/'); ?>company/bits_of_omnibus">
        <img alt="会社を知る" src="../images/recruit/recruit_under_01.png" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_under_01.png 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_under_01@2x.png 2x" width="458">
      </a>
      <a class="op" href="<?php echo home_url('/'); ?>recruit/omnibus">
        <img alt="オムニバスを知る" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_under_02.png">
        <p class="recruitBanners_inner">代表メッセージ</p>
      </a>
      <a class="op" href="<?php echo home_url('/'); ?>recruit/omnibus">
        <img alt="オムニバスを知る" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_under_03.png">
        <p class="recruitBanners_inner">働く環境</p>
      </a>
      <a class="op" href="<?php echo home_url('/'); ?>recruit/omnibus">
        <img alt="オムニバスを知る" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_under_04.png">
        <p class="recruitBanners_inner txtBlack">サポート制度</p>
      </a>
  </div>
</section>
