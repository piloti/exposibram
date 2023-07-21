<section class="section-sponsors">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php $currentlang = get_bloginfo('language');
                if ($currentlang == "pt-BR") : ?>
                    <h2 class="title-1 fs-40 mb-3 mb-lg-4"><strong>PATROCINADORES</strong></h2>
                <?php elseif ($currentlang == "en-US") : ?>
                    <h2 class="title-1 fs-40 mb-3 mb-lg-4"><strong>SPONSORS</strong></h2>
                <?php endif; ?>

                <div class="row mb-4 mb-lg-5">
                    <div class="col-12">
                        <?php $currentlang = get_bloginfo('language');
                        if ($currentlang == "pt-BR") : ?>
                            <h4><strong>Diamante</strong></h4>
                        <?php elseif ($currentlang == "en-US") : ?>
                            <h4><strong>Diamond</strong></h4>
                        <?php endif; ?>
                        <div class="align-items-center">
                            <?php foreach (get_field('add_diamante', 'options') as $key => $value) : ?>
                                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="diamante" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="diamante"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 mb-lg-5">
                    <div class="col-12">
                        <?php $currentlang = get_bloginfo('language');
                        if ($currentlang == "pt-BR") : ?>
                            <h4><strong>Platina</strong></h4>
                        <?php elseif ($currentlang == "en-US") : ?>
                            <h4><strong>Platinum</strong></h4>
                        <?php endif; ?>
                        <div class="align-items-center">
                            <?php foreach (get_field('add_platina', 'options') as $key => $value) : ?>
                                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="platina" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="platina"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 mb-lg-5">
                    <div class="col-12">
                        <?php $currentlang = get_bloginfo('language');
                        if ($currentlang == "pt-BR") : ?>
                            <h4><strong>Ouro</strong></h4>
                        <?php elseif ($currentlang == "en-US") : ?>
                            <h4><strong>Gold</strong></h4>
                        <?php endif; ?>
                        <div class="align-items-center">
                            <?php foreach (get_field('add_ouro', 'options') as $key => $value) : ?>
                                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="ouro" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="ouro"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 mb-lg-5">
                    <div class="col-12">
                        <?php $currentlang = get_bloginfo('language');
                        if ($currentlang == "pt-BR") : ?>
                            <h4><strong>Prata</strong></h4>
                        <?php elseif ($currentlang == "en-US") : ?>
                            <h4><strong>Silver</strong></h4>
                        <?php endif; ?>
                        <div class="align-items-center">
                            <?php foreach (get_field('add_prata', 'options') as $key => $value) : ?>
                                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="prate" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="prate"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <?php
                $currentlang = get_bloginfo('language');
                $add_gresiduos = get_field('add_gresiduos', 'options');
                if ($add_gresiduos) :
                ?>
                    <div class="row mb-4 mb-lg-5">
                        <div class="col-12">
                            <?php if ($currentlang == "pt-BR") : ?>
                                <h4><strong>Gestão de Resíduos</strong></h4>
                            <?php elseif ($currentlang == "en-US") : ?>
                                <h4><strong>Waste Management</strong></h4>
                            <?php endif; ?>
                            <div class="align-items-center">
                                <?php
                                foreach ($add_gresiduos as $key => $value) :
                                ?>
                                    <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="Gestão de Resíduos" class="d-inline-block"><img src="<?= $value['logo'] ?>" alt="Gestão de Resíduos"></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row mb-4 mb-lg-5">
                    <div class="col-12">
                        <?php $currentlang = get_bloginfo('language');
                        if ($currentlang == "pt-BR") : ?>
                            <h4><strong>Bronze</strong></h4>
                        <?php elseif ($currentlang == "en-US") : ?>
                            <h4><strong>Bronze</strong></h4>
                        <?php endif; ?>
                        <div class="align-items-center">
                            <?php foreach (get_field('add_bronze', 'options') as $key => $value) : ?>
                                <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="bronze" class="d-inline-block logo-small <?= $value['logo_sm'] ?>"><img src="<?= $value['logo'] ?>" alt="bronze"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <?php $currentlang = get_bloginfo('language');
                        if ($currentlang == "pt-BR") : ?>
                            <h3 class="title-1 fs-40 mb-3 mb-lg-4"><strong>APOIO</strong></h3>
                        <?php elseif ($currentlang == "en-US") : ?>
                            <h3 class="title-1 fs-40 mb-3 mb-lg-4"><strong>SUPPORT</strong></h3>
                        <?php endif; ?>

                        <div class="row mb-4 mb-lg-5">
                            <div class="col-12">
                                <?php $currentlang = get_bloginfo('language');
                                if ($currentlang == "pt-BR") : ?>
                                    <h4><strong>Institucional</strong></h4>
                                <?php elseif ($currentlang == "en-US") : ?>
                                    <h4><strong>Institutional</strong></h4>
                                <?php endif; ?>
                                <div class="align-items-center">
                                    <?php foreach (get_field('add_apoio1', 'options') as $key => $value) : ?>
                                        <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="apoio" class="d-inline-block logo-small <?= $value['logo_sm'] ?>"><img src="<?= $value['logo'] ?>" alt="apoio"></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4 mb-lg-5">
                            <div class="col-12">
                                <?php $currentlang = get_bloginfo('language');
                                if ($currentlang == "pt-BR") : ?>
                                    <h4><strong>Editorial</strong></h4>
                                <?php elseif ($currentlang == "en-US") : ?>
                                    <h4><strong>Editorial</strong></h4>
                                <?php endif; ?>
                                <div class="align-items-center">
                                    <?php foreach (get_field('add_apoio2', 'options') as $key => $value) : ?>
                                        <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="apoio" class="d-inline-block logo-small <?= $value['logo_sm'] ?>"><img src="<?= $value['logo'] ?>" alt="apoio"></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4 mb-lg-5">
                            <div class="col-12">
                                <?php $currentlang = get_bloginfo('language');
                                if ($currentlang == "pt-BR") : ?>
                                    <h4><strong>Institucional</strong></h4>
                                <?php elseif ($currentlang == "en-US") : ?>
                                    <h4><strong>Institutional</strong></h4>
                                <?php endif; ?>
                                <div class="align-items-center">
                                    <?php foreach (get_field('add_apoio1', 'options') as $key => $value) : ?>
                                        <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="apoio" class="d-inline-block logo-small <?= $value['logo_sm'] ?>"><img src="<?= $value['logo'] ?>" alt="apoio"></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4 mb-lg-5">
                            <div class="col-12">
                                <?php $currentlang = get_bloginfo('language');
                                if ($currentlang == "pt-BR") : ?>
                                    <h4><strong>Eventos Parceiros</strong></h4>
                                <?php elseif ($currentlang == "en-US") : ?>
                                    <h4><strong>Partner Events</strong></h4>
                                <?php endif; ?>
                                <div class="align-items-center">
                                    <?php foreach (get_field('add_parceiros', 'options') as $key => $value) : ?>
                                        <a href="<?= $value['link'] ?>" target="_blank" rel="noopener noreferrer" title="apoio" class="d-inline-block logo-small <?= $value['logo_sm'] ?>"><img src="<?= $value['logo'] ?>" alt="apoio"></a>
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