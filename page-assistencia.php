<?php
// Template Name: Assistência
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner__assistencia">
                <div class="content__banner">
                    <h1><?php the_field('titulo'); ?></h1>
                    <p><?php the_field('texto_banner'); ?></p>

                    <div class="wrapper__buttons">
                        <a href="" class="btn btn__black">Ferramentas pneumáticas</a>
                        <a href="" class="btn btn__outline__black">Fornos</a>
                    </div>
                </div>
            </section>

            <section class="section__content__assistencia">
                <div class="shell">
                    <div class="content__assistencia">
                        <h2><?php the_field('titulo_ferramentas'); ?></h2>
                        <div class="text"><?php the_field('paragrafo_1'); ?></div>
                    </div>

                    <div class="image__desktop">
                        <img src="<?php the_field('imagem_ferramentas'); ?>" alt="<?php the_field('titulo_ferramentas'); ?>">
                    </div>

                    <div class="encontre__assistencia">
                        <h2>ENCONTRE A ASSISTÊNCIA MAIS PRÓXIMA</h2>

                        <div class="inner__assistencia">
                            <?php if(have_rows('assistencias_ferramentas')): while(have_rows('assistencias_ferramentas')) : the_row(); ?>
                            <details>
                                <summary>
                                    <h3><?php the_sub_field('estado'); ?></h3>

                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="Linkedin">
                                    </div>
                                </summary>

                                <?php if(have_rows('lojas')): while(have_rows('lojas')) : the_row(); ?>
                                    <h4><?php the_sub_field('cidade'); ?></h4>

                                        <?php if(have_rows('loja')): while(have_rows('loja')) : the_row(); ?>
                                            <div class="content__details">
                                                <h5><?php the_sub_field('nome_da_loja'); ?></h5>

                                                <div class="descricao__loja">
                                                    <div class="text">
                                                        <h6>Contato:</h6>
                                                        <p><?php the_sub_field('contato'); ?></p>
                                                    </div>
                                                    <div class="text">
                                                        <h6>Telefone:</h6>
                                                        <p><?php the_sub_field('telefone'); ?></p>
                                                    </div>
                                                    <div class="text">
                                                        <h6>E-mail:</h6>
                                                        <p><?php the_sub_field('email'); ?></p>
                                                    </div>

                                                    <div class="text">
                                                        <p><?php the_sub_field('endereco'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; else : endif; ?>

                                <?php endwhile; else : endif; ?>
                            </details>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>