<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moneyadvisor
 */

?>

	  
<div class="footer" style="background-image: url(<?php echo MAD_THEMEROOT_URI . '/'?>images/bg-6.png);">
        <div class="footer-table">
            <div class="footer-tablecell">
                <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-desc">
                        <div class="logo">
                            <img src="<?php echo MAD_THEMEROOT_URI . '/'?>images/logo-white.png" alt="">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since thes, when an unknown printer took a ga.</p>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <ul class="links">
                       <h4>Quick Links</h4>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">The Projects</a></li>
                        <li><a href="#">Shop Online</a></li>
                    </ul>
                </div>
                   <div class="col-lg-2 d-none d-lg-block">
                    <ul class="links">
                       <h4>Our Service</h4>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">The Projects</a></li>
                        <li><a href="#">Shop Online</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="contact-info links">
                       <h4>Contact Us</h4>
                        <li> <i class="fa fa-map-marker"></i> Brooks St. 71, Washington DC, USA </li>
                        <li><i class="fa fa-phone"></i>(01) 321 668 297 </li>
                        <li><i class="fa fa-envelope"></i> info@lawnexpress.com</li>
                    </ul>
                </div>
                
            </div>
        </div>
            </div>
        </div>
    </div>
    
    
          
   
<?php wp_footer(); ?>
</body>

</html>