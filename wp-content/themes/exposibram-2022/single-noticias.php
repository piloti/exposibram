<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Exposibram
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="post-thumbnail">
        <img width="1920" height="210" src="/wp-content/uploads/2023/05/banner-full-2023-2.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="/wp-content/uploads/2023/05/banner-full-2023-2.jpg 1920w, /wp-content/uploads/2023/05/banner-full-2023-2.jpg 300w, /wp-content/uploads/2023/05/banner-full-2023-2.jpg 1024w, /wp-content/uploads/2023/05/banner-full-2023-2.jpg 768w, /wp-content/uploads/2023/05/banner-full-2023-2.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px">
    </div>

    <section class="container section-content">
        <div class="row justify-content-center">
            <div class="col-lg-10 mb-3">
                <h1 class="title-1"><strong><?php the_title(); ?></strong></h1>
            </div>
            <div class="col-lg-10">

                <?php exposibram_2022_post_thumbnail(); ?>

                <?php the_content(); ?>

            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
