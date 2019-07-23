<?php 


add_shortcode('servicebox', 'servicebox_func');
function servicebox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'photo'       =>  '',
        'title'       =>  '',
        'link'        =>  '',
        'linkimg'     =>  '',
        'linktitle'   =>  '',
        'iclass'      =>  '',
    ), $atts));
    $img    = wp_get_attachment_image_url($photo,'full');
    $url    = vc_build_link( $link );
    ob_start(); ?>


    <!-- Actual Element Here -->
        <div class="help-you-box">
        <div class="image-holder" style="background-image:url(<?php echo $img ?>);"></div>
        <div class="box-content">
            <h3>PayDay Loans</h3>
            <hr>
            <p>Mr & Mrs Swan*</p>
            <ul>
                <li>-£6,000 Egg Card </li>
                <li>-£2,000 Halifax Card </li>
                <li>-£4500 M&S Store Card </li>

            </ul>
            
        </div>
        <button class="read-more">
                Read More <i class="fa fa-long-arrow-right"></i>
            </button>
        </div>

    <!-- Actual Element End Here  -->
    <?php
    return ob_get_clean();
}

// Service Box
if(function_exists('vc_map')){
    vc_map( array(
        "name" => esc_html__("MoneyAdviser Service Box", 'moneyadvisor'),
        "base" => "servicebox",
        "class" => "",
        "category" => 'Moneyadvisor',
        "params" => array(
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("Image", 'moneyadvisor'),
                "param_name" => "photo",
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("Title", 'moneyadvisor'),
                "param_name" => "title",
            ),
            array(
                "type" => "textarea_html",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("Content", 'moneyadvisor'),
                "param_name" => "content",
                "value" => "",
            ),
            array(
                'type' => 'vc_link',
                "heading" => esc_html__("Button", 'moneyadvisor'),
                "param_name" => "link",
            ),
            array(
                "type" => "checkbox",
                "holder" => "div",
                "edit_field_class" => "vc_col-sm-6",
                "class" => "",
                "heading" => esc_html__("Link in Image", 'moneyadvisor'),
                "param_name" => "linkimg",
            ),
            array(
                "type" => "checkbox",
                "holder" => "div",
                "edit_field_class" => "vc_col-sm-6",
                "class" => "",
                "heading" => esc_html__("Link in Title", 'moneyadvisor'),
                "param_name" => "linktitle",
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("Extra Class", 'moneyadvisor'),
                "param_name" => "iclass",
            ),
        )));
}


?>