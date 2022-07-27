<section class="section-sponsors">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="title-1 fs-40 mb-3 mb-lg-4"><strong>PATROCINADORES</strong></h2>

        <div class="row mb-4 mb-lg-5">
          <div class="col-12">
            <h4><strong>Diamante</strong></h4>
            <div class="align-items-center">
              <?php foreach (get_field('add_diamante', 'options') as $key => $value) : ?>
                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="diamante" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="diamante"></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="row mb-4 mb-lg-5">
          <div class="col-12">
            <h4><strong>Platina</strong></h4>
            <div class="align-items-center">
              <?php foreach (get_field('add_platina', 'options') as $key => $value) : ?>
                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="platina" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="platina"></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="row mb-4 mb-lg-5">
          <div class="col-12">
            <h4><strong>Ouro</strong></h4>
            <div class="align-items-center">
              <?php foreach (get_field('add_ouro', 'options') as $key => $value) : ?>
                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="ouro" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="ouro"></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="row mb-4 mb-lg-5">
          <div class="col-12">
            <h4><strong>Prata</strong></h4>
            <div class="align-items-center">
              <?php foreach (get_field('add_prata', 'options') as $key => $value) : ?>
                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="prate" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="prate"></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="row mb-4 mb-lg-5">
          <div class="col-12">
            <h4><strong>Bronze</strong></h4>
            <div class="align-items-center">
              <?php foreach (get_field('add_bronze', 'options') as $key => $value) : ?>
                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="bronze" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="bronze"></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <h3 class="title-1 fs-40 mb-3 mb-lg-4"><strong>APOIO</strong></h3>

            <div class="row mb-4 mb-lg-5">
              <div class="col-12">
                <h4><strong>Institucional</strong></h4>
                <div class="align-items-center">
                  <?php foreach (get_field('add_apoio1', 'options') as $key => $value) : ?>
                    <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="apoio" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="apoio"></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>

            <div class="row mb-4 mb-lg-5">
              <div class="col-12">
                <h4><strong>Editorial</strong></h4>
                <div class="align-items-center">
                  <?php foreach (get_field('add_apoio2', 'options') as $key => $value) : ?>
                    <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="apoio" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="apoio"></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>