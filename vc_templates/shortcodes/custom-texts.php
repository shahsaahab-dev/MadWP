<?php

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
  "value" => '#FF0000', //Default Red color
  "description" => __( "Choose text color", "my-text-domain" )
 )
  )
 ) );
}
?>