<?php $args = array(
'post_type' => 'post',							
'posts_per_page' => -1,							
'orderby' => 'date',
'order' => 'DESC',
); ?>

<?php $all_posts = new WP_Query($args); while($all_posts->have_posts()): $all_posts->the_post(); ?>
  
  <div class="blog-post">
    <div class="blog-image">
      <?php the_post_thumbnail(); ?>
    </div>
    
    <div class="blog-content">
      <p class="text-muted">By <?php the_author(); ?> | <?php the_date(); ?></p>
      <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
        <p>
          <?php the_excerpt(); ?> 
        </p>    
    </div>
    
  </div>
<?php endwhile; wp_reset_postdata(); ?>