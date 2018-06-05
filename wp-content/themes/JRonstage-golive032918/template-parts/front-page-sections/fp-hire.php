<?php $args = array(
    'post_type' => 'services',							
    'posts_per_page' => 3,							
    'orderby' => 'title',
    'order' => 'ASC',
); ?>


<div class="row">
     <?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>
     
    <div class="col-1-of-3">

        <div class="servo-box">
           
            <div class="servo-box__photo " style=" background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
                &nbsp;
            </div>
            
            <h4 class="servo-box__title">
               <span class="servo-box__title-span">
                    <?php the_title(); ?>
               </span>
            </h4>
            
            <div class="servo-box__details">
              
              <?php the_field('servo-list') ?>
                
              <a href="<?php the_permalink(); ?>"> Learn More</a>
            </div>
        
        </div>
        
    </div>
    
      <?php endwhile; wp_reset_postdata(); ?>

</div>


