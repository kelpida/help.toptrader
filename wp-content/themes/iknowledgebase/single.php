<?php
/**
* The Template for displaying all single posts.
*
* @package iknowledgebase
*
*/

get_header();

$iknowledgebase_settings = get_option( 'iknowledgebase_settings', false );
$sidebar_hide = !empty($iknowledgebase_settings['post_hide_sidebar']) ? ' is-hidden-touch' : '';
?>

<section class="section">
	<div class="container">
		<div class="is-max-w-2xl mx-auto">
			<?php get_search_form(); ?>
		</div>
		<div class="columns pt-5">
			<div class="column is-full-touch">
				<?php iknowledgebase_breadcrumbs(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><?php get_sidebar(); ?></div>
			<div class="col-md-9"><?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'post' ); ?>
				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				?>
			<?php endwhile; // end of the loop. ?></div>
		</div>

	</div>

</section>


<?php get_footer(); ?>
