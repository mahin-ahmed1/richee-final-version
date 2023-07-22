<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package richee
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'richee' ); ?></a>

	<!-- HEADER AREA START -->
	<header class="header-area">
		<div class="row">
			<!-- LOGO AREA -->
			<div class="col-5 col-lg-3 logo-area">
				<?php echo get_custom_logo();?>
			</div>
			<!-- MOBILE MENU BUTTON -->
			<div class="col-7 menu-btn">
				<a href="#" class="mt-1 menu-btn-icon">
					<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/menu.png');?>"  alt="menu-icon">
				</a>
			</div>
			<!-- NAV AREA START -->
			<div class="col-12 col-lg-9 nav-bar-area">
				<nav class="navbar navbar-expand-lg">
				    <?php 
				    $richee_main_menu=wp_nav_menu(
					    	array(
					    	'theme_location'=>'richee_primary',
					    	'menu_class'	=>'navbar-nav',
					    	'container'		=>false,
					    	'menu_id'		=>'',
					    	'echo'			=>false,
					    )
					);

				    $richee_main_menu=str_replace('href','class="nav-link" href',$richee_main_menu);
				    $richee_main_menu=str_replace('menu-item','nav-item',$richee_main_menu);
				    echo $richee_main_menu;
					?>
				</nav>
			</div>
			<!-- NAV AREA END -->
		</div>
	</header>
	<!-- HEADER AREA END -->
	
	<div id="content" class="site-content">