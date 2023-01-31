<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sertifika
 */

?>                


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="heading">', '</h2>' ); ?>
	</header><!-- .entry-header -->
	<div class="line"></div>

	<div class="entry-content">
	<?php
					while ( have_posts() ) :
						the_post();
			
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile; // End of the loop.
					?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
