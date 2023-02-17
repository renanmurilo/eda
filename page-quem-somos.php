<?php
// Template Name: Quem somos
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner">
                <div class="content__banner">
                    <img src="<?php the_field('imagem_desktop'); ?>" alt="<?php the_title(); ?>" class="image__desktop">
                    <img src="<?php the_field('imagem_mobile'); ?>" alt="<?php the_title(); ?>" class="image__mobile">
                </div>
            </section>

            <section class="section__nossa__historia__slider">
                <div class="content__nossa__historia__slider">
                    <h2>Nossa historia</h2>
                    
                    <div class="inner__nossa__historia__slider slider-nossa-historia">
                        <?php if(have_rows('nossa_historia')): while(have_rows('nossa_historia')) : the_row(); ?>
                        <div class="box">
                            <h3><?php the_sub_field('ano'); ?></h3>
                            
                            <div class="text">
                                <?php the_sub_field('texto'); ?>
                            </div>
                        </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </section>

            <section class="section__nossa__historia">
                <div class="shell">
                    <div class="content__nossa__historia">
                        <h1><?php the_field('titulo_descricao'); ?></h1>
                        <div class="text">
                            <?php the_field('paragrafo_1'); ?>
                        </div>

                        <div class="text">
                            <?php the_field('paragrafo_2'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__nossas__marcas">
                <div class="shell">
                    <div class="content__nossas__marcas">
                        <h2>As nossas marcas</h2>

                        <div class="inner__nossas__marcas">
                            <?php if(have_rows('nossas_marcas')): while(have_rows('nossas_marcas')) : the_row(); ?>
                            <div class="row">
                                <div class="description">
                                    <h3><?php the_sub_field('titulo'); ?></h3>

                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
                                </div>

                                <div class="image">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                </div>
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>