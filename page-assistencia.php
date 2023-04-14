<?php
// Template Name: Assistência
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main data-group="assistencia">
            <section class="section__banner__assistencia">
                <div class="content__banner">
                    <h1><?php the_field('titulo'); ?></h1>
                    <p><?php the_field('texto_banner'); ?></p>

                    <div class="wrapper__buttons">
                        <a data-click="ferramentas" class="btn btn__black">Ferramentas pneumáticas</a>
                        <a data-click="fornos" class="btn btn__outline__black">Fornos</a>
                    </div>
                </div>
            </section>

            <section class="section__content__assistencia" data-target="ferramentas">
                <?php include(TEMPLATEPATH . '/include/assistencia/ferramentas.php'); ?>
            </section>

            <section class="section__content__fornos" data-target="fornos">
                <?php include(TEMPLATEPATH . '/include/assistencia/fornos.php'); ?>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>