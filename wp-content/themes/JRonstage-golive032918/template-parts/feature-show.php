<?php $args = array(
'post_type' => 'upcoming_shows',							
'posts_per_page' => 1,							
'orderby' => 'date',
'order' => 'ASC',
); ?>
	
<?php $upcoming_shows = new WP_Query($args); while($upcoming_shows->have_posts()): $upcoming_shows->the_post(); ?>	

<div id="feature" class="feature" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="feature__content">
	
		<h2 class="feature__title"><?php the_title(); ?></h2>
		
		<h3 class="feature__theater">
		    
		    <a class="feature__theatre-link" target="_blank" href="<?php the_field('theater_link'); ?>">
		        <span class="feature__theater-link"><?php the_field('us-theater'); ?></span> 
		    </a> 
		    
		    <span class="feature__location"> - <?php the_field('location'); ?></span>
		
		</h3>
		
		<div class="feature__info-group">
            <p class="text-block">
                Directed By: <span class="--modclass"><?php the_field('directed_by'); ?></span>
            </p>

            <p class="text-block">
                Written By: <span class="--modclass"><?php the_field('written_by'); ?></span>
            </p>

            <p class="text-block">
                <?php the_field('show_dates'); ?>
            </p>		     
		</div>
	
		<div class="feature__button-container">
			<a href="<?php the_permalink(); ?>" class="btn btn--primary butt butt-primary">Learn More</a>
		    <a target="_blank" href="<?php the_field('get_tickets_link'); ?>" class="btn btn--primary">Get Tickets</a>	    
		</div>

	</div> <!-- End Feature Content -->
		
</div> <!--End Feature-->

<?php endwhile; wp_reset_postdata(); ?>