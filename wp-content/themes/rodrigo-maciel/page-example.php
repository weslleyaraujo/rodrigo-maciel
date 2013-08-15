<?php
	
	/**
	 * Template Name: Page Example
	 */

?>

	<?php while(have_posts()) : the_post(); ?>
		<div class="post">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<br />
	<?php endwhile; ?>