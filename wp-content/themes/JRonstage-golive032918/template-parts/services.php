<div class="my-services">
    <?php $args = array(
      'post_type' => 'services',							
      'posts_per_page' => -1,							
      'orderby' => 'title',
      'order' => 'ASC',
    ); ?>
 <ul>

   <?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>

     <li class="col1-2 services-items">
       <div>
        <?php the_post_thumbnail('services-image'); ?>
       </div>
       <div>
         <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

         <p><?php the_content(); ?></p>
         <a class="btn--text" href="<?php echo the_permalink(); ?>" class="butt butt-primary">Learn More</a>
       </div>
     </li>

  <?php endwhile; wp_reset_postdata(); ?>
 </ul>

</div>