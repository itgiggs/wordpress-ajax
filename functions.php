add_action("wp_ajax_my_ajax_action", "my_ajax_handler");
add_action("wp_ajax_nopriv_my_ajax_action", "my_ajax_handler");

function my_ajax_handler() {

             $args = array(  
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => 8, 
                'orderby’ => 'title', 
                'order’ => 'ASC', 
            );

            $loop = new WP_Query( $args ); 

            while ( $loop->have_posts() ) : $loop->the_post(); 
                print the_title(); 
                the_excerpt(); 
            endwhile;

        }
    }
    wp_die();
}
