<?php

/**
 * Template Name: Minicursos
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
			<div class="col-lg-8">
				<?php the_content(); ?>
			</div>
		</div>

	</section>

	<?php if (get_field('titulo_vl') != "") { ?>
		<section class="container section-content">
			<span class="id-top" id="<?php the_field('id_vl'); ?>"></span>
			<div class="row  align-items-center">
				<div class="col-12 mb-3">
					<h2 class="title-1"><strong><?php the_field('titulo_vl'); ?></strong></h2>
				</div>

				<div class="col-12">
					<?php the_field('descricao_vl'); ?>
				</div>
			</div>
		</section>
	<?php } ?>

	<?php if (get_field('titulo_gm') != "") { ?>
		<section class="container-fluid navExpo section-content pb-0">
			<span class="id-top" id="<?php the_field('id_gm'); ?>"></span>
			<div class="row">
				<div class="col-12">
					<div class="container">
						<div class="row">
							<div class="col-12 mt-2 mb-3">
								<h2 class="title-1"><strong><?php the_field('titulo_gm'); ?></strong></h2>
							</div>
							<div class="col-12">
								<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
									<?php foreach (get_field('add_grade') as $key => $value) : ?>
										<li class="nav-item col" role="presentation">
											<button class="nav-link <?php if ($key == 0) {
																								echo ' active ';
																							} ?>" id="dia-gm-<?= $value['dia'] ?>-tab" data-bs-toggle="tab" data-bs-target="#dia-gm-<?= $value['dia'] ?>" type="button" role="tab" aria-controls="dia-gm-<?= $value['dia'] ?>" aria-selected="true">DIA <?= $value['dia'] ?></button>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-content" id="myTabContent">
						<?php foreach (get_field('add_grade') as $key => $value) : ?>
							<div class="tab-pane fade show <?php if ($key == 0) {
																								echo ' active ';
																							} ?>" id="dia-gm-<?= $value['dia'] ?>" role="tabpanel" aria-labelledby="dia-gm-<?= $value['dia'] ?>-tab" tabindex="0">
								<?php foreach ($value['add_auditorio'] as $key2 => $value2) : ?>
									<div class="mb-4 mb-lg-5">
										<div class="tab-bg">
											<div class="container">
												<div class="row justify-content-center">
													<div class="col-lg-10">
														<h3><?= $value2['titulo_aud'] ?></h3>
													</div>
												</div>
											</div>
										</div>
										<div class="container mt-4">
											<div class="row justify-content-center">
												<div class="col-lg-10">
													<?= $value2['descricao_aud'] ?>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>

	<?php get_template_part('template-parts/patrocinadores'); ?>

</main><!-- #main -->

<?php
get_footer();
