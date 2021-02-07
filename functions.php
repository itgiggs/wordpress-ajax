add_action("wp_ajax_my_ajax_action", "my_ajax_handler");
add_action("wp_ajax_nopriv_my_ajax_action", "my_ajax_handler");

function my_ajax_handler() {

             $args = array(  
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 5, 
            );

            $loop = new WP_Query( $args ); 

            while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <h3><?php the_title(); ?></h3>
            <?php   endwhile;
        }
    }
    wp_die();
}
