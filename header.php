<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sertifika
 */

?>
	<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <!-- Useful meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, noodp">
    <meta name="googlebot" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Главная</title>
    
</head>
<body>

    <div class="wrapper">
    
        <div class="content">


        <header class="header">
                <div class="container burger__position">
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="menu header__menu">
                        <div>
                            <div class="header-position">
                                <div class="header_first-block">
                                    <div class="header_contact">
                                        <div>
                                            <img src="assets/img/location.svg" alt="Местоположение"> 247760, Гомельская область, г.Мозырь, 1-й пер.Берёзовый, 5А</div>
                                    </div>
                                    <div class="reception">
                                        <img src="assets\img\phone.svg" alt="Телефон">
                                        <a href="tel:+375236223611"><span>+375 236 22-36-11 Приемная</span></a>
                                    </div>
                                </div>
                                <div class="header_additional">
                                    <div class="lang-zone">
                                        <a href="">RU</a>
                                        <a href="">БЕЛ</a>
                                        <a href="">ENG</a></div>
                                    <div class="low-vision">
                                        <img src="assets\img\eye.svg" alt="глаз">
                                        <div>Версия для слабовидящих</div>
                                        <img src="assets\img\sitemap.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <ul class="menu__list">
                                <li class="menu__link home-link"> <img src="assets/img/home.svg" alt=""></li>
                                <li>
                                    <a href="" class="menu__link">Об учереждении</a>
                                    <span class="menu__arrow arrow"></span>
                                    <ul class="sub-menu__list">
                                        <li>
                                            <a href="" class="sub-menu__link">Администрация</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Новости</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Охрана труда</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Нормативная база </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="menu__link">Учебное отделение</a>
                                    <span class="menu__arrow arrow"></span>
                                    <ul class="sub-menu__list">
                                        <li>
                                            <a href="" class="sub-menu__link">Педагогический состав</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Права и обязанности учащихся</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Электронные версии учебников </a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Интернет-ресурсы системы образования </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="" class="menu__link">Спортивное отделение</a>
                                    <span class="menu__arrow arrow"></span>
                                    <ul class="sub-menu__list">
                                        <li>
                                            <a href="" class="sub-menu__link">Кадровый состав</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Отделения</a>
                                            <span class="sub-menu__arrow arrow"></span>
                                            <ul class="sub-sub-menu__list">
                                                <li>
                                                    <a href="" class="sub-sub-menu__link">Гребля на байдарках и каноэ</a>
                                                </li>
                                                <li>
                                                    <a href="" class="sub-sub-menu__link">Академическая гребля</a>
                                                </li>
                                                <li>
                                                    <a href="" class="sub-sub-menu__link">Лёгкая атлетика</a>
                                                </li>
                                                <li>
                                                    <a href="" class="sub-sub-menu__link">Тяжелая атлетика</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Учебно-спортивная база</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Мастера спорта международного класса </a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li>
                                    <a href="" class="menu__link">Воспитательное отделение</a>
                                    <span class="menu__arrow arrow"></span>
                                    <ul class="sub-menu__list">
                                        <li>
                                            <a href="" class="sub-menu__link">Кадровый состав</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">План социальной воспитательной и идеологической работы</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Родителям </a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">МЧС информирует </a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">ГАИ информирует</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Профилактика правонарушений и преступлений</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Профилактика ОРВИ и коронавирусной инфекции</a>
                                        </li>
                                        <li>
                                            <a href="" class="sub-menu__link">Правовые знания</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        <!--

            <header class="header">
                <div class="container header__container">
                    <div class="header__logo-block">
                        <a href="/"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/logo.webp" alt="Sertifika Логотип" class="header__logo"></a>
                    </div>
                    <div class="header__content">
                        <div class="header__contacts">
                            <h1 class="header__sitename">sertifika.by</h1>
                            <div class="header__numbers">
                                <div class="header__number">
                                    <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                    <a href="tel:+375297184632">+375 (29) 718-46-32</a>
                                </div>
                                <div class="header__number">
                                    <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                    <a href="tel:+375447272604">+375 (44) 727-26-04</a>
                                </div>
                                <div class="header__number">
                                    <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/phone.svg" alt="Телефон">
                                    <a href="tel:+375212249878">+375 (212) 24-98-78</a>
                                </div>
                            </div>
                            <div class="header__sitehome">
                                <a href="mailto:<?php the_field('email',6);?>"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/mail.svg" alt="электронная почта"></a>
                                <a href="/"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/home.svg" alt="Главная"></a>
                                <a target="_blank" href="/sitemap.xml"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/sitemap.svg" alt="Карта сайта"></a>
                            </div>
                        </div>
                        <div class="header__menu">
                            <div class="header__home">
                                <a href=""><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/home-main.svg" alt="Главная"></a>
                            </div>
                            <nav class="header__menu">
                                <ul class="header__menu-list">
                                    <li class="header__menu-item">О компании</li>
                                    <li class="header__menu-item">Услуги</li>
                                    <li class="header__menu-item">Контакты</li>
                                    <li class="header__menu-item">Новости</li>
                                    <li class="header__menu-item">Выполненные работы</li>
                                </ul>
                            </nav>
                            <div class="header__search">
                                <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                            </div>
                        </в>
                    </div>
                </div>  
            </header>