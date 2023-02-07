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
	<section class="contact">
                <div class="container">
                    <h3 class="contact__heading">Не знаете, как сформулировать проблему, с которой столкнулись? Оставьте заявку и мы с Вами свяжемся</h3>
                    <div class="contact__form">
                    <?php echo do_shortcode( '[contact-form-7 id="38" title="Контактная форма 1"]' ); ?>
                    </div>
                    <div class="contact__privacy">Нажимая кнопку “Записаться”, Вы соглашаетесь на обработку персональных данных. Не беспокойтесь, Ваши данные не будут переданы третьим лицам
                </div>
            </section> 
</div> 
<footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__block">
                    <div class="footer__logo">
                        <a href="/"> <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/logo_footer.webp" alt="Логотип sertifika.by"></a>
                    </div>
                    <div class="footer__requisites">
                        <div class="heading">
                            Реквизиты
                        </div>
                        <div class="line">
        
                        </div>
                        <div class="footer__requisites-name">
                        <?php the_field('rekvizity_imya',6);?>
                        </div>
                        <div class="footer__requisites-address">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/geo.svg" alt="Местоположение">
                            <?php the_field('rekvizity_adres',6);?>
                        </div>
        
                    </div>
                </div>
                
                <div class="footer__communication">
                    <div class="heading">
                        Контакты
                    </div>
                    <div class="line"></div>
                    <div class="footer__communication-block">
                        <div class="footer__communication-phones">
                            <div class="footer__communication-phone first ">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                <a href="tel:<?php the_field('nomer_telefona_ssylka_1',6);?>"><?php the_field('nomer_telefona_1',6);?></a>
                                <a href="<?php the_field('vajber_ssylka',6);?>"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/viber.svg" alt="viber"></a>
                            </div>
                            <div class="footer__communication-phone">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                <a href="tel:<?php the_field('nomer_telefona_ssylka_2',6);?>"><?php the_field('nomer_telefona_2',6);?></a>
                            </div>
                        </div>
                        <div class="footer__communication-phones">
                            <div class="footer__communication-phone first">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                <a href="tel:<?php the_field('nomer_telefona_ssylka_3',6);?>"><?php the_field('nomer_telefona_3',6);?></a>
                                <a target="_blank" href="<?php the_field('vatsap',6);?>"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/whatsapp.svg" alt="whatsapp"></a>
                                <a target="_blank" href="<?php the_field('telegram_ssylka',6);?>"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/telegram.svg" alt="telegram"></a>
                            </div>
                            <div class="footer__communication-phone">
                                <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/mail.svg" alt="Телефон">
                                <a href="mailto:<?php the_field('email',6);?>"><?php the_field('email',6);?></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="footer__sitehome">
                    <div class="footer__sitehome-heading">
                        Карта сайта
                    </div>
                    <div class="footer__sitehome-content">
                        <a href="mailto:<?php the_field('email',6);?>"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/mail.svg" alt="электронная почта"></a>
                        <a href="/"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/home.svg" alt="Главная"></a>
                        <a target="_blank" href="/sitemap.xml"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/sitemap.svg" alt="Карта сайта"></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer__under">
                <div class="footer__copyright">
                    sertifika.by © <?php echo date("Y"); ?> Все права защищены. 
                </div>
                <div class="footer__developer">
                    <a href="https://anika-cs.by/">Разработка сайтов и программного обеспечения ООО “Креативная студия АникА”
                    </a>
                </div>
    
            </div>
        </div>
    </footer>
    <div id="test-form" class="mfp-hide white-popup-block">
        <fieldset style="border:0;">

            <h3 class="heading__popup">Задать вопрос</h3>
            <div class="popup-form">
                    <?php echo do_shortcode('[contact-form-7 id="187" title="popup-form"]'); ?>
            </div>
            </div>
        </fieldset>
    </form>
    <div id="order-form" class="mfp-hide white-popup-block">
            <h3 class="heading__popup">Заказать услугу</h3>
            <div class="popup-form">
                    <?php echo do_shortcode('[contact-form-7 id="188" title="popup-order"]'); ?>
            </div>
            </div>
    </form>
    </div>
	<?php wp_footer(); ?>
</body>
</html>

	