<?php
	
	/**
	 * Template Name: About
	 */

	// header
	get_header();

?>
	<div class="full-wrap about-content primary-content">
		<div class="wrap">
			<div class="left-sidebar">
				
				<?php get_template_part('templates/social', 'list'); ?>
				
				<!-- .navigation-left -->
				<nav class="navigation-left">
					<ul class="clear">
						<li><a href="#" class="active">RESUME</a></li>
						<li><a href="mailto:rodrigomacielart@gmail.com">CONTACT</a></li>
					</ul>
				</nav>
				<!-- /.navigation-left -->

			</div>
			<div class="right-content">
				<div class="text-about">
					<?php while(have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
				<div class="main-image">
					<?php
						$rand = rand(1, 5);
						switch ($rand) {
							case 1:
								$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
								$src = $src[0];
							break;
							
							default:
								$src = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'page-image-'.$rand);
							break;
						}
					?>
					<img src="<?php echo $src; ?>" />
				</div>
				<div class="thanks-visit full-wrap">
					<p>Thank you for visit.</p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>