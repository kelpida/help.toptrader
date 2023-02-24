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
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/general-questions.svg">
								<h3><a href="category/general-questions/">General Questions</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/registration.svg">
								<h3><a href="category/registration/">Registration</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/accounts.svg">
								<h3><a href="category/registration/">Accounts</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/verification.svg">
								<h3><a href="category/verification/">Verification</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/deposit.png">
								<h3><a href="category/deposits-and-withdraws/">Deposits & Withdraws</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/platforms.svg">
								<h3><a href="category/platforms/">Platfroms</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/trading.png">
								<h3><a href="category/trading/">Trading</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/signal-center.svg">
								<h3><a href="category/signal-center/">Signal Center</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/finance.svg">
								<h3><a href="category/finance/">Finance</a></h3>
							</div>
							<div class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/security.svg">
								<h3><a href="category/security-and-privacy/">Security & Privacy</a></h3>
							</div>
						
						</div>
					</div>
				</div>
			</section>

			<section class="chat-blk">
				<div class="container">
					<div class="chat-blk-text">
						<h6>Not finding what you are looking for?</h6>
						<p>Chat with us or send us an email</p>
					</div>
					<div class="button is-info">
						Chat with us
						<img src="<?php bloginfo('template_url'); ?>/images/messsages3.svg">
					</div>
				</div>
			</section>
			<?php get_footer(); ?>
