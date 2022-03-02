<?php
  
function recent_posts() {
    global $post;

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3, // you may edit this number
            'suppress_filters' => false,
            'orderby' => 'desc',
            'post__not_in' => array ( $post->ID ),
            
        );

        $related_items = new WP_Query( $args );
        // loop over query
        if ( $related_items->have_posts() ) : ?>
 
            <?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
             
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="samat-card">
                        <div class="samat-card-image">
                            <?php the_post_thumbnail('img-card'); ?> 
                        </div>
                        <div class="samat-card-content">
                            <h2 class="text-h4">
                                <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="entry-meta">
                                <?php
                                samat_posted_on();
                                ?>
                            </div><!-- .entry-meta -->
                            <p><?php echo wp_trim_words( get_the_content(), 28, '...' );?></p> 
                        </div>
                    </div>
                </div>    
 
            <?php endwhile; ?>            
            
 
        <?php endif;
        // Reset Post Data
        wp_reset_postdata();
 
}  