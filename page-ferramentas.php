<?php
// Template Name: Ferramentas
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__home__banner">
                <div class="content__banner slide-banners">
                    <?php if(have_rows('banners')): while(have_rows('banners')) : the_row(); ?>
                        <a href="<?php the_sub_field('link'); ?>" class="banner__image">
                            <img class="banner__desktop" src="<?php the_sub_field('imagem_desktop'); ?>" alt="">
                            <img class="banner__mobile" src="<?php the_sub_field('imagem_mobile'); ?>" alt="">
                        </a>
                    <?php endwhile; else : endif; ?>
                </div>
            </section>

            <section class="section__home__novidades">
                <div class="shell">
                    <div class="content__novidades">
                        <h1>Novidades</h1>

                        <a href="" class="btn btn__primary">Veja todos os produtos</a>
                    </div>
                </div>
            </section>

            <section class="section__nossas__ferramentas">
                <div class="shell">
                    <div class="content__nossas__ferramentas">
                        <h2><?php the_field('titulo_nossas_ferramentas'); ?></h2>
                        <div class="inner__nossas__ferramentas">
                            <?php if(have_rows('nossas_ferramentas')): while(have_rows('nossas_ferramentas')) : the_row(); ?>
                            <a href="<?php the_sub_field('link_da_categoria'); ?>" class="box">
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

            <section class="section__catalogo">
                <div class="shell">
                    <div class="content__catalogo">
                        <h2><?php the_field('titulo_catalogo'); ?></h2>
                        <div class="text">
                            <?php the_field('texto_catalogo'); ?>
                        </div>
                        <a href="<?php the_field('arquivo_catalogo'); ?>" class="btn btn__primary" download>Baixe o catálogo</a>
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

                        <a href="" class="btn btn__black">Saiba mais</a>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>