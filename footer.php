<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sertifika
 */

?>
<footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__block">
                    <div class="footer__logo">
                        <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/logo_footer.webp" alt="Логотип sertifika.by">
                    </div>
                    <div class="footer__requisites">
                        <div class="footer__heading">
                            Реквизиты
                        </div>
                        <div class="line">
        
                        </div>
                        <div class="footer__requisites-name">
                            ИП Красовский С.В., УНП 390208900
                        </div>
                        <div class="footer__requisites-address">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/geo.svg" alt="Местоположение">
                            Республика Беларусь, г. Витебск
                        </div>
        
                    </div>
                </div>
                
                <div class="footer__communication">
                    <div class="footer__heading">
                        Контакты
                    </div>
                    <div class="line">
    
                    </div>
                    <div class="footer__communication-block">
                        <div class="footer__communication-phones">
                            <div class="footer__communication-phone first ">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                <a href="">+375 (29) 718-46-32</a>
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/viber.svg" alt="viber">
                            </div>
                            <div class="footer__communication-phone">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                <a href="">+375 (212) 24-98-78</a>
                            </div>
                        </div>
                        <div class="footer__communication-phones">
                            <div class="footer__communication-phone first">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                <a href="">+375 (44) 727-26-04</a>
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/whatsapp.svg" alt="whatsapp">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/telegram.svg" alt="telegram">
                            </div>
                            <div class="footer__communication-phone">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/mail.svg" alt="Телефон">
                                <a href="">ksv2015t@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="footer__sitehome">
                    <div class="footer__sitehome-heading">
                        Карта сайта
                    </div>
                    <div class="footer__sitehome-content">
                        <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/mail.svg" alt="электронная почта">
                        <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/home.svg" alt="Главная">
                        <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/sitemap.svg" alt="Карта сайта">
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer__under">
                <div class="footer__copyright">
                    sertifika.by © 2023 Все права защищены. 
                </div>
                <div class="footer__developer">
                    <a href="https://anika-cs.by/">Разработка сайтов и программного обеспечения ООО “Креативная студия АникА”
                    </a>
                </div>
    
            </div>
        </div>
    </footer>
    
    
    </div>
	<?php wp_footer(); ?>
</body>
</html>

	