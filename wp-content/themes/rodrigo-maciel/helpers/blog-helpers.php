<?php 

Class Blog {

	public function __construct()
	{
		$this->getPosts();
	}

	public function getPosts()
	{
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('posts_per_page=10&post_type=post&paged=' . $paged);
	}
}