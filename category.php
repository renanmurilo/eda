<?php
get_header();
/* Template Name: Categoria */
?>
    <main>
        <section class="section__breadcrumb">
            <div class="shell">
                <div class="content__breadcrumb"></div>
            </div>
        </section>

        <section class="section__category">
            <div class="shell">
                <div class="content__category">
                    <h2></h2>

                    <div class="inner__category">
                        <?php 
                            $category_id = get_query_var('cat'); 
                            $args = array( 
                                'post_type' => 'produto', 
                                'cat' => $category_id, 
                            ); 

                            $query = new WP_Query( $args ); 
                        ?> 

                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                            <h2><?php the_field('nome'); ?></h2>
                        <?php endwhile; else : endif; ?>
                        <?php  wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>