<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Exposibram
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php exposibram_2022_post_thumbnail(); ?>

	<section class="container">
		<div class="row">
			<div class="col-12">
				<header class="entry-header">
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
				</header>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/patrocinadores'); ?>

</main><!-- #main -->

<?php
get_footer();
