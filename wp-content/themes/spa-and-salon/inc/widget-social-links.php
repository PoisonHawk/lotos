<?php
/**
 * Widget Social Links
 *
 * @package Spa_and_Salon
 */

// register Spa_and_Salon_Social_Links widget 
function spa_and_salon_register_social_links_widget() {
    register_widget( 'Spa_and_Salon_Social_Links' );
}
add_action( 'widgets_init', 'spa_and_salon_register_social_links_widget' );

if( ! class_exists( 'Spa_and_Salon_Social_Links' ) ): 
 /**
 * Adds Spa_and_Salon_Social_Links widget.
 */
class Spa_and_Salon_Social_Links extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'spa_and_salon_social_links', // Base ID
			esc_html__( 'RARA: Social Links', 'spa-and-salon' ), // Name
			array( 'description' => esc_html__( 'A Social Links Widget', 'spa-and-salon' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
	   
        $title      = ! empty( $instance['title'] ) ? $instance['title'] : '';		
        $facebook   = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '' ;
        $instagram  = ! empty( $instance['instagram'] ) ? $instance['instagram'] : '' ;
        $twitter    = ! empty( $instance['twitter'] ) ? $instance['twitter'] : '' ;
        $ok  = ! empty( $instance['ok'] ) ? $instance['ok'] : '' ;
		$vk   = ! empty( $instance['vk'] ) ? $instance['vk'] : '' ;
        $youtube    = ! empty( $instance['youtube'] ) ? $instance['youtube'] : '' ;
        
        if( $facebook || $instagram || $twitter || $ok || $vk || $youtube ){ 
        echo $args['before_widget'];
        if($title)
        echo $args['before_title'] . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $args['after_title'];
        ?>
            <ul class="social-networks">
				<?php } if( $vk ){ ?>
                <li class="vk"><a href="<?php echo esc_url( $vk ); ?>" title="<?php esc_attr_e( 'VK', 'spa-and-salon' ); ?>" class="fa fa-vk"></a></li>
				<?php if( $facebook ){ ?>
                <li class="fb"><a href="<?php echo esc_url( $facebook ); ?>" title="<?php esc_attr_e( 'Facebook', 'spa-and-salon' ); ?>" class="fa fa-facebook"></a></li>
				<?php } if( $instagram ){ ?>
                <li class="insta"><a href="<?php echo esc_url( $instagram ); ?>" title="<?php esc_attr_e( 'Instagram', 'spa-and-salon' ); ?>" class="fa fa-instagram"></a></li>
                <?php } if( $twitter ){ ?>
                <li class="tw"><a href="<?php echo esc_url( $twitter ); ?>" title="<?php esc_attr_e( 'Twitter', 'spa-and-salon' ); ?>" class="fa fa-twitter"></a></li>
				<?php } if( $ok ){ ?>
                <li class="ok"><a href="<?php echo esc_url( $ok ); ?>"  title="<?php esc_attr_e( 'Ok', 'spa-and-salon' ); ?>" class="fa fa-odnoklassniki-square"></a></li>
				<?php } if( $youtube ){ ?>
                <li class="yt"><a href="<?php echo esc_url( $youtube ); ?>" title="<?php esc_attr_e( 'YouTube', 'spa-and-salon' ); ?>" class="fa fa-youtube"></a></li>
                <?php } ?>
			</ul>
        <?php
        echo $args['after_widget'];
        }
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        
        $title      = ! empty( $instance['title'] ) ? $instance['title'] : '';		
        $facebook   = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '' ;
        $instagram  = ! empty( $instance['instagram'] ) ? $instance['instagram'] : '' ;
        $twitter    = ! empty( $instance['twitter'] ) ? $instance['twitter'] : '' ;
        $ok  = ! empty( $instance['ok'] ) ? $instance['ok'] : '' ;
//        $linkedin   = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '' ;
		$vk   = ! empty( $instance['vk'] ) ? $instance['vk'] : '' ;
        $youtube    = ! empty( $instance['youtube'] ) ? $instance['youtube'] : '' ;
        
        ?>
		
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e( 'Facebook', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
		</p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e( 'Instagram', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
		</p>
                
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e( 'Twitter', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
		</p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'ok' ) ); ?>"><?php esc_html_e( 'Ok', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'ok' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'ok' ) ); ?>" type="text" value="<?php echo esc_attr( $ok ); ?>" />
		</p>
        
<!--        <p>
            <label for="<?php //echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php //esc_html_e( 'LinkedIn', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php //echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php //echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" value="<?php //echo esc_attr( $linkedin ); ?>" />
		</p>-->
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'vk' ) ); ?>"><?php esc_html_e( 'VK', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vk' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vk' ) ); ?>" type="text" value="<?php echo esc_attr('vk'); ?>" />
		</p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e( 'YouTube', 'spa-and-salon' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>" />
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		
        $instance = array();
		
        $instance['title']      = ! empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) :'';
        $instance['facebook']   = ! empty( $new_instance['facebook'] ) ? esc_url_raw( $new_instance['facebook'] ) : '';
        $instance['instagram']  = ! empty( $new_instance['instagram'] ) ? esc_url_raw( $new_instance['instagram'] ) : '';
        $instance['twitter']    = ! empty( $new_instance['twitter'] ) ? esc_url_raw( $new_instance['twitter'] ) : '';
        $instance['pinterest']  = ! empty( $new_instance['pinterest'] ) ? esc_url_raw( $new_instance['pinterest'] ) : '';
//        $instance['linkedin']   = ! empty( $new_instance['linkedin'] ) ? esc_url_raw( $new_instance['linkedin'] ) : '';
		$instance['vk']   = ! empty( $new_instance['vk'] ) ? esc_url_raw( $new_instance['vk'] ) : '';
        $instance['youtube']    = ! empty( $new_instance['youtube'] ) ? esc_url_raw( $new_instance['youtube'] ) : '';
		
        return $instance;
                
	}

} // class Spa_and_Salon_Social_Links 
endif;