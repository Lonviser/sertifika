

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
                    <h2 class="header__name-burger">sertifika.by</h2>
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="menu header__menu">
                        <div class="header__content">
                        <div class="header__logo-block">
                        <a href="/"><img src="<?php echo bloginfo('template_url');?>/dist/assets/img/logo.webp" alt="Sertifika Логотип" class="header__logo"></a>
                        </div>
                        <div class="header-position">
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

                            <div class="header__menu__list">
                                <div class="menu__link home-link"><a href="/"><img class="
                                <?php if(is_front_page()){
                                    echo ("menu__under");
                                }
                                ?>
                                " src="<?php echo bloginfo('template_url');?>/dist/assets/img/home-main.svg" alt="Главная"></a></div>
                                <?php
                                wp_nav_menu( [
                                    'menu'            => 'Main',
                                    'container'       => false,
                                    'menu_class'      => 'menu__list',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul  class="menu__list">%3$s</ul>',
                                    'depth'           => 3,
                                ] );
                            ?>
                                <div class="header__search-block"> <div class="header__search">
                                <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                            </div></div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
   

            <?php
            if ( is_page_template( ['pages/information.php', 'pages/certificates.php','pages/vacancies.php','pagespolitics.php'] ) ) { ?>
            <style type="text/css">
                li#menu-item-267 {
                    padding-bottom: 5px;
                    border-bottom: 3px solid #ff0;
            }
            </style>
            <?php } ?>


            <?php
            if ( is_page_template( 'pages/contacts.php' ) ) { ?>
            <style type="text/css">
                li#menu-item-273 {
                    padding-bottom: 5px;
                    border-bottom: 3px solid #ff0;
            }
            </style>
            <?php } ?>

            <?php
            if ( is_page_template( 'pages/news.php' ) ) { ?>
            <style type="text/css">
                li#menu-item-274 {
                    padding-bottom: 5px;
                    border-bottom: 3px solid #ff0;
            }
            </style>
            <?php } ?>

            <?php
            if ( is_page_template( ['pages/portfolio.php','pages/сustomers.php'] ) ) { ?>
            <style type="text/css">
                li#menu-item-275 {
                    padding-bottom: 5px;
                    border-bottom: 3px solid #ff0;
            }
            </style>
            <?php } ?>
   
            <?php
                $result = onwp_is_post_type('servises');

                if($result) {
                    ?>
                    <style type="text/css">
                        li#menu-item-272 {
                        padding-bottom: 5px;
                        border-bottom: 3px solid #ff0;
                     }
                     </style>
                    <?php
                    #Если тип записи соответствует product, то делаем что-то
                } else {
                    ?>

                    <?php
                   #Если тип записи НЕ соответствует product, то делаем что-то другое
                }
            ?>

            <?php
                $result = onwp_is_post_type('under_servises');

                if($result) {
                    ?>
                    <style type="text/css">
                        li#menu-item-272 {
                        padding-bottom: 5px;
                        border-bottom: 3px solid #ff0;
                     }
                     </style>
                    <?php
                    #Если тип записи соответствует product, то делаем что-то
                } else {
                    ?>

                    <?php
                   #Если тип записи НЕ соответствует product, то делаем что-то другое
                }
            ?>

            
<?php
                $result = onwp_is_post_type('tech_servises');

                if($result) {
                    ?>
                    <style type="text/css">
                        li#menu-item-272 {
                        padding-bottom: 5px;
                        border-bottom: 3px solid #ff0;
                     }
                     </style>
                    <?php
                    #Если тип записи соответствует product, то делаем что-то
                } else {
                    ?>

                    <?php
                   #Если тип записи НЕ соответствует product, то делаем что-то другое
                }
            ?>
            <?php
                if (get_post_type() === 'post') {
                    ?>
                    <style type="text/css">
                        li#menu-item-274 {
                            padding-bottom: 5px;
                            border-bottom: 3px solid #ff0;
                        }
                    </style>
                      <?php
                }
            ?>
            