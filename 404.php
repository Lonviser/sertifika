<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sertifika
 */


get_header();
?>
	<div class="breadcrumbs">
		<div class="container">
			<a href="">Главная</a> <span class="breadcrumbs_separator"> | </span> Страница не найдена
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

	<div class="container">
	<main>
		<div class="heading">Страница не найдена</div>
		<div class="line"></div>

		<div class="page-404">
			<div class="page-404-img">
				<img src="<?php echo bloginfo('template_url');?>/dist/assets/img/404.jpg" alt="Ошибка 404">
			</div>
			<div class="page-404-txt">
				<a href="/">Вернуться на главную</a>
			</div>
		</div>

		

	</main>
			
	</div>


<?php
get_footer();

