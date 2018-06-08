<?php 
  /*
    Template Name: Bio
  */
?><?php get_header(); ?>

<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-wrapper">
	<h2 class="header__page-title"><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
	<main class="main" role="main">
	
	    <section class="section section--inside bio"> 
     
            <?php get_template_part('template-parts/bio');?>
	    </section>
		
		<section class="section section--inside">
			<?php get_template_part('template-parts/roles'); ?>
		</section>
		
		<section class="section section--inside">
			<?php get_template_part('template-parts/resume'); ?>
		</section>
	
	</main>
	
	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>