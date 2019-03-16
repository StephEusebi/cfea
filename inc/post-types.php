<?php 

function custom_codex_coach_init() {
    $labels = array(
        'name'                  => _x( 'Coaches', 'Post type general name', 'cfea' ),
        'singular_name'         => _x( 'Coach', 'Post type singular name', 'cfea' ),
        'menu_name'             => _x( 'Coaches', 'Admin Menu text', 'cfea' ),
        'name_admin_bar'        => _x( 'Coach', 'Add New on Toolbar', 'cfea' ),
        'add_new'               => __( 'Add New', 'cfea' ),
        'add_new_item'          => __( 'Add New Coach', 'cfea' ),
        'new_item'              => __( 'New Coach', 'cfea' ),
        'edit_item'             => __( 'Edit Coach', 'cfea' ),
        'view_item'             => __( 'View Coach', 'cfea' ),
        'all_items'             => __( 'All Coaches', 'cfea' ),
        'search_items'          => __( 'Search Coaches', 'cfea' ),
        'parent_item_colon'     => __( 'Parent Coaches:', 'cfea' ),
        'not_found'             => __( 'No Coaches found.', 'cfea' ),
        'not_found_in_trash'    => __( 'No Coaches found in Trash.', 'cfea' ),
        // 'featured_image'        => _x( 'Coach Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cfea' ),
        // 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cfea' ),
        // 'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cfea' ),
        // 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cfea' ),
        'archives'              => _x( 'Coach archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cfea' ),
        'insert_into_item'      => _x( 'Insert into Coach', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cfea' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Coach', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cfea' ),
        'filter_items_list'     => _x( 'Filter Coaches list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cfea' ),
        'items_list_navigation' => _x( 'Coaches list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cfea' ),
        'items_list'            => _x( 'Coaches list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cfea' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'coach' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'coach', $args );
}
 
add_action( 'init', 'custom_codex_coach_init' );

?>