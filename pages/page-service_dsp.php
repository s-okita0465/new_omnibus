<?php
/**
 * Template Name: SERVICE - セゾンDSP
 * 
 * @use /service/ovx
 */
 get_header();
 ?>
<div class="pc titleBar">
   <h2><img alt="SERVICE" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service.png" width="135" 
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_service@2x.png 2x">
  <span>サービス</span></h2>
</div>
 
<div class="ccr mvFirst">

  <section>
    <div class="ovxIntro" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
      <div class="wrap-d">
        <p class="serviceCatch">セゾンDSP</p>

<h3 class="serviceTitle">
          <img alt="CCR" src="https://e-omnibus.co.jp/omniwp/wp-content/themes/omnibus/images/service/sdsp/sdsp_wide.png">
        </h3>

        <div class="ccrDesc wrap-e">
          <p class="ovxDescTitle">SAISON DSP Ad Solution（セゾンDSP）とは</p>
          <p>クレジットカード国内最大規模の会員数を有するクレディセゾンのデータを利用しオムニバスが目的に応じて柔軟な配信設計を行う国内唯一の運用型広告サービスです。</p>
          
        </div>

        <div class="ccrData__pdca" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
            <img alt="flow" src="http://e-omnibus.co.jp/omniwp/wp-content/themes/omnibus/images/otherimg/saisondsp_image5.png" style="max-width: 70%;">
          </div>

      </div>

    
    </div><!-- .ovxIntro End -->
  </section>

  <section>
    <div class="ccrData">
      <div class="wrap-e">


        <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <p class="ovxDescTitle">クレディセゾンの会員基盤と特徴</p>
          <p>
            日本最大規模の2700万人のクレジットカード会員、そして1500万人のネット会員を持ち、カード審査にも用いられる本人確認済みで信頼性の高い属性データ、および年間5兆円にのぼるクレジットカード購買データを保有しています。
          </p>

          <div class="ccrData__pdca" style="text-align: center;">
            <img alt="PDCA" src="http://e-omnibus.co.jp/omniwp/wp-content/themes/omnibus/images/otherimg/saisondsp_image1.png" style="max-width: 70%;">
          </div>

          <div class="ovxDescContact alignC">
            <a target="_blank" href="<?php echo home_url('/contactform'); ?>" class="serviceBox2__btn">
              お問い合わせ・資料請求
              <div class="ovxDescContact__arrow">
                <div class="ovxDescContact__btnarrow"></div>
              </div>
            </a>
          </div>
        
      </div>  
    </div>
  </section>

  <section>
    <div class="ccrCenter">
      <div class="wrap-d bg-gray" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">

        <h4>セゾンデータを活用したマーケティングのご提案</h4>

        <p>2700万会員を有するクレジットカード会社ならではの信頼度の高い大量のデータを活用し、リサーチから認知、獲得プロモーションまで、マーケティング活動をサポートします。</p>

        <div style="text-align: center; padding-bottom: 30px;">
          <img alt="" src="http://e-omnibus.co.jp/omniwp/wp-content/themes/omnibus/images/otherimg/saisondsp_image4.png" style="max-width: 80%;">
        </div>


        <div class="ccrCenterInfo">
          <div class="ccrCenterInfo__text" style="padding-right:60px;">
            <p><em>インサイト分析型ワークショップ</em></p>
            <p>
              カード会員内のモニターから取得するWEB行動ログを活用し、デジタル基点で効果的なインサイトの導出・発見、そして具体的なマーケティングプランへの落とし込みまでをサポート致します。
            </p>
            
            <a href="https://secure-link.jp/wf/?c=wf62454254">
            	<p style="color: #3366ff;">  詳細・資料ダウンロードはコチラ</p>
            </a>
            
          </div>
           <figure>
            <a href="https://secure-link.jp/wf/?c=wf62454254"> <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/sdsp/wss.png"></a>
          </figure>
        </div>

        <div class="ccrCenterInfo">
          <div class="ccrCenterInfo__text" style="padding-right:60px;">
            <p><em>不動産商材特化ターゲティング広告</em></p>
            <p>
              カード会社ならではの強みである正確なデモグラフィックデータや、居住形態、住所変更タイミングなどの「ライフステージ」関連データを活用することが出来ます。<br>
              さらにデジタル広告のみならず、カード会員向けのメール広告などのオフライン施策との連携も可能です。
            </p>
            
          </div>
          <figure>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/sdsp/fpack.png">
          </figure>
        </div>
        
      </div>  
    </div>
  </section>

  <section>
    <div class="space-a">
      <div class="pagesNavi">
          <!--<div class="prev"><a href="<?php echo home_url('/'); ?>service/ovx/">前へ</a></div>-->
          <div><a href="<?php echo home_url('/'); ?>service/">一覧へ戻る</a></div>
          <div class="next"></div>
        </div>
      <div>
    </div>
  </section>

  <?php //get_template_part('parts/related','blog'); ?>
</div>
<?php
get_template_part('parts/under','link');
 get_footer();
