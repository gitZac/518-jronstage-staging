<?php $args = array(
'post_type' => 'upcoming_shows',							
'posts_per_page' => 1,							
'orderby' => 'date',
'order' => 'ASC',
); ?>
	
<?php $upcoming_shows = new WP_Query($args); while($upcoming_shows->have_posts()): $upcoming_shows->the_post(); ?>	

<div id="feature" class="feature" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
	
	<div class="feature-text">
		<h2><?php the_title(); ?></h2>
		<h3><a target="_blank" href="<?php the_field('theater_link'); ?>"><span class=" theater"><?php the_field('us-theater'); ?></span></a> - <span class="location"><?php the_field('location'); ?></span></h3>
		<h4></h4>
		<p class="directed">
			Directed By: <span class=""><?php the_field('directed_by'); ?></span>
		</p>
		<p class="directed">
			Written By: <span class=""><?php the_field('written_by'); ?></span>
		</p>
		<p>
			<?php the_field('show_dates'); ?>
		</p>
		<a href="<?php the_permalink(); ?>" class="butt butt-primary">Learn More</a>
		<a target="_blank" href="<?php the_field('get_tickets_link'); ?>" class="butt butt-primary">Get Tickets</a>
	</div>
	
</div>

<?php endwhile; wp_reset_postdata(); ?>