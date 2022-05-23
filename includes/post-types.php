<?php

function gutenberg_cpt_setup_post_type() {

    $labels = array(
        'name'                  => esc_html_x( 'Players', 'Post type general name', 'gutenberg-cpt' ),
        'singular_name'         => esc_html_x( 'Player Item', 'Post type singular name', 'gutenberg-cpt' ),
        'menu_name'             => esc_html_x( 'Players', 'Admin Menu text', 'gutenberg-cpt' ),
        'name_admin_bar'        => esc_html_x( 'Players Item', 'Add New on Toolbar', 'gutenberg-cpt' ),
        'add_new'               => esc_html__( 'Add New', 'gutenberg-cpt' ),
        'add_new_item'          => esc_html__( 'Add New Players Item', 'gutenberg-cpt' ),
        'new_item'              => esc_html__( 'New Players Item', 'gutenberg-cpt' ),
        'edit_item'             => esc_html__( 'Edit Players Item', 'gutenberg-cpt' ),
        'view_item'             => esc_html__( 'View Players Item', 'gutenberg-cpt' ),
        'view_items'            => esc_html__( 'View Players Items', 'gutenberg-cpt' ),
        'all_items'             => esc_html__( 'All Players Items', 'gutenberg-cpt' ),
        'search_items'          => esc_html__( 'Search Players Items', 'gutenberg-cpt' ),
        'parent_item_colon'     => esc_html__( 'Parent Players Items:', 'gutenberg-cpt' ),
        'not_found'             => esc_html__( 'No Players Items found.', 'gutenberg-cpt' ),
        'not_found_in_trash'    => esc_html__( 'No Players Items found in trash.', 'gutenberg-cpt' ),
        'featured_image'        => esc_html_x( 'Players Item Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'gutenberg-cpt' ),
        'set_featured_image'    => esc_html_x( 'Set Players item image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'gutenberg-cpt' ),
        'remove_featured_image' => esc_html_x( 'Remove Players item image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'gutenberg-cpt' ),
        'use_featured_image'    => esc_html_x( 'Use as Players item image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'gutenberg-cpt' ),
        'archives'              => esc_html_x( 'Players archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'gut-gutenberg-cpt' ),
        'insert_into_item'      => esc_html_x( 'Insert into Players item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'gut-gutenberg-cpt' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this Players item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'gutenberg-cpt' ),
        'filter_items_list'     => esc_html_x( 'Filter Players items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'gutenberg-cpt' ),
        'items_list_navigation' => esc_html_x( 'Players items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'gutenberg-cpt' ),
        'items_list'            => esc_html_x( 'Players items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'gutenberg-cpt' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-games',
        'supports' => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'custom-fields' ],
        'rewrite' => [ 'slug' => 'players' ],
        'show_in_rest' => true
    );
    register_post_type( 'gutenberg_players', $args );
}

add_action( 'init', 'gutenberg_cpt_setup_post_type' );