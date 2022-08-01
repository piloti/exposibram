<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Exposibram
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 mb-4 mb-lg-5'); ?>>

  <?php exposibram_2022_post_thumbnail(); ?>

  <header class="entry-header pt-1 pb-0">
    <?php
    if (is_singular()) :
      the_title('<h1 class="entry-title">', '</h1>');
    else :
      the_title('<h2 class="entry-title"><strong><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></strong></h2>');
    endif;

    if ('post' === get_post_type()) :
    ?>
      <div class="entry-meta">
        <?php
        exposibram_2022_posted_on();
        exposibram_2022_posted_by();
        ?>
      </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->