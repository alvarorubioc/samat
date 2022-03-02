<div id="socialshare">
      
      <div><span class="text-h4"><?php esc_html_e( 'Compartir', 'samat' );?></span></div>

      <div class="icons-share">
            <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;">
                  <span class="social-facebook">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#facebook" />
                        </svg>
                  </span>
            </a>
            
            <a rel="nofollow" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo get_the_title(); ?>&via=IngenieriaSamat" data-via="IngenieriaSamat" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;">
                  <span class="social-twitter">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#twitter" />
                        </svg>
                  </span>
            </a>
            
            <a rel="nofollow" href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;">
                  <span class="social-linkedin">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg/sprite-icons.svg#linkedin" />
                        </svg>
                  </span>
            </a>
      </div>

</div>  