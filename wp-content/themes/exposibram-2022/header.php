<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exposibram
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/dist/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/dist/js/owl.carousel.min.js"></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NZTLSM4');</script>
	<!-- End Google Tag Manager -->

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '205812694546450');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=205812694546450&ev=PageView&noscript=1"/></noscript>
	<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZTLSM4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text d-none" href="#primary"><?php esc_html_e('Skip to content', 'exposibram-2022'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container-fluid header-container">
				<div class="row">
					<div class="col-12">
						<nav class="main-navigation menu-expo">
							<?php $currentlang = get_bloginfo('language');
							if ($currentlang == "pt-BR") : ?>
								<?php wp_nav_menu(array('menu' => 'Menu Header PT')); ?>
							<?php elseif ($currentlang == "en-US") : ?>
								<?php wp_nav_menu(array('menu' => 'Menu Header EN')); ?>
							<?php endif; ?>

							<div class="lang">
								<ul>
									<?php pll_the_languages(); ?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- menu mobile -->
		<div class="menu-mobile">
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<?php $currentlang = get_bloginfo('language');
				if ($currentlang == "pt-BR") : ?>
					<?php wp_nav_menu(array('menu' => 'Menu Header PT')); ?>
				<?php elseif ($currentlang == "en-US") : ?>
					<?php wp_nav_menu(array('menu' => 'Menu Header EN')); ?>
				<?php endif; ?>

				<div class="lang">
					<ul>
						<?php pll_the_languages(); ?>
					</ul>
				</div>
			</nav>
		</div>