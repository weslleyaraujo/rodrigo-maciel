<?php
/**
 * The main template file.
 *
 *
 * @package WordPress
 * @subpackage Rodrigo Maciel
 * @since Rodrigo Maciel 1.0
 */
	
	// header
	get_header();
?>

	<div class="full-wrap home-content">
		<div class="wrap">
			<div class="left-sidebar">
			</div>
			<div class="right-content">
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