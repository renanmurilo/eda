<div class="produto__category">
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <img src="<?php the_field('imagem'); ?>" alt="<?php the_title(); ?>">
        </div>

        <div class="description">
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('descricao'); ?></p>
        </div>
    </a>
</div>