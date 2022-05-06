<?php

function cpt_cpt_register_taxonomy() {
    $labels = [
        'name'              => esc_html_x( 'Game', 'taxonomy general name', 'cpt' ),
		'singular_name'     => esc_html_x( 'Game', 'taxonomy singular name', 'cpt' ),
		'search_items'      => esc_html__( 'Search Games', 'cpt' ),
		'all_items'         => esc_html__( 'All Games', 'cpt' ),
		'parent_item'       => esc_html__( 'Parent Game', 'cpt' ),
		'parent_item_colon' => esc_html__( 'Parent Game:', 'cpt' ),
		'edit_item'         => esc_html__( 'Edit Game', 'cpt' ),
		'update_item'       => esc_html__( 'Update Game', 'cpt' ),
		'add_new_item'      => esc_html__( 'Add New Game', 'cpt' ),
		'new_item_name'     => esc_html__( 'New Game Name', 'cpt' ),
		'menu_name'         => esc_html__( 'Games', 'cpt' ),
    ];
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => [ 'slug' => 'cpt_game' ]
    );
    register_taxonomy( 'cpt_game', ['cpt_players'], $args );
}

add_action( 'init', 'cpt_cpt_register_taxonomy' );