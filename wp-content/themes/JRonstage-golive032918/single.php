<?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-page-title l-wrapper">
	<h2><?php wp_title(''); ?></h2>
</div>

<div class="l-grid-main l-wrapper">
	
	<main class="main" role="main">
		<?php while (have_posts()) : the_post(); ?>

			<section class="section">
				
				<div class="blog-post">
							
					<div class="blog-image blog-post__image">
						<?php the_post_thumbnail(); ?>
					</div>
					
					<div class="blog-content blog-post__content">
                        <p class="text-muted blog-post__info">By <?php the_author(); ?> | <?php the_date(); ?></p>
                        <a href="<?php echo esc_url(the_permalink() );?>"><h3 class="blog-post__title"><?php the_title(); ?></h3></a>
                        <?php the_content(); ?>    
					</div>
						
					<a class="blog-post__link" href="<?php echo esc_url(get_page_link(13) ) ; ?>">Back to the blog</a>
                   <br>
                    <a class="blog-post__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    
			    </div><!-- END blog-post	-->
								
			</section>
			
		<?php endwhile; ?>

	</main>

	
	<?php get_sidebar(); ?>

</div><!-- END GRID-->

<?php get_footer(); ?>