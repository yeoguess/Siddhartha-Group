<?php

function siddhartha_group_enqueue() {
    wp_register_style ('siddhartha_group_bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style ('siddhartha_group_stylesheet' , get_template_directory_uri() . '/assets/css/style.css');
    wp_register_style ('siddhartha_group_owl.carousel' , get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_register_style ('siddhartha_group_portfolio' , get_template_directory_uri() . '/assets/css/portfolio.css');

    wp_enqueue_style ('siddhartha_group_bootstrap');
    wp_enqueue_style ('siddhartha_group_stylesheet');
    wp_enqueue_style ('siddhartha_group_owl.carousel');
    wp_enqueue_style ('siddhartha_group_portfolio');


wp_register_script ('siddhartha_group_bootstrap' ,  get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script ('siddhartha_group_jquery' ,  get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '', true);
    
    wp_register_script ('siddhartha_group_imagesloaded' ,  get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '', true);
    wp_register_script ('siddhartha_group_classie2' ,  get_template_directory_uri() . '/assets/js/classie2.js', array('jquery'), '', true);
    // wp_register_script ('siddhartha_group_cbpGridGallery' ,  get_template_directory_uri() . '/assets/js/cbpGridGallery.js', array('jquery'), '', true);
    wp_register_script ('siddhartha_group_jquery.easing' ,  get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '', true);
    wp_register_script ('siddhartha_group_scrolling' ,  get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), '', true);
    wp_register_script ('siddhartha_group_modernizr' ,  get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '', true);
    wp_register_script ('siddhartha_group_owl.carousel' ,  get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true);

    
wp_enqueue_script( 'siddhartha_group_bootstrap');
    wp_enqueue_script( 'siddhartha_group_jquery');
    
    wp_enqueue_script( 'siddhartha_group_imagesloaded');
    wp_enqueue_script( 'siddhartha_group_classie2');
    // wp_enqueue_script( 'siddhartha_group_cbpGridGallery');
    wp_enqueue_script( 'siddhartha_group_jquery.easing');
    wp_enqueue_script( 'siddhartha_group_scrolling');
    wp_enqueue_script( 'siddhartha_group_modernizr');
    wp_enqueue_script( 'siddhartha_group_owl.carousel');
}
?>