<?php 
  /*
    Template Name: Twain
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
      <?php echo do_shortcode( '[contact-form-7 id="97" title="Contact form 1"]' ); ?>

    </div>
    
  </section>
		
	</main>	
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>