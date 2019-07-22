<?php 
//Enqueue Scripts 
function custom_style_scripts(){
    /*
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    */
    wp_enqueue_style('bootstrap',MAD_THEMEROOT_URI . '/css/bootstrap.min.css',array(),'1.0','all');
    wp_enqueue_style('owlcarousel',MAD_THEMEROOT_URI . '/css/owl.carousel.min.css',array(),'1.0','all');
    wp_enqueue_style('owl-theme',MAD_THEMEROOT_URI . '/css/owl.theme.default.min.css',array(),'1.0','all');
    wp_enqueue_style('font-awesome',MAD_THEMEROOT_URI . '/css/font-awesome.min.css',array(),'1.0','all');
    wp_enqueue_style('style',MAD_THEMEROOT_URI . '/css/style.css',array(),'1.0','all');


    /* 
    
        <!-- Scripts Attached -->
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    */
    // Scripts 
    wp_enqueue_script('owl-carousel-js',MAD_THEMEROOT_URI . '/js/owl.carousel.min.js',array('jquery'),'1.0',true);
    wp_enqueue_script('popper',MAD_THEMEROOT_URI . '/js/popper.min.js',array('jquery'),'1.0',true);
    wp_enqueue_script('bootstrap-js',MAD_THEMEROOT_URI . '/js/bootstrap',array('jquery'),'1.0',true);
    wp_enqueue_script('main',MAD_THEMEROOT_URI . '/js/main.js',array('jquery'),'1.0',true);

}
add_action('wp_enqueue_scripts','custom_style_scripts');
?>