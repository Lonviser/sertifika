<?php
/**
* Template Name: servises
*/
get_header();
?>

    <div class="breadcrumbs">   
		<div class="container">
			<a href="/">Главная</a> <span class="breadcrumbs_separator"> | <?php the_title(); ?>
		</div>
	</div>

	<div class="container">
                    <div class="about__price">
                        <div class="about__price-text">
                            Интересует стоимость? Скачивайте <a href="<?php the_field('price-list',6);?>">Актуальный</a>  прайс-лист
                        </div>
                        <div class="about__price-button">
                            <a href="<?php the_field('price-list',6);?>"><button type="submit" class="button button-green">Cкачать прайс</button></a>                        </div>
                    </div>
	</div>

	<main>
        <div class="container">
            <div class="uslugi-page">
                <div class="uslugi-page-block">
                    <section class="servises">
                <div class="heading">
                    <?php the_title(); ?>
                    </div>
                    <div class="line"></div>

                    <div class="servises__blocks">
                        <?php 
                        $args = array(
                            'post_type'      => 'servises',
                            'post_status'    => 'publish',
                            'posts_per_page' => - 1,
                            'orderby'=> 'date', 
                            'order' => 'ASC',
                            

                        );
                        
                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                // Ваш код по выводу поста
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                <div class="servises__block">
                                <div class="servises__block-number">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="servises__block-name">
                                   <?php  the_title(); ?>
                                </div>
                            </div>
                            </a>                        
                       
                                
                               
                        <?php                                 }
                        } else {
                            echo 'Ничего не найдено';
                        }
                        
                        wp_reset_postdata();
                        ?>
                         
                    </div>
            </section>
                </div>
            </div>
        </div>
	</main>
			

<?php
get_footer();
