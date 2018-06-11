<?php 
  /*
    Template Name: Twain
  */
?><?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-wrapper">
	<h2 class="header__page-title"><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
	
    <main class="main" role="main">

      <section class="section">

        <div class="section__image">
            <?php the_post_thumbnail(); ?>
        </div>
           
        <div class="text-block">
            <?php the_content(); ?>
        </div>

      </section>
      
      <section class="section">
       
        <h3 class="section__title--inner">Book a Showing!</h3>    
  
        <?php echo do_shortcode( '[contact-form-7 id="97" title="Contact form 1"]' ); ?>
        
      </section>

    </main>	
    
    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>