<?php $args = array(
    'post_type' => 'services',							
    'posts_per_page' => -1,							
    'orderby' => 'title',
    'order' => 'ASC',
); ?>

<div class="my-services l-grid-services"> 
  <?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>
  
  
    <div class="services-items" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
     <a class="no-hover inherit" href="<?php echo esc_url(the_permalink() );  ?>">

      <div class="services-items-text">
        <h3 class="services-title"><?php the_title(); ?></h3>
        <p><?php html5wp_excerpt('html5wp_custom_post');?></p> 
      </div>
      </a>
    </div>
    
  
  <?php endwhile; wp_reset_postdata(); ?>

</div>

