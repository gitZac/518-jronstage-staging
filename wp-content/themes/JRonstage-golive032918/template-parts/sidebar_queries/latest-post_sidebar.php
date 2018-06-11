<?php $args = array(
'post_type' => 'post',							
'posts_per_page' => 1,							
'orderby' => 'date',
'order' => 'DESC',
); ?>

<?php $all_posts = new WP_Query($args); while($all_posts->have_posts()): $all_posts->the_post(); ?>
 
<div class="title-text-image">

    <div class="title-text-image__image">
        <?php the_post_thumbnail(); ?>
    </div>

    <h3 class="title-text-image__title"><?php the_title(); ?></h3>

    <div class="title-text-image__text">
        <p><?php the_excerpt(); ?></p>          
    </div>
        
</div>
<?php endwhile; wp_reset_postdata(); ?>