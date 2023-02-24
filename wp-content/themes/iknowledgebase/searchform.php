<?php
/**
 * Search form
 *
 * @package iknowledgebase
 */

$size = (is_single() || is_archive()) ? '' : ' is-medium';

?>
<form method="get" id="searchform" class="search-form is-relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="field has-addons m-0">
        <div class="control is-expanded">
            <label class="screen-reader-text"
                   for="s"><?php esc_html_e( 'Search for:', 'iknowledgebase' ); ?></label>
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s"
                   placeholder="<?php esc_attr_e( 'Search?', 'iknowledgebase' ); ?>"
                   class="input live-search is-primary<?php echo esc_attr($size);?>" autocomplete="off"/>
        </div>
        <div class="control">
            <button type="submit" class="button is-primary<?php echo esc_attr($size);?>">
                <span class="icon is-small">
                    <img src="<?php bloginfo('template_url'); ?>/images/searchnormal1.svg"/>
                </span>
            </button>
        </div>

    </div>
    <div class="search-result panel"></div>
</form>
