<section class="bio">
  <?php $abt_page_data = new WP_Query('page_id=7'); while($abt_page_data->have_posts()): $abt_page_data->the_post(); ?>

    <div class="bio__image">
      <?php the_post_thumbnail(); ?>
    </div>

    <div class="bio__content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; wp_reset_postdata(); ?>
  
</section>
