<div class="main-banner bg-primary">
	<div class="l-wrapper l-main-banner-grid">
		
		<?php $args = array(
			'post_type' => 'front_page_banner',							
			'posts_per_page' => 1,							
			'orderby' => 'title',
			'order' => 'ASC',
		); ?>
		
		<?php $banner = new WP_Query($args); while($banner->have_posts()): $banner->the_post(); ?>
		
		<div class="main-banner-content">
			<h1 class="main-banner-title"><?php the_title(); ?></h1>
			
			<ul class="main-banner-list">
				<li><span> Actor</span></li>
				<li><span> Director</span></li>
				<li><span> Coach</span></li>
			</ul>
			
			<p class="">Louisville Ky., Southern Indiana-based Actor, Director and coach.</p>
			<a href="<?php echo get_page_link(7); ?>" class="butt butt-secondary">READ MORE</a>
		</div>
		
		<div class="main-banner-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--INSIDE CONTAINER -->
</div><!-- HEADER-BANNER -->