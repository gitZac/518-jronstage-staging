<?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-wrapper">
	<h2 class="header__page-title"><?php wp_title(''); ?></h2>
</div>

<div class="l-grid-main l-wrapper">
	
	<main class="main" role="main">
		<?php while (have_posts()) : the_post(); ?>
            
            <section class="section">
			
				<div class="section__image">
					<?php the_post_thumbnail(); ?>
				</div>
				
				<div class="text-block">
                    <p class="text-block__info-bar">By <?php the_author(); ?> | <?php the_date(); ?></p>

                    <?php the_content(); ?>
                    
					<a class="" href="<?php echo esc_url(get_page_link(13) ) ; ?>">Back to the blog</a>
                        <br>
                        <br>
                    <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>

				</div>
				
			</section>
			
		<?php endwhile; ?>

	</main>

	
	<?php get_sidebar(); ?>

</div><!-- END GRID-->

<?php get_footer(); ?>