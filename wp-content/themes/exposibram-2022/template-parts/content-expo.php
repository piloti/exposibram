<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Exposibram
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-expo'); ?>>
  <?php exposibram_2022_post_thumbnail(); ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
      </div>
    </div>
  </div>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'exposibram-2022' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
