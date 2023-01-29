
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
                        <div class="servises__block">
                            <div class="servises__block-number">
                                1
                            </div>
                            <div class="servises__block-name">
                                Разработка технических условий, технических описаний, рецептур
                            </div>
                        </div>
                        <div class="servises__block">
                            <div class="servises__block-number">
                                2
                            </div>
                            <div class="servises__block-name">
                                Разработка конструкторской, технологической, эксплуатационной документации
                            </div>
                        </div>
                        <div class="servises__block">
                            <div class="servises__block-number">
                                3
                            </div>
                            <div class="servises__block-name">
                                Разработка документа «Обоснование безопасности» на машины (оборудование) 
                            </div>
                        </div>
                        <div class="servises__block">
                            <div class="servises__block-number">
                                4
                            </div>
                            <div class="servises__block-name">
                                Разработка паспортов безопасности химической и другой продукции
                            </div>
                        </div>
                        <div class="servises__block">
                            <div class="servises__block-number">
                                5
                            </div>
                            <div class="servises__block-name">
                                Организация и сопровождение сертификации и декларирования соответствия продукции (РБ, ЕАЭС, ЕС), в том числе строительных материалов и изделий
                            </div>
                        </div>      
                        <div class="servises__block">
                            <div class="servises__block-number">
                                6
                            </div>
                            <div class="servises__block-name">
                                 Организация и сопровождение сертификации и декларирования соответствия работ и услуг в строительстве, аттестации строительных и проектных организаций                </div>
                        </div>                 
                    </div>
                </div>
            </section>
            
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
    </main>
        <?php
        get_footer();

        ?>    