<div class="card">
   
   <div class="card__group-container">
       
        <?php $args = array(
            'post_type' => 'best_roles',							
            'posts_per_page' => -1,					
            'orderby' => 'date',
            'order' => 'ASC',
        ); ?>
        
      <?php $roles = new WP_Query($args); while($roles->have_posts()): $roles->the_post(); ?>

    
        <div class="card__single grid2 grid2--1col-phone">
           
           <div class="card__single-image card__single-image--mxh">
                <a class="--modclass-image-wrap-link" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
           </div>
           
           <div class="card__single-details grid4">

              <div class="text-block">
               
                <h4 class="card__single-title card__single-title--sm"><a class="card__single-title-link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                <p class="text-block__item"><span class="u-text-muted u-text-bold">Role: </span><?php the_field('your_role'); ?></p>
                <p class="text-block__item"><span class="u-text-muted u-text-bold ">Position: </span><?php the_field('position'); ?></p>
                <p class="text-block__item"><span class="u-text-muted u-text-bold ">Run: </span><?php the_field('year'); ?></p>
                <p class="text-block__item"><span class="u-text-muted u-text-bold ">Company: </span><?php the_field('company'); ?></p> 
                
                <a class="text-block__item--link u-text-bold" href="<?php the_permalink(); ?>"><?php ?>Read More</a> 
                                                                     
              </div>
            
           </div>
            
        </div>
    
        <?php endwhile; wp_reset_postdata(); ?>
   </div>
    
</div>