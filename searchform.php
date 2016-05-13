<?php
/**
 * The search form.
 *
 * @package Chroma_Theme
 */ ?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label class="screen-reader-text" for="search">
		<?php echo _x( 'Search for:', 'label' ) ?>
	</label>
    <input id="search" type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <button type="submit" class="search-submit">
    	<span class="fa fa-search"></span>
    	<span class="hidden"> Search</span>
    </button>
</form>