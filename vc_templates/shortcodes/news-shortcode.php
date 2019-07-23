<?php 


// Lastest News
add_shortcode('news','news_func');
function news_func($atts, $content = null){
    extract(shortcode_atts(array(
        'show'		=>	'-1',
        'num'       =>  '-1',
    ), $atts));

    ob_start();
    ?>
        <?php
        $args = array(
            'post_type' => 'latest_news',
            'posts_per_page' => $num,
        );
        $testimonial = new WP_Query($args);
        if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();
        $format = get_post_format();
            ?>
        
            <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="news-card">
                <div class="news-img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);"></div>
                <div class="content">
                    <h3><?php echo the_title(); ?></h3>
                    <p><?php echo the_excerpt(); ?></p>
                    <a href="<?php echo the_permalink(); ?>">Read More</a>
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
        "base" => "news",
        "class" => "",
        "icon" => "icon-st",
        "category" => 'Moneyadvisor',
        ));
}
?>