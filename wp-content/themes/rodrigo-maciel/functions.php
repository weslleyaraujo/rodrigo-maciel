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
?>