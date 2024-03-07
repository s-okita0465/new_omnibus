<?php
/**
 * header
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title><?php echo BO::title(); ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
	<?php
		$url = $_SERVER['REQUEST_URI'];
		if(strstr($url,'bn-test')==false){
	?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TGJJ9NR');</script>
	<!-- End Google Tag Manager -->
	<?php } ?>

	<script src="//script.secure-link.jp/swt/c01488953.js"></script>
	<script id="_bownow_ts">
	var _bownow_ts = document.createElement('script');
	_bownow_ts.charset = 'utf-8';
	_bownow_ts.src = 'https://contents.bownow.jp/js/UTC_594b45efe449b/trace.js';
	document.getElementsByTagName('head')[0].appendChild(_bownow_ts);
	</script>
	<?php
	BO::js_is_root();
	wp_head();
	?>
</head>
	
<body <?php echo BO::body_class(); ?>>
	
	<?php
		$url = $_SERVER['REQUEST_URI'];
		if(strstr($url,'bn-test')==false){
	?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGJJ9NR"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php } ?>
	
	<header>
		<h1 class="header_logo">
			<a href="<?php echo home_url('/'); ?>"><img
			src="<?php echo get_template_directory_uri(); ?>/images/common/logo_omnibus.svg" 
			alt="Omnibus オムニバス"></a>
		</h1>
		<nav class="gNav">
			<div class="gNav_inner">
				<ul class="gNav_lists gNav_lists_main">
					<li class="gNav_item has_child">
						<a href="<?php echo home_url('topics'); ?>" class="op lato">TOPICS</a>
						<ul class="nav_child">
							<li class=""><a href="<?php echo home_url('topics/category/news'); ?>" class="op">NEWS</a></li>
							<li class=""><a href="<?php echo home_url('topics/category/blog'); ?>" class="op">BLOG</a></li>
							<li class=""><a href="<?php echo home_url('topics/category/event'); ?>" class="op">EVENT</a></li>
						</ul>
					</li>
					<li class="gNav_item has_child">
						<a class="op lato" href="<?php echo home_url('service'); ?>">SERVICE</a>
						<ul class="nav_child">
							<li class=""><a href="<?php echo home_url('service/programaticads'); ?>" class="op">広告運用</a></li>
							<li class=""><a href="<?php echo home_url('service/video'); ?>" class="op">動画マーケティング</a></li>
							<li class=""><a href="<?php echo home_url('service/saisondata'); ?>" class="op">セゾンデータ活用</a></li>
							<li class=""><a href="<?php echo home_url('service/retail'); ?>" class="op">店舗ビジネス支援</a></li>
						</ul>
					</li>
					<li class="gNav_item has_child">
						<a class="op lato" href="<?php echo home_url('company'); ?>">COMPANY</a>
						<ul class="nav_child">
							<li class=""><a href="<?php echo home_url('company'); ?>" class="op">会社概要</a></li>
							<li class=""><a href="<?php echo home_url('company/#message'); ?>" class="op">代表メッセージ</a></li>
							<li class=""><a href="<?php echo home_url('company/#vision'); ?>" class="op">Vision / Value</a></li>
						</ul>
					</li>
					<li class="gNav_item has_child">
						<a class="op lato" href="<?php echo home_url('recruit'); ?>">RECRUIT</a>
						<ul class="nav_child">
							<li class=""><a href="<?php echo home_url('recruit/member'); ?>" class="op">人を知る </a></li>
							<li class=""><a href="<?php echo home_url('recruit/environment'); ?>" class="op">働く環境を知る</a></li>
							<li class=""><a href="<?php echo home_url('recruit/outline'); ?>" class="op">採用情報を知る</a></li>
						</ul>
					</li>
					<!-- <li class="gNav_item"><a class="op lato" href="https://e-omnibus.newsrooms.net/" target="_blank">NEWSROOM</a></li> -->
					<li class="gNav_item"><a class="op lato" href="<?php echo home_url('/contactform'); ?>">CONTACT</a></li>
				</ul>
			</div>
		</nav>
		<div class="header_fb">
			<a class="op" href="https://www.facebook.com/e.omnibus/" target="_blank"><img
		src="<?php echo get_template_directory_uri(); ?>/images/common/ico_facebook.svg" 
		width="22" alt="Facebook"></a>
		</div>
		<div class="navBtn">
				<a href="javascript:void(0)">
					<span></span>
					<span></span>
					<span></span>
				</a>
		</div>
		<div class="nav_bg"></div>
	</header>

	<main>