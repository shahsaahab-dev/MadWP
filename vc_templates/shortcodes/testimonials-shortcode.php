<?php 


// Lastest News
add_shortcode('testimonials','testimonials_func');
function testimonials_func($atts, $content = null){
    extract(shortcode_atts(array(
        'show'		=>	'-1',
        'num'       =>  '-1',
    ), $atts));

    ob_start();
    ?>
     <div class="testimonials owl-carousel">
        <?php
        $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => $num,
        );
        $testimonial = new WP_Query($args);
        if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();
        $format = get_post_format();
            ?>
             <div class="test-box">
                           <ul class="stars">
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star"></i></li>
                           </ul>
                            <div class="content">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                                <div class="author-info">
                                    <h3><?php echo get_post_meta(get_the_ID(),'client_name',true); ?></h3>
                                    <p><?php the_date(); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                
               

    <?php
    return ob_get_clean();
}



// VC Build
//Latest News
if(function_exists('vc_map')){
    vc_map( array(
        "name" => esc_html__("Testimonials", 'moneyadvisor'),
        "base" => "testimonials",
        "class" => "",
        "icon" => "icon-st",
        "category" => 'Moneyadvisor',
        ));
}
?>