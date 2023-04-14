<div class="card">
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <?php $rows = get_field('imagens_do_produto');
                $first_row = $rows[0]; 
            ?>
            <img src="<?php print_r($first_row['imagem']); ?>" alt="<?php the_title(); ?>">
        </div>

        <div class="description">
            <h3><?php $excerpt = the_title(); echo substr($excerpt, 0, 30); ?></h3>
        </div>
    </a>
</div>