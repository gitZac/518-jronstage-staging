	<?php $args = array(
		'post_type' => 'twain_feature',							
		'posts_per_page' => 1,							
		'orderby' => 'title',
		'order' => 'ASC',
	); ?>

	<?php $twain_feature = new WP_Query($args); while($twain_feature->have_posts()): $twain_feature->the_post(); ?>	

        <div class="row">
           
            <div class="col-1-of-2">
               
                <div class="feature-image">
                    <?php the_post_thumbnail(); ?>
                </div>              

            </div>
            
            <div class="col-1-of-2">
   
                <div class="text-block text-block--promo u-t-margin-50">
                   
                    <h2 class="text-block__title--promo"><?php the_title(); ?></h2>
                    <h3 class="text-block__tagline--promo"><?php the_field('tagline'); ?></h3>
                    
                    <p class="text-block__text">
                        <?php the_field('showing'); ?>
                    </p>
                    <p class="text-block__text">
                        <?php the_field('book'); ?>
                        <br>
                        <a class="btn--text u-tb-margin-20" href="<?php echo get_page_link(122);  ?>">Find out how</a>
                    </p>
	            </div>   
            </div>
            
        </div> <!--END ROW-->

	<?php endwhile; wp_reset_postdata(); ?>