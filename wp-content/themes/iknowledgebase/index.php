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
                <div class="categories-section">
				<?php
				foreach ( get_categories() as $category ) :
                    $category_link = get_category_link($category->cat_ID);
                    $category_img = z_taxonomy_image_url($category->cat_ID);;
                echo  '<a class="category-box" href='.$category_link.'>';
                echo  "<img src='.$category_img'/>";
				echo  '<h3>'.$category->name.' </h3>';
					echo  '</a>';
				endforeach;
				?>
                </div>
						<div class="categories-section">
							<a class="category-box" href="general-questions/">
								<img src="<?php bloginfo('template_url'); ?>/images/general-questions.svg">
								<h3>General <br/>Questions</h3>
							</a>
							<a href="accounts/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/accounts.svg">
								<h3>Accounts</h3>
							</a>
							<a href="verification/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/verification.svg">
								<h3>Verification</h3>
							</a>
							<a href="deposits-and-withdrawals/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/deposit.png">
								<h3>Deposits & <br/>Withdrawals</h3>
							</a>
							<a href="platforms/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/platforms.svg">
								<h3>Platforms</h3>
							</a>
							<a href="trading/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/trading.png">
								<h3>Trading</h3>
							</a>
							<a href="signal-centre/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/signal-center.svg">
								<h3>Signal <br/>Centre</h3>
							</a>
							<a href="finance/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/finance.svg">
								<h3>Finance</h3>
							</a>
							<a href="security-and-privacy/" class="category-box">
								<img src="<?php bloginfo('template_url'); ?>/images/security.svg">
								<h3>Security & <br/>Privacy</h3>
							</a>
						
						</div>

					</div>
				</div>
			</section>

			
			<?php get_footer(); ?>
