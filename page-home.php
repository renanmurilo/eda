<?php
// Template Name: Home
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

            <?php include(TEMPLATEPATH . '/include/novidades.php'); ?>

            <section class="section__home__sobre">
                <div class="shell">
                    <div class="content__sobre">
                        <div class="image">
                            <img src="<?php the_field('imagem'); ?>" alt="">
                        </div>

                        <h2><?php the_field('titulo_sobre'); ?></h2>

                        <div class="text">
                            <?php the_field('texto_sobre'); ?>
                        </div>

                        <a href="" class="btn btn__black">Veja a nossa historia</a>
                    </div>
                </div>
            </section>

            <section class="section__home__produtos">
                <div class="shell">
                    <div class="content__produtos">
                        <h2>Conheça nossos produtos</h2>

                        <div class="inner__produtos">
                            <?php if(have_rows('conteudo')): while(have_rows('conteudo')) : the_row(); ?>
                            <div class="box">
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                </div>

                                <h2><?php the_sub_field('titulo'); ?></h2>

                                <div class="text">
                                    <?php the_sub_field('texto'); ?>
                                </div>

                                <a href="<?php the_sub_field('link_do_botao'); ?>" class="btn btn__primary">Saiba mais</a>
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php include(TEMPLATEPATH . '/include/encontre.php'); ?>

            <section class="section__fique__por__dentro">
                <div class="shell">
                    <div class="content__fique__por__dentro">
                        <h2>FIQUE POR DENTRO</h2>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>