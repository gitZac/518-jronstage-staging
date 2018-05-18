<?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper">
	
	<main class="l-primary-w" role="main">
		
		<section>
			<?php //get_template_part('template-parts/bio');?>
		</section>
		
		<section>
			<?php //get_template_part('template-parts/roles'); ?>
		</section>
		
		<section>
			<?php //get_template_part('template-parts/resume'); ?>
		</section>
	
	</main>	
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>