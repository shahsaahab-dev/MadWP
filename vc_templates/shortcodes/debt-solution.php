<?php 


// Lastest News
add_shortcode('debt_sols','debt_sols_func');
function debt_sols_func($atts, $content = null){
    extract(shortcode_atts(array(
        'show'		=>	'3',
        'num'       =>  '8',
        'exc'	    =>	'16',
    ), $atts));

    ob_start();
    ?>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'debts',
            'posts_per_page' => $num,
        );
        $debt = new WP_Query($args);
        if($debt->have_posts()) : while($debt->have_posts()) : $debt->the_post();
            $format = get_post_format();
            ?>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="debt-card">
                 <div class="debt-img" style="background-image:url(<?php the_post_thumbnail_url('full');?>);"></div>
                 <div class="content">
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            
        </div>
        
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>

    <?php
    return ob_get_clean();
}




// VC Build
//Latest News
if(function_exists('vc_map')){
    vc_map( array(
        "name" => esc_html__("Debt Solutions", 'moneyadvisor'),
        "base" => "debt_sols",
        "class" => "",
        "icon" => "icon-st",
        "category" => 'Moneyadvisor',
        ));
}
?>