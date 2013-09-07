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
								<?php
									//	get the tags
									$tags = get_the_tags();
									
									if ($tags): ?>
									<ul class="clear tags">
										<li class="title">Tags</li>
										<?php foreach ($tags as $key => $value): ?>
											<li><a href="<?php echo bloginfo('siteurl') . '/tag/' . $value->slug ?>"><?php echo $value->name; ?></a></li>
										<?php endforeach ?>
									</ul>
									
								<?php endif ?>

								<div class="date">
									<?php echo get_the_date('d/m/Y'); ?>
								</div>
							</div>
						</div>
						<!-- /.post-item -->

					<?php endwhile; ?>
				
				<?php endif ?>
				<!-- /.post-item -->
		
				<div class="nav-links full-wrap">
					<div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
					<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
				</div>

			</div>

		</div>
	</div>

<?php get_footer(); ?>