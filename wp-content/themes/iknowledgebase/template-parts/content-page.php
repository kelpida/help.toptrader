<?php
/**
 * The template used for displaying single page content in page.php
 *
 * @package iknowledgebase
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
    <div class="content">
		<?php the_content(); ?>
    </div>

	<?php iknowledgebase_link_pages(); ?>
</article>
