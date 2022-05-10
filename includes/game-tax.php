<?php

function gutenberg_cpt_register_game_tax() {
    $labels = [
        'name'              => esc_html_x( 'Game', 'taxonomy general name', 'gutenberg-cpt' ),
		'singular_name'     => esc_html_x( 'Game', 'taxonomy singular name', 'gutenberg-cpt' ),
		'search_items'      => esc_html__( 'Search Games', 'gutenberg-cpt' ),
		'all_items'         => esc_html__( 'All Games', 'gutenberg-cpt' ),
		'parent_item'       => esc_html__( 'Parent Game', 'gutenberg-cpt' ),
		'parent_item_colon' => esc_html__( 'Parent Game:', 'gutenberg-cpt' ),
		'edit_item'         => esc_html__( 'Edit Game', 'gutenberg-cpt' ),
		'update_item'       => esc_html__( 'Update Game', 'gutenberg-cpt' ),
		'add_new_item'      => esc_html__( 'Add New Game', 'gutenberg-cpt' ),
		'new_item_name'     => esc_html__( 'New Game Name', 'gutenberg-cpt' ),
		'menu_name'         => esc_html__( 'Games', 'gutenberg-cpt' ),
    ];
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'game')
    );
    register_taxonomy('cpt_game', ['cpt_players'], $args);
}

add_action('init', 'gutenberg_cpt_register_game_tax');