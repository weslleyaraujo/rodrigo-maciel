<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Rodrigo Maciel
 * @since Rodrigo Maciel 1.0
 */
	
	// get header
	get_header();
?>
	<div class="full-wrap single-content primary-content">
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
								<?php the_content(); ?>
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
								
								<div class="clearfix"></div>

								<?php include(locate_template('templates/job-sharer.php')); ?>
									
								<a href="#" class=></a>
									
								<div class="clearfix"><a class="back" href="<?php echo bloginfo("siteurl"); ?>/blog">Back</a></div>

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