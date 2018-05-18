<?php get_header(); ?>
<?php get_template_part('template-parts/main-banner'); ?>

<main role="main">

<section class="l-wrapper-narrow">

	<h2 class="section-title">Now Playing...</h2>	
	<?php get_template_part('template-parts/feature-show'); ?>
	
	<h3 class="section-title">More Upcoming Shows:</h3>	
	<?php get_template_part('template-parts/upcoming-shows'); ?>

</section>
	
<section id="twain" class="feature feature-no-tbpadding text-white" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/white-wash.jpg);">
	<?php get_template_part('template-parts/twain-feature'); ?>
</section>

<section class="">
	<div class="l-wrapper">
		<h2 class="section-title">My Services</h2>
		<?php get_template_part('template-parts/front-page-sections/fp-hire'); ?>
	</div>
</section>

<section class="l-wrapper">
	<h2 class="section-title">Contact J.R.</h2>
	<div class="col1-2">
		<?php get_template_part('template-parts/bio'); ?>
	</div>	
	<div class="col1-2">
		<?php echo do_shortcode( '[contact-form-7 id="97" title="Contact form 1"]' ); ?>	
	</div>
</section>
	
</main>
<?php get_footer(); ?>