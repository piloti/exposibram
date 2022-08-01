<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Exposibram
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="post-thumbnail">
		<img width="1920" height="210" src="/wp-content/uploads/2022/07/banner-full-2.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/banner-full-2.jpg 1920w, /wp-content/uploads/2022/07/banner-full-2-300x33.jpg 300w, /wp-content/uploads/2022/07/banner-full-2-1024x112.jpg 1024w, /wp-content/uploads/2022/07/banner-full-2-768x84.jpg 768w, /wp-content/uploads/2022/07/banner-full-2-1536x168.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px">
	</div>

	<section class="container section-content">
		<div class="row gx-5">
			<div class="col-12 mb-4 mb-lg-5">
				<?php if (have_posts()) : ?>

					<header class="page-header">
						<h1 class="title-1">
							<?php
							/* translators: %s: search query. */
							printf(esc_html__('Resultados da busca por: %s', 'exposibram-2022'), '<span>' . get_search_query() . '</span>');
							?>
						</h1>
					</header><!-- .page-header -->

			</div>

			<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
			?>
		</div>
	</section>


</main><!-- #main -->

<?php
get_footer();
