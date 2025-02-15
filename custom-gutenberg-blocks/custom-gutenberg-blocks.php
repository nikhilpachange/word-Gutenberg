<?php
/**
 * Plugin Name: Custom Gutenberg Blocks
 * Description: A custom Gutenberg block plugin.
 * Version: 1.0.0
 * Author: Nikhil Pachange
 * License: GPL2+
 */

if (!defined('ABSPATH')) {
    exit;
}

// Enqueue block assets
function custom_gutenberg_blocks_enqueue() {
    wp_enqueue_script(
        'custom-gutenberg-blocks',
        plugins_url('build/index.js', __FILE__),
        array('wp-blocks', 'wp-editor', 'wp-element', 'wp-components'),
        filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
    );

    wp_enqueue_style(
        'custom-gutenberg-blocks-editor',
        plugins_url('build/editor.css', __FILE__),
        array('wp-edit-blocks'),
        filemtime(plugin_dir_path(__FILE__) . 'build/editor.css')
    );
}
add_action('enqueue_block_editor_assets', 'custom_gutenberg_blocks_enqueue');
