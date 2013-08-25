<?php if ($mostPopular->have_posts()): ?>
	
	<!-- .most-popular -->
	<div class="full-wrap most-popular">
		MOST POPULAR
		<ul class="clear">
			<?php while($mostPopular->have_posts()): $mostPopular->the_post();
				
				// get post id
				$post_id = get_the_ID();
				if ($post_id != $recent_post_id):
				
				$src = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
				$src = $src[0];

			?>							
					<li>
						<a href="#">
							<div class="overlay">
								<?php the_title(); ?>
							</div>
							<img src="<?php echo $src; ?>" alt="<?php the_title(); ?>">
						</a>
					</li>

			<?php endif ?>

			<?php endwhile; ?>
		</ul>
	</div>
	<!-- /.most-popular -->

<?php endif ?>