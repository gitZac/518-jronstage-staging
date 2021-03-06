<?php 
  /*
    Template Name: Upcoming Shows
  */
?><?php get_header(); ?>
<?php get_template_part('template-parts/secondary-banner'); ?>

<div class="l-wrapper">
  <h2 class="header__page-title"><?php wp_title(''); ?></h2>
</div>

<div class="l-wrapper l-grid-main">
  
    <main class="main" role="main">
        
        <section class="section">
           <div class="text-block">
               <?php the_content(); ?>
           </div>
        </section>
    
        <section class="section">
            <?php get_template_part('template-parts/upcoming-shows'); ?>
        </section>
    
    </main>
  
  <?php get_template_part('template-parts/sidebar-secondary'); ?>

</div>

<?php get_footer(); ?>