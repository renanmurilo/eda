<?php
// Template Name: Duvidas frequentes
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
           <section class="section__duvidas">
                <div class="shell">
                    <div class="content__duvidas">
                        <h1>Dúvidas frequentes</h1>

                        <div class="inner__duvidas">
                            <?php if(have_rows('duvidas_frequentes')): while(have_rows('duvidas_frequentes')) : the_row(); ?>
                            <details>
                                <summary>
                                    <h3><?php the_sub_field('titulo'); ?></h3>

                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="Linkedin">
                                    </div>
                                </summary>

                                <div class="content__details">
                                    <p><?php the_sub_field('descricao'); ?></p>
                                </div>
                            </details>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
           </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
