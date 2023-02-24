<?php
/**
 * The template used for displaying single post content in single.php
 *
 * @package iknowledgebase
 */

$iknowledgebase_settings = get_option( 'iknowledgebase_settings', false );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="box">
       
		<?php if ( has_post_thumbnail() === true && ! empty( $iknowledgebase_settings['featured_image'] ) ) : ?>
            <figure class="image py-5">
				<?php the_post_thumbnail(); ?>
            </figure>
		<?php endif; ?>
        <div class="content">
			<div class="breadcrumb-single-post">
				<img src="<?php bloginfo('template_url'); ?>/images/book.svg"/>
				<p>Articles on <span></span></p>
			</div>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
        </div>
		
        <header class="entry-header">
            <h1 class="title is-2 is-spaced"><?php the_title(); ?></h1>
			<?php if ( empty( $iknowledgebase_settings['post_meta'] ) ) : ?>
                <div class="entry-meta level is-mobile py-3 is-size-7">
                    <div class="level-left">
                        <div class="level-item">
                        <span class="icon-text">
                          <span class="icon has-text-primary">
                            <img src="<?php bloginfo('template_url'); ?>/images/updated.svg"/>
                          </span>
                          <span>Updated on <?php iknowledgebase_posted_on(); ?></span>
                        </span>
                        </div>
                    </div>
                    <div class="level-right">
                        <!-- <div class="level-item is-hidden-touch">
                        <span class="icon-text">
                          <span class="icon has-text-primary">
                            <span class="icon-user-alt"></span>
                          </span>
                          <span><?php iknowledgebase_posted_by(); ?></span>
                        </span>
                        </div>
                        <div class="level-item">
                        <span class="icon-text">
                          <span class="icon has-text-primary">
                            <span class="icon-hourglass"></span>
                          </span>
                          <span><?php iknowledgebase_reading_time(); ?></span>
                        </span>
                        </div> -->
                    </div>
                </div>
	        <?php else: ?>
			<?php endif; ?>
        </header>

        <?php do_action('iknowledgebase_post_footer');?>

        <div class="tags are-medium">
			<?php the_tags( '', ' ', '' ); ?>
        </div>
    </div>

	<?php iknowledgebase_link_pages(); ?>
</article>


