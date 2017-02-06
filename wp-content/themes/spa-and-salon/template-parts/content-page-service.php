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
	.background-post{
		background: url(<?php echo $image_url[0]?>);
		background-position: center;
		width: 100%;
		margin-bottom: 30px;
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php echo '<div class="header-line"></div>'?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="background-post">
			<div style="background: rgba(255,255,255,0.8); width: 100%; height: 100%; padding: 20px;"; >
				<?php echo the_content();?>
			</div>
		</div>
		
		<?php

			$postId = get_the_ID();

			switch($postId){
				case 181:
					$catId = 11;//парикмахерский зал
				break;
				case 183:
					$catId = 5;//маникюр
					break;
				case 185:
					$catId = 12;//косметология
					break;
				case 79:
					$catId = 3;//массаж
					break;
				case 82:
					$catId = 13;//визажист
					break;
			}


		$args = array(
			'posts_per_page' => 2,
//			'orderby' => 'comment_count',
			'cat'=>$catId,
		);

		$query = new WP_Query($args); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
		if( $query->have_posts() ){
			while( $query->have_posts() ){ 
				$query->the_post();
		?>
				<div style="margin: 50px 0">
					<h2 style="text-align: center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</div>
		<?php
			}
			wp_reset_postdata(); // сбрасываем переменную $post
		} 
		else echo 'Записей нет.';
		?>

		<?php $args = array(
			'base'         => '%_%',
			'format'       => '?page=%#%',
			'total'        => 1,
			'current'      => 0,
			'show_all'     => False,
			'end_size'     => 1,
			'mid_size'     => 2,
			'mid_size'     => 2,
			'prev_next'    => True,
			'prev_text'    => __('« Previous'),
			'next_text'    => __('Next »'),
			'type'         => 'plain',
			'add_args'     => False,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number'  => ''
		);

		echo paginate_links( $args ); ?>

<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spa-and-salon' ),
			'after'  => '</div>',
		) );
		?>
		<div class="bacl-link" style="text-align:center;">
			<a href="/services">Вернуться назад</a>
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
