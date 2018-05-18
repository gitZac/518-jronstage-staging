<h3><?php the_field('featured_roles_title'); ?></h3>
  
  <?php $args = array(
    'post_type' => 'best_roles',							
    'posts_per_page' => -1,							
    'orderby' => 'date',
    'order' => 'ASC',
  ); ?>

<ul class="roles-container">
  
  <?php $roles = new WP_Query($args); while($roles->have_posts()): $roles->the_post(); ?>
  
  <li class="role-single clear">
    
    <div class="role-image-container">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
        
    <div class="role-details">
      <h4 class="role-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
      <ul>
        <li><span>Role: </span><?php the_field('your_role'); ?></li>
        <li><span>Position: </span><?php the_field('position'); ?></li>
        <li><span>Run: </span><?php the_field('year'); ?></li>
        <li><span>Company: </span><?php the_field('company'); ?></li>
        <li><a href="<?php the_permalink(); ?>"><?php ?>Read More</a></li>
      </ul>
    </div>
  
  </li>
  
  <?php endwhile; wp_reset_postdata(); ?>
</ul>