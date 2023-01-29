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

	<div class="container">
	<main>
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main>
			
	</div>
	<section class="contact">
                <div class="container">
                    <h3 class="contact__heading">Не знаете, как сформулировать проблему, с которой столкнулись? Оставьте заявку и мы с Вами свяжемся</h3>
                    <form class="contact__form">
                        <input type="text" class="contact__form-input" placeholder="Имя" required>
                        <input type="text" class="contact__form-input"placeholder="Телефон или e-mail*" required>
                        <input type="text" class="contact__form-input" placeholder="Комментарий" >
                        <button type="submit" class="button contact__form-button" class="button">Отправить</button>
                    </form>
                    <div class="contact__privacy">Нажимая кнопку “Записаться”, Вы соглашаетесь на обработку персональных данных. Не беспокойтесь, Ваши данные не будут переданы третьим лицам</div>
                </div>
            </section>  
</div>

<?php
get_footer();
