<?php

/**
 * Template Name: EXPO
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

		<?php if (get_field('title_expositor') != "") { ?>
			<section class="container section-content">
				<span class="id-top" id="<?php the_field('id_expositor'); ?>"></span>
				<div class="row  align-items-center">
					<div class="col-12 mb-3">
						<h2 class="title-1"><strong><?php the_field('title_expositor'); ?></strong></h2>
					</div>

					<div class="col-lg-9">
						<?php the_field('description_expositor'); ?>
					</div>
					<div class="col-lg-3 text-center text-lg-end">
						<?php $currentlang = get_bloginfo('language');
						if ($currentlang == "pt-BR") : ?>
							<a href="<?php the_field('link_expositor'); ?>" target="_blank" rel="noopener noreferrer" title="Clique aqui" class="btn btn-blue">CLIQUE AQUI</a>
						<?php elseif ($currentlang == "en-US") : ?>
							<a href="<?php the_field('link_expositor'); ?>" target="_blank" rel="noopener noreferrer" title="CLICK HERE" class="btn btn-blue">CLICK HERE</a>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php if (get_field('title_estandes') != "") { ?>
			<section class="container section-content">
				<span class="id-top" id="<?php the_field('id_mapa'); ?>"></span>
				<div class="row  align-items-center justify-content-center">
					<div class="col-12 mb-3">
						<h2 class="title-1"><strong><?php the_field('title_estandes'); ?></strong></h2>
					</div>

					<div class="col-lg-12 text-center">
						<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="areaexterna-tab" data-bs-toggle="tab" data-bs-target="#areaexterna-tab-pane" type="button" role="tab" aria-controls="areaexterna-tab-pane" aria-selected="true">Área Externa</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="secretaria-tab" data-bs-toggle="tab" data-bs-target="#secretaria-tab-pane" type="button" role="tab" aria-controls="secretaria-tab-pane" aria-selected="false">Nível Secretaria</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="foyer-tab" data-bs-toggle="tab" data-bs-target="#foyer-tab-pane" type="button" role="tab" aria-controls="foyer-tab-pane" aria-selected="false">Nível Foyer</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pavilhao-tab" data-bs-toggle="tab" data-bs-target="#pavilhao-tab-pane" type="button" role="tab" aria-controls="pavilhao-tab-pane" aria-selected="false">Nível Pavilhao</button>
							</li>
						</ul>
						<div class="tab-content mt-1" id="myTabContent">
							<div class="tab-pane fade show active" id="areaexterna-tab-pane" role="tabpanel" aria-labelledby="areaexterna-tab" tabindex="0">
								<img src="<?php the_field('map_externa'); ?>" alt="Mapa" class="img-fluid">
							</div>
							<div class="tab-pane fade" id="secretaria-tab-pane" role="tabpanel" aria-labelledby="secretaria-tab" tabindex="0">
								<img src="<?php the_field('map_secretaria'); ?>" alt="Mapa" class="img-fluid">
							</div>
							<div class="tab-pane fade" id="foyer-tab-pane" role="tabpanel" aria-labelledby="foyer-tab" tabindex="0">
								<img src="<?php the_field('map_foyer'); ?>" alt="Mapa" class="img-fluid">
							</div>
							<div class="tab-pane fade" id="pavilhao-tab-pane" role="tabpanel" aria-labelledby="pavilhao-tab" tabindex="0">
								<img src="<?php the_field('map_pavihao'); ?>" alt="Mapa" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
	</section>

	<?php if (get_field('title_list1') != "") { ?>
		<section class="container section-content">
			<span class="id-top" id="<?php the_field('id_lista'); ?>"></span>
			<div class="row  align-items-center">
				<div class="col-12 mb-3">
					<h2 class="title-1"><strong><?php the_field('title_list1'); ?></strong></h2>
				</div>

				<div class="col-lg-9">
					<?php the_field('description_list1'); ?>
				</div>
				<div class="col-lg-3 text-center text-lg-end">
					<?php $currentlang = get_bloginfo('language');
					if ($currentlang == "pt-BR") : ?>
						<a href="<?php the_field('link_list1'); ?>" target="_blank" rel="noopener noreferrer" title="Clique aqui" class="btn btn-blue">CLIQUE AQUI</a>
					<?php elseif ($currentlang == "en-US") : ?>
						<a href="<?php the_field('link_list1'); ?>" target="_blank" rel="noopener noreferrer" title="CLICK HERE" class="btn btn-blue">CLICK HERE</a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php } ?>

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

	<?php if (get_field('titulo_concurso') != "") { ?>
		<section class="container section-content">
			<span class="id-top" id="<?php the_field('id_concurso'); ?>"></span>
			<div class="row  align-items-center">
				<div class="col-12 mb-3">
					<h2 class="title-1"><strong><?php the_field('titulo_concurso'); ?></strong></h2>
				</div>

				<div class="col-12 mb-4">
					<?php the_field('descricao_concurso'); ?>
				</div>
				<div class="col-12">
					<a href="<?php the_field('link_concurso'); ?>" target="_blank" rel="noopener noreferrer" title="<?php the_field('text_link_concurso'); ?>" class="btn btn-blue"><?php the_field('text_link_concurso'); ?></a>
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
