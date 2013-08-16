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