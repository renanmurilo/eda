<?php
get_header();
/* Template Name: Categoria */
?>
    <main>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
        <section class="section__header__category">
            <div class="shell">
                <div class="content__header__category">
                    <h1>
                        <?php 
                            $category_id = get_query_var('cat'); 
                            $args = array( 
                                'post_type' => 'ferramenta', 
                                'cat' => $category_id, 
                            ); 

                            $query = new WP_Query( $args ); 
                            $category_name = get_cat_name( $category_id ); 
                            echo $category_name
                        ?>
                    </h1>

                    <div class="order__by">
                        <form>
                            <select name="orderby" id="orderby" class="select__order">
                                <option value="title" <?php selected( $orderby, 'title' ); ?>>Ordenar por Título</option>
                                <option value="date" <?php selected( $orderby, 'date' ); ?>>Ordenar por Data</option>
                                <option value="rand" <?php selected( $orderby, 'rand' ); ?>>Ordenar Aleatoriamente</option>
                                <option value="name" <?php selected( $orderby, 'name' ); ?>>Ordenar por nome</option>
                            </select>

                            <input type="submit" value="Ordenar">
                        </form>
                    </div>
                </div>

                <div class="filtros__mobile">
                    <div class="nav__filtros">
                    <h3>CATEGORIAS</h3>
                        <?php
                            wp_nav_menu([
                                'menu' => 'categorias',
                                'menu_class' => 'filtro-cat',
                                'container' => false,
                            ]);
                        ?>
                    </div>
                </div>

                <div class="menu__category">
                    <?php
                            wp_nav_menu([
                                'menu' => 'categoria-filtros',
                                'menu_class' => 'filtro-menu',
                                'container' => false,
                            ]);
                        ?>
                </div>
            </div>
        </section>

        <section class="section__category">
            <div class="shell">
                <div class="content__category">
                    <aside class="filtros">
                        <h3>CATEGORIAS</h3>

                        <?php
                            wp_nav_menu([
                                'menu' => 'categorias',
                                'menu_class' => 'filtro-cat',
                                'container' => false,
                            ]);
                        ?>
                    </aside>

                    <div class="inner__category">
                        <?php 
                            $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'title';
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $category_id = get_query_var('cat'); 
                            $args = array( 
                                'post_type' => 'ferramenta', 
                                'cat' => $category_id, 
                                'posts_per_page' => 9,
                                'orderby' => $orderby,
                                'paged' => $paged,
                            ); 

                            $query = new WP_Query( $args ); 
                        ?> 

                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                            <?php include(TEMPLATEPATH . '/include/produto-category.php'); ?>
                        <?php endwhile; ?>
                             <div class="pagination">
                                <?php
                                    echo paginate_links( array(
                                        'base' => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'format' => '?paged=%#%',
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $query->max_num_pages
                                    ) );
                                ?>
                            </div>
                        <?php else : endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>