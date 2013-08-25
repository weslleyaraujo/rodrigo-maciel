<?php
	
	/**
	 * Template Name: Artwork
	 */

	// header
	get_header();

	require_once('helpers/internal-helpers.php');

	$artworks    = new Internal('artwork');
	$recent      = $artworks->getRecent();
	$mostPopular = $artworks->getMostPopular();
	$years       = $artworks->getYears();

	// the post
	$recent->have_posts();
	$recent->the_post();
	
	// get post id
	$recent_post_id = get_the_ID();

	// get the post title
	$postTitle = get_the_title();
?>
	<div class="full-wrap internal-content primary-content">
		<div class="wrap">
			<div class="left-sidebar">
				
				<?php get_template_part('templates/social', 'list'); ?>
				
				<!-- .navigation-left -->
				<nav class="navigation-left">

					<!-- years -->
					<?php if ($years): ?>

						<ul class="clear">
							<?php foreach ($years as $key => $value):

								// has category
								$hasCat = has_category($value->term_id, $recent_post_id);
							?>

								<li class="year <?php echo $hasCat === true ? 'active' : ''; ?>">
									<?php if ($hasCat): ?>
										<?php echo $value->name; ?>
									<?php else: ?>
										<a href="javascript:void(0);"><?php echo $value->name; ?></a>
									<?php endif;

										$subPosts = $artworks->getPostsByCat($value->term_id);
										if ($subPosts->have_posts()):
									?>
										<ul class="clear">
									<?php
											while($subPosts->have_posts()) : $subPosts->the_post();
									?>
											<li><a class="<?php echo $postTitle === get_the_title() ? 'active' : ''; ?>" href="<?php echo $postTitle === get_the_title() ? 'javascript:void(0);' : ''; ?>"><?php the_title(); ?></a></li>
									<?php
											endwhile;
									?>
										</ul>
									<?php endif ?>

								</li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
					<!-- years -->

					<!-- tags -->
					<ul class="clear">
						<li class="tags-list">
							TAGS
							<ul class="clear">
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
							</ul>
						</li>
					</ul>
					<!-- /tags -->

				</nav>
				<!-- /.navigation-left -->

			</div>
			<div class="right-content">				
					<div class="main-image" id="internal-slide" >
						<?php
							$count = 0;
							for ($i=0; $i <= 5; $i++) { 
								$src = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'artwork-image-'.$i);
								if ($src) {
									$count++;
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
							<span class="f">1</span> of <span class="s">1</span>
						</div>
					</div>

					<div class="full-wrap job-description">
						<?php the_content(); ?>
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
						<ul class="clear share">
							<li><a href="#" class="icons-social-facebook-mini"></a></li>
							<li><a href="#" class="icons-social-mail-mini"></a></li>
							<li><a href="#" class="icons-social-twitter-mini"></a></li>
							<li><a href="#" class="icons-social-pint-mini"></a></li>
						</ul>
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