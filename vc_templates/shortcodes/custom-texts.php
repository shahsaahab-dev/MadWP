<?php
// Money Advisor Title
add_shortcode( 'sec_title', 'sec_title_func' );
function sec_title_func( $atts ) {
 extract( shortcode_atts( array(
  'title' => 'Title Here',
  'color' => '#333e5e',
  'text_align' => 'center'
 ), $atts ) );
  
 return "<h3 class='section-title' style='color:{$color}; text-align:{$text_align};'>{$title}</h3>";
}

add_action( 'vc_before_init', 'section_title' );
function section_title() {
 vc_map( array(
  "name" => __( "Money Advisor Title", "moneyadvisor_theme" ),
  "base" => "sec_title",
  "class" => "",
  "category" => __( "Money Advisor", "moneyadvisor_theme"),
  "params" => array(
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Section Title", "moneyadvisor_theme" ),
  "param_name" => "title",
  "value" => __( "Default param value", "moneyadvisor_theme" ),
  "description" => __( "Description for foo param.", "moneyadvisor_theme" )
 ),
 array(
  "type" => "colorpicker",
  "class" => "",
  "heading" => __( "Text color", "my-text-domain" ),
  "param_name" => "color",
  "value" => '#333e5e', //Default  color
  "description" => __( "Choose text color", "my-text-domain" )
 )
  )
 ) );
}

// End Money Advisor Title




// Money Advisor Section Text 
add_shortcode( 'sec_text', 'sec_text_func' );
function sec_text_func( $atts ) {
 extract( shortcode_atts( array(
  'text' => 'Enter Text Here',
  'color' => '#666666',
  'text_align' => 'center'
 ), $atts ) );
  
 return "<p class='section-text' style='color:{$color}; text-align:{$text_align};'>{$text}</p>";
}

add_action( 'vc_before_init', 'section_text' );
function section_text() {
 vc_map( array(
  "name" => __( "Money Advisor Text", "moneyadvisor_theme" ),
  "base" => "sec_text",
  "class" => "",
  "category" => __( "Money Advisor", "moneyadvisor_theme"),
  "params" => array(
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Section Text", "moneyadvisor_theme" ),
  "param_name" => "text",
  "value" => __( "Default param value", "moneyadvisor_theme" ),
  "description" => __( "Description for Text param.", "moneyadvisor_theme" )
 ),
 array(
  "type" => "colorpicker",
  "class" => "",
  "heading" => __( "Text color", "moneyadvisor_theme" ),
  "param_name" => "color",
  "value" => '#666666', //Default  color
  "description" => __( "Choose text color", "moneyadvisor_theme" )
 )
  )
 ) );
}

// End Money Advisor Section Text

add_shortcode( 'sec_btn', 'sec_btn_func' );
function sec_btn_func( $atts ) {
 extract( shortcode_atts( array(
  'btn_text' => 'Get Debt Help!',
  'btn_url' => 'http://www.google.com'
 ), $atts ) );
 return "<button href='{$btn_url}' class='btn btn-primary btn-main-section'>{$btn_text}</button>";
}


add_action( 'vc_before_init', 'section_btn' );
function section_btn() {
 vc_map( array(
  "name" => __( "Money Advisor Button", "moneyadvisor_theme" ),
  "base" => "sec_btn",
  "class" => "",
  "category" => __( "Money Advisor", "moneyadvisor_theme"),
  "params" => array(
 array(
  "type" => "textfield",
  "holder" => "div",
  "class" => "",
  "heading" => __( "Button", "moneyadvisor_theme" ),
  "param_name" => "btn_text",
  "value" => __( "Default param value", "moneyadvisor_theme" ),
  "description" => __( "Description for Text param.", "moneyadvisor_theme" )
 ),
 array(
  "type" => "textfield",
  "class" => "",
  "heading" => __( "Link", "moneyadvisor_theme" ),
  "param_name" => "btn_url",
  "value" => '#666666', //Default  color
  "description" => __( "Choose text color", "moneyadvisor_theme" )
 )
  )
 ) );
}
// Money Advisor Button 

?>