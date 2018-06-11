<?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-wrapper">
	<h2 class="header__page-title"><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
	<main class="main" role="main">
	
		<?php while (have_posts()) : the_post(); ?>

			<section class="section">
			
				<div class="section__image">
					<?php the_post_thumbnail(); ?>
				</div>
				
				<div class="text-block">
                   
                   <div class="text-block__info-bar">
                       
                        <a target="_blank" href="<?php the_field('theater_link'); ?>"><?php the_field('us-theater'); ?></a> | <?php the_field('show_dates'); ?>
                         
                   </div>
                   
                    <?php the_content(); ?>
                    
                    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>

				</div>
				
			</section>
		
		<?php endwhile; ?>

	</main>
		
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

