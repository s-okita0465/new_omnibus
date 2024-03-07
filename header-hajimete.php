<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<script src="https://cdn.jsdelivr.net/npm/viewport-extra@1.0.2/dist/viewport-extra.min.js"></script>
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="keywords" content="中小企業,デジタル支援,集客">

		<script>
			// 最小幅のみ
			new ViewportExtra(390);
			// 最小幅＆最大幅の場合
			new ViewportExtra({ minWidth: 320, maxWidth: 414 });
		</script>
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/hajimete.css?2" rel="stylesheet">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TGJJ9NR');</script>
		<!-- End Google Tag Manager -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGJJ9NR"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

		<header id="header">
			<div class="inner">
				<div class="logo">
					<div class="saison"><a href="https://www.saisoncard.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/saison_logo.svg" alt="CREDIT SAISON" width="54px" height="33px"></a></div>
					<h1><a href="https://e-omnibus.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/logo.svg" alt="Omnibus" width="208px" height="34px"></a></h1>
				</div>
				<nav>
					<ul class="nav_menu">
						<li class="sp_hidden">
							<a href="<?php echo home_url('service/hajimete'); ?>">
								ホーム
							</a>
						</li>
						<li class="sp_hidden">
							<a href="<?php echo is_page('hajimete')?'#nayami':home_url('/service/hajimete/#nayami'); ?>">
								お悩み
							</a>
						</li>
						<li class="sp_hidden">
							<a href="<?php echo is_page('hajimete')?'#service':home_url('/service/hajimete/#service'); ?>">
								サービス詳細
							</a>
						</li>
						<li class="sp_hidden">
							<a href="<?php echo is_page('hajimete')?'#fee':home_url('/service/hajimete/#fee'); ?>">
								料金
							</a>
						</li>
						<li class="sp_hidden">
							<a href="<?php echo home_url('hajimete-news'); ?>">
								お知らせ
							</a>
						</li>
						<li>
							<a href="https://secure-link.jp/wf/?c=wf59586520" class="red_btn" target="_blank">
								お申し込みは<span>こちらから</span>
							</a>
						</li>
					</ul>
					<div class="spNav">
						<div class="navToggle">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="spNavul">
							<ul>
								<li>
									<a href="<?php echo home_url('service/hajimete'); ?>">
										ホーム
									</a>
								</li>
								<li>
									<a href="<?php echo is_page('hajimete')?'#nayami':home_url('/service/hajimete/#nayami'); ?>">
										お悩み
									</a>
								</li>
								<li>
									<a href="<?php echo is_page('hajimete')?'#service':home_url('/service/hajimete/#service'); ?>">
										サービス詳細
									</a>
								</li>
								<li>
									<a href="<?php echo is_page('hajimete')?'#fee':home_url('/service/hajimete/#fee'); ?>">
										料金
									</a>
								</li>
								<li>
									<a href="<?php echo home_url('hajimete-news'); ?>">
										お知らせ
									</a>
								</li>
							</ul>
							<div class="nav_btn">
								<a href="https://secure-link.jp/wf/?c=wf59586520" class="red_btn" target="_blank">
									お申し込みは<span>こちらから</span>
								</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>