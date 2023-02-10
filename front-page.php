
<?php
get_header();

 ?>        
 
    <main>
    <section class="promo">
                <div class="container">
                    <div class="promo__info"><?php the_field('bolshoj_tekst');?></div>
                    <div class="promo__buttons">
                        <a class="popup-with-form" href="#test-form"><button class="button promo__button">Задать вопрос</button></a> 
                        <a href="#order-form" class="popup-with-form" ><button class=" button promo__button">Заказать услугу</button></a>
                        
                    </div>
                </div>
            </section>

            <section class="about">
                <div class="container">
                    <div class="about__price">
                        <div class="about__price-text">
                            Интересует стоимость? Скачивайте <a href="<?php the_field('price-list',6);?>">Актуальный</a>  прайс-лист
                        </div>
                        <div class="about__price-button">
                            <a href="<?php the_field('price-list',6);?>"><button type="submit" class="button button-green">Cкачать прайс</button></a>
                        </div>
                    </div>
                    <div class="about__block">
                        <div class="about__block-place">
                            <img src="<?php the_field('kartinka_1');?>">
                            <div class="about__block-txt"><?php the_field('test');?></div>
                        </div>
                        <div class="about__block-sertification">
                            <img src="<?php the_field('kartinka_2');?>">
                            <div class="about__block-txt about__block-txt2"><?php the_field('test_2');?> </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="servises">
                <div class="container">
                    <h3 class="servises__heading">
                    <?php the_field('zagolovok');?>
                    </h3>
            
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
                </div>
            </section>
            
    </main>
        <?php
        get_footer();

        ?>    