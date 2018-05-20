<div class="card">
    
    <h3 class="card__group-title"><?php the_field('featured_roles_title'); ?></h3>

      <?php $args = array(
        'post_type' => 'best_roles',							
        'posts_per_page' => -1,							
        'orderby' => 'date',
        'order' => 'ASC',
      ); ?>

    <ul class="card__content-container roles-container">

      <?php $roles = new WP_Query($args); while($roles->have_posts()): $roles->the_post(); ?>

      <li class="card__single clear">

        <div class="card__image-container">
            <a class="--modclass-image-wrap-link" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>

        <div class="card__details-container">
          
          <h4 class="card__single-title"><a class="card__single-title-link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
          
           <ul class="card__details">
           
            <li class="text-block"><span>Role: </span><?php the_field('your_role'); ?></li>
            
            <li class="text-block"><span>Position: </span><?php the_field('position'); ?></li>
            
            <li class="text-block"><span>Run: </span><?php the_field('year'); ?></li>
            
            <li class="text-block"><span>Company: </span><?php the_field('company'); ?></li>
            
            <li><a href="<?php the_permalink(); ?>"><?php ?>Read More</a></li>
            
          </ul>
          
          
        </div>

      </li>

      <?php endwhile; wp_reset_postdata(); ?>
    </ul>


</div>
