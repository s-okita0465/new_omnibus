		
		<div class="pageBottom_guide">
			<a class="pageBottom_guide_item" href="<?php echo home_url('company'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_company.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/common/footer_company@2x.jpg" alt="Omnibus">
				<div class="pageBottom_guide_item__inner">
					<p class="lato pageBottom_guide_item__title">COMPANY</p>
					<p class="pageBottom_guide_item__title_sub">会社概要</p>
				</div>
			</a>
			<a class="pageBottom_guide_item" href="<?php echo home_url('recruit'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_recruit.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/common/footer_recruit@2x.jpg" alt="Omnibus">
				<div class="pageBottom_guide_item__inner">
					<p class="lato pageBottom_guide_item__title">RECRUIT</p>
					<p class="pageBottom_guide_item__title_sub">採用情報</p>
				</div>
			</a>
		</div>

		<footer>
			<div class="footer_inner">
				<div class="footerBox">
					<div class="footerBox_left">
						<div class="footer_logo">
							<a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_omnibus_w.svg" alt="Omnibus"></a>
						</div>
						<a class="footer_fb op" href="https://www.facebook.com/e.omnibus/" target="_blank">
							<img
						src="<?php echo get_template_directory_uri(); ?>/images/common/ico_facebook.svg" width="22" alt="Facebook">
						</a>
					</div>
					<div class="footerBox_right">
						<dl>
							<dt class="lato"><a class="op" href="<?php echo home_url('topics'); ?>">TOPICS</a></dt>
							<dd><a class="op" href="<?php echo home_url('topics/category/news'); ?>">NEWS</a></dd>
							<dd><a class="op" href="<?php echo home_url('topics/category/blog'); ?>">BLOG</a></dd>
							<dd><a class="op" href="<?php echo home_url('topics/category/event'); ?>">EVENT</a></dd>
						</dl>
							
						<dl>
							<dt class="lato"><a class="op" href="<?php echo home_url('service'); ?>">SERVICE</a></dt>
							<dd><a class="op" href="<?php echo home_url('service/programaticads'); ?>">広告運用</a></dd>
							<dd><a href="<?php echo home_url('service/video'); ?>">動画マーケティング</a></dd>
							<dd><a class="op" href="<?php echo home_url('service/saisondata'); ?>">セゾンデータ活用</a></dd>
							<dd><a class="op" href="<?php echo home_url('service/retail'); ?>">店舗ビジネス支援</a></dd>
						</dl>
							
						<dl>
							<dt class="lato"><a class="op" href="<?php echo home_url('company'); ?>">COMPANY</a></dt>
							<dd><a class="op" href="<?php echo home_url('company'); ?>">会社概要</a></dd>
							<dd><a class="op" href="<?php echo home_url('company/#message'); ?>">代表メッセージ</a></dd>
							<dd><a class="op" href="<?php echo home_url('company/#access'); ?>">アクセス</a></dd>
							<dd><a class="op" href="<?php echo home_url('company/#vision'); ?>">VISION / VALUE</a></dd>
						</dl>
							
						<dl>
							<dt class="lato"><a class="op" href="<?php echo home_url('recruit'); ?>">RECRUIT</a></dt>
							<!-- <dt class="lato"><a class="op" href="https://e-omnibus.newsrooms.net/" target="_blank">NEWSROOM</a></dt> -->
							<dt class="lato"><a class="op" href="<?php echo home_url('/contactform'); ?>" target="_blank">CONTACT</a></dt>
							<dt class="lato small"><a class="op" href="<?php echo home_url('privacy'); ?>">PRIVACY POLICY</a></dt>
							<dt class="lato small"><a class="op" href="<?php echo home_url('adsafety'); ?>">ADSAFETY POLICY</a></dt>
							<dt class="lato small"><a class="op" href="<?php echo home_url('recruit-policy'); ?>">RECRUIT POLICY</a></dt>
						</dl>
					</div>
					
					<div class="footerBox_wide">
						<ul>
							<span>
							<li><a href="https://www.google.com/partners/agency?id=8083983343" target="_blank"><img src="https://www.gstatic.com/partners/badge/images/2021/PartnerBadgeClickable.svg" width="110" height="110"></a></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/common/badge_yahoo.png" width="226" height="86" alt="YAHOO!マーケティングソリューション セールスパートナー"></li>
							</span>
							<span>
							<li><a href="https://www.facebook.com/business/partner-directory/details?id=368672333811104" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/badge_meta.png" width="192" height="110" alt="Meta Business Partner"></a></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/common/badge_SmartNewsAds.png" width="113" height="110" alt="SmartNews Ads Partner"></li>
							</span>
							<span>
							<li><a href="https://e-omnibus.co.jp/omniwp/wp-content/uploads/2023/07/39908419a3b70f8fdae32120094e59cb.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/badge_JICDAQ1.png" width="180" height="106" alt="JICDAQ CERTIFIED AGAINST AD FRAUD"></a></li>
							<li><a href="https://e-omnibus.co.jp/omniwp/wp-content/uploads/2023/07/7d8bf02211dab90053ec2011c38f16f6.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/badge_JICDAQ2.png" width="180" height="106" alt="JICDAQ BRAND SAFETY CERTIFIED"></a></li>
							</span>
						</ul>
					</div>
				</div>
				<p class="footer_privacy"><a href="https://privacymark.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/ico_privacy.png" width="60" height="60" alt="たいせつにしますプライバシー 17002070(05)"></a></p>
			</div>

			<small class="footer_copy">&copy; <?php echo date('Y'); ?> Omnibus All Right Reserved.</small>
	</footer>
</main>
<?php wp_footer(); ?>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2609891.js"></script>
<!-- End of HubSpot Embed Code -->
</body>
</html>
