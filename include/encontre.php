<?php $home = get_page_by_title('Home'); ?>
<section class="section__home__ferramentas">
    <div class="shell">
        <div class="content__ferramentas">
            <h2>ENCONTRE FERRAMENTAS POR CATEGORIA</h2>
            
            <div class="inner__ferramentas">
                <?php if(have_rows('conteudo_categorias', $home)): while(have_rows('conteudo_categorias', $home)) : the_row(); ?>
                <a href="<?php echo get_home_url(); ?><?php the_sub_field('link', $home); ?>" class="icons">
                    <div class="icon">
                        <img class="image__primary" src="<?php the_sub_field('icone_primario', $home); ?>" alt="">
                        <img class="image__secondary" src="<?php the_sub_field('icone_secundario', $home); ?>" alt="">
                    </div>
                    <h3><?php the_sub_field('titulo', $home); ?></h3>
                </a>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </div>
</section>