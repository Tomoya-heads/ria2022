<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- デイトピッカー用 始まり -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!-- デイトピッカー用 終わり -->
	<!-- Google Tag Manager -->
	<script>
	(function(w,d,s,l,i){
		w[l]=w[l]||[];
		w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
		var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),
		dl=l!='dataLayer'?'&l='+l:'';
		j.async=true;
		j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P2VLRL');
	</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2VLRL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="Wrapper">

		<!-- ヘッダー -->
		<header class="common-header <?php if(is_front_page()){echo "active";}?>" id="Header">
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
					<ul class="common-header__list">
						<li class="common-header__item <?php if ( is_page('apartment-building') || is_page('renovation')) { echo 'current'; } ?>">
							事業内容
							<ul class="common-header__subList">
								<li class="common-header__subItem"><a href="<?php echo home_url('/service/apartment-building/');?>">デザイナーズ投資アパート 新築</a></li>
								<li class="common-header__subItem"><a href="<?php echo home_url('/service/renovation/');?>">リノベーション</a></li>
							</ul>
						</li>
						<li class="common-header__item"><a href="https://ria-partners.co.jp/strategy/" target="_blank">特徴と強み</a></li>
						<li class="common-header__item <?php if ( is_post_type_archive('gallery') || is_singular('gallery')) { echo 'current'; } ?>"><a href="<?php echo home_url('/gallery/');?>">ギャラリー</a></li>
						<li class="common-header__item <?php if ( is_post_type_archive('idea-design') || is_singular('idea-design')) { echo 'current'; } ?>"><a href="<?php echo home_url('/idea-design/');?>">アイデアデザイン</a></li>
						<li class="common-header__item <?php if ( is_archive('') && !is_post_type_archive('gallery')  && !is_post_type_archive('idea-design') || is_single('') && !is_singular('gallery') && !is_singular('idea-design') ) { echo 'current'; } ?>"><a href="<?php echo home_url('/news/'); ?>">お知らせ</a></li>
						<li class="common-header__item <?php if ( is_page('company')) { echo 'current'; } ?>"><a href="<?php echo home_url('/company/');?>">会社概要</a></li>
						<li class="common-header__item"><a href="<?php if(is_page('apartment-building')){echo '#faq';}else{echo esc_url( home_url( '/service/apartment-building/#faq' ) );} ?>">よくある質問</a></li>
						<li class="common-header__item <?php if ( is_page( array( 'general_contact', 'resident_contact', 'reservation', 'confirm', 'thanks' ) )) { echo 'current'; } ?>">
							お問い合わせ
							<ul class="common-header__subList">
								<li class="common-header__subItem"><a href="<?php echo home_url('/general_contact/');?>">アパート経営のお問い合わせ</a></li>
								<li class="common-header__subItem"><a href="<?php echo home_url('/resident_contact/');?>">入居者向けお問い合わせ<br class="sp-only">（退去手続き）</a></li>
								<li class="common-header__subItem"><a href="<?php echo home_url('/reservation/');?>">内覧予約</a></li>
							</ul>
						</li>
					</ul>
					<ul class="common-header__btn sp-only">
						<li class="common-header__btn-item"><a href="<?php echo home_url('/general_contact/');?>">アパート経営の<br>お問い合わせ</a></li>
						<li class="common-header__btn-item"><a href="<?php echo home_url('/reservation/');?>">内覧予約は<br>こちら</a></li>
						<li class="common-header__btn-item"><a href="<?php echo home_url('/resident_contact/');?>">退去手続き</a></li>
					</ul>
				</nav>
				<div class="common-header__container">
					<?php
					//パンくず
					if(!is_front_page()){
						get_template_part('template-parts/common/breadcrumbs');
					}?>
					<ul class="common-header__btn">
						<li class="common-header__btn-item"><a href="<?php echo home_url('/general_contact/');?>">アパート経営の<br>お問い合わせ</a></li>
						<li class="common-header__btn-item"><a href="<?php echo home_url('/reservation/');?>">内覧予約は<br>こちら</a></li>
						<li class="common-header__btn-item"><a href="<?php echo home_url('/resident_contact/');?>">退去手続き</a></li>
					</ul>
				</div>
				<span class="common-header__scroll font-en pctab-only">Scroll</span>
			</div>
		</header>
		<!-- ////ヘッダー -->

    <!-- コンテンツ -->
    <main class="common-main">
			<div class="sp-only">
			<?php
				//パンくず
				if(!is_front_page()){
					get_template_part('template-parts/common/breadcrumbs');
				}?>
			</div>
      <?php get_template_part('template-parts/common/page-title'); ?>