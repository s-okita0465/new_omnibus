<?php
/**
 * Template Name: SERVICE
 * 
 * @use /service
 */
 get_header();
 ?>
 <div class="pc titleBar">
   <h2><img alt="SERVICE" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service.png" width="135" height="22" 
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service@2x.png 2x">
  <span>サービス</span></h2>
 </div>
 
<?php //広告事業 ?>
<section>
  <div id="add" class="serviceAdd">
    <div class="mv mvFirst">
      <img class="ofi" alt="SERVICE" src="<?php echo get_template_directory_uri(); ?>/images/service/service_add_mv.jpg">
      <div class="mvInner">
        <h3><img alt="広告事業" src="<?php echo get_template_directory_uri(); ?>/images/service/service_add_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_add_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_add_title@2x.png 2x" width="208"></h3>
      </div>
    </div>

    <div class="serviceIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <div class="wrap-b">
        <p class="serviceIntro__ext">最先端のアドテクノロジーを活用した各種広告サービスを通じ、デジタル環境の進化によって変化したユーザーや社会に対する企業の新たなコミュニケーション戦略の構築をサポートします。</p>
        <?php /* ?>
        <div class="serviceIntro__message">
          <p>“広告を良いものにし<br>三方良しの新たなカルチャーを<br class="sp">創造する”</p>
          <span>──VISM事業部 理念</span>
        </div>
        <?php */ ?>
      </div>
    </div>

    <div class="serviceList wrap-c">

      <a target="_blank" href="http://vism.e-omnibus.co.jp/" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
        <figure><img alt="VISM" src="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_vism.png" width="297" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_vism.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_vism@2x.png 2x"></figure>
        <div class="serviceBox__info">
          <h4>VISM</h4>
          <p>ブランドセーフかつユーザーにもフレンドリーな動画広告のための新プラットフォーム。動画を記事化コンテンツ化し、自然な形式で多種多様なメディアに配信。</p>
          <div class="serviceBox__arrow">
            <div class="btnArrow"></div>
          </div>
          <div class="sp sp-btnMore">
            詳しくはこちら
          </div>
        </div>
      </a>

      <a href="<?php echo home_url('/'); ?>service/ovx" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
        <figure><img alt="OVX" src="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ovx.png" width="297" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ovx.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ovx@2x.png 2x"></figure>
        <div class="serviceBox__info">
          <h4>OVX</h4>
          <p>大手ポータルサイト・ニュースサイトなどのプレロール枠のみを束ねた、広告主が安心して動画広告を掲載するためのプライベート・マーケット・プレイス（PMP）</p>
          <div class="serviceBox__arrow">
            <div class="btnArrow"></div>
          </div>
          <div class="sp sp-btnMore">
            詳しくはこちら
          </div>
        </div>
      </a>

      <a href="<?php echo home_url('/'); ?>service/ccr" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
        <figure><img alt="CCR" src="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ccr.png" width="297" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ccr.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ccr@2x.png 2x"></figure>
        <div class="serviceBox__info">
          <h4>CCR</h4>
          <p>お客様のデジタル広告運用を助けるプロとしてメディアプランニングから日々の運用、レポーティングから改善提案まで、専門的な知識や経験とともに最適なサービスを提供します。</p>
          <div class="serviceBox__arrow">
            <div class="btnArrow"></div>
          </div>
          <div class="sp sp-btnMore">
            詳しくはこちら
          </div>
        </div>
      </a>
      
      <!--
       <a href="<?php echo home_url('/'); ?>service/saisondsp" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
        <figure><img alt="CCR" src="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ccr.png" width="297" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ccr.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_ccr@2x.png 2x"></figure>
        <div class="serviceBox__info">
          <h4>セゾンDSP</h4>
          <p>クレジットカード国内最大規模の会員数を有するクレディセゾンのデータを利用しオムニバスが目的に応じて柔軟な配信設計を行う国内唯一の運用型広告サービスです。</p>
          <div class="serviceBox__arrow">
            <div class="btnArrow"></div>
          </div>
          <div class="sp sp-btnMore">
            詳しくはこちら
          </div>
        </div>
      </a>
    -->

    </div> 
  </div>
</section>

<?php //データ事業 ?>
<section>
  <div id="data" class="serviceData">

    <div class="mv" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <img class="ofi" alt="データ事業" src="<?php echo get_template_directory_uri(); ?>/images/service/service_data_mv.jpg">
      <div class="mvInner">
        <h3><img alt="データ事業" src="<?php echo get_template_directory_uri(); ?>/images/service/service_data_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_data_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_data_title@2x.png 2x" width="248"></h3>
      </div>
    </div>

    <div class="serviceIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <div class="wrap-b">
        <p class="serviceIntro__ext">広告配信データやクレジットカード会員データ、その他独自にデータを収集・蓄積し、DMPを通じて統合管理することで、ターゲティング広告やマーケティング調査分析・クリエイティブ開発への応用など、新たな価値を創出します。</p>
      </div>
    </div>

    <div class="serviceBox2 bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <div class="wrap-d">
          <a href="https://e-omnibus.co.jp/service/saisondsp"><h4>セゾンDSP/DMP</h4></a>
          <p>(株)クレディセゾンによる約1400万人のネット会員データ・クレジットカードの決済データなどをもつ独自DMPとそれを活用したDSP。データから抽出された各ユーザー毎の購買傾向などをセグメント化し、デジタル広告配信・セグメントメール配信・DM配信など各種施策へと連携が可能です。<br>
          サービスページはこちら：<a target="_blank" href="https://e-omnibus.co.jp/service/saisondsp">https://e-omnibus.co.jp/service/saisondsp/</a>
          </p>
          <div class="alignC">
            <a href="<?php echo home_url('/contactform'); ?>" target="_blank" class="serviceBox2__btn">
              お問い合わせ・資料請求
              <div class="serviceBox2__arrow">
                <div class="serviceBox2__btnarrow"></div>
              </div>
            </a>
          </div>
      </div>
    </div>

    <div class="serviceBox2 bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <div class="wrap-d">
          <h4>映画パック</h4>
          <p>映画の視聴傾向に特化した独自データを活用するターゲティング広告メニュー。映画配給会社などが保有する映画鑑賞に関する確定的なデータ（WEBチケット購入履歴など）を活用。DMPを通じて各種広告配信プラットフォームと連携することで広告配信に利用出来るターゲティング広告メニューです。</p>
          <div class="alignC">
            <a target="_blank" href="https://secure-link.jp/wf/?c=wf38102393" class="serviceBox2__btn">
              お問い合わせ・資料請求
              <div class="serviceBox2__arrow">
                <div class="serviceBox2__btnarrow"></div>
              </div>
            </a>
          </div>
      </div>
    </div>

  </div>
</section>

<?php //クリエイティブ事業 ?>
<section>
  <div id="creative" class="serviceCreative">
    <div class="mv" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <img class="ofi" alt="クリエイティブ事業" src="<?php echo get_template_directory_uri(); ?>/images/service/service_creative_mv.jpg">
      <div class="mvInner">
        <h3><img alt="クリエイティブ事業" src="<?php echo get_template_directory_uri(); ?>/images/service/service_creative_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_creative_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_creative_title@2x.png 2x" width="404"></h3>
      </div>
    </div>

    <div class="serviceIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <div class="wrap-b">
        <p class="serviceIntro__ext">アドテクノロジーを活用したデジタル広告配信事業と連動し、顧客に最適な広告アイデア・コミュニケーションプランを提案します。ただ制作を行うだけではなく、企画・制作・編集から広告運用・分析まで、動画を中心としたデジタルマーケティングにおけるワンストップサービスを提供します。</p>
      </div>
      <div class="serviceCreative__btn">
        <a target="_blank" href="https://www.creative-omnibus.com/">
          過去の動画制作実績
          <div class="serviceCreative__arrow">
            <div class="serviceCreative__btnarrow"></div>
          </div>
        </a>
      </div>
    </div>
    

    <div class="serviceList wrap-c">

      <a target="_blank" href="http://gladads.co.jp/" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
        <figure><img alt="Gladads" src="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_gladads.png" width="297" height="168" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_gladads.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_gladads@2x.png 2x"></figure>
        <div class="serviceBox__info">
          <h4>Gladads</h4>
          <p>日本有数のWEB動画制作実績をもつモバーシャル株式会社と、アドテクノロジーを活用した動画広告配信を展開してきたオムニバスによる合弁会社。それぞれのノウハウと専門性を融合させることでより広告主様へ高度な動画マーケティングソリューションを提供します。</p>
          <div class="serviceBox__arrow">
            <div class="btnArrow"></div>
          </div>
          <div class="sp sp-btnMore">
            詳しくはこちら
          </div>
        </div>
      </a>

      <a target="_blank" href="https://facebook.com/pakuchi.kuse" class="serviceBox op" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
        <figure><img alt="OVX" src="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_pachy.png" width="297" height="168" srcset="<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_pachy.png 1x,<?php echo get_template_directory_uri(); ?>/images/service/service_bnr_pachy@2x.png 2x"></figure>
        <div class="serviceBox__info">
          <h4>パクチー</h4>
          <p>「クセがある　クセになる。」をキーワードに国内外から厳選した動画を配信するオリジナル・動画メディアです。</p>
          <div class="serviceBox__arrow">
            <div class="btnArrow"></div>
          </div>
          <div class="sp sp-btnMore">
            詳しくはこちら
          </div>
        </div>
      </a>

    </div>

  </div>
</section>

<?php
get_template_part('parts/under','link');

get_footer();
