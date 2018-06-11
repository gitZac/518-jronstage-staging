<?php $args = array(
'post_type' => 'post',							
'posts_per_page' => -1,							
'orderby' => 'date',
'order' => 'DESC',
); ?>

<?php $all_posts = new WP_Query($args); while($all_posts->have_posts()): $all_posts->the_post(); ?>
 
<section class="section">

    <div class="section__image">
        <?php the_post_thumbnail(); ?>
    </div>
    
    <h3 class="section__title--inner"><?php the_title(); ?></h3>

    <div class="text-block">
       
        <p class="u-color-gray-mid">By <?php the_author(); ?> | <?php the_date(); ?></p> 
        <p>
          <?php the_excerpt(); ?> 
        </p>
            
    </div>

</section>

<?php endwhile; wp_reset_postdata(); ?>