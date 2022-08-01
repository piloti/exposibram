<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Exposibram
 */

?>

<section class="no-results not-found">

	<?php $currentlang = get_bloginfo('language');
	if ($currentlang == "pt-BR") : ?>

		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Nada encontrado', 'exposibram-2022'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php if (is_home() && current_user_can('publish_posts')) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__('Pronto para publicar seu primeiro post? <a href="%1$s">Comece aqui</a>.', 'exposibram-2022'),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url(admin_url('post-new.php'))
				);

			elseif (is_search()) :
			?>

			<p><?php esc_html_e('Desculpe, mas nada corresponde aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', 'exposibram-2022'); ?></p>
			<?php get_search_form();
			else : ?>

				<p><?php esc_html_e('Parece que não conseguimos encontrar o que você está procurando. Talvez pesquisar possa ajudar.', 'exposibram-2022'); ?></p>
			<?php get_search_form();
			endif; ?>
		</div>

	<?php elseif ($currentlang == "en-US") : ?>

		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Nothing Found', 'exposibram-2022'); ?></h1>
		</header><!-- .page-header -->
		<div class="page-content">
			<?php
			if (is_home() && current_user_can('publish_posts')) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'exposibram-2022'),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url(admin_url('post-new.php'))
				);

			elseif (is_search()) :
			?>

				<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'exposibram-2022'); ?></p>
			<?php
				get_search_form();

			else :
			?>

				<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'exposibram-2022'); ?></p>
			<?php
				get_search_form();

			endif;
			?>
		</div>

	<?php endif; ?>

</section><!-- .no-results -->