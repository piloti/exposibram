<?php

/**
 * Template Name: Home
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
  <section>
    <h1 class="visually-hidden"><?php the_title(); ?></h1>
    <div class="banner-home">
      <div class="owl-carousel owl-carousel-e">
        <?php foreach (get_field('add_destaque') as $key => $value) : ?>
          <div class="item">
            <a href="<?= $value['link'] ?>" target="<?= $value['aba'] ?>" rel="noopener noreferrer">
              <img src="<?= $value['img_destaque'] ?>" alt="Banner" class="w-100">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="section-text-imgright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="title-1"><strong><?php the_field('title_evento'); ?></strong></h3>
            <?php the_field('descricao_evento'); ?>

            <?php $currentlang = get_bloginfo('language');
            if ($currentlang == "pt-BR") : ?>
              <a href="<?php the_field('link_evento'); ?>" class="btn btn-orange" title="Clique para Expo">Clique para Expo</a>
            <?php elseif ($currentlang == "en-US") : ?>
              <a href="<?php the_field('link_evento'); ?>" class="btn btn-orange" title="Click to Expo">Click to Expo</a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <span class="bg-1"></span>
      <span class="foto" style="background-image: url('<?php the_field('foto_evento'); ?>');"></span>
    </div>

    <div class="section-blue-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <?php the_field('decricao_number'); ?>

            <div class="row justify-content-center gx-5">
              <?php foreach (get_field('cards') as $key => $value) : ?>
                <div class="col-md-3 mb-4">
                  <div class="card-white">
                    <p class="text-uppercase text-center mb-2"><?= $value['titulo'] ?></p>
                    <p class="text-center mb-0"><strong><?= $value['numero'] ?></strong></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-imgleft-text">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-5">
            <h3 class="title-1"><strong><?php the_field('titulo_congresso'); ?></strong></h3>
            <?php the_field('descricao_congresso'); ?>

            <?php $currentlang = get_bloginfo('language');
            if ($currentlang == "pt-BR") : ?>
              <a href="<?php the_field('link_congresso'); ?>" class="btn btn-orange" title="Clique para Congresso">Clique para Congresso</a>
            <?php elseif ($currentlang == "en-US") : ?>
              <a href="<?php the_field('link_congresso'); ?>" class="btn btn-orange" title="Click to Congress">Click to Congress</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <span class="bg-1"></span>
      <span class="foto" style="background-image: url('<?php the_field('foto_congresso'); ?>');"></span>
    </div>

    <div class="section-blue-1 map">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center mb-4 mb-lg-5">
            <?php the_field('descricao_local'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/patrocinadores'); ?>

</main>

<script>
  $('.owl-carousel-e').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 10000,
    autoHeight: true,
  })
</script>

<?php
get_footer();
