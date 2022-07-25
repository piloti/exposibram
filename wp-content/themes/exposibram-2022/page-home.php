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
        <div class="item">
          <img src="/wp-content/themes/exposibram-2022/dist/imgs/banner-home.png" alt="Banner" class="w-100">
        </div>
        <div class="item">
          <img src="/wp-content/themes/exposibram-2022/dist/imgs/banner-home.png" alt="Banner" class="w-100">
        </div>
      </div>
    </div>

    <div class="section-text-imgright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="title-1"><strong>O EVENTO</strong></h3>
            <p>Renuímos a cadeia produtiva da mineração que participa ativamente com as principais companhias mineradoras com atuação global e nacional, fornecedores de máquinas, equipamentos e serviços, representantes de instituições de pesquisa e universidades, delegações empresariais e governamentais de diversas nações, entidades de classe, empresas e autarquias ligadas ao setor público, além de importantes executivos e especialistas de vários segmentos para a discussão de temas relacionados à indústria mineral nacional e internacional.</p>

            <p class="fs-20"><strong>Principais tendências em tecnologia, equipamentos, softwares e outros produtos ligados à indústria mineral, além de dados sobre investimentos e gestão.</strong></p>

            <a href="#" class="btn btn-orange" title="saiba mais">SAIBA MAIS</a>
          </div>
        </div>
      </div>

      <span class="bg-1"></span>
      <span class="foto" style="background-image: url('/wp-content/themes/exposibram-2022/dist/imgs/foto-evento.png');"></span>
    </div>

    <div class="section-blue-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h3 class="text-center">A área da exposição com mais de <strong>13 mil m²</strong> de estandes com as principais mineradoras com atuação global e grandes fornecedores de produtos e serviços.</h3>
            <h3 class="text-center text-uppercase fw-600">Números da última edição presencial:</h3>

            <div class="row justify-content-center gx-5">
              <div class="col-md-4">
                <div class="card-white">
                  <p class="text-uppercase text-center mb-2">Participantes no evento</p>
                  <p class="text-center mb-0"><strong>+ 55 mil</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-white">
                  <p class="text-uppercase text-center mb-2">Expositores</p>
                  <p class="text-center mb-0"><strong>+ 400</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-white">
                  <p class="text-uppercase text-center mb-2">Países participantes</p>
                  <p class="text-center mb-0"><strong>+ 29</strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-imgleft-text">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-5">
            <h3 class="title-1"><strong>O CONGRESSO</strong></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet sollicitudin odio, eu laoreet elit ornare sit amet. Phasellus blandit nisi ex, vitae aliquam odio semper quis. Ut pellentesque volutpat nunc, sed iaculis odio aliquet vel. Quisque tincidunt lacinia libero, at viverra mauris semper quis. Quisque vel eleifend orci. Aenean tincidunt purus maximus, sodales quam quis, volutpat nisl. </p>

            <a href="#" class="btn btn-orange" title="saiba mais">SAIBA MAIS</a>
          </div>
        </div>
      </div>
      <span class="bg-1"></span>
      <span class="foto" style="background-image: url('/wp-content/themes/exposibram-2022/dist/imgs/foto-congresso.png');"></span>
    </div>

    <div class="section-blue-1 map">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center mb-4 mb-lg-5">
            <h3 class="mb-4">LOCAL DO EVENTO</h3>
            <p class="mb-0 fs-27">EXPOMINAS BH</p>
            <p class="fs-20">Av. Amazonas, 6200, Gameleira - Belo Horizonte - MG</p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.862799041336!2d-43.991891685085434!3d-19.93018568660362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa696f836375005%3A0x9e577a595927518d!2sAv.%20Amazonas%2C%206200%20-%20Gameleira%2C%20Belo%20Horizonte%20-%20MG%2C%2030510-000!5e0!3m2!1spt-BR!2sbr!4v1658706802147!5m2!1spt-BR!2sbr" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mapa local"></iframe>
          </div>

          <div class="col-lg-10">
            <h3 class="mb-3">AGENCIA DE TURISMO OFICIAL</h3>
            <p>
              <strong>Sette Turismo</strong><br>
              Rafaela Rates<br>
              rafaela@setteturismo.com.br<br>
              +55 (31) 99234-1797<br>
            </p>
            <p>
              <strong>Lucas Davi</strong><br>
              lucas@setteturismo.com.br<br>
              +55 (31) 98868-2772<br>
              (31) 3309-5038<br>
            </p>
            <p>
              Link para pacotes de Hospedagem e Passagem:<br>
              https://exposibram2022.bukly.com/
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="section-sponsors">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="title-1 fs-40 mb-3 mb-lg-4"><strong>PATROCINADORES</strong></h3>

            <div class="row mb-4 mb-lg-5">
              <div class="col-12">
                <h4><strong>Diamante</strong></h4>
                <div class="d-flex align-items-center">
                  <a href="#" target="_blank" rel="noopener noreferrer" title="diamante" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/grupo-aiz.jpg" alt="diamante"></a>
                </div>
              </div>
            </div>

            <div class="row mb-4 mb-lg-5">
              <div class="col-12">
                <h4><strong>Platina</strong></h4>
                <div class="d-flex align-items-center">
                  <a href="#" target="_blank" rel="noopener noreferrer" title="platina" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/anglo-american.jpg" alt="platina"></a>
                </div>
              </div>
            </div>

            <div class="row mb-4 mb-lg-5">
              <div class="col-12">
                <h4><strong>Ouro</strong></h4>
                <div class="d-flex align-items-center">
                  <a href="#" target="_blank" rel="noopener noreferrer" title="ouro" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/anglo-gold-ashanti.png" alt="ouro"></a>
                  <a href="#" target="_blank" rel="noopener noreferrer" title="ouro" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/kinross.png" alt="ouro"></a>
                  <a href="#" target="_blank" rel="noopener noreferrer" title="ouro" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/nexa.png" alt="ouro"></a>
                </div>
              </div>
            </div>

            <div class="row mb-4 mb-lg-5">
              <div class="col-12">
                <h4><strong>Bronze</strong></h4>
                <div class="d-flex align-items-center">
                  <a href="#" target="_blank" rel="noopener noreferrer" title="bronze" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/alcoa.png" alt="bronze"></a>
                  <a href="#" target="_blank" rel="noopener noreferrer" title="bronze" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/cardiesel.png" alt="bronze"></a>
                  <a href="#" target="_blank" rel="noopener noreferrer" title="bronze" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/geo-controle.png" alt="bronze"></a>
                  <a href="#" target="_blank" rel="noopener noreferrer" title="bronze" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/geosol.png" alt="bronze"></a>
                  <a href="#" target="_blank" rel="noopener noreferrer" title="bronze" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/mosaic.png" alt="bronze"></a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <h3 class="title-1 fs-40 mb-3 mb-lg-4"><strong>APOIO</strong></h3>
                
                <div class="row mb-4 mb-lg-5">
                  <div class="col-12">
                  <h4><strong>Institucional</strong></h4>
                    <div class="d-flex align-items-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" title="Institucional" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/abiape.png" alt="Institucional"></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-4 mb-lg-5">
                  <div class="col-12">
                  <h4><strong>Editorial</strong></h4>
                    <div class="d-flex align-items-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" title="Editorial" class="d-inline-block mb-3 me-3"><img src="/wp-content/themes/exposibram-2022/dist/imgs/eae-maquinas.png" alt="Editorial"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  $('.owl-carousel-e').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    items: 1,
    // autoplay: true,
    autoplayTimeout: 10000,
    autoHeight: true,
  })
</script>

<?php
get_footer();
