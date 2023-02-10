<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package publib
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri() .'/assets/css/hystmodal.min.css' ?>" /> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
      <header class="header d-header">
        <div class="container">
			<div class="header-top">				
				<?php the_custom_logo( $blog_id ); ?>					
				
				<div class="header-top__block">
					<div class="header-top__link">
						<a href="mailto:<?= the_field( 'email', 87 ); ?>" class="email hover-link">E-mail: <?= the_field( 'email', 87 ); ?></a>					
						<?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>
						<ul class="lang">
							<?php echo do_shortcode('[gtranslate]');  ?>
						</ul>
						<ul class="link">
							<li>
								<a href="mailto:<?= the_field( 'email', 87 ); ?>">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/mail.svg' ; ?>" alt="электронная почта" />
								</a>
							</li>
							<li>
								<a href="<?php echo get_home_url(); ?>">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/home.svg' ; ?>" alt="на главную страницу" />
								</a>
							</li>
							<li>
								<a href="<?php echo get_home_url() . '/sitemap_index.xml'; ?>">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/shema.svg' ; ?>" alt="схема сайта" />
								</a>
							</li>
						</ul>
					</div>

					<div class="header-top__user">
						<div class="social">
							<span class="social__title">Социальные сети:</span>
							<ul class="social__list">
								<li class="social__item">
									<a href="<?= the_field( 'instagram_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'instagram_ico', 87 ); ?>" alt="instagram" />
									</a>
								</li>
								<li class="social__item">
									<a href="<?= the_field( 'vk_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'vk_ico', 87 ); ?>" alt="vk" />
									</a>
								</li>
								<li class="social__item">
									<a href="<?= the_field( 'facebook_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'facebook_ico', 87 ); ?>" alt="facebook" />
									</a>
								</li>
								<li class="social__item">
									<a href="<?= the_field( 'youtube_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'youtube_ico', 87 ); ?>" alt="youtube" />
									</a>
								</li>                   
							</ul>
						</div>
						<div class="entry">
						<?php 
								wp_nav_menu( [
								'theme_location'  => 'menu-2',						 
								'container'       => 'nav',               
								'container_class' => 'nav-login',   				//class nav
								'container_id'    => 'nav-login',                	//id nav              
								'menu_class'      => 'menu',           			//class ul
								'menu_id'         => '',             			//id ul
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => '',
								'walker'          => '',
								] );	
							?> 
						</div>
              </div>
					
				</div>
				
			</div>
			<div class="header-menu">
			<?php 
            wp_nav_menu( [
              'theme_location'  => 'menu-1',						 
              'container'       => 'nav',               
              'container_class' => 'navbar',   //class nav
              'container_id'    => 'navbar',                //id nav              
              'menu_class'      => 'menu',           //class ul
              'menu_id'         => '',             //id ul
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => '',
              'walker'          => '',
            ] );	
          ?>      
				<a class="h-search" href="http://80.94.164.202/" target="_blank">
					<img src="<?= get_template_directory_uri() . "/assets/img/search.svg" ?>" alt="поиск в каталоге">
				</a>
			</div>
        </div>

      </header>

	  <!-- Header для мобильных устройств -->
      <header class="m-header">  
        <!-- <div class="container"> -->
			<div class="m-header__wrap">
				<button id="burger" class="m-header__burger burger" arial-label="Бургер меню"></button>				
				<?php the_custom_logo( $blog_id ); ?>	
				<a class="h-search" href="http://80.94.164.202/" target="_blank">
					<img src="<?= get_template_directory_uri() . "/assets/img/search.svg" ?>" alt="поиск в каталоге">
				</a>
			</div>
			<div id="m-menu" class="m-header__block">
				<div class="container">
					<?php 
						wp_nav_menu( [
						'theme_location'  => 'menu-1',						 
						'container'       => 'nav',               
						'container_class' => 'navbar',   				//class nav
						'container_id'    => 'navbar',                	//id nav              
						'menu_class'      => 'menu',           			//class ul
						'menu_id'         => '',             			//id ul
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => '',
						'walker'          => '',
						] );	
					?> 
					<div class="m-header__info-block m-info">
						<div class="m-info__entry entry">
						<?php 
								wp_nav_menu( [
								'theme_location'  => 'menu-2',						 
								'container'       => 'nav',               
								'container_class' => 'nav-login',   				//class nav
								'container_id'    => 'nav-login',                	//id nav              
								'menu_class'      => 'menu',           			//class ul
								'menu_id'         => '',             			//id ul
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => '',
								'walker'          => '',
								] );	
							?> 
						</div>  
						<div class="m-info__link">
							<a href="mailto:<?= the_field( 'email', 87 ); ?>" class="email hover-link">E-mail: <?= the_field( 'email', 87 ); ?></a>					
							
							<ul class="lang">
								<?php echo do_shortcode('[gtranslate]');  ?>
							</ul>
							<ul class="link">
								<li>
									<a href="mailto:<?= the_field( 'email', 87 ); ?>">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/mail.svg' ; ?>" alt="электронная почта" />
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url(); ?>">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/home.svg' ; ?>" alt="на главную страницу" />
									</a>
								</li>
								<li>
									<a href="">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/shema.svg' ; ?>" alt="схема сайта" />
									</a>
								</li>
							</ul>
						</div>
						<?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>
						<div class="social m-info__social">
							<span class="social__title">Социальные сети:</span>
							<ul class="social__list">
								<li class="social__item">
									<a href="<?= the_field( 'instagram_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'instagram_ico', 87 ); ?>" alt="instagram" />
									</a>
								</li>
								<li class="social__item">
									<a href="<?= the_field( 'vk_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'vk_ico', 87 ); ?>" alt="vk" />
									</a>
								</li>
								<li class="social__item">
									<a href="<?= the_field( 'facebook_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'facebook_ico', 87 ); ?>" alt="facebook" />
									</a>
								</li>
								<li class="social__item">
									<a href="<?= the_field( 'youtube_link', 87 ); ?>" class="social__link" target="_blank">
										<img src="<?= the_field( 'youtube_ico', 87 ); ?>" alt="youtube" />
									</a>
								</li>                   
							</ul>
						
						</div>
					</div>  
				</div>
				
			</div>
			
        <!-- </div> -->
      </header>

		


		
