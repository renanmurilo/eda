    <?php $home = get_page_by_title('Home'); ?>
    <?php $idioma = get_locale();?>

    <footer class="footer">
        <div class="content__footer">
            <div class="shell">
                <div class="inner__footer">
                    <div class="grid__footer">
                        <a href="<?php echo get_home_url(); ?>/" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Alma Law">
                        </a>

                        <div class="endereco">
                            <p><?php the_field('endereco_1', $home); ?></p>
                            <p><?php the_field('endereco_2', $home); ?></p>
                        </div>
                    </div>

                    <div class="grid__footer">
                         <?php if ($idioma === 'pt_BR') : ?>
                        <h3>Contato</h3>
                        <?php elseif ($idioma === 'en_US') : ?> 
                        <h3>CONTACT</h3>
                        <?php endif ?>
                        
                        <div class="redes__sociais">
                            <a href="<?php the_field('link_instagram', $home); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico-instagram.svg" alt="Instagram">
                            </a>
                            <a href="<?php the_field('link_linkedin', $home); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico-linkedin.svg" alt="Linkedin">
                            </a>
                        </div>

                        <div class="phone">
                            <a href="mailto:" class="link"><?php the_field('email', $home); ?></a>
                            <a href="tel:+" class="link"><?php the_field('telefone', $home); ?></a>
                        </div>
                    </div>

                    <div class="grid__footer">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h3>Institucional</h3>
                        <?php elseif ($idioma === 'en_US') : ?> 
                        <h3>INSTITUTIONAL</h3>
                        <?php endif ?>

                        <div class="links">
                            <?php if ($idioma === 'pt_BR') : ?>
                            <a href="http://" class="link">Políticas do escritório</a>
                            <a href="<?php echo get_home_url(); ?>/termo-de-privacidade/" class="link">Aviso de privacidade</a>
                            <?php elseif ($idioma === 'en_US') : ?> 
                            <a href="http://" class="link">Office policies</a>
                            <a href="<?php echo get_home_url(); ?>/privacy-term" class="link">Privacy notice</a>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="grid__footer">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h3>INSCREVA-SE EM NOSSA NEWSLETTER</h3>
                        <?php elseif ($idioma === 'en_US') : ?> 
                        <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                        <?php endif ?>
                        
                        <?php echo do_shortcode('[contact-form-7 id="52" title="Newsletter"]'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy">
            <a href="http://" target="_blank" rel="noopener noreferrer">Design by Eólica</a>
            <p>Copyright 2022 @Alma Law</p>
        </div>
        <div class="box-cookies hide">
            <div class="shell">
                <div class="container--cookies">
                    <?php if ($idioma === 'pt_BR') : ?>
                    <div class="text">
                        <h3>ESTE SITE USA COOKIES</h3>
                        <p class="msg-cookies">Usamos cookies no nosso site para ver como você interage com ele. Ao aceitar, você concorda com o uso de cookies. </p>
                    </div>
                    <button class="btn btn__outline__white btn-cookies">Eu aceito</button>
                    <?php elseif ($idioma === 'en_US') : ?> 
                     <div class="text">
                        <h3>THIS SITE USES COOKIES</h3>
                        <p class="msg-cookies">We use cookies on our website to see how you interact with it. By accepting, you agree to the use of cookies. </p>
                    </div>
                    <button class="btn btn__outline__white btn-cookies">I accept</button>
                    <?php endif ?>
                </div>
            </div>
		</div>
    </footer>
    
    <!-- Inicio Wordpress Footer -->
	    <?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->
    
    </body>
</html>