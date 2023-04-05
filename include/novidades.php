<section class="section__home__novidades">
    <div class="shell">
        <div class="content__novidades">
            <h1>Novidades</h1>
            <?php 
                $args = array( 
                    'post_type' => 'ferramentas', 
                    'order' => 'DESC',
                    'show_post' => 50,
                ); 

                $query = new WP_Query( $args ); 
            ?> 

            <div class="inner__novidades slide-produto">
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                <?php endwhile; else : endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <a href="<?php echo get_home_url(); ?>/ferramentas/?orderby=date" class="btn btn__primary">Veja todos os produtos</a>
        </div>
    </div>
</section>