<div class="card">
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <img src="<?php the_field('banner_destaque'); ?>" alt="<?php the_title(); ?>">
        </div>

        <div class="description">
            <h2><?php $excerpt = the_title(); echo substr($excerpt, 0, 70); ?></h2>

            <p><?php $excerpt = get_field('texto'); echo substr($excerpt, 0, 118); ?></p>

            <a href="<?php the_permalink(); ?>" class="btn btn__outline__white">
                Ler mais
            </a>
        </div>
    </a>
</div>