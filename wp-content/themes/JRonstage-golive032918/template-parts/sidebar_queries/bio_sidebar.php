<div class="bio">	

  <?php $abt_page_data = new WP_Query('page_id=7'); while($abt_page_data->have_posts()): $abt_page_data->the_post(); ?>

    <div class="bio__image bio__image--small">
       
      <?php the_post_thumbnail(); ?>
      
    </div>
    
    <div class="bio__content bio__content--small">

        <?php the_excerpt(); ?>

    </div>

  <?php endwhile; wp_reset_postdata(); ?>

</div>