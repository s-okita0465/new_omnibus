<?php
/**
 * Template Name: COMPANY - 働く環境
 * 
 * @use /company/environment
 */
 get_header();
 ?>
<div class="pc titleBar">
   <h2><img alt="COMPANY" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_company.png"
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_company.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_company@2x.png 2x" width="166">
  <span>会社概要</span></h2>
</div>
 
<div class="env mvFirst">

  <section>
    <div class="envIntro">
      <div class="wrap-f">
        <h3 class="space-a companyIntro__start">働く環境</h3>
        <p class="alignC">オムニバスのオフィス環境をご紹介します。</p>
      </div>
    </div><!-- .envIntro End -->

    <div class="wrap-d">
      <div class="envMv">
        <img data-aos="fade-up" data-aos-delay="300" data-aos-once="true" alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_mv.png">
      </div>
      <ul class="envList">
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_01.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_01_l.png"></a>
          <p>オフィスのエントランスです。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_02.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_02_l.png"></a>
          <p>6名会議室です。3部屋あります。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_03.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_03_l.png"></a>
          <p>モニターでTV会議やプレゼンします。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_04.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_04_l.png"></a>
          <p>8名会議室です。2部屋あります。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_05.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_05_l.png"></a>
          <p>集中したいときに使用できる部屋。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_06.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_06_l.png"></a>
          <p>動画制作ルームです。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_07.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_07_l.png"></a>
          <p>個人ロッカーです。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_08.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_08_l.png"></a>
          <p>腹筋を鍛えて腰痛ケアできます。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_09.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_09_l.png"></a>
          <p>オシャレにカフェスタイルで仕事可能。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_10.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_10_l.png"></a>
          <p>息抜きに卓球や休憩する場所です。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_11.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_11_l.png"></a>
          <p>ミーティングや休憩が出来ます。</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_12.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_12_l.png"></a>
          <p>栄養を蓄えて集中力アップ！</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_n01.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_n01_l.png"></a>
          <p>【日南】宮崎県にあるオフショア型オフィス</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_n02.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_n02_l.png"></a>
          <p>【日南】広々としたスペースで広告運用</p>
        </li>
        <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <a class="op" @click.prevent="lightbox" href="#"><img alt="働く環境" src="<?php echo get_template_directory_uri(); ?>/images/company/env/env_n03.png" data-lightbox="<?php echo get_template_directory_uri(); ?>/images/company/env/env_n03_l.png"></a>
          <p>【日南】芝生&ハンモックでリラックス！</p>
        </li>

      </ul>
    </div>
  </section>

</div>

<transition name="lightbox">
<div @click="lightbox" v-if="isLightbox" class="lightbox" v-cloak>
  <transition name="lightbox">
    <div class="lightbox-img" v-if="isLightboxImgload">
      <img :src="lightboxImg" alt="{{lightboxAlt}}" class="ofi-contain">
    </div>
  </transition>
</div>
</transition>

<?php
get_template_part('parts/under','link');
get_footer();
