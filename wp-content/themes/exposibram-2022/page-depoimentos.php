<?php

/**
 * Template Name: Depoimentos
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
      <div class="col-12 mb-3 mb-lg-5">
        <header class="entry-header">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>
      </div>
    </div>

    <div class="row gx-5">
      <?php foreach (get_field('add_depoimento') as $key => $value) : ?>
        <div class="col-lg-4 mb-4 mb-lg-5">
          <div class="ratio ratio-16x9 rounded-4" style="overflow: hidden;">
            <iframe src="https://www.youtube.com/embed/<?= $value['video'] ?>" title="<?= $value['titulo'] ?>" allowfullscreen></iframe>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php get_template_part('template-parts/patrocinadores'); ?>

</main><!-- #main -->

<?php
get_footer();
