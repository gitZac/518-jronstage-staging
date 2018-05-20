<div class="card">
   <h3 class="card__group-title"></h3>
   
   <div class="card__group-container">
       
        <?php $args = array(
            'post_type' => 'upcoming_shows',							
            'posts_per_page' => -1,					
            'orderby' => 'date',
            'order' => 'ASC',
        ); ?>
        
      <?php $roles = new WP_Query($args); while($roles->have_posts()): $roles->the_post(); ?>

    
        <div class="card__single">
           
           <div class="card__single-image">
                <a class="--modclass-image-wrap-link" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
           </div>
           
           <div class="card__single-details">
              
                <h4 class="card__single-title"><a class="card__single-title-link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>

                <div class="text-block"><span>Role: </span><?php the_field('your_role'); ?></div>

                <div class="text-block"><span>Position: </span><?php the_field('position'); ?></div>

                <div class="text-block"><span>Run: </span><?php the_field('year'); ?></div>

                <div class="text-block"><span>Company: </span><?php the_field('company'); ?></div>

                <div><a href="<?php the_permalink(); ?>"><?php ?>Read More</a></div> 
               
           </div>
            
        </div>
    
        <?php endwhile; wp_reset_postdata(); ?>
   </div>
    
</div>