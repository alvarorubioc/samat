<div id="child-services" class="grid-columns-3 mt-4 mb-8">
       
    <?php
        $args = array(
            'post_type'      => 'services', //write slug of post type
            'posts_per_page' => -1,
            'post_parent'    => $id, //place here id of your parent page
            'order'          => 'ASC',
            'post__not_in' => array($post->ID),
            'orderby'        => 'menu_order',
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

                    get_template_part( 'template-parts/loop', 'card' );
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }
    ?>
    
</div><!-- #child-services -->