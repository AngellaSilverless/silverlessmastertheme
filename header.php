<?php
/**
 * Header
 *
 * @package oke
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    
<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Okavango Delta Explorations</title>

<link rel="stylesheet" href="https://use.typekit.net/ypi6ffg.css"><!--TYPEKIT INJECT-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css"/>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.0/mapbox-gl-geocoder.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

        <header>
        
            <div class="container cols-3-12-6-3">
            
                <div class="col">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <?php get_template_part('inc/img/ode', 'logo-top');?>
                            <?php get_template_part('inc/img/ode', 'logo-bottom');?>
                        </a>
                    </div>
                </div>    
                
                <div class="col">
                    <nav id="nav">
                        <?php
                            wp_nav_menu(array(
                            'theme_location'  => 'secondary-menu',
                            'container_class' => 'secondaryMenu'
                            ));
                            
                            wp_nav_menu(array(
                            'theme_location'  => 'main-menu',
                            'container_class' => 'mainMenu'
                            ));
                        ?>
                    </nav>
                </div>
                
                 <div class="col">
                    <div class="contact">
                        <?php if( have_rows('contact_info', 'options') ): 
                            while( have_rows('contact_info', 'options') ): the_row(); ?>
                         <a href="mailto:<?php the_sub_field("email"); ?>"><?php the_sub_field("email"); ?></a>
                         <a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
                         <?php endwhile; endif;?>
                    </div> 
                 </div>
                
                <div class="col">
                    <div class="search">
                       <i class="fas fa-search"></i> 
                    </div>
                </div>
                    
            </div>
            
        </header>
	
		<main><!--closes in footer.php-->
	