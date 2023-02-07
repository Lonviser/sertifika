<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sertifika
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
			<div class="heading">
                        <?php the_title();  ?>
                    </div>
                    <div class="line"></div>
				<?php
				sertifika_posted_on();
				?>
				|
				<?php
				sertifika_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</в><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sertifika' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sertifika' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	


</article><!-- #post-<?php the_ID(); ?> -->
