<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spa_and_Salon
 */

$sidebar_layout = spa_and_salon_sidebar_layout();
$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
?>
<style>
	.b-wrap{
		min-height: 400px;
		postion: relative;
		display: table-row;
	}

	.b-left,
	.b-right{
		background: url(<?php echo $image_url[0]?>);
		background-position: center;
		width: 50%;
		height: 100%;
		margin-bottom: 30px;
		display:table-cell;
	}

</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php echo '<div class="header-line"></div>'?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php echo '<div class="post-thumbnail">'; ?>
<!-- 		 --><?php // the_post_thumbnail( 'spa-and-salon-without-sidebar' ) ; ?>
    <?php echo '</div>' ;?>

		<div class="b-wrap">
			<div class="b-left" >
				<?php
//					the_post_thumbnail( 'spa-and-salon-without-sidebar' );
				?>
				<div style="height: 100%; padding:20px; background: rgba(255,255,255,0.8)" >
					<?php the_content(); ?>
				</div>

			</div>
			<div class="b-right" >
<!--				--><?php //the_post_thumbnail( 'spa-and-salon-without-sidebar' )?>
			</div>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'spa-and-salon' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
