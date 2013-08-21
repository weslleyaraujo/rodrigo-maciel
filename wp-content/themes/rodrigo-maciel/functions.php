<?php

/**
 * Rodrigo Maciel functions
 * This is the functions file from theme-name
 *
 * @package  	Wordpress
 * @author		autor (http://autor.com)
 *
 */	
	
	// add thumbnail suport
	add_theme_support('post-thumbnails');

	// add multiple thumbs for page
	if (class_exists('MultiPostThumbnails')) {

		new MultiPostThumbnails(array(
			'label'     => 'Page Image 2',
			'id'        => 'page-image-2',
			'post_type' => 'page'
		));

		new MultiPostThumbnails(array(
			'label'     => 'Page Image 3',
			'id'        => 'page-image-3',
			'post_type' => 'page'
		));

		new MultiPostThumbnails(array(
			'label'     => 'Page Image 4',
			'id'        => 'page-image-4',
			'post_type' => 'page'
		));

		new MultiPostThumbnails(array(
			'label'     => 'Page Image 5',
			'id'        => 'page-image-5',
			'post_type' => 'page'
		));
 	}

 	// Register Custom Post Type
	function artwork() {

		$labels = array(
			'name'                => 'Artworks',
			'singular_name'       => 'Artwork',
			'menu_name'           => 'Artwork',
			'parent_item_colon'   => 'Parent Artwork:',
			'all_items'           => 'All Artworks',
			'view_item'           => 'View Artwork',
			'add_new_item'        => 'Add New Artwork',
			'add_new'             => 'New Artwork',
			'edit_item'           => 'Edit Artwork',
			'update_item'         => 'Update Artwork',
			'search_items'        => 'Search artwork',
			'not_found'           => 'No artworks found',
			'not_found_in_trash'  => 'No artworks found in Trash',
		);
		$args = array(
			'label'               => 'artwork',
			'description'         => 'Artwork information pages',
			'labels'              => $labels,
			'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'post-formats',),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => '',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type('artwork', $args);
		register_taxonomy_for_object_type('post_tag', 'artwork');
		register_taxonomy_for_object_type('category', 'demo');
	}

	// Hook into the 'init' action
	add_action( 'init', 'artwork', 0);

	// add multiple thumbs for artwork
	if (class_exists('MultiPostThumbnails')) {

		new MultiPostThumbnails(array(
			'label'     => 'Artwork Image 1',
			'id'        => 'artwork-image-1',
			'post_type' => 'artwork'
		));

		new MultiPostThumbnails(array(
			'label'     => 'Artwork Image 2',
			'id'        => 'artwork-image-2',
			'post_type' => 'artwork'
		));

		new MultiPostThumbnails(array(
			'label'     => 'Artwork Image 3',
			'id'        => 'artwork-image-3',
			'post_type' => 'artwork'
		));

		new MultiPostThumbnails(array(
			'label'     => 'Artwork Image 4',
			'id'        => 'artwork-image-4',
			'post_type' => 'artwork'
		));

		new MultiPostThumbnails(array(
			'label'     => 'Artwork Image 5',
			'id'        => 'artwork-image-5',
			'post_type' => 'artwork'
		));
 	}

 	/**
	 * Adds two classes to the array of body classes.
	 * The first is if the site has only had one author with published posts.
	 * The second is if a singular post being displayed
	 *
	 */
	function rodrigo_art_body_classes($classes) {

		if (function_exists('is_multi_author') && ! is_multi_author())
			$classes[] = 'single-author';

		if (is_singular() && ! is_home())
			$classes[] = 'singular';

		return $classes;
	}

	add_filter( 'body_class', 'rodrigo_art_body_classes' );
?>