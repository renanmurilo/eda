<?php
// Template Name: Fale conosco
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main data-grupo="contato" class="contact">
            <div class="separador"></div>
            <section class="banner__contato">
                <div class="shell">
                    <div class="content__banner__contato">
                        <h1><?php the_field('titulo_banner'); ?></h1>
                        <p><?php the_field('texto_banner'); ?></p>

                        <div class="row__buttons">
                            <a data-click="ferramentas" class="btn btn__outline__black">Ferramentas</a>
                            <a data-click="fornos" class="btn btn__outline__black">Fornos</a>
                        </div>

                        <div class="wrapper__ferramentas" data-target="ferramentas">
                            <div class="btn__wrapper">
                                <a data-open="orcamento-ferramentas" class="btn__form">
                                    ORÇAMENTOS E <br> DÚVIDAS GERAIS
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                            <div class="btn__wrapper">
                                <a data-open="representante-ferramentas" class="btn__form">
                                    SEJA UM REPRESENTANTE <br> COMERCIAL
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                            <div class="btn__wrapper">
                                <a data-open="sac-ferramentas" class="btn__form">
                                    SAC <br> PÓS-VENDA
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                            <div class="btn__wrapper">
                                <a data-open="boletos" class="btn__form">
                                    SEGUNDA VIA <br> DE BOLETOS
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <div class="wrapper__fornos" data-target="fornos">
                            <div class="btn__wrapper">
                                <a data-open="orcamento-fornos" class="btn__form">
                                    ORÇAMENTOS E <br> DÚVIDAS GERAIS
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                            <div class="btn__wrapper">
                                <a data-open="sac-fornos" class="btn__form">
                                    SAC <br> PÓS-VENDA
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <div class="formularios" data-form="orcamento-ferramentas">
                            <?php include(TEMPLATEPATH . '/include/formularios/orcamento-ferramentas.php'); ?>
                        </div>

                        <div class="formularios" data-form="representante-ferramentas">
                            <?php include(TEMPLATEPATH . '/include/formularios/representante-ferramentas.php'); ?>
                        </div>

                        <div class="formularios" data-form="sac-ferramentas">
                            <?php include(TEMPLATEPATH . '/include/formularios/sac-ferramentas.php'); ?>
                        </div>

                        <div class="formularios" data-form="boletos">
                            <?php include(TEMPLATEPATH . '/include/formularios/boleto-ferramentas.php'); ?>
                        </div>

                        <div class="formularios" data-form="orcamento-fornos">
                            <?php include(TEMPLATEPATH . '/include/formularios/orcamento-fornos.php'); ?>
                        </div>

                        <div class="formularios" data-form="sac-fornos">
                            <?php include(TEMPLATEPATH . '/include/formularios/sac-fornos.php'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__showroom">
                <div class="image__mobile">
                    <img src="<?php the_field('imagem_showroom_mobile'); ?>" alt="">
                </div>

                <div class="shell">
                    <div class="content__showroom">
                        <h2><?php the_field('titulo_showroom'); ?></h2>
                        <div class="text">
                            <?php the_field('texto_showroom'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__importadora__eda">
                <div class="shell">
                    <div class="content__importadora__eda">
                        <h2><?php the_field('titulo_importadora'); ?></h2>
                        <ul>
                            <li><?php the_field('endereco'); ?></li>
                            <li><?php the_field('telefone'); ?></li>
                            <li><?php the_field('email'); ?></li>
                        </ul>

                        <div class="text">
                            <?php the_field('texto_importadora'); ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>