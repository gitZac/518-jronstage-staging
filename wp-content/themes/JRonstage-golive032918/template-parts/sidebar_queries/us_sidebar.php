	<div class="upcoming-sidebar">	
			<h3 class="sidebar-widget-title">Upcoming Shows</h3>
				<?php $args = array(
					'post_type' => 'upcoming_shows',							
					'posts_per_page' => 3,							
					'orderby' => 'date',
					'order' => 'ASC',
				); ?>
			
			<ul>
				<?php $upcoming = new WP_Query($args); while($upcoming->have_posts()): $upcoming->the_post(); ?>
					<li class="sidebar-content">
						<div class="sidebar-image">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail('');?></a>
						</div>          
						<div class="sidebar-text-container">
							<h4 class="sidebar-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p class="us-theater"><?php the_field('us-theater'); ?></p>
							<p class="us-show-date"><?php the_field('show_dates'); ?></p>
							<p class="us-ticket-price"><?php the_field('ticket_prices'); ?></p>
						</div>          
						<div class="sidebar-buttons">
							<a href="<?php the_permalink(); ?>" class="butt butt-primary">More Info</a>
							<a target="_blank" href="<?php the_field('get_tickets_link'); ?>" class="butt butt-primary">Get Tickets</a>
						</div>
					</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		
		</div> <!-- END upcoming shows -->