<?php
/**
 * ============== Template Name: Home Page
 *
 * @package oke
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<!--OVERVIEW-->

<div id="explore" class="container cols-offset3-18 boxed-content mt5">
    <?php if( have_rows('overview_block') ): 
    while( have_rows('overview_block') ): the_row(); ?>
    <div class="col content">
        <h2 class="heading heading__lg">
            <?php the_sub_field('heading');?>
        </h2>
    </div>
</div>
<div class="container cols-offset3-18 boxed-content last mb5">
    <div class="col">
        <div class="container cols-16-8">
            <div class="col content boxed-content--right-border">
               <p class="brand-font"><?php the_sub_field('copy');?></p>
               <a href="<?php the_sub_field('button_target');?>" class="button button__standard button__standard--fixed-width">
                   <?php the_sub_field('button_text');?>
               </a>
            </div>
            <div class="col content">
               VIEW ON A MAP
            </div>
        </div>
        <div class="container cols-8 leader">
            <?php if( have_rows('leader') ): 
            while( have_rows('leader') ): the_row(); 
            $leaderImage = get_sub_field('image');?>        
            <div class="col boxed-content--right-border">
                <div class="leader__item">
                    <div class="image" style="background-image: url(<?php echo $leaderImage['url']; ?>);"></div>
                    <div class="content">
                         <h3 class="heading heading__md">
                           <sup>The</sup>
                           <?php the_sub_field('heading');?>
                        </h3>
                       <p><?php the_sub_field('copy');?></p>
                       <a href="<?php the_sub_field('button_target');?>" class="button button__standard">
                           <?php the_sub_field('button_text');?>
                       </a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif;?>    
        </div>        
    </div>
</div>
<?php endwhile; endif;?>

<!--SAFARI OPTIONS-->

<div class="container cols-offset3-18 boxed-content last mb5 mt5">
    <?php if( have_rows('safari_options_block') ): 
    while( have_rows('safari_options_block') ): the_row(); ?>
    <div class="col content">
        <h2 class="heading heading__lg">
            <?php the_sub_field('heading');?>
        </h2>
    </div>
    <div class="col">
        <div class="container cols-16-8">
            <div class="col content">
                <p class="brand-font"><?php the_sub_field('copy');?></p>
            </div>       
        </div>
    </div> 
    <div class="col">
        <div class="tabs-wrapper">
            <div class="tabs-header">
            	<ul>
                	<?php if( have_rows('slides') ): 
                    	$row = 1;
                    	while( have_rows('slides') ): the_row(); ?>
            		<li class="tab-trigger <?php if($row == 1) {echo 'active';}?>" data="0">[ i ] <?php the_sub_field('heading');?></li>
                    <?php $row++; endwhile; endif;?>
            	</ul>
            </div><!--tabs header-->
            <div class="tabs-body">
                <div class="owl-carousel tabs">
                    <?php if( have_rows('slides') ): while( have_rows('slides') ): the_row();
                        $optionsImage = get_sub_field('image'); ?>
                        <div class="item">
                            <div class="container cols-16-8">
                                <div class="col content">
                                    <h2 class="heading heading__md">
                                        <?php the_sub_field('heading');?>
                                    </h2>
                                    <p class="mt1"><?php the_sub_field('copy');?></p>
                                    <a href="<?php the_sub_field('button_target');?>" class="button button__large button__large--fixed-width">
                                        <span>Read more about</span>
                                        <?php the_sub_field('button_text');?>
                                    </a>
                                </div><!--content-->
                                <div class="col">
                                    <div class="image" style="background-image: url(<?php echo $optionsImage['url']; ?>);"></div>
                                </div><!--image-->
                            </div>
                            <div class="container">
                                <div class="col content border-top">
                                    <h3 class="heading heading__sm heading__emphasis">Featured <?php the_sub_field('heading');?> safaris:</h3>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif;?>        
                </div>
            </div><!--tabs body-->
        </div><!--tabs-wrapper--> 
    </div>
    <?php endwhile; endif;?><!--safari options block-->
</div><!--safari options block-->


<?php if( have_rows('fullwidth_info_block') ): 
while( have_rows('fullwidth_info_block') ): the_row(); 
$fullwidthImage = get_sub_field('background_image');?>    
   <div class="fullwidth-info-block" style="background-image: url(<?php echo $fullwidthImage['url']; ?>);"> 
    <div class="container cols-offset3-18 last mb5 pt5">
    <div class="col">
        <div class="container boxed-content last cols-16-8">
            <div class="col info-panel">
                <?php if( have_rows('info_panel') ): 
                while( have_rows('info_panel') ): the_row(); ?>
                    <div class="heading-wrapper">
                        <h3 class="heading heading__md">
                            <?php the_sub_field('title');?>
                        </h3>  
                    </div>   
                    <div class="content">           
                        <p><?php the_sub_field('copy');?></p>
                        <a href="<?php the_sub_field('button_target');?>" class="button button__standard button__standard--fixed-width">
                           <?php the_sub_field('button_text');?>
                        </a>               
                    </div> 
                <?php endwhile; endif;?>
            </div>
                   
        </div>
    </div>
    </div>
    
</div><!--fullwidth-info-block-->
<?php endwhile; endif;?><!--fullwidth-info-block-->    

<!--Accommodation-->

<div class="container cols-offset3-18 boxed-content mt5">
    <?php if( have_rows('accommodation_block') ): 
    while( have_rows('accommodation_block') ): the_row(); ?>
    <div class="col content">
        <h2 class="heading heading__lg">
            <?php the_sub_field('heading');?>
        </h2>
    </div>
</div>
<div class="container cols-offset3-18 boxed-content last mb5">
    <div class="col">
        <div class="container cols-16-8">
            <div class="col content last">
               <p class="brand-font"><?php the_sub_field('copy');?></p>
            </div>
            <div class="col last"></div>
        </div>
        <div class="container cols-8 leader">
            <?php if( have_rows('leader') ): 
            while( have_rows('leader') ): the_row(); 
            $leaderImage = get_sub_field('image');?>        
            <div class="col boxed-content--right-border last">
                <div class="leader__item">
                    <div class="image" style="background-image: url(<?php echo $leaderImage['url']; ?>);"></div>
                    <div class="content">
                       <h3 class="heading heading__md">
                           <?php the_sub_field('heading');?>
                           <sup><span>Properties</span></sup>
                        </h3>
                       <p><?php the_sub_field('copy');?></p>
                       <a href="<?php the_sub_field('button_target');?>" class="button button__standard">
                           <?php the_sub_field('button_text');?>
                       </a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif;?>    
        </div>
        <div class="col content align-center text-center">    
            <a href="<?php the_sub_field('button_target');?>" class="button button__large button__large--fixed-width centered">
                <span>View all</span>
                <?php the_sub_field('button_text');?>
            </a>  
        </div>
    </div>
</div>
<?php endwhile; endif;?>

<?php if( have_rows('cta') ): 
while( have_rows('cta') ): the_row(); 
$ctaImage = get_sub_field('background_image');?>   
<div class="cta cta--fullwidth" style="background-image: url(<?php echo $ctaImage['url']; ?>);">
    <div class="container cols-offset3-18 last">
        <div class="col">
            <div class="container boxed-content boxed-content--no-fill last cols-16-8">
                <div class="col content quote mt8 mb5">
                    <h3 class="heading heading__lg heading__light">
                        <?php the_sub_field('quote');?>
                    </h3>
                    <p><?php the_sub_field('quote_attrib');?></p>
                </div> 
            </div>
            <div class="container cols-16-8">
                <div class="col quote__button mb8">
                    <a href="<?php the_sub_field('button_target');?>"><?php the_sub_field('button_text');?></a> 
                </div>
            </div>
        </div>
    </div>
</div><!--cta fullwidth-->
 <?php endwhile; endif;?>   

<?php get_footer();?>