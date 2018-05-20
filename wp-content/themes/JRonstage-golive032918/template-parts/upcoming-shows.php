
    

    
<div class="card    show-card-container">
     
    <h3 class="card__group-title">Card__group-title</h3>

    <?php $args = array(
        'post_type' => 'upcoming_shows',							
        'posts_per_page' => -1,					
        'orderby' => 'date',
        'order' => 'ASC',
    ); ?>
      
   <?php $upcoming_shows = new WP_Query($args); while($upcoming_shows->have_posts()): $upcoming_shows->the_post(); ?>
   
   

  <div class="card__content-container     show-card l-grid-offset1-2">
    
    
    
    <div class="card__image-container">
       
        <a href="<?php the_permalink(); ?>" class="--modclass-image-wrap-link">
            <?php the_post_thumbnail();?>
        </a>
        
    </div>

    <div class="card__details-container">
        
        
        

    </div>
    
    
    
    <div class="show-card-content">
        
      <div class="show-card-header">
        <h3 class="show-card-title"><a class="headline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><a href="<?php the_field('theater_link'); ?>" class="bold"><?php the_field('us-theater'); ?></a></p>
        <p class="prices"><?php the_field('ticket_prices'); ?></p>
      </div>
      
      <div class="show-dates">
        <ul>
          <li><?php the_field('show_dates'); ?></li>  
        </ul>
      </div>

      <div class="show-card-button-container">
        <a href="<?php the_permalink(); ?>" class="butt butt-primary">More Info</a>
        <a target="_blank" href="<?php the_field('get_tickets_link'); ?>" class="butt butt-primary">Tickets</a>
      </div>
      
    </div>
    

     
  </div><!--END US-CONTENT -->
   
   
    <?php endwhile; wp_reset_postdata(); ?>

</div>