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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<!--<div class="layout-main" style="background: rgba(0,0,0,0.7); width: 100%; height: 100%; position: fixed; z-index: 100"></div>-->
<?php //echo do_shortcode("[R-slider id='2']"); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header <?php if( !is_page_template( 'template-home.php' ) ) { echo 'header-inner'; }  ?>" role="banner">
		<div class="container">
			<div class="header-t">
				
				<?php

				     $spa_and_salon_ph = get_theme_mod( 'spa_and_salon_ph', esc_html__( '01-234566789', 'spa-and-salon' ) );
				     
					 $social_links = get_theme_mod( 'spa_and_salon_social_ed_header' );
					 if($social_links){
					 	do_action( 'spa_and_salon_social_link' ); 
					 } 
				 	
				 	 if( $spa_and_salon_ph ){ ?>
				 	 	<div class="contact-info" style="float: right; margin: 0 20px 0 0; font-size: 18px">
      						<p><a href="tel:<?php echo esc_attr( $spa_and_salon_ph ); ?>" class="tel-link">
      						<!--<span class="fa fa-phone"></span>-->
      						<?php echo esc_html( $spa_and_salon_ph ); ?></a></p>
							<p style='text-transform: uppercase; '>Рязань,ул.Нижне-трубежная,д.2</p>
						</div>
     			<?php } ?>
					

			</div>
			<div class="header-b">
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

	<?php 
		if( !is_page_template( 'template-home.php' ) ) {
	  		echo '<div class="wrapper">';
			echo '<div class="container">';
			echo '<div id="content" class="site-content">';
		 }
		 
		if( ! ( is_page_template( 'template-home.php' ) || is_search() ) ) { echo '<div class="row">'; }
	?>