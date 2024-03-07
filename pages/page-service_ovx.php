<?php
/**
 * Template Name: SERVICE - OVX
 * 
 * @use /service/ovx
 */
 get_header();
 ?>
<div class="pc titleBar">
   <h2><img alt="SERVICE" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service.png" width="135" height="22" 
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service@2x.png 2x">
  <span>サービス</span></h2>
 </div>
 
<div class="ovx mvFirst">
  <section>
    <div class="ovxIntro" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <div class="wrap-a">
        <h3 class="serviceTitle">
          <img alt="OVX" src="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_title.png" 
    srcset="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_title@2x.png 2x" width="261">
        </h3>
        <p class="serviceCatch">広告主が安心して動画広告を掲載するためのPMP</p>
        <div class="ovxDesc wrap-e">
          <p class="ovxDescTitle">プライベート・マーケット・プレイス（PMP）とは</p>
          <p>動画広告PMP（プライベートマーケットプレイス）とは、その名のとおり参加できるメディアや広告主が限定される（プライベートな）広告取引です。DSPなどを用いた運用型での取引の場合にあった広告枠の品質や透明性の課題が解決され、ブランド広告主を中心に需要が高まって来ています。</p>
        </div>
      </div>
    </div><!-- .ovxIntro End -->
  </section>

  <section>
    <div class="ovxData">
      <div class="wrap-e">
        <ul class="ovxData__list" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <li><img alt="Gender" src="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data01.png" 
    srcset="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data01.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data01@2x.png 2x"></li>
          <li><img alt="Age" src="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data02.png" 
    srcset="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data02.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data02@2x.png 2x"></li>
          <li><img alt="Personal" src="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data03.png" 
    srcset="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data03.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data03@2x.png 2x"></li>
          <li><img alt="メディア" src="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data04.png" 
    srcset="<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data04.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/ovx/ovx_data04@2x.png 2x"></li>
        </ul>
        <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <p class="ovxDescTitle">動画広告PMP「OVX」の特徴</p>
          <p>
            <span class="ovxDescSub">・国内の優良動画広告枠をネットワーク化</span><br>
            OVXのネットワークはそのほとんどが国内大手新聞社や通信社など優良サイトの動画広告枠で構成されています。しかも動画広告の中でもっとも視認性の高い「プレロール型」のフォーマットを採用しています。<br>
            <br>
            <span class="ovxDescSub">・高い視認性と視聴完了率</span><br>
            OVXはきちんとコンテンツを内製しユーザーを獲得している品質の高いメディアをネットワークしているため、DSPなどでの買い付けと比べても高い再生率、完全再生率を誇ります。加えて固定単価式での買付になりますので、入札競争などによる値段の高騰を避け、結果的に安定した完全視聴単価を残すことが可能です。<br>
            <br>
            オムニバスはOVXを通じて動画メディアを運営されている媒体社様への収益化支援も行なっております。オンライン動画広告導入可能の条件に関しましては、動画コンテンツの保有状況、動画プレイヤーやサーバーとの契約状況により変化致しますので、詳細はお問い合わせよりご相談ください。
          </p>

          <div class="ovxDescContact alignC">
            <a target="_blank" href="https://secure-link.jp/wf/?c=wf92543811" class="serviceBox2__btn">
              お問い合わせ・資料請求
              <div class="ovxDescContact__arrow">
                <div class="ovxDescContact__btnarrow"></div>
              </div>
            </a>
          </div>

          <div class="pagesNavi">
            <div class="prev"></div>
            <div><a href="<?php echo home_url('/'); ?>service/">一覧へ戻る</a></div>
            <div class="next"><a href="<?php echo home_url('/'); ?>service/ccr/">次へ</a></div>
          </div>
        
      </div>  
    </div>
  </section>

<?php //get_template_part('parts/related','blog'); ?>
</div>
<?php
get_template_part('parts/under','link');
 get_footer();
