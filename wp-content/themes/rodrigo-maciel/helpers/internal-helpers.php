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
				'orderby'        => 'rand',
				'posts_per_page' => 7
			);
			return new WP_Query($args);
		}

		public function getYears()
		{
			global $wpdb;
			$cat_id     = get_cat_ID('Anos');
			$childCatID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent = ".$cat_id);
			if ($childCatID) {
				foreach ($childCatID as $kid) {
					$sql = "
						SELECT 
							rm_terms.name, rm_terms.term_id
						FROM
							rm_terms
						INNER JOIN rm_term_taxonomy ON
							(rm_terms.term_id = rm_term_taxonomy.term_id)
						INNER JOIN
							rm_term_relationships ON
							(rm_term_relationships.term_taxonomy_id = rm_terms.term_id)
						WHERE
							rm_terms.term_id = ".$kid."
						AND
							rm_term_taxonomy.taxonomy = 'category'
					";
					$return[] = $wpdb->get_row($sql);
				}
			}

			return array_filter($return);
		}

		public function getPostsByCat($cat)
		{
			$args = array(
				'post_type' => $this->post_type,
				'cat'       => $cat
			);
			return new WP_Query($args);
		}
	}