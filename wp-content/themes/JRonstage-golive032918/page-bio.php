<?php 
  /*
    Template Name: Bio
  */
?><?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
	<main class="l-primary-w" role="main">
		
		<?php get_template_part('template-parts/bio');?>

		<section>
			<?php get_template_part('template-parts/roles'); ?>
		</section>
		
		<section>
			<?php get_template_part('template-parts/resume'); ?>
		</section>
	
	</main>
	
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>