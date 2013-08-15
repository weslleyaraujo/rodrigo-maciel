<?php
/**
 * The main template file.
 *
 *
 * @package WordPress
 * @subpackage Theme name
 * @since Theme name 1.0
 */
	
	// header
	get_header();
?>

	<?php while(have_posts()) : the_post(); ?>
		<div class="post">
			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>
		</div>
		<br />
	<?php endwhile; ?>

<?php get_footer(); ?>