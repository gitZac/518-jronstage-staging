<?php $args = array(
'post_type' => 'post',							
'posts_per_page' => 1,							
'orderby' => 'date',
'order' => 'DESC',
); ?>

<?php $all_posts = new WP_Query($args); while($all_posts->have_posts()): $all_posts->the_post(); ?>
 
  <div class="blog-post">
   
    <div class="blog-image">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
    </div>
    
    <div class="blog-content">
     
      <a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
       
        <?php the_excerpt(); ?>
             
    </div>
    
  </div>
<?php endwhile; wp_reset_postdata(); ?>