<?php
// Money Advisor Title
add_shortcode( 'sec_title', 'sec_title_func' );
function sec_title_func( $atts ) {
 extract( shortcode_atts( array(
  'title' => 'Title Here',
  'color' => '#333e5e'
 ), $atts ) );
  
 return "<h3 class='section-title' style='color:{$color};'>{$title}</h3>";
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
  'text' => 'Text Here',
  'color' => '#666666'
 ), $atts ) );
  
 return "<p class='section-text' style='color:{$color};'>{$text}</p>";
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
  "param_name" => "title",
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
?>