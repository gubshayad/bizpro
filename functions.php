<?php 
function my_theme_name_consolution(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css', array(), '4.1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.0', 'all');
    wp_enqueue_style('owl-carousel-default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css', array(), '1.0.0', 'all');
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), '4.0.0', 'all');
    wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all' );

    wp_enqueue_script( 'migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js' , array('jquery'), '2.1.3', true);
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js' , array('jquery'), '2.1.3', true);

}
add_action('wp_enqueue_scripts', 'my_theme_name_consolution');

?>