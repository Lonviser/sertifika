<?php
/**
* Template Name: certificates
*/
get_header();
?>

    <div class="breadcrumbs">   
		<div class="container">
			<a href="/">Главная</a> <span class="breadcrumbs_separator"> | </span> О компании <span class="breadcrumbs_separator"> | <?php the_title(); ?>
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
            <div class="certificates-page">
                <div class="heading">
                    <?php the_title(); ?>
                    </div>
                    <div class="line"></div>
                    <div class="certificates-page-blocks">
                        <div class="certificates-page-block">
                            <img src=" <?php the_field('foto_sertifikata_1');?>" alt="Сертификат">
                            <?php the_field('podpis_sertifikata_1');?>
                        </div>
                        <div class="certificates-page-block">
                            <img src=" <?php the_field('foto_sertifikata_2');?>" alt="Сертификат">
                            <?php the_field('podpis_sertifikata_2');?>
                        </div>
                        <div class="certificates-page-block">
                            <img src=" <?php the_field('foto_sertifikata_3');?>" alt="Сертификат">
                            <?php the_field('podpis_sertifikata_3');?>
                        </div>
                        <div class="certificates-page-block">
                            <img src=" <?php the_field('foto_sertifikata_4');?>" alt="Сертификат">
                            <?php the_field('podpis_sertifikata_4');?>
                        </div>
                        <div class="certificates-page-block">
                            <img src=" <?php the_field('foto_sertifikata_5');?>" alt="Сертификат">
                            <?php the_field('podpis_sertifikata_5');?>
                        </div>
                        <div class="certificates-page-block">
                            <img src=" <?php the_field('foto_sertifikata_6');?>" alt="Сертификат">
                            <?php the_field('podpis_sertifikata_6');?>
                        </div>
                        <div class="certificates-page-block">
                            <img src=" <?php the_field('foto_sertifikata_7');?>" alt="Сертификат">
                            <?php the_field('podpis_sertifikata_7');?>
                        </div>
                        <?php 
                        $loop = CFS()-> get('_certificates');
                        foreach($loop as $row){
                            ?>
                            <div class="certificates-page-block"><?= $row['_certificates_img'] ?></div>
                            <?php
                        }
                        ?>
                    </div>
            </div>
        </div>
	</main>
			

<?php
get_footer();
