<?php 
  /*
    Template Name: Stage on Spring
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

    </main>	
    
    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>