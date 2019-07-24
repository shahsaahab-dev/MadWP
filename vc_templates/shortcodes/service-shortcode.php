<?php 


// Lastest News
add_shortcode('services','services_func');
function services_func($atts, $content = null){
    extract(shortcode_atts(array(
        'show'		=>	'-1',
        'num'       =>  '-1',
    ), $atts));

    ob_start();
    ?>
    <div class="col-lg-11 mx-auto">
     <div class="card-owl owl-carousel">
        <?php
        $args = array(
            'post_type' => 'service',
            'posts_per_page' => $num,
        );
        $service = new WP_Query($args);
        if($service->have_posts()) : while($service->have_posts()) : $service->the_post();
        $format = get_post_format();
            ?>

        <div class="help-you-box">
            <div class="image-holder" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);"></div>
            <div class="box-content">
                <h3><?php the_title(); ?></h3>
                <hr>
                <p><?php echo get_post_meta(get_the_ID(),'subtitle_service',true); ?></p>
                <ul>
                    <?php echo the_content(); ?>
                </ul>
                
            </div>
            <button class="read-more" href="<?php the_permalink(); ?>">
                    Read More <i class="fa fa-long-arrow-right"></i>
                </button>
        </div>
             
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                
    </div>
    </div>

    <?php
    return ob_get_clean();
}



// VC Build
//Latest News
if(function_exists('vc_map')){
    vc_map( array(
        "name" => esc_html__("Services", 'moneyadvisor'),
        "base" => "services",
        "class" => "",
        "icon" => "icon-st",
        "category" => 'Moneyadvisor',
        ));
}
?>