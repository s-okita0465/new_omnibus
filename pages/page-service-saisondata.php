<?php
/**
 * Template Name: SERVICE セゾンデータ活用
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

 
<section>
  <div class="service_main service_saisondata">
		<div class="_wrap_1000">
			<h2 class="service_title">セゾンデータ活用</h2>
			<p class="service_mv">
				<img alt="PLANNING OPERATION ANALYSIS REPORT" src="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/mv_saisondata.jpg?2" width="1000" height="400" srcset="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/mv_saisondata.jpg?2 1x,<?php echo get_template_directory_uri(); ?>/images/service/saisondata/mv_saisondata@2x.jpg?2 2x">
			</p>

			<div class="serviceIntro">
				<p class="serviceIntro__ext">
					クレジットカード国内最大規模の会員数を有するクレディセゾンのデータを、オンラインとオフライン双方のマーケティングに活用することができる国内唯一のサービス。
				</p>
			</div>

			<div class="service__detail">
				
				<div class="service__detail__item service__detail__item_01" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
					<h3 class="service__detail__title">セゾンターゲティング広告</h3>
					<p class="service__detail__mainText">2600万人を超えるクレディセゾンカード会員データ・クレジットカードの決済データなどを有する独自DMPを各種広告施策にご利用いただけます。購買データなどからユーザーをセグメント化し、デジタル上での広告やEメールの配信、郵送等によるダイレクトメール送付などが可能です。</p>
					
					<p class="service__detail__image__saison">
						<img class="_pc _tab" alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/saison_member_pc.png?2" width="" height="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/saison_member_pc.png?2 1x,<?php echo get_template_directory_uri(); ?>/images/service/saisondata/saison_member_pc@2x.png?2 2x">
						<img class="_sp" alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/saison_member_sp.png?2" width="" height="" srcset="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/saison_member_sp.png?2 1x,<?php echo get_template_directory_uri(); ?>/images/service/saisondata/saison_member_sp@2x.png?2 2x">
					</p>
					
					<div class="service__detail__subBox">
						<h4 class="service__detail__subBox__title">配信メニュー</h4>
						<ul>
							<li>
								<p class="service__detail__subBox__icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/ico_web.svg" width="" height=""></p>
								<p class="service__detail__subBox__menu">Web面</p>
								<p class="service__detail__subBox__text">Yahoo!等、国内の優良かつ多様なWebサイトでのターゲティング。バナーやインフィードの静止画はもちろん、動画広告にも対応しています。</p>
							</li>
							<li>
								<p class="service__detail__subBox__icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/ico_sns.svg" width="" height=""></p>
								<p class="service__detail__subBox__menu">SNS</p>
								<p class="service__detail__subBox__text">Twitter、Facebook等、主要なSNS上でのターゲティング。SNSアプリの利用者に対して、広告の視認性が高いスマートフォンへの配信が可能です。</p>
							</li>
							<li>
								<p class="service__detail__subBox__icon"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/service/saisondata/ico_dm.svg" width="" height=""></p>
								<p class="service__detail__subBox__menu">Eメール / DM</p>
								<p class="service__detail__subBox__text">ご希望のセグメントに対してEメール / ダイレクトメールを送付。性別・年代・住所といったデモグラフィックデータと、カード利用履歴等の購買・行動データを組み合わせたセグメントに対してダイレクトなアプローチが可能です。</p>
							</li>
						</ul>
					</div>
				</div>
			</div> 
		
			<?php echo get_template_part('parts/service','toContact'); ?>
			
		</div>
	</div>
</section>

<?php
get_template_part('parts/under','link');

get_footer();
