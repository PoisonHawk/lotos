<?php
/**
 *
 * Template Name: шаблон вид услуг
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

<?php
	
	$imgSrc = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')
?>

<style>
	.entry-content .post-thumbnail{
		max-width:400px;
		max-height: 400px;
		float: left;
		margin-right: 20px;
	}
	
	.post-background {
		background: url('<?php echo $imgSrc[0]?>') ;
		width: 100%;
		height: 300px;
	}

</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-service' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
