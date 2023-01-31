
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
			<a href="">Главная</a> <span class="breadcrumbs_separator"> | </span><a href="/novosti/">Новости</a>  <span class="breadcrumbs_separator"> | </span> <?php the_title(); ?>
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

		get_template_part( 'template-parts/content', get_post_type() );
	endwhile; // End of the loop.
	?>
		<div class="news__page">
		<div class="count_views"> <?php if(function_exists('the_views')) { the_views(); } ;?></div> 
		<a class="news__link" href="/novosti/"><div> ← Вернуться к списку новостей</div></a>
		</div>
			</main>		
	<div class="actual-line">
	</div>
	<p class="actual-news"> Последние новости</p>
		<div class="hot-blocks">
		<?php
			$my_posts = get_posts( array(
				'numberposts' => 5,
				'category'    => 'news',
				'orderby'     => 'rund',
				'order'       => 'DESC',
				'post_type'   => 'post',
				'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			) );

			foreach( $my_posts as $post ){
				setup_postdata( $post );
				?>
				<div class="hot-block">
				<a class="hot-title" href="<?php the_permalink(); ?>">
					<div>
						<?php if (function_exists ('has_post_thumbnail') && has_post_thumbnail () ) {
						the_post_thumbnail (array(205, 165)); 
						} ?>
					</div>
					<div>
						 <div class="news__info">
							<?php the_date();?> | <?php the_author( );?>
						</div>
						 <h2><?php the_title( );?></a> </h2>
					</div>
				
				</div>
				<?php
			}

			wp_reset_postdata(); // сброс
					?>
			</div>
                    </main>
                </div>
          
		 
<?php
get_footer();
