<div class="grid-columns-3 mt-4 mb-8">
    <?php
    $args = array(
        'post_type' => 'success_stories',
        'posts_per_page' => -1,
        //'orderby' => 'rand'	
    );
    // The Query
    $the_query = new WP_Query( $args );
    
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            
            if( get_field('success_testimonio') ): ?>
            <div class="samat-card">
                <div class="samat-card-header">
                    <div><?php
                        $image = get_field('success_profile');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

                        if ( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            
                        }
                        
                    ?></div>
                    <div class="name_success">
                        <span class="text-h4"><?php the_field('success_name'); ?></span>
                        <div><?php the_field('success_cargo'); ?></div>
                        <strong><?php the_field('success_company'); ?></strong>
                    </div>
                </div>	
                <div class="samat-card-content">
                    <p class="mb-1"><?php the_field('success_testimonio'); ?></p>
                    <div class="uppercase"><strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Ver caso de estudio</a></strong></div>							
                </div>
            </div>
            
            <?php endif;
        }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
        // no posts found
    }
    ?>		
</div>


