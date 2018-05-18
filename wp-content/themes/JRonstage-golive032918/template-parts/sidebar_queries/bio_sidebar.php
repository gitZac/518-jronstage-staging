	<div class="bio-sidebar">	
  
      <?php $abt_page_data = new WP_Query('page_id=7'); while($abt_page_data->have_posts()): $abt_page_data->the_post(); ?>
        <div class="bio-image">
            <a class="no-hover" href="<?php echo esc_url( the_permalink() ); ?>">
              <?php the_post_thumbnail('profile-image'); ?>
            </a>
        </div>
        <div class="bio-content-excerpt">
           
             <?php the_excerpt(); ?>
          
        </div>
    
      <?php endwhile; wp_reset_postdata(); ?>
		
		</div> <!-- END Bio -->