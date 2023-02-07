
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sertifika
 */

get_header();
?>
	<div class="breadcrumbs">
		<div class="container">
			<a href="/">Главная</a> <span class="breadcrumbs_separator"> | </span><a href="/uslugi/">Услуги</a>  <span class="breadcrumbs_separator"> | </span> Организация и сопровождение сертификации и декларирования соответствия продукции <span class="breadcrumbs_separator"> | </span> <?php the_title(); ?>
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

	<main class="servises-content">
	<div class="heading">
                    <?php the_title(); ?></div>
                    <div class="line"></div>
                       
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );
	endwhile; // End of the loop.
	?>
			</main>		

                </div>
          
		 
<?php
get_footer();
