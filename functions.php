<?php

function my_enqueue_styles(){
  wp_enqueue_style('ress','//unpkg.com/ress@4.0.0/dist/ress.min.css',array(),false,'all');
  wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
  wp_enqueue_style('style',get_stylesheet_uri(),array('ress'),false,'all');
  wp_enqueue_style('slick',get_stylesheet_directory_uri().'/js/slick.css',array(),false,'all');
  wp_deregister_script('jquery');
  wp_enqueue_script('slick.min',get_stylesheet_directory_uri().'/js/slick.min.js',array('jquery'),'1.8.1',true);
  wp_enqueue_script('inview.min',get_template_directory_uri().'/js/jquery.inview.min.js',array('jquery'),'1.8.1',true);
  wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',"","20211022",false);
  wp_enqueue_script('script-name',get_template_directory_uri().'/js/main.js',array(),'');

}

add_action('wp_enqueue_scripts','my_enqueue_styles');

add_theme_support('post-thumbnails');
