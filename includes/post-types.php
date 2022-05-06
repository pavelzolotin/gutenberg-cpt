<?php

function cpt_cpt_setup_post_type() {

    $labels = array(
        'name'                  => esc_html_x( 'Players', 'cpt' ),
        'singular_name'         => esc_html_x( 'Player Item', 'cpt' ),
        'menu_name'             => esc_html_x( 'Players', 'cpt' ),
        'name_admin_bar'        => esc_html_x( 'Players Item', 'cpt' ),
        'add_new'               => esc_html__( 'Add New', 'cpt' ),
        'add_new_item'          => esc_html__( 'Add New players Item', 'cpt' ),
        'new_item'              => esc_html__( 'New players Item', 'cpt' ),
        'edit_item'             => esc_html__( 'Edit players Item', 'cpt' ),
        'view_item'             => esc_html__( 'View players Item', 'cpt' ),
        'view_items'            => esc_html__( 'View players Items', 'cpt' ),
        'all_items'             => esc_html__( 'All players Items', 'cpt' ),
        'search_items'          => esc_html__( 'Search players Items', 'cpt' ),
        'parent_item_colon'     => esc_html__( 'Parent players Items:', 'cpt' ),
        'not_found'             => esc_html__( 'No players Items found.', 'cpt' ),
        'not_found_in_trash'    => esc_html__( 'No players Items found in trash.', 'cpt' ),
        'featured_image'        => esc_html_x( 'Players Item Image', 'cpt' ),
        'set_featured_image'    => esc_html_x( 'Set players item image', 'cpt' ),
        'remove_featured_image' => esc_html_x( 'Remove players item image', 'cpt' ),
        'use_featured_image'    => esc_html_x( 'Use as players item image', 'cpt' ),
        'archives'              => esc_html_x( 'Players archives', 'cpt' ),
        'insert_into_item'      => esc_html_x( 'Insert into players item', 'cpt' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this players item', 'cpt' ),
        'filter_items_list'     => esc_html_x( 'Filter players items list', 'cpt' ),
        'items_list_navigation' => esc_html_x( 'Players items list navigation', 'cpt' ),
        'items_list'            => esc_html_x( 'Players items list', 'cpt' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-games',
        'supports' => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', ],
        'rewrite' => ['slug' => 'cpt_players'],
        'show_in_rest' => true
    );
    register_post_type('cpt_players', $args);
}

add_action('init', 'cpt_cpt_setup_post_type');