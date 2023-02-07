<?php
/**
* Template Name: portfolio
*/
get_header();
?>

    <div class="breadcrumbs">   
		<div class="container">
			<a href="/">Главная</a> <span class="breadcrumbs_separator"> | </span>Выполненные работы<span class="breadcrumbs_separator"> | </span>  <?php the_title(); ?>
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
            <div class="uslugi-page">
                <div class="uslugi-page-block">
                    <section class="portfolio">
                <div class="heading">
                    <?php the_title(); ?>
                    </div>
                    <div class="line"></div>

                    <div class="heading-18">Примеры разработанных технических условий</div>

                    <div class="portfolio__blocks">
                        <?php 
                        $args = array(
                            'post_type'      => 'portfolio',
                            'post_status'    => 'publish',
                            'posts_per_page' => -1,
                            'orderby'=> 'date', 
                            'order' => 'ASC',
                        );
                        
                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                // Ваш код по выводу поста
                                ?>
                                <div class="portfolio__block">
                                <div class="portfolio__image">
                                <?php
                                    $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                    the_post_thumbnail (array(240, 340)); 
                                ?>  
                                </div>
                                <div class="portfolio__block-name">
                                   <?php  the_title(); ?>
                                </div>
                            </div>           
                        <?php                                 }
                        } else {
                            echo 'Ничего не найдено';
                        }
                        
                        wp_reset_postdata();
                        ?>
                         
                    </div>
                    
                <div class="pagination-position">
                <div class="pagination">
                    <?php
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $posts->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'post_type' 	 => 'portfolio',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => false,
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                    ?>
            </section>
                </div>
            </div>
        </div>
	</main>
			

<?php
get_footer();
