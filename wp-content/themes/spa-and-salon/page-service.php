<?php
/**
 * Template Name: шаблон услуг
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

get_header(); ?>
<style>

	.entry-content{
		text-align: center;
	}

	.page-list-ext-item{
		position:relative;
		max-width:200px;
		max-height: 200px;
		/*float: left;*/
		clear: none !important;
		margin: 15px !important;
		display: inline-block;

	}

	.page-list-ext-image{

		max-width: 200px;
		max-height: 200px;
		border-radius: 50%;
		background: rgba(0,0,0,0.5);
		margin: 0 !important;
	}

	.page-list-ext-image a{

		width: 100%;
		height: 100%;
		/*border-radius: 50%;*/
		/*background: rgba(0,0,0,0.5);*/
	}

	.page-list-ext-image img{
		border-radius: 50%;
	}

	.page-list-ext-title a{
		font-family: 'ClutchSans' !important;
		display: inline-block;
		position: absolute;
		top: 50%;
		left: 50%;
		z-index:100;
		width:200px;
		height: 200px;
		text-align: center;
		padding-top: 80px;
		color: #3C2C2C !important;
		text-shadow: 0px 0px 5px #3C2C2C, 0 0 1em #3C2C2C ;
		font-weight: bold;
		background: rgba(255,255,255,0.5);
		line-height: 1em;
		margin:-100px 0 0 -100px;
	}



	.page-list-ext-title a:hover{
		text-decoration: none;
	}

</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
<!--<script>-->
<!---->
<!--	$(document).ready(function(){-->
<!--		alert('1');-->
<!---->
<!--		$('.page-list-ext-image').append('<div class="img-layout"></div>')-->
<!--	})-->
<!---->
<!--</script>-->
<?php
get_sidebar();
get_footer();
