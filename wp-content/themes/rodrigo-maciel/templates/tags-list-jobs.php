<?php if ($posts->have_posts()): ?>
	
	<!-- .most-popular -->
	<div class="full-wrap most-popular tags">
		TAGGING : <span class="tag-name"><?php single_tag_title('', true); ?></span>
		<ul class="clear">

			<?php while($posts->have_posts()): $posts->the_post();
				
				// get post id
				$post_id = get_the_ID();
				if ($post_id != $recent_post_id):
				
				$src = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
				$src = $src[0];

			?>							
					<li>
						<a href="<?php the_permalink(); ?>">
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

<?php else: ?>
		
	<!-- .most-popular -->
	<div class="full-wrap most-popular tags not-found">
		NOTHING FOUND WITH THE TAG "<span class="tag-name"><?php single_tag_title('', true); ?></span>""
	</div>	

<?php endif ?>