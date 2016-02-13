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
    <div class="input-group input-group-sm">
        <input id="search" type="search" class="search-field form-control" 	            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	    <div class="input-group-btn">
		    <button type="submit" class="btn btn-default search-submit">
		    	<span class="fa fa-search"></span>
		    	<span class="hidden"> Search</span>
		    </button>
	    </div>
    </div>
</form>