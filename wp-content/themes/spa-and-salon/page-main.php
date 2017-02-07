<?php
/**
 *
 *	Template Name: Мой шаблон главной страницы
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spa_and_Salon
 */

get_header('main');
?>
<style>

	.inner .site-header{
		background: none;
		color: #fff;
	}

	.inner a {
		color: #fff;
	}

	.main-navigation ul li a{
		color: #fff;
	}

	#slider2_container{
		position: absolute;
		top:0;
		/*width: 100vw;*/
		height:100%;
		z-index: -100;
	}

	.site{
		background: none;
	}
	
	.site-content{
		padding: 0;
	}

	.wrapper{
		background: none;
	}
	
	.entry-content .add_posts{
		text-align: center;;
		list-style: none;

	}

	.entry-content .add_posts_content {
		display: inline-block;
		padding: 5px 20px 20px;
		border: 2px solid #fff;
		margin: 20px;
		width: 300px;
	}

	.entry-content .add_posts_content{
		 text-align: center;;
	 }

	.entry-content .add_posts_content h2{
		 line-height: 0.8 !important;
	 }

	.entry-content .add_posts_content h2 a{
		text-transform: uppercase;
		font-size: 20px;
	}

	.entry-content .add_posts_content hr{
		display: none;
	}

	.entry-content .add_posts_content .post-content a{
		display: none;
	}

	.site-branding{
		// margin: 200px auto;
		font-size:50px;
		font-decoration: uppercase;
	}

	.header-line{
		display:none;
	}

</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="site-branding">
				<?php
				if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
					the_custom_logo();
				}
				?>
				
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description" style="color: #fff; font-size: 36px; text-transform:uppercase;margin-bottom:20px"><?php echo $description; /* WPCS: xss ok. */ ?></p>

					<?php
				endif; ?>
				<h1 class="site-title"  style="color: #fff !important; font-size: 48px; text-transform:uppercase">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="color:#fff">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			</div> <!-- .site-branding -->
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</body>
	</html>
<?php
//
get_footer('main');
