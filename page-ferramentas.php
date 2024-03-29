<?php
// Template Name: Ferramentas
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__fornos__e__tornos__banner">
                <div class="content__banner slide-banners">
                    <?php if(have_rows('banners')): while(have_rows('banners')) : the_row(); ?>
                        <div class="banner__image">
                            <img class="banner__desktop" src="<?php the_sub_field('imagem_desktop'); ?>" alt="">
                            <img class="banner__mobile" src="<?php the_sub_field('imagem_mobile'); ?>" alt="">

                            <div class="description">
                                <h3><?php the_sub_field('pre_titulo'); ?></h3>
                                <h1><?php the_sub_field('titulo'); ?></h1>
                                <div class="text"><?php the_sub_field('texto'); ?></div>

                                <a href="<?php the_sub_field('link_do_banner'); ?>" class="btn btn__black">Saiba mais</a>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </section>

            <?php include(TEMPLATEPATH . '/include/novidades.php'); ?>

            <section class="section__nossas__ferramentas">
                <div class="shell">
                    <div class="content__nossas__ferramentas">
                        <h2><?php the_field('titulo_nossas_ferramentas'); ?></h2>
                        <div class="inner__nossas__ferramentas">
                            <?php if(have_rows('nossas_ferramentas')): while(have_rows('nossas_ferramentas')) : the_row(); ?>
                            <a href="<?php echo get_home_url(); ?><?php the_sub_field('link_da_categoria'); ?>" class="box">
                                <div class="image">
                                    <img class="image__primary" src="<?php the_sub_field('icone_primario'); ?>" alt="<?php the_sub_field('nome'); ?>">
                                    <img class="image__secondary" src="<?php the_sub_field('icone_secundario'); ?>" alt="<?php the_sub_field('nome'); ?>">
                                </div>

                                <h3><?php the_sub_field('nome'); ?></h3>
                            </a>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php include(TEMPLATEPATH . '/include/encontre.php'); ?>

            <section class="section__catalogo">
                <div class="image__mobile">
                    <img src="<?php the_field('banner_catalogo_mobile'); ?>" alt="<?php the_field('titulo_catalogo'); ?>">
                </div>
                
                <div class="shell">
                    <div class="content__catalogo">
                        <h2><?php the_field('titulo_catalogo'); ?></h2>
                        <div class="text">
                            <?php the_field('texto_catalogo'); ?>
                        </div>
                        <a href="<?php the_field('arquivo_catalogo'); ?>" class="btn btn__primary" target="_blank">Baixe o catálogo</a>
                    </div>
                </div>
            </section>

            <section class="section__representantes">
                <div class="shell">
                    <div class="content__representantes">
                        <h2><?php the_field('titulo_representante'); ?></h2>
                        <div class="text">
                            <?php the_field('texto_representante'); ?>
                        </div>

                        <a href="<?php echo get_home_url(); ?>/fale-conosco" class="btn btn__black">Saiba mais</a>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>