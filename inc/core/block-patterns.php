<?php

/**
 * velvetine: Block Patterns
 *
 * @since velvetine 1.0.0
 */

/**
 * Registers pattern categories for velvetine
 *
 * @since velvetine 1.0.0
 *
 * @return void
 */
function velvetine_register_pattern_category()
{
	$block_pattern_categories = array(
		'velvetine-header' => array('label' => __('Header Layout', 'velvetine')),
		'velvetine-footer' => array('label' => __('Footer Layout', 'velvetine')),
		'velvetine-templates' => array('label' => __('Templates', 'velvetine')),
		'velvetine-post' => array('label' => __('Posts / Blog', 'velvetine')),
		'velvetine-contact' => array('label' => __('Contacts / Newsletter', 'velvetine')),
	);

	$block_pattern_categories = apply_filters('velvetine_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'velvetine_register_pattern_category', 9);
