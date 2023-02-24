<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package iknowledgebase
*/

$post_icon = apply_filters( 'iknowledgebase_post_icon', 'icon-book' );
?>

<a class="panel-block is-borderless" href="<?php the_permalink(); ?>">
	<span class="panel-icon">
		<img src="<?php bloginfo('template_url'); ?>/images/book.svg"/>
       
	</span>
	<?php do_action( 'iknowledgebase_post_time');?>
	<h4><?php the_title(); ?></h4>
</a>
<div class="content-list-small-desc">
	<p>
		<?php
		echo wp_trim_words( get_the_content(), 40, '...' );
		?>
	</p>
	<div class="text-center" style="margin-left: auto;">
		<p class="content-list-featured d-justify-content-end">Featured</p>
		<div class="featured-icons">
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
		</div>
	</div>
	
<div>
