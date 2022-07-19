<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="Wrapper">

		<!-- ヘッダー -->
		<header class="common-header" id="Header">
			<div class="common-header__inner">
				<!-- *** logo *** -->
				<?php if(is_front_page()): ?>
					<h1 class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ria-white.svg" alt="RIAパートナーズ">
						</a>
					</h1>
				<?php else: ?>
					<div class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ria-white.svg" alt="RIAパートナーズ">
						</a>
					</div>
				<?php endif; ?>
				<div class="common-header__toggle">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<nav class="common-header__nav">
					<ul class="common-header__menu">
						<li><a href="<?php echo home_url('/service/'); ?>">事業内容</a></li>
						<li><a href="<?php echo home_url('/gallery/');?>">ギャラリー</a></li>
						<li><a href="<?php echo home_url('/news/'); ?>">お知らせ</a></li>
						<li><a href="<?php echo home_url('/company/');?>">会社概要</a></li>
						<li><a href="<?php echo home_url( '/service/real-estate-investment/' ); ?>">よくある質問</a></li>
						<li><a href="<?php echo home_url( '/general_contact/' ); ?>">お問い合わせ</a></li>
					</ul>
				</nav>
				<span class="common-header__scroll font-en">Scroll</span>
			</div>
		</header>
		<!-- ////ヘッダー -->

    <!-- コンテンツ -->
    <main class="common-main">
      <?php get_template_part('template-parts/common/page-title'); ?>
      <?php
			//パンくず
			if(!is_front_page()){
				get_template_part('template-parts/common/breadcrumbs');
			}?>
