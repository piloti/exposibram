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
	<script src="/wp-content/themes/exposibram-2022/dist/js/jquery-3.6.0.min.js"></script>
	<script src="/wp-content/themes/exposibram-2022/dist/js/bootstrap.min.js"></script>
	<script src="/wp-content/themes/exposibram-2022/dist/js/owl.carousel.min.js"></script>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text d-none" href="#primary"><?php esc_html_e('Skip to content', 'exposibram-2022'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav id="site-navigation" class="main-navigation menu-expo">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'exposibram-2022'); ?></button>
							<?php wp_nav_menu(array('menu' => 'Menu Header')); ?>
						</nav>
					</div>
				</div>
			</div>

		</header>