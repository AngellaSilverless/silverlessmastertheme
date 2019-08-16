<?php
/**
 * ============== Template Name: Home Page
 *
 * @package oke
 */
get_header();?>

<!-- ******************* Hero Content ******************* -->

<?php get_template_part("template-parts/hero"); ?>

<!-- ******************* Hero Content END ******************* -->

<div class="boxed-content">
    <?php if( have_rows('overview_block') ): 
    while( have_rows('overview_block') ): the_row(); ?>
    
    <div class="container cols-offset3-18">
        <div class="col">
            <h2 class="heading heading__lg"><?php the_sub_field('heading');?>
        </div>
    </div>

    <div class="container cols-offset3-12-6">
        <div class="col">
            <?php the_sub_field('copy');?>
            <?php the_sub_field('button_text');?>
        </div>
        <div class="col">
            ICON
        </div>
    </div>

<?php endwhile; endif;?>
</div>

<?php get_footer();?>