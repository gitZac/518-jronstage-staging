<div class="card">
   
   <div class="card__group-container">
       
        <?php $args = array(
            'post_type' => 'upcoming_shows',							
            'posts_per_page' => -1,					
            'orderby' => 'date',
            'order' => 'ASC',
        ); ?>
        
      <?php $upcoming_shows = new WP_Query($args); while($upcoming_shows->have_posts()): $upcoming_shows->the_post(); ?>

    
        <div class="grid2 grid2--1col-phone card__single">
           
           <div class="card__single-image">
                <a class="--modclass-image-wrap-link" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
           </div>
           
           <div class="card__single-details grid4">
            
                <div class="text-block">
                    <h4 class="card__single-title"><a class="card__single-title-link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                  
                    <p class="card__single-location"><a href="<?php the_field('theater_link'); ?>"><?php the_field('us-theater'); ?></a></p>
                    
                    <div class="card__single-dates"><?php the_field('show_dates'); ?></div>
                    
                    <div class="card__single-prices"><?php the_field('ticket_prices'); ?></div>
                    
                </div>

                <div class="text-block u-a-flxend">
                    <a href="<?php the_permalink(); ?>" class="btn btn--primary">More Info</a>
                    <a target="_blank" href="<?php the_field('get_tickets_link'); ?>" class="btn btn--primary">Tickets</a>
                </div>           
               
           </div>
            
        </div>
    
        <?php endwhile; wp_reset_postdata(); ?>
   </div>
    
</div>