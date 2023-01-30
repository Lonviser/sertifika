<?php
/**
* Template Name: Information
*/
get_header();
?>

    <div class="breadcrumbs">   
		<div class="container">
			<a href="">Главная</a> <span class="breadcrumbs_separator"> | </span> О компании <span class="breadcrumbs_separator"> | <?php the_title(); ?>
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
            <div class="information-page">
                <div class="information-page-block">
                <div class="heading">
                    <?php the_title(); ?>
                    </div>
                    <div class="line"></div>
                    <?php the_field('tekst_straniczy');?>   
                </div>
                <div class="information-page-block">
                    <img src=" <?php the_field('image');?>" alt="">
                </div>
            </div>
        </div>
	</main>
			

<?php
get_footer();
