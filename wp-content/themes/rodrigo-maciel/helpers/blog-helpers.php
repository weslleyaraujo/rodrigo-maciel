<?php 

Class Blog {

	public function __construct()
	{
		$this->getPosts();
	}

	public function getPosts()
	{
		query_posts('posts_per_page=10&post_type=post');
	}
}