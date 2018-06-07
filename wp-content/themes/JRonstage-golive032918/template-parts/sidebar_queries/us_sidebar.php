<?php $args = array(
    'post_type' => 'upcoming_shows',							
    'posts_per_page' => 3,							
    'orderby' => 'date',
    'order' => 'ASC',
); ?>

<ul class="card card--stacked">

    <?php $upcoming = new WP_Query($args); while($upcoming->have_posts()): $upcoming->the_post(); ?>

        <li class="card--stacked__single">

            <div class="card--stacked__image">
               
                <?php the_post_thumbnail('');?>
                
            </div>

            <div class="card--stacked__text">

                <h4 class="card--stacked__title"><?php the_title(); ?></h4>
                <p class=""><?php the_field('us-theater'); ?></p>
                <p class=""><?php the_field('show_dates'); ?></p>
                <p class=""><?php the_field('ticket_prices'); ?></p>

            </div>

            <div class="card--stacked__links">
               
                <a href="<?php the_permalink(); ?>" class="btn--text">More Info</a>
                <a target="_blank" href="<?php the_field('get_tickets_link'); ?>" class="btn--text">Get Tickets</a>
                
            </div>

        </li>

    <?php endwhile; wp_reset_postdata(); ?>

</ul>