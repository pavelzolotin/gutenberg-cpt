<?php

function gutenberg_cpt_setup_post_type() {

    $labels = array(
        'name'                  => esc_html_x( 'Players', 'gutenberg-cpt' ),
        'singular_name'         => esc_html_x( 'Player Item', 'gutenberg-cpt' ),
        'menu_name'             => esc_html_x( 'Players', 'gutenberg-cpt' ),
        'name_admin_bar'        => esc_html_x( 'Players Item', 'gutenberg-cpt' ),
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
        'featured_image'        => esc_html_x( 'Players Item Image', 'gutenberg-cpt' ),
        'set_featured_image'    => esc_html_x( 'Set Players item image', 'gutenberg-cpt' ),
        'remove_featured_image' => esc_html_x( 'Remove Players item image', 'gutenberg-cpt' ),
        'use_featured_image'    => esc_html_x( 'Use as Players item image', 'gutenberg-cpt' ),
        'archives'              => esc_html_x( 'Players archives', 'gut-gutenberg-cpt' ),
        'insert_into_item'      => esc_html_x( 'Insert into Players item', 'gut-gutenberg-cpt' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this Players item', 'gutenberg-cpt' ),
        'filter_items_list'     => esc_html_x( 'Filter Players items list', 'gutenberg-cpt' ),
        'items_list_navigation' => esc_html_x( 'Players items list navigation', 'gutenberg-cpt' ),
        'items_list'            => esc_html_x( 'Players items list', 'gutenberg-cpt' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-games',
        'supports' => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ],
        'rewrite' => [ 'slug' => 'players' ],
        'show_in_rest' => true
    );
    register_post_type( 'cpt_players', $args );
}

add_action( 'init', 'gutenberg_cpt_setup_post_type' );