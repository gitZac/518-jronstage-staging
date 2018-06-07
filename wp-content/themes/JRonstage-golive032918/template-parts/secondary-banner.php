<?php $args = array(
    'post_type' => 'inside_banner',							
    'posts_per_page' => 1,							
    'orderby' => 'title',
    'order' => 'ASC',
); ?>

<div class="banner">
	
	<div class="l-wrapper grid-3fr-1fr">
		
		<?php $banner = new WP_Query($args); while($banner->have_posts()): $banner->the_post(); ?>
		
		<div class="banner__text-container grid2">
		
			<h1 class="banner__header"><?php the_field('banner_header'); ?></h1>
			
			<ul class="banner__list">
			
				<li class="banner__list-item"><span class="banner__bullet"> </span> 
				Actor</li>
				
				<li class="banner__list-item"><span class="banner__bullet"> </span>
				Director</li>
				
				<li class="banner__list-item"><span class="banner__bullet"> </span>
				Coach</li>
				
			</ul>
			
		</div>
		
		<div class="banner__image">
		
			<?php the_post_thumbnail(); ?>
			
		</div>
		
		<?php endwhile; wp_reset_postdata(); ?>
		
    </div> <!--	end wrapper-->
    
</div> <!--	end banner-->