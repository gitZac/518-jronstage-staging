    <h3 class="sidebar-widget-title">My Services</h3>
    <?php $args = array(
      'post_type' => 'services',							
      'posts_per_page' => -1,							
      'orderby' => 'title',
      'order' => 'ASC',
    ); ?>
 
<?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>
  <div class="services-items style= "style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);");>
    <div class="services-items-text">
       <a class="no-hover inherit" href="<?php the_permalink(); ?>">

          <h3 class="services-title"><?php the_title(); ?></h3>
          <p>
           <?php html5wp_excerpt('html5wp_custom_post');?>
          </p>

       </a>
    </div>
    
   </div>
<?php endwhile; wp_reset_postdata(); ?>


