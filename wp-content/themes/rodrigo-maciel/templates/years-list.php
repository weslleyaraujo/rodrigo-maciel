<!-- years -->
<?php if ($years): ?>

	<ul class="clear">
		
		<?php foreach ($years as $key => $value):
			
			$subPosts = $artworks->getPostsByCat($value->term_id);
			$hasCat = has_category($value->term_id, $recent_post_id);
			
			if ($subPosts->have_posts()):
		?>
			<li class="year <?php echo $hasCat === true ? 'active' : ''; ?>">
		
		<?php 		if ($hasCat): ?>
						<?php echo $value->name; ?>
		<?php 		else: ?>
						<a href="javascript:void(0);"><?php echo $value->name; ?></a>
		<?php 		endif;
		?>
			<ul class="clear">
				
		<?php		
					while($subPosts->have_posts()) : $subPosts->the_post();
		?>
					<li>
						<a class="<?php echo $postTitle === get_the_title() ? 'active' : ''; ?>" href="<?php echo $postTitle === the_permalink() ? 'javascript:void(0);' : ''; ?>"><?php the_title(); ?></a>
					</li>
		<?php
					endwhile;
		?>
				</ul>
			</li>
		<?php
			endif;
		?>
				
		<?php endforeach ?>
	
	</ul>

<?php endif ?>
<!-- years -->