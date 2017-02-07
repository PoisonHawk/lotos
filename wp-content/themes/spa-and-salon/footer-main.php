<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spa_and_Salon
 */

?>
  <?php



      if( ! is_page_template( 'template-home.php' ) || ! is_search() ) { echo '</div>'; }

      if( !is_page_template( 'template-home.php' ) ) echo '</div></div></div>'; ?><!-- #content -->	
      
                  <?php  

                        $social_links = get_theme_mod( 'spa_and_salon_social_ed_footer' );
                        $spa_and_salon_social_info = get_theme_mod('spa_and_salon_social_info', esc_html__( 'Follow Us On', 'spa-and-salon') );
                        
                        if($social_links){
                              echo '<div class="social-block"><div class="container">';
            
                              if( $spa_and_salon_social_info ){ 
                                    echo esc_html( $spa_and_salon_social_info );
                              }
                              do_action( 'spa_and_salon_social_link' ); 
                              echo'</div></div>'; 
                        }
                  ?>
           
      
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
