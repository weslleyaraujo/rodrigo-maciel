<?php
	
	/**
	 * Template Name: Blog
	 */

	// blog helper
	require_once('helpers/blog-helpers.php');
	$blog = new Blog();

	// header
	get_header();

?>
	<div class="full-wrap blog-content primary-content">
		<div class="wrap">
			
			<!-- .left-sidebar -->
			<div class="left-sidebar">
				<?php get_template_part('templates/social', 'list'); ?>
				<!-- .navigation-left -->
				<nav class="navigation-left">
					<?php include(locate_template('templates/years-list.php')); ?>
					<?php get_template_part('templates/tags', 'list'); ?>
				</nav>
				<!-- /.navigation-left -->
			</div>
			<!-- /.left-sidebar -->

			<div class="right-content internal-content">
				
				<?php if (have_posts()): ?>
					
					<?php while ( have_posts() ) : the_post();  ?>
						
						<!-- .post-item -->
						<div class="post-item">
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							<div class="content">
								<?php the_excerpt(); ?>
							</div>
							<div class="down">
								<ul class="clear tags">
									<li class="title">Tags:</li>
									<li><a href="#">Digital Paiting,</a></li>
									<li><a href="#">Yeah</a></li>
								</ul>
								<div class="date">
									<?php the_date('d/m/Y') ?>
								</div>
							</div>
						</div>
						<!-- /.post-item -->

					<?php endwhile; ?>
				
				<?php endif ?>
				<!-- /.post-item -->

			</div>

		</div>
	</div>

<?php get_footer(); ?>