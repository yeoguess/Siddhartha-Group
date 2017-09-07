<?php

//Exit if accccessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    create_post_type();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

function create_post_type() {
    
    // Gallery
    $labels = array(
            'name'                      => _x('Gallery', 'post type general name'),
            'singular_name'             => _x('Gallery', 'post type singular name'),
            'add_new'                   => _x('Add New', 'Gallery'),
            'add_new_item'              => __('Add new Gallery'),
            'edit_item'                 => __('Edit Gallery'),
            'new_item'                  => __('New Gallery'),
            'view_item'                 => __('View Gallery'),
            'search_items'              => __('Search Gallery'),
            'not_found'                 =>  __('No Gallery found'),
            'not_found_in_trash'        => __('No Gallery found in Trash'),
            'parent_item_colon'         => ''
      );

    $args = array(
            'labels'                    => $labels,
            'public'                    => true,
            'publicly_queryable'        => true,
            'show_ui'                   => true,
            'menu_icon'                 => 'dashicons-format-image',
            'rewrite'                   => true,
            'query_var'                 => true,
            'capability_type'           => 'post',
            'hierarchical'              => false,
            '_builtin'                  => false, // It's a custom post type, not built in!
            'rewrite'  => array(
                        'slug'          => 'Gallery',
                        'with_front'    => true
                        ),
            'show_in_nav_menus'         => false,
            'menu_position'             => 5,
            'supports'  => array(
                        'title'
                        ),
      );
      
      register_post_type('Gallery',$args);

    // Our Mission
    $labels = array(
            'name'                       => _x('Mission', 'post type general name'),
            'singular_name'              => _x('Mission', 'post type singular name'),
            'add_new'                    => _x('Add New', 'Mission'),
            'add_new_item'               => __('Add new Mission'),
            'edit_item'                  => __('Edit Mission'),
            'new_item'                   => __('New Mission'),
            'view_item'                  => __('View Mission'),
            'search_items'               => __('Search Mission'),
            'not_found'                  =>  __('No Mission found'),
            'not_found_in_trash'         => __('No Mission found in Trash'),
            'parent_item_colon'          => ''
      );

    $args = array(
            'labels'                     => $labels,
            'public'                     => true,
            'publicly_queryable'         => true,
            'show_ui'                    => true,
            'show_in_menu'               => true,
            'menu_position'              => 5,
            'menu_icon'                  => 'dashicons-chart-area',
            'rewrite'                    => true,
            'query_var'                  => true,
            'capability_type'            => 'post',
            'has_archive'                => true,
            'hierarchical'               => false,
            '_builtin'                   => false, // It's a custom post type, not built in!
            'rewrite'                    => array(
                                            'slug'        => 'Mission',
                                            'with_front'  => true
                                            ),
            'show_in_nav_menus'          => false,
            'menu_position'              => 5,
            'supports'                   => array(
                                            'title',
                                            'thumbnail'
                                            ),
        );
      
      register_post_type('Mission',$args);
    }

   
 
?>