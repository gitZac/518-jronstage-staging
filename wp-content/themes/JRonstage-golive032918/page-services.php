<?php 
  /*
    Template Name: Services
  */
?><?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-wrapper">
	<h2 class="header__page-title"><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper">

	<main role="main">
	
        <section class="section">
            <div class="text-block text-block--full-width">
                <?php the_content(); ?>
            </div>
        </section>

        <section class="section">
          <?php get_template_part('template-parts/front-page-sections/fp-hire'); ?>			
        </section>
	
	</main>
</div>

<?php get_footer(); ?>