<?php
/**
 * Plugin Name:       Details: Show and Hide
 * Description:       Details block for showing and hiding content.
 * Requires at least: 5.9
 * Requires PHP:      5.6
 * Version:           1.0.3
 * Author:            Bob Matyas
 * Author URI:		  https://www.bobmatyas.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-details
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function bm_wp_details_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'bm_wp_details_init' );
