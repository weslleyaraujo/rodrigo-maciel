<?php
	
	/**
	 * Template Name: Single Sketchbook
	 */

	require_once('helpers/internal-helpers.php');

	$artworks    = new Internal('sketchbook');
	$mostPopular = $artworks->getMostPopular();
	$years       = $artworks->getYears();
	
	if ( have_posts() ) while ( have_posts() ) : the_post();

		// get post id
		$recent_post_id = get_the_ID();

		// get the post title
		$postTitle = get_the_title();
		
	endwhile;


	// get main recent image
	$fbImage = wp_get_attachment_image_src(get_post_thumbnail_id($recent_post_id), 'single-post-thumbnail');

	// header
	include(locate_template('header.php'));
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
					<div class="main-image" id="internal-slide" >
						<?php
							$count = 0;
							for ($i=0; $i <= 5; $i++) { 
								$src = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sketchbook-image-'.$i, $recent_post_id);
								if ($src) {
									$count += 1;
						?>
									<img src="<?php echo $src; ?>" rel="<?php echo $i; ?>"/>
						<?php
								}
							}
						?>
					</div>
					
					<div class="hold-nav">
						<?php if ($count !== 1): ?>
							<div class="nav">
								<a href="#" class="next">preview</a> | <a href="#" class="prev">next</a>
							</div>
						<?php endif ?>
						<div class="count">
							<span class="f">1</span> of <span class="s"><?php echo $count; ?></span>
						</div>
					</div>

					<div class="full-wrap job-description">
						<?php echo get_post_field('post_content', $recent_post_id); ?>
					</div>
					
					<div class="full-wrap down">
						<?php $tags = wp_get_post_tags($recent_post_id); if ($tags): ?>
							<ul class="clear tags">
								<li class="title">Tags:</li>
								<?php foreach ($tags as $key => $value): ?>
									<?php $comma = $key == count($tags)-1 ? '' : ','; ?>
									<li><a href="#"><?php echo $value->name; echo $comma; ?></a></li>
								<?php endforeach ?>
							</ul>						
						<?php endif ?>
						
						<?php include(locate_template('templates/job-sharer.php')); ?>

					</div>

				<?php include(locate_template('templates/most-popular.php')); ?>

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