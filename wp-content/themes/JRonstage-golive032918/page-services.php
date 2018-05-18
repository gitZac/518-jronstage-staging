<?php 
  /*
    Template Name: Services
  */
?><?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper">
	<main role="main">
	
		<section>
      <?php get_template_part('template-parts/front-page-sections/fp-hire'); ?>			
		</section>
	
	</main>
</div>

<?php get_footer(); ?>