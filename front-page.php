
<?php
get_header();

 ?>        
 
    <main>
    <section class="promo">
                <div class="container">
                    <div class="promo__info">Разработка технических условий, описаний, рецептур, конструкторской, технологической, эксплуатационной и другой нормативно-технической документации для производства продукции (работ, услуг), помощь в сертификации, декларировании соответствия, регистрации продукции (работ, услуг), в том числе изделий медицинского назначения и лекарственных средств (медпрепаратов), внедрение и сертификация систем менеджмента/управления (СМК (ISO), СУОТ (OH&S), СУОС, HACCP), документация по охране труда и пожарной безопасности, разработка норм ТЭР, документация по обращению с отходами производства и другие экологические документы, помощь в получении штрихкодов на продукцию, регистрации товарных знаков, патентов на изобретения (полезные модели, промышленные образцы)</div>
                    <div class="promo__buttons">
                        <button class="button promo__button">Задать вопрос</button>
                        <button class=" button promo__button">Заказать услугу</button>
                    </div>
                </div>
            </section>
            
            <section class="about">
                <div class="container">
                    <div class="about__price">
                        <div class="about__price-text">
                            Интересует стоимость? Скачивайте <a href="<?php the_field('price-list');?>">Актуальный</a>  прайс-лист
                        </div>
                        <div class="about__price-button">
                            <a href="<?php the_field('price-list');?>"><button type="submit" class="button button-green">Cкачать прайс</button></a>
                        </div>
                    </div>
                    <div class="about__block">
                        <div class="about__block-place">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/map.svg" alt="Карта">
                            <div class="about__block-txt">Работаем с предприятиями всех
                                регионов Беларуси, а также 
                                Европейской части России </div>
                        </div>
                        <div class="about__block-sertification">
                            <img src="<?php echo bloginfo('template_url');?>/dist/assets/img/ISO.svg" alt="Сертифицированная система менеджмента качества услуг">
                            <div class="about__block-txt">Сертифицированная система менеджмента качества услуг в 
                                области технического нормирования,
                                стандартизации и сертификации </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="servises">
                <div class="container">
                    <h3 class="servises__heading">
                        Перечень оказываемых услуг в области технического нормирования, стандартизации, сертификации:
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