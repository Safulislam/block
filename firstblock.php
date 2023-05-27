<?php
/**
 * Plugin Name: First Block
 * Plugin URI: https://sotech.com/
 * Description: My First gutenberg block.
 * Version: 1.0.0
 * Author: Saiful
 * Author URI: https://devsaiful.com
 * Domain Path: /i18n/languages/
 *
 * @package first-block
 */

function blocks_course_firstblock_init() {
	register_block_type_from_metadata( __DIR__ );
}
add_action( 'init', 'blocks_course_firstblock_init' );
