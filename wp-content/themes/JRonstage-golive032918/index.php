<?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
	<main class="" role="main">
		
		<section>
			<?php get_template_part('template-parts/custom-loop'); ?>
		</section>
			
	</main>	
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>






