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
					<?php
						$rand = rand(1, 5);
						switch ($rand) {
							case 1:
								$src = wp_get_attachment_image_src(get_post_thumbnail_id(2), 'single-post-thumbnail');
								$src = $src[0];
							break;
							
							default:
								$src = MultiPostThumbnails::get_post_thumbnail_url('page', 'page-image-'.$rand, 2);
							break;
						}
					?>

					<img src="<?php echo $src; ?>" />

					<!-- <img src="<?php echo bloginfo('template_url') ?>/images/main-example-670x580.jpg" /> -->
				</div>
				<div class="thanks-visit">
					<p>Thank you for visit.</p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>