<?php
get_header(); ?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
    <main>
        <section class="section__banner">
            <div class="shell">
                <div class="content__banner">
                    <div class="galeria">
                        <div class="thumbs">
                            <?php if(have_rows('imagens_do_produto')): while(have_rows('imagens_do_produto')) : the_row(); ?>
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="">
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>

                        <div class="image__large">
                        </div>
                    </div>

                    <aside class="aside">
                        <h1><?php the_field('nome'); ?></h1>
                        <h2><?php the_field('nome_tecnico_do_produto'); ?></h2>
                        <p><?php the_field('descricao'); ?></p>

                        <ul class="especificacoes">
                            <?php if(have_rows('especificacoes')): while(have_rows('especificacoes')) : the_row(); ?>
                            <li>
                                <h3><?php the_sub_field('nome'); ?></h3>
                                <p><?php the_sub_field('descricao'); ?></p>
                            </li>
                            <?php endwhile; else : endif; ?>
                        </ul>

                        <a href="" class="link">Ver mais</a>
                    </aside>
                </div>
            </div>
        </section>

        <section class="section__imagens">
            <div class="shell"> 
                <div class="content__imagens">
                    <?php if(have_rows('imagens_destaque')): while(have_rows('imagens_destaque')) : the_row(); ?>
                    <div class="image">
                        <img src="<?php the_sub_field('imagem'); ?>" alt="">
                    </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </section>

        <section class="section__descricao__produto">
            <div class="shell">
                <div class="content__descricao__produto">
                    <h2>DESCRIÇÃO DO PRODUTO</h2>

                    <div class="inner__descricao__produto">
                        <?php if(have_rows('descricao_do_produto')): while(have_rows('descricao_do_produto')) : the_row(); ?>
                        <p><?php the_sub_field('descricao'); ?></p>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__informacoes__produto">
            <div class="shell">
                <div class="content__informacoes__produto">
                    <h2>INFORMAÇÕES SOBRE O PRODUTO</h2>

                    <div class="inner__informacoes__produto">
                        <?php if(have_rows('informacoes_sobre_o_produto')): while(have_rows('informacoes_sobre_o_produto')) : the_row(); ?>
                        <div class="row">
                            <h5><?php the_sub_field('nome'); ?></h5>
                            <p><?php the_sub_field('descricao'); ?></p>
                        </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__veja">
            <div class="shell">
                <div class="content__veja">
                    <h2>Veja Também</h2>

                     <?php
                        $args = array (
                            'post_type' => 'produto',
                            'order' => 'DESC',
                            'showposts' => 50,
                            'post__not_in'  => array( $post->ID ),
                        );
                        $the_query = new WP_Query ( $args );
                    ?>
                    <div class="inner__veja">
                        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php include(TEMPLATEPATH . '/include/post.php'); ?>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php } } ?>

<?php get_footer(); ?>