<?php
// Template Name: Tornos
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <?php include(TEMPLATEPATH . '/include/breadcrumb.php'); ?>

            <section class="section__unidades__fornos">
                <div class="shell">
                    <div class="content__fornos">
                        <h2>Tornos</h2>

                        <div class="inner__fornos">
                            <?php
                                $args = array (
                                    'post_type' => 'torno',
                                    'order' => 'DESC',
                                    'showposts' => 16,
                                );
                                $the_query = new WP_Query ( $args );
                            ?>

                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <?php include(TEMPLATEPATH . '/include/post.php'); ?>
                            <?php endwhile; else : endif; ?>
                            <?php  wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__precos">
                <div class="shell">
                    <div class="content__precos">
                        <h2>Lista de preços</h2>

                        <div class="inner__precos">
                            <div class="header__precos">
                                <h5>Preços</h5>
                            </div>

                            <table>
                                <thead>
                                    <th>Modelo</th>
                                    <th>Preço</th>
                                    <th>Preço <br> com ssx</th>
                                    <th>Tamanho do <br>prato</th>
                                    <th>Recipiente</th>
                                    <th>Motor</th>
                                    <th>Sentido de <br>rotação</th>
                                    <th>Potência (w)</th>
                                    <th>Capacidade de <br>argila</th>
                                </thead>

                                <tbody>
                                    <?php if(have_rows('lista_de_precos')): while(have_rows('lista_de_precos')) : the_row(); ?>
                                    <tr>
                                        <td><a href="<?php the_sub_field('link_do_produto'); ?>"><?php the_sub_field('modelo'); ?></a></td>
                                        <td><?php the_sub_field('preco'); ?></td>
                                        <td><?php the_sub_field('preco_com_ssx'); ?></td>
                                        <td><?php the_sub_field('tamanho_do_prato'); ?></td>
                                        <td><?php the_sub_field('recipiente'); ?></td>
                                        <td><?php the_sub_field('motor'); ?></td>
                                        <td><?php the_sub_field('sentido_de_rotacao'); ?></td>
                                        <td><?php the_sub_field('potencia_w'); ?></td>
                                        <td><?php the_sub_field('capacidade_de_brargila'); ?></td>
                                    </tr>
                                    <?php endwhile; else : endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__acessorios">
                <div class="shell">
                    <div class="content__acessorios">
                        <div class="inner__acessorios">
                            <div class="header__acessorios">
                                <h5>ACESSÓRIOS</h5>
                            </div>

                            <?php if(have_rows('lista_de_acessorios')): while(have_rows('lista_de_acessorios')) : the_row(); ?>
                            <div class="row">
                                <p><?php the_sub_field('nome'); ?></p>
                                <p><?php the_sub_field('valor'); ?></p>
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    <?php } } ?>

<?php get_footer(); ?>