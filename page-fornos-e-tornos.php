<?php
// Template Name: Fornos e Tornos
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

            <section class="section__fornos">
                <div class="shell">
                    <div class="content__fornos">
                        <div class="image__desktop">
                            <img src="<?php the_field('imagem_fornos_desktop'); ?>" alt="<?php the_field('titulo_fornos'); ?>">
                        </div>

                        <div class="description">
                            <h1><?php the_field('titulo_fornos'); ?></h1>
                            <div class="text">
                                <?php the_field('texto_fornos'); ?>
                            </div>

                            <div class="icons">
                                <?php if(have_rows('icones_fornos')): while(have_rows('icones_fornos')) : the_row(); ?>
                                <div class="icon">
                                    <div class="image">
                                        <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                    </div>

                                    <h3><?php the_sub_field('titulo'); ?></h3>
                                </div>
                                <?php endwhile; else : endif; ?>
                            </div>

                            <a href="<?php echo get_home_url(); ?>/fornos" class="btn btn__primary">Conheça os fornos</a>
                        </div>
                    </div>
                </div>

                <div class="image__mobile">
                    <img src="<?php the_field('imagem_fornos_desktop'); ?>" alt="<?php the_field('titulo_fornos'); ?>">
                </div>
            </section>

            <section class="section__tornos">
                <div class="shell">
                    <div class="content__tornos">
                        <div class="description">
                            <h2><?php the_field('titulo_tornos'); ?></h2>
                            <div class="text">
                                <?php the_field('texto_tornos'); ?>
                            </div>

                            <div class="icons">
                                <?php if(have_rows('icones_tornos')): while(have_rows('icones_tornos')) : the_row(); ?>
                                <div class="icon">
                                    <div class="image">
                                        <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                    </div>

                                    <h3><?php the_sub_field('titulo'); ?></h3>
                                </div>
                                <?php endwhile; else : endif; ?>
                            </div>

                            <a href="<?php echo get_home_url(); ?>/tornos" class="btn btn__primary">Veja os tornos</a>
                        </div>

                        <div class="image__desktop">
                            <img src="<?php the_field('imagem_tornos_desktop'); ?>" alt="<?php the_field('titulo_tornos'); ?>">
                        </div>
                    </div>
                </div>

                 <div class="image__mobile">
                    <img src="<?php the_field('imagem_tornos_desktop'); ?>" alt="<?php the_field('titulo_tornos'); ?>">
                </div>
            </section>

            <section class="section__skutt">
                <div class="shell">
                    <div class="content__skutt">
                        <div class="image__desktop">
                            <img src="<?php the_field('imagem_skutt_desktop'); ?>" alt="<?php the_field('titulo_skutt'); ?>">
                        </div>
                        
                        <div class="description">
                            <h2><?php the_field('titulo_skutt'); ?></h2>
                            <div class="text">
                                <?php the_field('texto_skutt'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image__mobile">
                    <img src="<?php the_field('imagem_skutt_mobile'); ?>" alt="<?php the_field('titulo_skutt'); ?>">
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>