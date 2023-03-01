<div class="produto">
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <img src="<?php the_field('imagem_destaque_do_produto'); ?>" alt="<?php the_title(); ?>">
        </div>

        <div class="description">
            <h3><?php the_title(); ?></h3>
        </div>
    </a>
</div>