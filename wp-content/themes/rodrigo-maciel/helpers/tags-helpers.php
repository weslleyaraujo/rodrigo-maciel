<?php

	Class Tags {

		public function __construct($tagSlug)
		{
			global $wpdb;
			$this->tagSlug = $tagSlug;
			wp_reset_query();
		}

		public function getPosts()
		{
			$args = array(
				'post_type' => array('artwork', 'sketchbook'),
				'tag' => $this->tagSlug
		    );
			
			return new WP_Query($args);
		}
	}