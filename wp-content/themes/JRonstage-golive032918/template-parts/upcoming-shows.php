<div class="card">
   <h3 class="card__group-title">card__group-title</h3>
   
   <div class="card__group-container">
       
        <?php $args = array(
            'post_type' => 'upcoming_shows',							
            'posts_per_page' => -1,					
            'orderby' => 'date',
            'order' => 'ASC',
        ); ?>
        
      <?php $upcoming_shows = new WP_Query($args); while($upcoming_shows->have_posts()): $upcoming_shows->the_post(); ?>

    
        <div class="card__single">
           
           <div class="card__single-image">
                <a class="--modclass-image-wrap-link" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
           </div>
           
           <div class="card__single-details">
              
                <h4 class="card__single-title"><a class="card__single-title-link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>

                <div class="text-block">
                   
                    <div class="text-block__item">
                                               
                        <p><a href="<?php the_field('theater_link'); ?>" class="bold"><?php the_field('us-theater'); ?></a></p>
                        <p class="prices"><?php the_field('ticket_prices'); ?></p>
        
                    </div>
                    
                    <div class="text-block__item">
                        <?php the_field('show_dates'); ?>
                    </div>
                    
                    <div class="text-block__item">
                        <a href="<?php the_permalink(); ?>" class="btn btn--primary">More Info</a>
                        <a target="_blank" href="<?php the_field('get_tickets_link'); ?>" class="btn btn--primary">Tickets</a>
                    </div>
                 
                </div>
               
           </div>
            
        </div>
    
        <?php endwhile; wp_reset_postdata(); ?>
   </div>
    
</div>