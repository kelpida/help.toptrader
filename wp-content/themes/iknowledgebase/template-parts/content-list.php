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
<p style="padding:10px 15px;">
	<?php
	echo wp_trim_words( get_the_content(), 40, '...' );
	?>
</p>
