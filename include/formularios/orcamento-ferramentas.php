<div class="box__form">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-whats.svg" alt="">
    </div>

    <h3><?php the_field('texto_whatsapp'); ?></h3>

    <a>
        <?php the_field('numero_whatsapp_ferramentas_orcamento'); ?>
    </a>
</div>

<div class="form__class">
    <?php echo do_shortcode('[contact-form-7 id="5" title="Orçamento ferramentas"]'); ?>
</div>