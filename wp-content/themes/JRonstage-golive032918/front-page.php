<?php get_header(); ?>
<?php get_template_part('template-parts/main-banner'); ?>

<main role="main">

	<section class="section section--front l-wrapper l-wrapper--narrow">

		<h2 class="section__title">Now Playing...</h2>
			
		<?php get_template_part('template-parts/feature-show'); ?>
		
		<h3 class="section__title--secondary">More Upcoming Shows</h3>	
		<?php get_template_part('template-parts/upcoming-shows'); ?>

	</section>

	<section id="twain" class="section section--front section--feature section--feature-no-tb-padding" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/white-wash.jpg);">
		<?php get_template_part('template-parts/twain-feature'); ?>
	</section>

	<section class="section section--front">
	
		<div class="l-wrapper">
			<h2 class="section-title">My Services</h2>
			<?php get_template_part('template-parts/front-page-sections/fp-hire'); ?>
		</div>
	</section>

	<section class="section section--front l-wrapper">
		
		<h2 class="section-title">Contact J.R.</h2>
		
		<div class="col1-2">
			<?php get_template_part('template-parts/bio'); ?>
		</div>	
		
		<div class="col1-2">
			<?php echo do_shortcode( '[contact-form-7 id="97" title="Contact form 1"]' ); ?>	
		</div>

	</section>
	
    <section class="grid-test">

        <div class="row">
            <div class="col1-of-2 bg-green padding100">
                Column One of Two
            </div>
            <div class="col1-of-2 bg-green padding100">
                Column One of Two
            </div>
        </div>

        <div class="row">
            <div class="col1-of-3 bg-green padding100">
                Column One of three
            </div>
            <div class="col1-of-3 bg-green padding100">
                Column One of three
            </div>

            <div class="col1-of-3 bg-green padding100">
                Column One of three
            </div>
        </div>

        <div class="row">
            <div class="col2-of-3 bg-green padding100">
                Column two of three
            </div>

            <div class="col1-of-3 bg-green padding100">
                Column One of three
            </div>
        </div>

        <div class="row">
            <div class="col1-of-4 bg-green padding100">
                Column One of four
            </div>

            <div class="col1-of-4 bg-green padding100">
                Column One of four
            </div>
            <div class="col2-of-4 bg-green padding100">
                Column two of four
            </div>
        </div>

        <div class="row">
            <div class="col1-of-4 bg-green padding100">
                Column One of four
            </div>

            <div class="col3-of-4 bg-green padding100">
                Column Three of four
            </div>
        </div>
    </section>
	
</main>
<?php get_footer(); ?>