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
                        $category_img = z_taxonomy_image_url($category->cat_ID);
                        echo  "<a class='category-box' href='$category_link'>",
                              "<img src='$category_img'/>",
				              '<h3>'.$category->name.' </h3>',
					      '</a>';
				    endforeach;
				?>
                </div>


					</div>
				</div>
			</section>

			
			<?php get_footer(); ?>
