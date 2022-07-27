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
				<?php wp_nav_menu(array('menu' => 'Menu Header')); ?>
				<!-- <div class="col-footer-1">
					<p class="text-uppercase mb-2 fw-500">Expo/Feira</p>
					<ul class="ul-ft">
						<li><a href="#">Sobre a exposição</a></li>
						<li><a href="#">Área do visitante</a></li>
						<li><a href="#">Mapa de estande</a></li>
						<li><a href="#">Lista de expositores</a></li>
						<li><a href="#">Área do expositor</a></li>
					</ul>
				</div>
				<div class="col-footer-1">
					<p class="text-uppercase mb-2 fw-500">Congresso</p>
					<ul class="ul-ft">
						<li><a href="#">Sobre o congresso</a></li>
						<li><a href="#">Programação</a></li>
						<li><a href="#">Convidados</a></li>
					</ul>
				</div>
				<div class="col-footer-1">
					<p class="text-uppercase mb-2 fw-500">Como participar</p>
					<ul class="ul-ft">
						<li><a href="#">Cotas de patrocínio</a></li>
						<li><a href="#">Encartes promocionais</a></li>
						<li><a href="#">Palestras técnicas</a></li>
						<li><a href="#">Merchandising</a></li>
					</ul>
				</div>
				<div class="col-footer-1">
					<a href="#" class="text-uppercase mb-2 fw-500">Rodada de Negócios</a>
				</div>
				<div class="col-footer-1">
					<p class="text-uppercase mb-2 fw-500">Inscrição</p>
					<ul class="ul-ft">
						<li><a href="#">Exposição</a></li>
						<li><a href="#">Congresso</a></li>
					</ul>
				</div> -->
			</div>
			<div class="col-12 mb-4 mb-lg-5">
				<p>
					Para mais informações, entre em contato conosco:<br>
					+55 (31) 2626-0637 | <a href="mailto:secretaria@ibram.org.br">secretaria@ibram.org.br</a>
				</p>
			</div>
			<div class="col-12">
				<a href="https://ibram.org.br/" target="_blank" rel="noopener noreferrer" title="IBRAM" class="d-inline-block">
					<img src="/wp-content/themes/exposibram-2022/dist/imgs/ibram.png" alt="IBRAM">
				</a>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>