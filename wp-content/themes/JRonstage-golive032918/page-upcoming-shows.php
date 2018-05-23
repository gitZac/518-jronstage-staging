<?php 
  /*
    Template Name: Upcoming Shows
  */
?><?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-wrapper l-page-title">
  <h2><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
  
  <main class="" role="main">
    
    <section>    

        <?php get_template_part('template-parts/upcoming-shows'); ?>
    </section>
    
    </main>
  
  <?php get_template_part('template-parts/sidebar-secondary'); ?>

</div>

<?php get_footer(); ?>