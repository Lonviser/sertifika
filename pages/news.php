<?php
/**
* Template Name: news
*/
get_header();
?>

    <div class="breadcrumbs">   
		<div class="container">
			<a href="">Главная</a> <span class="breadcrumbs_separator"> |  <?php the_title(); ?>
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
        <div class="heading">
                    <?php the_title(); ?></div>
                    <div class="line"></div>
            <div class="news-page">
            <?php
                // paged для сохранения текущего номера страницы
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                // берем из БД где категория == 'novosti'
                $posts = new WP_Query(array(
                    'category_name' => '',
                    'posts_per_page' => 5,
                    'paged' => $paged
                ));
                if ($posts->have_posts()):
                    while ($posts->have_posts()): $posts->the_post();
            ?>
            <div class="news_page_block">
                    <div class="news-block__image">
                        <?php
                            $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            the_post_thumbnail (array(260, 180)); 
                        ?>  
                    </div>
                    <div class="news-block__text">
                        <div>
                        <a href="<?php the_permalink(); ?>"><p class="news-title"><?php the_title(); ?></p></a>
                        <div class="auth_date"> 
                        <span class="news-author-date"><?php echo get_the_date('d.m.Y') ?></span> <span news-author-date>|</span> <span class="news-author-date"><?php the_author();?></span>
                        </div>
                        <p class="txt-news"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="news__later">
                        <a href="<?php the_permalink(); ?>"><p class="read-later">Читать далее ➜</p></a>
                        </div>
                    </div>
            </div>
            
                    
                <?php endwhile; wp_reset_postdata(); endif; ?>
                <div class="pagination-position">
                <div class="pagination">
                    <?php
                    // вывод pagination
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $posts->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => false,
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                    ?>
        </div>
            </div>
        </div>
	</main>
			

<?php
get_footer();
