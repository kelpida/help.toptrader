<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @package iknowledgebase
*/

get_header();


?>

<section class="section">
	<div class="container">
		<!-- <div class="has-text-centered mb-6">
			<?php iknowledgebase_main_image(); ?>

			</div> -->
			<div class="is-max-w-2xl mx-auto">
				<?php get_search_form(); ?>
			</div>
			<div class="mx-auto pt-5">
				<!-- <div class="box is-mobile">
					<?php iknowledgebase_posts_sorter(); ?>
					</div> -->

					<!-- <?php if ( have_posts() ) : ?>
						<div class="panel has-background-white">
						<?php

						// Load posts loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/content', 'post' );
						}
						?>
						</div>
						<?php iknowledgebase_the_posts_pagination(); ?><?php endif; ?> -->
						<div class="categories-section">
							<a class="category-box" href="category/general-questions/">
								<img src="<?php bloginfo('template_url'); ?>/images/general-questions.svg">
								<h3>General <br/>Questions</h3>
							</a>
							<a href="category/registration/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/registration.svg">
								<h3>Registration</h3>
							</a>
							<a href="category/registration/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/accounts.svg">
								<h3>Accounts</h3>
							</a>
							<a href="category/verification/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/verification.svg">
								<h3>Verification</h3>
							</a>
							<a href="category/deposits-and-withdraws/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/deposit.png">
								<h3>Deposits & <br/>Withdraws</h3>
							</a>
							<a href="category/platforms/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/platforms.svg">
								<h3>Platfroms</h3>
							</a>
							<a href="category/trading/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/trading.png">
								<h3>Trading</h3>
							</a>
							<a href="category/signal-center/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/signal-center.svg">
								<h3>Signal <br/>Center</h3>
							</a>
							<a href="category/finance/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/finance.svg">
								<h3>Finance</h3>
							</a>
							<a href="category/security-and-privacy/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/security.svg">
								<h3>Security & <br/>Privacy</h3>
							</a>
						
						</div>
					</div>
				</div>
			</section>

			
			<?php get_footer(); ?>
