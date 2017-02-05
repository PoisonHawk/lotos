<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spa_and_Salon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">
	<header id="masthead" class="site-header <?php if( !is_page_template( 'template-home.php' ) ) { echo 'header-inner'; }  ?>" role="banner">
		<div class="container">

			<div class="header-t ">
				<?php

				     $spa_and_salon_ph = get_theme_mod( 'spa_and_salon_ph', esc_html__( '01-234566789', 'spa-and-salon' ) );
				     
					 $social_links = get_theme_mod( 'spa_and_salon_social_ed_header' );
					 if($social_links){
					 	do_action( 'spa_and_salon_social_link' ); 
					 } 
				 	
				 	 if( $spa_and_salon_ph ){ ?>
				 	 	<div class="contact-info" style="float: right; margin: 0 20px; font-size: 18px;">
      						<p><a href="tel:<?php echo esc_attr( $spa_and_salon_ph ); ?>" class="tel-link">
      						<!--<span class="fa fa-phone"></span>-->
      						<?php echo esc_html( $spa_and_salon_ph ); ?></a></p>
							<p style='text-transform: uppercase;' >Рязань,ул.Нижне-трубежная,д.2</p>
							<div style="clear:both"></div>
						</div>
     			<?php } ?>
					

			</div>
			<div class="header-b ">
<!--				<div class="site-branding">-->
<!--					--><?php //
//				         if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
//                            	the_custom_logo();
//                       	 }
//                    ?>
<!--                	<h1 class="site-title">-->
<!--                		<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">-->
<!--                		--><?php //bloginfo( 'name' ); ?>
<!--                		</a>-->
<!--                	</h1>-->
<!--				--><?php
//					 $description = get_bloginfo( 'description', 'display' );
//					 if ( $description || is_customize_preview() ) : ?>
<!--						<p class="site-description">--><?php //echo $description; /* WPCS: xss ok. */ ?><!--</p>-->
<!---->
<!--				--><?php
//					endif; ?>
<!--				</div> <!-- .site-branding -->
		
				<nav class="main-navigation" id="site-navigation"  role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				
			</div>

		</div>
	</header><!-- #masthead -->
	<?php //if( !is_page_template( 'template-home.php' )  || ! is_404() ){ ?>
	<!-- <div class="breadcrumbs">
		<div class="container">
			<?php //do_action( 'spa_and_salon_breadcrumbs' ); ?>
		</div>
	</div> -->
	<?//php } ?>
	<?php 
		if( !is_page_template( 'template-home.php' ) ) {
	  		echo '<div class="wrapper">';
			echo '<div class="container">';
			echo '<div id="content" class="site-content">';
		 }
		 
		if( ! ( is_page_template( 'template-home.php' ) || is_search() ) ) { echo '<div class="row">'; }
	?>