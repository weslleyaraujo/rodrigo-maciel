<?php
	
	/**
	 * Template Name: Artwork
	 */

	// header
	get_header();

	require_once('helpers/internal-helpers.php');

	$artworks = new Internal('artwork');
	$recent   = $artworks->getRecent();
?>
	<div class="full-wrap internal-content">
		<div class="wrap">
			<div class="left-sidebar">
				
				<?php get_template_part('templates/social', 'list'); ?>
				
				<!-- .navigation-left -->
				<nav class="navigation-left">
					<ul class="clear">
						<li class="year active">
							2014
							<ul class="clear">
								<li><a class="active" href="#">Lorem</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
							</ul>
						</li>
						<li class="year">
							<a href="#">2013</a>
							<ul class="clear">
								<li><a class="active" href="#">Lorem</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
							</ul>
						</li>
						<li class="year">
							<a href="#">2012</a>
							<ul class="clear">
								<li><a class="active" href="#">Lorem</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
							</ul>
						</li>
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
				</nav>
				<!-- /.navigation-left -->

			</div>
			<div class="right-content">
				
				<?php while ($recent->have_posts()): $recent->the_post();
						
					// get post id
					$post_id = get_the_ID();
				?>
					
				
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
						<?php $tags = wp_get_post_tags($post_id); if ($tags): ?>
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
				
				<?php endwhile; ?>

				<!-- .most-popular -->
				<div class="full-wrap most-popular">
					MOST POPULAR
					<ul class="clear">
						<li>
							<a href="#">
								<div class="overlay">
									GALOCHAS HAVAIANAS
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									ESCOLA PANAMERICANA FRASES
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
					</ul>
				</div>
				<!-- /.most-popular -->

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