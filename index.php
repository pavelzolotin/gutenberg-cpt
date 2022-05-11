<?php
/**
 * Plugin Name:       Gutenberg CPT
 * Description:       Plugin which display custom post types.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Author
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-cpt
 */

if( !defined('WPINC')) {
    die;
}

include_once('includes/post-types.php');
include_once('includes/game-tax.php');

function gutenberg_cpt_activate() {
    gutenberg_cpt_setup_post_type();
    gutenberg_cpt_register_game_tax();
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'gutenberg_cpt_activate');

function gutenberg_cpt_deactivate() {
    unregister_post_type('gutenberg_players');
    unregister_taxonomy('gutenberg_game');
    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'gutenberg_cpt_deactivate');