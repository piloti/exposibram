<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exposibram
 */

?>

<footer id="colophon" class="site-footer mt-3 mt-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-4 mb-lg-5">
				<?php $currentlang = get_bloginfo('language');
				if ($currentlang == "pt-BR") : ?>
					<?php wp_nav_menu(array('menu' => 'Menu Header PT')); ?>
				<?php elseif ($currentlang == "en-US") : ?>
					<?php wp_nav_menu(array('menu' => 'Menu Header EN')); ?>
				<?php endif; ?>
			</div>
			<div class="col-12 mb-4 mb-lg-5">
				<?php $currentlang = get_bloginfo('language');
				if ($currentlang == "pt-BR") : ?>
					<p>
						<?php the_field('descricao_footerpt', 'options'); ?>
					</p>
				<?php elseif ($currentlang == "en-US") : ?>
					<p>
						<?php the_field('descricao_footeren', 'options'); ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="col-12">
				<?php $currentlang = get_bloginfo('language');
				if ($currentlang == "pt-BR") : ?>
					<a href="https://ibram.org.br/" target="_blank" rel="noopener noreferrer" title="IBRAM" class="d-inline-block">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/dist/imgs/ibram.png" alt="IBRAM">
					</a>
				<?php elseif ($currentlang == "en-US") : ?>
					<a href=https://ibram.org.br/en/" target="_blank" rel="noopener noreferrer" title="IBRAM" class="d-inline-block">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/dist/imgs/ibram.png" alt="IBRAM">
					</a>
				<?php endif; ?>

			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>