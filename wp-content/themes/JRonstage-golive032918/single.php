<?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
	<main class="" role="main">
		
		<?php while (have_posts()) : the_post(); ?>

  <section class="blog-post">
		
		<div class="blog-image">
			<?php the_post_thumbnail(); ?>
		</div>
    
    <div class="blog-content">
      <p class="text-muted">By <?php the_author(); ?> | <?php the_date(); ?></p>
      <h3><a href="<?php echo esc_url(the_permalink() );?>"><?php the_title(); ?></a></h3>
      <?php the_content(); ?>    
    </div>
		
		<p><a href="<?php echo esc_url(get_page_link(13) ) ; ?>">Back to the blog</a></p>
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>
		
  </section>
		
		<?php endwhile; ?>

	</main>	
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
















