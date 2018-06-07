<?php $args = array(
  'post_type' => 'services',							
  'posts_per_page' => -1,							
  'orderby' => 'title',
  'order' => 'ASC',
); ?>
 
<?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>
<a href="<?php  the_permalink()?>">
     <div class=" servo-box servo-box--small" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);");>

        <h4 class="servo-box__title">
           <span class="servo-box__title-span">
                <?php the_title(); ?>
           </span>
        </h4>

    </div>
</a>
<?php endwhile; wp_reset_postdata(); ?>


