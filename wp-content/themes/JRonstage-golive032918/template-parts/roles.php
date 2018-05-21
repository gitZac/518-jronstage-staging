<div class="card">
   <h3 class="card__group-title">My Favorite Roles</h3>
   
   <div class="card__group-container">
       
        <?php $args = array(
            'post_type' => 'best_roles',							
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

                <ul class="text-block text-block--list">
                   
                    <li class="text-block__item">
                        <span class="u-color-primary u-text-bold">Role: </span><?php the_field('your_role'); ?>
                    </li>
                    <li class="text-block__item">
                        <span class="u-color-primary u-text-bold">Position: </span><?php the_field('position'); ?>
                    </li>
                    <li class="text-block__item">
                        <span class="u-color-primary u-text-bold">Run: </span> <?php the_field('year'); ?>
                    </li>
                    <li class="text-block__item">
                        <span class="u-color-primary u-text-bold">Company: </span><?php the_field('company'); ?>
                    </li>

                </ul>

                <a href="<?php the_permalink(); ?>"><?php ?>Read More</a> 
               
           </div>
            
        </div>
    
        <?php endwhile; wp_reset_postdata(); ?>
   </div>
    
</div>