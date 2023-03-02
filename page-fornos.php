<?php
// Template Name: Fornos
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <?php include(TEMPLATEPATH . '/include/breadcrumb.php'); ?>

            <section class="section__video">
                <div class="shell">
                    <div class="content__video">
                        <h1><?php the_field('titulo_video'); ?></h1>

                        <div class="video">
                            <?php the_field('video'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__unidades__fornos">
                <div class="shell">
                    <div class="content__fornos">
                        <h2>Fornos</h2>

                        <div class="inner__fornos">
                            <?php
                                $args = array (
                                    'post_type' => 'forno',
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
                                    <th>Automático <br>Km</th>
                                    <th>Touch kmt</th>
                                    <th>Cone</th>
                                    <th>Temp ºC</th>
                                    <th>Diâmetro <br> Interno (Cm)</th>
                                    <th>Altura Interna (Cm)</th>
                                    <th>Kit prateleira</th>
                                    <th>Espessura <br>prateleira</th>
                                </thead>

                                <tbody>
                                    <?php if(have_rows('lista_de_precos')): while(have_rows('lista_de_precos')) : the_row(); ?>
                                    <tr>
                                        <td><a href="<?php the_sub_field('link_do_produto'); ?>"><?php the_sub_field('modelo'); ?></a></td>
                                        <td><?php the_sub_field('automatico_km'); ?></td>
                                        <td><?php the_sub_field('touch_kmt'); ?></td>
                                        <td><?php the_sub_field('cone'); ?></td>
                                        <td><?php the_sub_field('temp_ºc'); ?></td>
                                        <td><?php the_sub_field('diametro_interno_cm'); ?></td>
                                        <td><?php the_sub_field('altura_interna_cm'); ?></td>
                                        <td><?php the_sub_field('kit_prateleira'); ?></td>
                                        <td><?php the_sub_field('espessura_prateleira'); ?></td>
                                    </tr>
                                    <?php endwhile; else : endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__informacoes">
                <div class="shell">
                    <div class="content__informacoes">
                        <h2>Informações importantes</h2>
                        
                        <div class="inner__informacoes">
                            <?php if(have_rows('informacoes_importantes')): while(have_rows('informacoes_importantes')) : the_row(); ?>
                            <div class="box">
                                <div class="image">
                                    <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                </div>

                                <div class="description">
                                    <h3><?php the_sub_field('titulo'); ?></h3>
                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__faixa__pagamento">
                <div class="shell">
                    <div class="content__faixa__pagamento">
                        <div class="texto__pagamento">
                            <h2><?php the_field('titulo_pagamento'); ?></h2>
                            <div class="text">
                                <?php the_field('texto_pagamento'); ?>
                            </div>
                        </div>

                        <div class="texto__informacoes">
                            <h2><?php the_field('titulo_outras_informacoes'); ?></h2>
                            <ul>
                                <?php if(have_rows('informacoes')): while(have_rows('informacoes')) : the_row(); ?>
                                <li><?php the_sub_field('texto'); ?></li>
                                <?php endwhile; else : endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__manual">
                <div class="image__mobile">
                    <img src="<?php the_field('imagem_manual_mobile'); ?>" alt="<?php the_field('titulo_manual'); ?>">
                </div>
                <div class="shell">
                    <div class="content__manual">
                        <div class="image__desktop">
                            <img src="<?php the_field('imagem_manual_desktop'); ?>" alt="<?php the_field('titulo_manual'); ?>">
                        </div>

                        <div class="description">
                            <h2><?php the_field('titulo_manual'); ?></h2>
                            <div class="text">
                                <?php the_field('texto_manual'); ?>
                            </div>
                            <a href="<?php the_field('arquivo_manual'); ?>" class="btn btn__primary" download>Baixe o manual</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
