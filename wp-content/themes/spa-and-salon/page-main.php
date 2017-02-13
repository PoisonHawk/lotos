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



	.site{
		background: none;
		position: relative;
		height: 100%;
	}
	
	.site-content{
		padding: 0;
	}

	.wrapper{
		background: none;
		height: 88%;
		/*display: table;*/
	}

	.container{
		max-width: 1200px;
		margin: 0 auto;
		padding-left: 10px;
		padding-right: 10px;
		/*display: table-cell;*/
		/*vertical-align: middle;*/
	}
	
	.entry-content .add_posts{
		text-align: center;
		list-style: none;
	}

	.entry-content .add_posts_content {
		display: inline-block;
		padding: 5px 20px 20px;
		border: 3px solid #fff;
		margin: 20px;
		width: 300px;
	}

	.entry-content .add_posts_content{
		 text-align: center;;
	 }

	.entry-content .add_posts_content h2{
		 line-height: 0.8 !important;
		padding-bottom: 30px;
	 }

	.entry-content .add_posts_content h2 a{
		text-transform: uppercase;
		font-size: 28px;
	}

	.entry-content .add_posts_content .post-content p{
		font-size: 24px;
		color: rgba(255,255,255,0.9);
	}

	.entry-content .add_posts_content hr{
		display: none;
	}

	.entry-content .add_posts_content .post-content a{
		display: none;
	}

	.site-branding{
		margin: 200px auto;
		font-size:50px;
		position: inherit;;
		
	}

	.header-line{
		display:none;
	}
	
	.main-navigation ul li a:hover,
	.main-navigation ul li a:focus{
		text-decoration: none;
		/*color: rgba(255,255,255,0.9);*/
		color: #ccc;
	}
	
	.header-t .tel-link:hover{
		text-decoration: none;
		/*color: rgba(255,255,255,0.9);*/
		color: #ccc;
	}

	.action-content{
		text-align: center;
	}

	.action{
		display:inline-block;
		border: 4px solid #fff;
		color: #fff;
		width: 300px;
		padding: 15px 20px 20px;
		text-align: center;
		cursor:pointer;
		font-size: 24px;
		margin: 20px;
	}

	.action h2{
		font-size: 28px;
		line-height: 0.8 !important;
		padding-bottom: 30px;
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
			<div class="action-content">
			<?php
//			while ( have_posts() ) : the_post();
//
//				get_template_part( 'template-parts/content', 'page' );
//
//			endwhile; // End of the loop.


			$args = array(
				'posts_per_page' => 3,
//			'orderby' => 'comment_count',
				'cat'=>8,
			);

			$query = new WP_Query($args); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
			if( $query->have_posts() ){
				while( $query->have_posts() ){
					$query->the_post();
					?>
					<div class="action" onclick="location.href='<?php the_permalink(); ?>'">
						<h2 style="text-align: center"><?php the_title(); ?></h2>
						<?php the_content(''); ?>
					</div>
					<?php
				}
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			add_filter( 'the_content_more_link', '__return_empty_string' );
			?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</body>
	</html>
<?php
//
get_footer('main');
