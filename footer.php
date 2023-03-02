    <?php $home = get_page_by_title('Home'); ?>

    <footer class="footer">
        <div class="shell">
            <div class="content__footer">
                <div class="row__wrapper">
                    <div class="sociais__desktop__eda">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Eda">
                        </div>

                        <div class="icons">
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Linkedin">
                            </a>

                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebook">
                            </a>

                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram">
                            </a>
                        </div>
                    </div>
                    
                    <div class="sociais__mobile__skutt">
                        <div class="logo__skutt">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-skutt.svg" alt="Skutt">
                        </div>

                        <div class="icons">
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Linkedin">
                            </a>

                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebook">
                            </a>
                        </div>
                    </div>

                    <div class="menu__footer">
                         <ul class="list__menu">
                            <li class="item__menu">
                                <a href="<?php echo get_home_url(); ?>/fale-conosco/">Seja um representante</a>
                            </li>

                            <li class="item__menu">
                                <a href="<?php echo get_home_url(); ?>/duvidas-frequentes">Dúvidas frequentes</a>
                            </li>

                            <li class="item__menu">
                                <a href="<?php echo get_home_url(); ?>/politica-de-privacidade">Política de privacidade</a>
                            </li>

                            <li class="item__menu">
                                <a href="<?php echo get_home_url(); ?>/termos-de-uso">Termos de uso</a>
                            </li>
                        </ul>

                        <div class="contato">
                            <h3>Contato</h3>

                            <a href="tel:+551133111990" class="link">+ 55 11 3311-1990</a>
                            <a href="mailto:impeda@impeda.com.br" class="link">impeda@impeda.com.br</a>
                        </div>
                    </div>
                </div>

                <div class="row__wrapper">
                    <div class="sociais__desktop__skutt">
                        <div class="logo__skutt">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-skutt.svg" alt="Skutt">
                        </div>

                        <div class="icons">
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Linkedin">
                            </a>

                            <a href="" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebook">
                            </a>
                        </div>
                    </div>

                    <div class="endereco">
                        <p>Av. Emb. Macedo Soares, 10.735, Espace Center galpão 28 - 05095-035 - São Paulo, SP</p>
                    </div>
                </div>

                <div class="copy">
                    <p>Copyright 2022 Importadora Eda</p> <a href="http://" target="_blank" rel="noopener noreferrer">Design by Eólica</a>
                </div>
            </div>
        </div>
        
        <div class="box-cookies hide">
            <div class="shell">
                <div class="container--cookies">
                    <div class="text">
                        <p class="msg-cookies">Utilizamos cookies para melhorar a sua experiência em nosso site. Ao continuar navegando você concorda com a nossa <a href="<?php echo get_home_url(); ?>/politica-de-privacidade">política de privacidade</a>. </p>
                    </div>
                    <button class="btn btn__primary btn-cookies">CONTINUAR E FECHAR</button>
                </div>
            </div>
		</div>
    </footer>
    
    <!-- Inicio Wordpress Footer -->
	    <?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->
    
    </body>
</html>