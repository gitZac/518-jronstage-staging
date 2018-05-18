<?php 
  /*
    Template Name: Stage on Spring
  */
?><?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
	<main class="" role="main">
		
  <section class="blog-post">
		
		<div class="blog-image">
			<?php the_post_thumbnail(); ?>
		</div>
    <div class="blog-content">
      <?php the_content(); ?>
    </div>
    
  </section>
		
	</main>	
	<?php get_template_part('/template-parts/sidebar-secondary'); ?>

</div>
<?php get_footer(); ?>