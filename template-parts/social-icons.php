<?php
/**
 * Social Icons.
 *
 * @package Chroma_Theme
 */

if( function_exists( 'get_field' ) && have_rows('social_icons', 'option') ): ?>

    <ul class="social-icons">

    <?php while( have_rows('social_icons', 'option') ): the_row();
		
		$soc_object = get_sub_field_object('social_icon_type');
		$soc_value = get_sub_field('social_icon_type');
		$soc_title = $soc_object['choices'][ $soc_value ];
		$soc_fa_class = get_sub_field('social_icon_type');

		if ( get_sub_field('social_icon_target') ) { $soc_target = ' target="_blank"'; }

		if ( get_sub_field('social_icon_custom_class') ) {

			// Custom Social Icons
			$soc_fa_class = 'fa ' . get_sub_field('social_icon_custom_class');
			$soc_title = get_sub_field('social_icon_custom_name');

		} ?>

			<li class="<?php the_sub_field('social_icon_type'); ?>">
				<a href="<?php the_sub_field('social_icon_link'); ?>" title="<?php echo $soc_title; ?>"<?php echo $soc_target; ?>>
					<span class="socicon">
						<span class="fa fa-<?php echo $soc_fa_class; ?>"></span>
					</span>
					<span class="sociname"><?php echo $soc_title; ?></span>
				</a>
			</li>

    <?php $soc_target = ''; endwhile; ?>

    </ul>

<?php endif; ?>
