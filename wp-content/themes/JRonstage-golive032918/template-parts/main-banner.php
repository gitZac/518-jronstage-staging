<div class="main-banner bg-primary">
	<div class="l-wrapper l-main-banner-grid">
		
		<?php $args = array(
			'post_type' => 'front_page_banner',							
			'posts_per_page' => 1,							
			'orderby' => 'title',
			'order' => 'ASC',
		); ?>
		
		<?php $banner = new WP_Query($args); while($banner->have_posts()): $banner->the_post(); ?>
		
		<div class="main-banner__content">
			<h1 class="main-banner__title"><?php the_title(); ?></h1>
			
			<ul class="main-banner__list">
				<li class="main-banner__list-item"><span class="main-banner__list-item-bullet"> Actor</span></li>
				<li class="main-banner__list-item"><span class="main-banner__list-item-bullet"> Director</span></li>
				<li class="main-banner__list-item"><span class="main-banner__list-item-bullet"> Coach</span></li>
			</ul>
			
			<p class="main-banner__description">Louisville Ky., Southern Indiana-based Actor, Director and coach.</p>

			<a href="<?php echo get_page_link(7); ?>" class="butt butt-secondary">READ MORE</a>
		</div>
		
		<div class="main-banner__image">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--INSIDE CONTAINER -->
</div><!-- HEADER-BANNER -->