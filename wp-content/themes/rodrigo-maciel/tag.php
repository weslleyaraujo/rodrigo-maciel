<?php
/**
 * The template used to display Tag Archive pages
 *
 *
 * @package WordPress
 * @subpackage Rodrigo Maciel
 * @since Rodrigo Maciel 1.0
 */
		
	// include tags helper
	require_once('helpers/tags-helpers.php');
	$tags = new Tags(single_tag_title('', false));

	// get posts
	$posts = $tags->getPosts();

	// header
	get_header();
?>
	<div class="full-wrap internal-content primary-content">
		<div class="wrap">
			<div class="left-sidebar">
				
				<?php get_template_part('templates/social', 'list'); ?>
				
				<!-- .navigation-left -->
				<nav class="navigation-left">
				
					<?php include(locate_template('templates/years-list.php')); ?>
					
					<?php get_template_part('templates/tags', 'list'); ?>

				</nav>
				<!-- /.navigation-left -->

			</div>
			<div class="right-content">				
				
				<?php include(locate_template('templates/tags-list-jobs.php')); ?>

				<!-- .down-info -->
				<div class="down-info full-wrap">
					<a href="mailto:rodrigomacielart@gmail.com" class="contact">CONTACT ME</a>
					<a href="#" class="back-top">BACK TO TOP</a>
				</div>
				<!-- /.down-info -->

			</div>
		</div>
	</div>

<?php get_footer(); ?>