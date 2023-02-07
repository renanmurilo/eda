<?php get_header(); ?>
    <?php $idioma = get_locale();?> 
    <main>
        <section class="section__error">
            <div class="shell">
                <div class="content__error">
                    <h1>404</h1>
                     <?php if ($idioma === 'pt_BR') : ?>
                    <h2>Página indisponível</h2>
                    <a href="<?php echo get_home_url(); ?>" class="btn btn__outline__primary">
                        Home
                    </a>
                    <?php elseif ($idioma === 'en_US') : ?>
                    <h2 class="title__blue">Page not found</h2>
                    <a href="<?php echo get_home_url(); ?>" class="btn btn__outline__primary">
                        Go home
                    </a>
                    <?php endif ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>