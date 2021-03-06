<div class="hero">

	<div class="l-wrapper grid2">
		
		<?php $args = array(
			'post_type' => 'front_page_banner',							
			'posts_per_page' => 1,							
			'orderby' => 'title',
			'order' => 'ASC',
		); ?>
		
		<?php $banner = new WP_Query($args); while($banner->have_posts()): $banner->the_post(); ?>
		
		<div class="hero__content">
			<h1 class="header__main"><?php the_title(); ?></h1>
			
			<ul class="hero__list">
				<li class="hero__list-item"><span class="hero__list-item-bullet"> Actor</span></li>
				<li class="hero__list-item"><span class="hero__list-item-bullet"> Director</span></li>
				<li class="hero__list-item"><span class="hero__list-item-bullet"> Coach</span></li>
			</ul>
			
			<p class="hero__description">Acting, directing and coaching services in Louisville, Kentucky and Southern Indiana.</p>
			
			<div class="hero__btn-container">
			    <a href="<?php echo get_page_link(7); ?>" class="btn btn--secondary btn--master">READ MORE</a>
			</div>
			
		</div>
		
		<div class="hero__image">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--INSIDE CONTAINER -->
	
</div><!-- HEADER-BANNER -->