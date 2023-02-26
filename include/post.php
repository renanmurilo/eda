<div class="card">
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <img src="<?php the_field('imagem'); ?>" alt="<?php the_title(); ?>">
        </div>

        <div class="description">
            <h3><?php $excerpt = the_title(); echo substr($excerpt, 0, 30); ?></h3>
        </div>
    </a>
</div>