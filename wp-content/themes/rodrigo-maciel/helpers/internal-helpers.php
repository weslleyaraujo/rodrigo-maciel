<?php

	Class Internal {

		
		public function __construct($post_type)
		{
			global $wpdb;
			$this->post_type = $post_type;
		}

		public function getRecent()
		{	
			$args = array(
				'post_type'      => $this->post_type,
				'posts_per_page' => 1
			);
			return new WP_Query($args);
		}

		public function getMostPopular()
		{
			$args = array(
				'post_type'      => $this->post_type,
				'posts_per_page' => 7
			);
			return new WP_Query($args);
		}
	}