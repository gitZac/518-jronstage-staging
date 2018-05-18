	<?php $args = array(
		'post_type' => 'twain_feature',							
		'posts_per_page' => 1,							
		'orderby' => 'title',
		'order' => 'ASC',
	); ?>

	<?php $twain_feature = new WP_Query($args); while($twain_feature->have_posts()): $twain_feature->the_post(); ?>	

	<div class="l-wrapper l-grid1-2">
		<div class="feature-text">
			<h2><?php the_title(); ?></h2>
			<h3><?php the_field('tagline'); ?></h3>
			<p>
				<?php the_field('showing'); ?>
			</p>
			<p>
				<?php the_field('book'); ?> <a href="<?php echo get_page_link(122);  ?>">Find out how</a>.
			</p>
		</div>
		
		
		<div class="feature-image">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>