<?php
	
	/**
	 * Template Name: Artwork
	 */

	// header
	get_header();

?>
	<div class="full-wrap internal-content">
		<div class="wrap">
			<div class="left-sidebar">
				
				<?php get_template_part('templates/social', 'list'); ?>
				
				<!-- .navigation-left -->
				<nav class="navigation-left">
					<ul class="clear">
						<li class="year active">
							2014
							<ul class="clear">
								<li><a class="active" href="#">Lorem</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
							</ul>
						</li>
						<li class="year">
							<a href="#">2013</a>
							<ul class="clear">
								<li><a class="active" href="#">Lorem</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
							</ul>
						</li>
						<li class="year">
							<a href="#">2012</a>
							<ul class="clear">
								<li><a class="active" href="#">Lorem</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
								<li><a href="#">Lorem ipsum dolor sit.</a></li>
							</ul>
						</li>
						<li class="tags-list">
							TAGS
							<ul class="clear">
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
								<li><a href="#">Lorem ipsum dolor.</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.navigation-left -->

			</div>
			<div class="right-content">
				
				<div class="main-image" id="internal-slide" >
					<img src="<?php bloginfo('template_url'); ?>/images/job-example-528x749.jpg" rel="1"/>
					<img src="<?php bloginfo('template_url'); ?>/images/job-example-670x715.jpg" rel="2"/>
					<img src="http://placehold.it/600/000/fff.jpg&text=Sem+imagem" rel="3" />
					<img src="<?php bloginfo('template_url'); ?>/images/job-example-670x715.jpg" rel="2"/>
				</div>
				
				<div class="hold-nav">
					<div class="nav">
						<a href="#" class="next">preview</a> | <a href="#" class="prev">next</a>
					</div>
					<div class="count">
						<span class="f">1</span> of <span class="s">2</span>
					</div>
				</div>

				<div class="full-wrap job-description">
					<p>Trabalho realizado para Show Us Your Type com o tema, a cidade de Melbourne.</p>
					<p>Esse projeto visa desenvolver a tipografia de cada cidade do mundo. Quis usar a linguagem dos aborígenes como inspiração para a tipografia.</p>
				</div>

				<div class="full-wrap down">
					<ul class="clear tags">
						<li class="title">Tags:</li>
						<li><a href="#">Digital Painting,</a></li>
						<li><a href="#">Typography,</a></li>
						<li><a href="#">Portrait</a></li>
					</ul>
					<ul class="clear share">
						<li><a href="#" class="icons-social-facebook-mini"></a></li>
						<li><a href="#" class="icons-social-mail-mini"></a></li>
						<li><a href="#" class="icons-social-twitter-mini"></a></li>
						<li><a href="#" class="icons-social-pint-mini"></a></li>
					</ul>
				</div>
				
				<!-- .most-popular -->
				<div class="full-wrap most-popular">
					MOST POPULAR
					<ul class="clear">
						<li>
							<a href="#">
								<div class="overlay">
									GALOCHAS HAVAIANAS
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									ESCOLA PANAMERICANA FRASES
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
						<li>
							<a href="#">
								<div class="overlay">
									JOB NAME
								</div>
								<img src="<?php bloginfo('template_url'); ?>/images/thumb-example-155x240.jpg" alt="Job Name">
							</a>
						</li>
					</ul>
				</div>
				<!-- /.most-popular -->

			</div>
		</div>
	</div>

<?php get_footer(); ?>