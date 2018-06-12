<?php get_header(); ?>
<?php get_template_part('template-parts/main-banner'); ?>

<main role="main">

	<section class="section section--front">
        <div class="l-wrapper l-wrapper--narrow">
            <h2 class="section__title">Now Playing...</h2>

            <?php get_template_part('template-parts/feature-show'); ?>

            <h3 class="section__title--secondary">More Upcoming Shows</h3>	
            <?php get_template_part('template-parts/upcoming-shows'); ?>     
        </div>



	</section>

	<section class="section section--front">
		<div class="l-wrapper">
			<h2 class="section__title">My Services</h2>
			<?php get_template_part('template-parts/services'); ?>
		</div>
	</section>
	
    <section id="twain" class="section section--front" style="background-image:linear-gradient(to right bottom, rgba(235,235,235,0.8), rgba(199,199,199,0.8)), url(<?php echo get_stylesheet_directory_uri(); ?>/img/white-wash.jpg);">
	
        <div class="l-wrapper">

		    <?php get_template_part('template-parts/twain-feature'); ?>
		
        </div>
		
	</section>

	<section class="section section--front l-wrapper">
       
        <div class="l-wrapper">

            <h2 class="section__title">Contact J.R.</h2>

            <div class="row">

                <div class="col-1-of-2">
                    <?php get_template_part('template-parts/bio'); ?>
                </div>	

                <div class="col-1-of-2">
                    <?php echo do_shortcode( '[contact-form-7 id="97" title="Contact form 1"]' ); ?>	
                </div>   

            </div>
            
        </div>
		
	</section>
	
</main>
<?php get_footer(); ?>