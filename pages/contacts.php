<?php
/**
* Template Name: Contacts
*/
get_header();
?>

    <div class="breadcrumbs">   
		<div class="container">
			<a href="">Главная</a> <span class="breadcrumbs_separator"> | </span> <?php the_title(); ?>
		</div>
	</div>

	<div class="container">
                    <div class="about__price">
                        <div class="about__price-text">
                            Интересует стоимость? Скачивайте <a href="<?php the_field('price-list',6);?>">Актуальный</a>  прайс-лист
                        </div>
                        <div class="about__price-button">
                            <a href="<?php the_field('price-list');?>"><button type="submit" class="button button-green">Cкачать прайс</button></a>
                        </div>
                    </div>
	</div>

	<main>
        <div class="container">
            <div class="contacts-page">
                <div class="contacts-page-block">
                <div class="heading">
                        Контакты
                    </div>
                    <div class="line"></div>

                    <div class="contacts-page-address">
                        <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/geo.svg" alt="Местоположение">
                        <?php the_field('adres');?>
                    </div>

                    <div class="contacts-page-numbers">
                        <div class="contacts-page-number">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                            <a href="tel:<?php the_field('nomer_telefona_ssylka_1',6);?>"><?php the_field('nomer_telefona_1',6);?></a>
                                
                        </div>
                        <div class="contacts-page-number">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                            <a href="tel:<?php the_field('nomer_telefona_ssylka_2',6);?>"><?php the_field('nomer_telefona_2',6);?></a>
                        </div>
                        <div class="contacts-page-number">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                            <a href="tel:<?php the_field('nomer_telefona_ssylka_3',6);?>"><?php the_field('nomer_telefona_3',6);?></a>
                        </div>
                    </div>

                    <div class="contacts-page-mail">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/mail.svg" alt="Электронная почта">
                            <a href="tel:<?php the_field('email',6);?>"><?php the_field('email',6);?></a>
                    </div>

                    <div class="contacts-page-face">
                        <?php the_field('kontaktnoe_liczo');?>
                    </div>
                    <h3>Мессенжеры</h3>
                    <div class="contacts-page-messengers">
                        <div class="contacts-page-viber">
                            <a href="<?php the_field('vajber_ssylka',6);?>"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/viber.svg" alt="viber"></a>
                            <a href="tel:<?php the_field('nomer_telefona_ssylka_1',6);?>"><?php the_field('nomer_telefona_1',6);?></a>
                        </div>
                        <div class="contacts-page-tg">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/whatsapp.svg" alt="whatsapp">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/telegram.svg" alt="telegram">
                            <a href="tel:<?php the_field('nomer_telefona_ssylka_3',6);?>"><?php the_field('nomer_telefona_3',6);?></a>

                        </div>
                    </div>
                    
                    
                </div>
                <div class="contacts-page-block">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A10eb6fdf56656be59f05bac38f6e073c5d761777d85b3757750f8dfe323451b0&amp;source=constructor" width="100%" height="328" frameborder="0"></iframe>
                </div>
            </div>
        </div>
	</main>
			

<?php
get_footer();
