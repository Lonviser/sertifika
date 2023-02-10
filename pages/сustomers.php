<?php
/**
* Template Name: customers
*/
get_header();
?>

    <div class="breadcrumbs">   
		<div class="container">
			<a href="/">Главная</a> <span class="breadcrumbs_separator"> | </span> Выполненные работы <span class="breadcrumbs_separator"> | <?php the_title(); ?>
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
            <div class="customers-page">
                <div class="heading">
                    <?php the_title(); ?>
                    </div>
                    <div class="line"></div>
                    <h3 class="heading-18">Ниже вы можете увидеть далеко не полный перечень моих заказчиков и выполненные для них работы:</h3>

                    <div class="customers-page-heading">
                        <div>
                        Наименование заказчика, местонахождение
                        </div>
                        <div>
                        Основные виды деятельности заказчика                       
                        </div>
                        <div>
                        Выполненные для заказчика работы
                        </div>
                    </div>

                    <div class="customers-page-table">
                       <?php 
                        $loop = CFS()-> get('_сustomers');
                        foreach($loop as $row){
                            ?>
                            <div class="customers-page-row">
                            <div><?= $row['_сustomer_name'] ?></div>
                            <div><?= $row['_сustomer_order'] ?></div>
                            <div><?= $row['_сustomer_work'] ?></div>

                           </div>
                            <?php
                        }
                        ?>
                    </div>

            </div>
        </div>
	</main>
			

<?php
get_footer();
