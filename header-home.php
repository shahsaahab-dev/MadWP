<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moneyadvisor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Money Advisor</title>

    <!-- Linking Stylesheets -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-image: url(<?php echo MAD_THEMEROOT_URI . '/'?>images/main-bg.png);">
    <!-- Navbar Area -->
    <div class="header-section section header-sticky header-transparent">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-auto mr-auto">
                        <div class="header-logo">
                            <a href="<?php echo esc_url(bloginfo('url')); ?>"><img src="<?php echo MAD_THEMEROOT_URI . '/'?>images/logo.png" alt="moneyadvisor"></a>
                        </div>
                    </div><!-- Header Logo End -->

                    <!-- Main Menu One Start -->
                    <div class="col-auto d-none d-lg-block position-static">
<div class="main-menu">
                                <!-- <ul>
                                    <li class="menu-item-has-children"><a href="index.html">Debt Plans</a>
                                        
                                    </li>
                                    <li class="menu-item-has-children"><a href="about-us.html">News</a>
                                        
                                    </li>
                                    <li class="menu-item-has-children"><a href="blog-right-sidebar.html">Contact</a>
                                        
                                    </li>
                                </ul> -->
                                <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'container' => 'nav'
                                ));
                                ?>
                    </div><!-- Main Menu One End -->
                    </div><!-- Main Menu One End -->

                    <!-- User & Cart & Mobile Menu Button Start -->
                    <div class="col-auto d-flex flex-wrap align-items-center">
                        <div class="header-action">
                            
                            <button class="mobile-menu-toggle d-lg-none"><i></i></button>
                        </div>
                    </div><!-- User & Cart & Mobile Menu Button End -->

                </div>
            </div>
        </div><!-- Header Section End -->

        <!--Offcanvas Mobile Menu Section Start-->
        <div class="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger"><i class="icofont-close-line"></i></a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <nav class="offcanvas-navigation">
                    <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => 'nav'
                    ));
                    ?>
                    </nav>
                </div>
            </div>

        </div>
        <!--Offcanvas Mobile Menu Section End-->