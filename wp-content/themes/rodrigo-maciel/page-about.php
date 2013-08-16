<?php
	
	/**
	 * Template Name: About
	 */

	// header
	get_header();

?>
	<div class="full-wrap about-content">
		<div class="wrap">
			<div class="left-sidebar">
				
				<!-- .social-list -->
				<ul class="social-list clear">
					<li><a href="#" class="icons-social-facebook"></a></li>
					<li><a href="#" class="icons-social-play"></a></li>
					<li><a href="#" class="icons-social-be"></a></li>
					<li><a href="#" class="icons-social-pinterest"></a></li>
				</ul>
				<!-- /.social-list -->
				
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
					<img src="<?php echo bloginfo('template_url') ?>/images/main-example-670x580.jpg" />
				</div>
				<div class="thanks-visit">
					<p>Thank you for visit.</p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>