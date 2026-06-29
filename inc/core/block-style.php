<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package velvetine
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function velvetine_register_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'  => 'velvetine-boxshadow',
				'label' => __( 'Box Shadow', 'velvetine' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'velvetine-boxshadow-md',
				'label' => __( 'Box Shadow : Medium', 'velvetine' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'velvetine-boxshadow-lg',
				'label' => __( 'Box Shadow : Large', 'velvetine' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'velvetine-boxshadow-hover',
				'label' => __( 'Hover : Box Shadow', 'velvetine' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'velvetine-overflow-hidden',
				'label' => __( 'Overflow : Hidden', 'velvetine' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'velvetine-boxshadow',
				'label' => __( 'Box Shadow', 'velvetine' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'velvetine-boxshadow-hover',
				'label' => __( 'Hover : Box Shadow', 'velvetine' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'velvetine-boxshadow-overflow-hidden',
				'label' => __( 'Overflow : Hidden', 'velvetine' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'velvetine-boxshadow',
				'label' => __( 'Box Shadow', 'velvetine' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'velvetine-boxshadow-md',
				'label' => __( 'Box Shadow : Medium', 'velvetine' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'velvetine-boxshadow-lg',
				'label' => __( 'Box Shadow : Large', 'velvetine' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'velvetine-boxshadow-hover',
				'label' => __( 'Hover : Box Shadow', 'velvetine' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'velvetine-boxshadow-overflow-hidden',
				'label' => __( 'Overflow : Hidden', 'velvetine' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'velvetine-image-zoom-in',
				'label' => __( 'Hover : Zoom In', 'velvetine' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'velvetine-image-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'velvetine' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'velvetine-image-zoom-in',
				'label' => __( 'Hover : Zoom In', 'velvetine' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'velvetine-image-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'velvetine' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'velvetine-cover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'velvetine' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'velvetine-cover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'velvetine' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'velvetine-button-bell',
				'label' => __( 'Bell Icon', 'velvetine' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'velvetine-categories-primary',
				'label' => __( 'Primary', 'velvetine' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'velvetine-categories-secondary',
				'label' => __( 'Secondary', 'velvetine' ),
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'velvetine-social-icons-border',
				'label' => __( 'Borders', 'velvetine' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'velvetine-navigation-primary-hover',
				'label' => __( 'Hover : Primary', 'velvetine' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'velvetine-navigation-secondary-hover',
				'label' => __( 'Hover : Secondary', 'velvetine' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'velvetine-pagination-primary',
				'label' => __( 'Primary', 'velvetine' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'velvetine-pagination-secondary',
				'label' => __( 'Secondary', 'velvetine' ),
			)
		);
	}
	add_action( 'init', 'velvetine_register_block_styles' );
}
