<?php
get_header(); ?>

    <main>
        <?php include(TEMPLATEPATH . '/include/breadcrumb.php'); ?>

        <div class="trocar__modelo">
            <a href="" class="btn btn__primary" id="openProducts">
                Trocar modelo
            </a>

            <div class="content__modelos">
                <?php
                    $args = array (
                        'post_type' => 'forno',
                        'order' => 'DESC',
                        'show_post' => 50,
                    );
                    $the_query = new WP_Query ( $args );
                ?>

                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                <?php endwhile; else : endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        
        <section class="section__dados">
            <div class="shell">
                <div class="content__dados">
                    <div class="image">
                        <img src="<?php the_field('imagem'); ?>" alt="<?php the_title(); ?>">

                        <a href="" class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-down.svg" alt="icon">
                        </a>
                    </div>

                    <aside class="aside__bar">
                        <h1><?php the_field('nome'); ?></h1>
                        <h2><?php the_field('nome_tecnico'); ?></h2>
                        <div class="text">
                            <?php the_field('texto_descritivo'); ?>
                        </div>

                        <a href="" class="link">Ver Mais</a>
                    </aside>
                </div>
            </div>
        </section>

        <section class="section__dimensoes">
            <div class="shell">
                <div class="content__dimensoes">
                    <div class="description">
                        <h2>Dimensões</h2>

                        <div class="medidas">
                            <div class="medida__externa">
                                <h3>Medida externa</h3>
                                
                                <div class="externa">
                                    <?php if(have_rows('medidas_externa')): while(have_rows('medidas_externa')) : the_row(); ?>
                                        <p><?php the_sub_field('medida'); ?></p>
                                    <?php endwhile; else : endif; ?>
                                </div>
                            </div>

                            <div class="medida__interna">
                                <h3>Medidas Internas</h3>

                                <div class="internas">
                                    <?php if(have_rows('medidas_internas')): while(have_rows('medidas_internas')) : the_row(); ?>
                                    <div class="text">
                                        <h3><?php the_sub_field('titulo'); ?></h3>
                                        <p><?php the_sub_field('medida'); ?></p>
                                    </div>
                                    <?php endwhile; else : endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="image">
                        <img src="<?php the_field('imagem_dimensoes'); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section__descricao">
            <div class="shell">
                <div class="content__descricao">
                    <h2>DESCRIÇÃO DO PRODUTO</h2>

                    <div class="text">
                        <?php the_field('descricao'); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__informacoes__produto">
            <div class="shell">
                <div class="content__informacoes">
                    <h2>INFORMAÇÕES SOBRE O PRODUTO</h2>

                    <div class="inner__informacoes">
                        <?php if(have_rows('informacoes_do_produto')): while(have_rows('informacoes_do_produto')) : the_row(); ?>
                        <div class="row">
                            <div class="title">
                                <h3><?php the_sub_field('titulo'); ?></h3>
                            </div>
                            
                            <p><?php the_sub_field('texto'); ?></p>
                        </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>

            <div class="button">
                <a href="<?php echo get_home_url(); ?>/fornos" class="btn btn__primary">Veja a lista completa de preços</a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>