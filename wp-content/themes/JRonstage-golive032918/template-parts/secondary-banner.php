<div class="secondary-banner bg-primary">
	<div class="l-wrapper l-secondary-banner-grid">
		
		<?php $args = array(
			'post_type' => 'inside_banner',							
			'posts_per_page' => 1,							
			'orderby' => 'title',
			'order' => 'ASC',
		); ?>
		
		<?php $banner = new WP_Query($args); while($banner->have_posts()): $banner->the_post(); ?>
		
		<div class="secondary-banner-content l-gridcustom">
			<h1 class="secondary-banner-title"><?php the_field('banner_header'); ?></h1>
			<ul class="main-banner-list ">
				<li><span> </span>Actor</li>
				<li><span> </span>Director</li>
				<li><span> </span>Coach</li>
			</ul>
		</div>
		
		<div class="secondary-banner-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--INSIDE CONTAINER -->
</div><!-- HEADER-BANNER -->