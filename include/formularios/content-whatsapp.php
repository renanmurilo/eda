<div class="box__form">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-whats.svg" alt="">
    </div>

    <h3><?php the_field('texto_whatsapp'); ?></h3>

    <a href="<?php the_field('link_whatsapp'); ?>">
        <?php the_field('numero_whatsapp'); ?>
    </a>
</div>