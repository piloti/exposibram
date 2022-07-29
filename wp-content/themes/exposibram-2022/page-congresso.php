<?php

/**
 * Template Name: Congresso
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
			<div class="col-lg-4 text-center text-lg-end">
				<a href="<?php the_field('link_btn'); ?>" class="btn btn-blue" title="<?php the_field('text_btn'); ?>"><?php the_field('text_btn'); ?></a>
			</div>
		</div>

		<div class="row">
			<div class="col-12 my-4 my-lg-5 p-fs-26">
				<?php the_field('description_2'); ?>
			</div>
		</div>

		<?php if (get_field('titulo_vcongresso') != "") { ?>
			<section class="container section-content">
				<span class="id-top" id="<?php the_field('id_vcongresso'); ?>"></span>
				<div class="row  align-items-center">
					<div class="col-12 mb-3">
						<h2 class="title-1"><strong><?php the_field('titulo_vcongresso'); ?></strong></h2>
					</div>

					<div class="col-12">
						<?php the_field('descricao_vcongresso'); ?>
					</div>
				</div>
			</section>
		<?php } ?>
	</section>

	<?php if (get_field('title_progr') != "") { ?>
		<section class="container-fluid navExpo section-content">
			<span class="id-top" id="<?php the_field('id_programacao'); ?>"></span>
			<div class="row">
				<div class="col-12">
					<div class="container">
						<div class="row">
							<div class="col-12 mt-2 mb-3">
								<h2 class="title-1"><strong><?php the_field('title_progr'); ?></strong></h2>
							</div>
							<div class="col-12">
								<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
									<?php foreach (get_field('add_progr') as $key => $value) : ?>
										<li class="nav-item col" role="presentation">
											<button class="nav-link <?php if ($key == 0) {
																								echo ' active ';
																							} ?>" id="dia-<?= $value['dia'] ?>-tab" data-bs-toggle="tab" data-bs-target="#dia-<?= $value['dia'] ?>" type="button" role="tab" aria-controls="dia-<?= $value['dia'] ?>" aria-selected="true">DIA <?= $value['dia'] ?></button>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-content" id="myTabContent">
						<?php foreach (get_field('add_progr') as $key => $value) : ?>
							<div class="tab-pane fade show <?php if ($key == 0) {
																								echo ' active ';
																							} ?>" id="dia-<?= $value['dia'] ?>" role="tabpanel" aria-labelledby="dia-<?= $value['dia'] ?>-tab" tabindex="0">
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

	<?php if (get_field('title_panelist') != "") { ?>
		<section class="container section-content pt-0">
			<div class="row justify-content-center">
				<span class="id-top" id="<?php the_field('id_palestrante'); ?>"></span>
				<div class="col-12">
					<h2 class="title-1"><strong><?php the_field('title_panelist'); ?></strong></h2>
				</div>

				<div class="col-lg-11">
					<div class="row gx-5 mt-4">
						<?php foreach (get_field('add_panelist') as $key => $value) : ?>
							<div class="col-md-6 col-lg-4 mb-4 text-center">
								<img src="<?= $value['foto'] ?>" alt="<?= $value['nome'] ?>" class="w-100">
								<p class="mb-0"><strong><?= $value['nome'] ?></strong></p>
								<p class="mb-0"><strong><?= $value['emprensa'] ?></strong></p>
								<p class="mb-0"><?= $value['descricao'] ?></p>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>

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
		<section class="container-fluid navExpo section-content">
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
																							} ?>" id="dia-<?= $value['dia'] ?>-tab" data-bs-toggle="tab" data-bs-target="#dia-<?= $value['dia'] ?>" type="button" role="tab" aria-controls="dia-<?= $value['dia'] ?>" aria-selected="true">DIA <?= $value['dia'] ?></button>
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
																							} ?>" id="dia-<?= $value['dia'] ?>" role="tabpanel" aria-labelledby="dia-<?= $value['dia'] ?>-tab" tabindex="0">
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

	<?php if (get_field('titulo_pm') != "") { ?>
		<section class="container section-content pt-0">
			<div class="row justify-content-center">
				<span class="id-top" id="<?php the_field('id_pm'); ?>"></span>
				<div class="col-12">
					<h2 class="title-1"><strong><?php the_field('titulo_pm'); ?></strong></h2>
				</div>

				<div class="col-lg-11">
					<div class="row gx-5 mt-4">
						<?php foreach (get_field('add_palemini') as $key => $value) : ?>
							<div class="col-md-6 col-lg-4 mb-4 text-center">
								<img src="<?= $value['foto'] ?>" alt="<?= $value['nome'] ?>" class="w-100">
								<p class="mb-0"><strong><?= $value['nome'] ?></strong></p>
								<p class="mb-0"><strong><?= $value['emprensa'] ?></strong></p>
								<p class="mb-0"><?= $value['descricao'] ?></p>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>

	<?php if (get_field('title_agencia') != "") { ?>
		<section class="container section-content">
			<span class="id-top" id="<?php the_field('id_agencia'); ?>"></span>
			<div class="row  align-items-center">
				<div class="col-12 mb-3">
					<h2 class="title-1"><strong><?php the_field('title_agencia'); ?></strong></h2>
				</div>

				<div class="col-12">
					<?php the_field('description_agencia'); ?>
				</div>
			</div>
		</section>
	<?php } ?>

	<?php get_template_part('template-parts/patrocinadores'); ?>

</main><!-- #main -->

<?php
get_footer();
