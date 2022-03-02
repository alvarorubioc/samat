<?php
function acna_related_posts() {
	global $post;
	$tag_arr = '';
	$tags = wp_get_post_tags( $post->ID );
	if($tags) {
		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 3, /* you can change this to show more */
			'post__not_in' => array($post->ID),
            'suppress_filters' => false
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
            echo '<div class="col-lg-3">';
            echo '<h4>'.__( 'Noticias relacionadas', 'acna-wp' ).'</h4>';
            echo '<div class="acna-divider"></div>';
            the_tags('<p class="lead">' . __( 'Artículos y noticias sobre ', 'acna-wp' ) . '', ', ', '</p><br>');
            echo '</div>';

			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<div class="related_post col-lg-3">
                    <span class="tag-metas"><i class="fa fa-folder-o" aria-hidden="true"></i> 
                    <?php foreach((get_the_category()) as $category) {
                        echo $category->cat_name . ' ';
                    }?></span>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="mt-4"><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p>
				</div>
			<?php endforeach; }
			}
	wp_reset_postdata();
	echo '';
} /* end related posts function */


function related_acna() {
    global $post;
 
    $custom_taxterms = wp_get_object_terms( $post->ID, 'cat_cursos', array('fields' => 'ids') );
 
        $args = array(
            'post_type' => 'type_profesor',
            'post_status' => 'publish',
            'posts_per_page' => -1, // you may edit this number
            'orderby' => 'title',
            'post__not_in' => array ( $post->ID ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'cat_cursos',
                    'field' => 'id',
                    'terms' => $custom_taxterms
                )
            )
        );
        $related_items = new WP_Query( $args );
        // loop over query
        if ( $related_items->have_posts() ) : ?>
 
            <ul class="nav flex-column pt-3">
            <?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
                    <li><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p><?php _e('Sólo se realizan a través de las escuelas', 'acna-wp');?></p>
            
 
        <?php endif;
        // Reset Post Data
        wp_reset_postdata();
 
}

function related_cursos() {
    global $post;
 
    $custom_taxterms = wp_get_object_terms( $post->ID, 'cat_cursos', array('fields' => 'ids') );
 
        $args = array(
            'post_type' => 'type_cursos',
            'post_status' => 'publish',
            'posts_per_page' => -1, // you may edit this number
            'orderby' => 'title',
            'post__not_in' => array ( $post->ID ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'cat_cursos',
                    'field' => 'id',
                    'terms' => $custom_taxterms
                )
            )
        );
        $related_items = new WP_Query( $args );
        // loop over query
        if ( $related_items->have_posts() ) : ?>
 
            <ul class="nav flex-column pt-3">
            <?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
                    <li><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p><?php _e('Sólo se realizan a través de las escuelas', 'acna-wp');?></p>
            
 
        <?php endif;
        // Reset Post Data
        wp_reset_postdata();
 
}


function formacion_related_posts() {
    global $post;
 
    $custom_taxterms = wp_get_object_terms( $post->ID, 'cat_cursos', array('fields' => 'ids') );
 
        $args = array(
            'post_type' => 'type_formacion',
            'post_status' => 'publish',
            'posts_per_page' => 3, // you may edit this number
            'orderby' => 'rand',
            'post__not_in' => array ( $post->ID ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'cat_cursos',
                    'field' => 'id',
                    'terms' => $custom_taxterms
                )
            )
        );
        $related_items = new WP_Query( $args );
        // loop over query
        if ( $related_items->have_posts() ) : ?>
 
            <div class="col-lg-3">
                <div class="acna-divider"></div>
                <h4><?php _e( 'Formaciones relacionadas', 'acna-wp' ); ?></h4>
                <p><a class="btn btn-primary" href="<?php echo get_post_type_archive_link( 'type_formacion' ); ?>"><?php _e( 'VER TODO', 'acna-wp' ); ?></a></p><br>
            </div>

            <?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
             
                <div class="related_post col-lg-3">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class=""><?php echo get_the_excerpt() ;?></p>
                </div>  

 
            <?php endwhile; ?>
            
 
        <?php endif;
        // Reset Post Data
        wp_reset_postdata();
 
}