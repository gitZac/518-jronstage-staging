<?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
	<main class="" role="main">
		<?php while (have_posts()) : the_post(); ?>

			<section class="">
				<div class="blog-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php the_content(); ?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>

			</section>
			
			<section>
				<h3>Contact J.R.</h3>
				<?php echo do_shortcode( '[contact-form-7 id="97" title="Contact form 1"]' ); ?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>
			</section>
		
		<?php endwhile; ?>

	</main>	
  <?php get_template_part('template-parts/sidebar-no-services'); ?>

</div>
<?php get_footer(); ?>

