<?php
/**
 * Social Sharing Buttons.
 *
 * @package Chroma_Theme
 */

// Get general values
$emailsubject    =  'Look at this...';
$pageurl         =  esc_url( get_permalink() );
$pagetitle       =  esc_html( get_the_title() );
$image_attributes = wp_get_attachment_image_src( $attachment_id = get_post_thumbnail_id($post->ID), $size = 'full' );
if ( $image_attributes ) :
    $featuredimage   =  esc_url( $image_attributes[0] );
endif;

// Build social sharing parameter links
$facebookshare   =  'http://www.facebook.com/sharer.php?u=' . $pageurl;
$twittershare    =  'https://twitter.com/intent/tweet?url=' . $pageurl . '&text=' . $pagetitle;
$linkedinshare   =  'http://www.linkedin.com/shareArticle?url=' . $pageurl . '&title=' . $pagetitle;
$googleshare     =  'https://plus.google.com/share?url=' . $pageurl;
$pinterestshare  =  'https://pinterest.com/pin/create/bookmarklet/?media=' . $featuredimage . '&url=' . $pageurl . '&description=' . $pagetitle;
$emailshare      =  'mailto:?&subject=' . $emailsubject . '&body=' . $pagetitle . '%0A' . $pageurl;


// Get display options from ACF options page
if (_get_field('hide_social_share_buttons', 'options')) {
	$selected = _get_field('hide_social_share_buttons', 'options');
	if( in_array('hide-facebook', $selected) ) $hidefacebook = true;
	if( in_array('hide-twitter', $selected) ) $hidetwitter = true;
	if( in_array('hide-linkedin', $selected) ) $hidelinkedin = true;
	if( in_array('hide-google', $selected) ) $hidegoogle = true;
	if( in_array('hide-pinterest', $selected) ) $hidepinterest = true;
	if( in_array('hide-email', $selected) ) $hideemail = true;
}
?>

<ul class="social-share">

	<?php 
	if ( !$hidefacebook ) {
		echo '<li class="facebook-share"><a class="share-popup" href="' . $facebookshare . '" title="Share this on Facebook"><i class="fa fa-facebook"></i> Share</a></li>';
	}
	if ( !$hidetwitter ) { 
		echo '<li class="twitter-share"><a class="share-popup" href="' . $twittershare . '" title="Tweet this on Twitter"><i class="fa fa-twitter"></i> Tweet</a></li>';
	}
	if ( !$hidelinkedin ) {
		echo '<li class="linkedin-share"><a class="share-popup" href="' . $linkedinshare . '" title="Share this on LinkedIn"><i class="fa fa-linkedin"></i> Share</a></li>';
	}
	if ( !$hidegoogle ) {
		echo '<li class="google-share"><a class="share-popup" href="' . $googleshare . '" title="Share this on Google+"><i class="fa fa-google"></i> +1</a></li>';
	}
	if ( !$hidepinterest ) {
		echo '<li class="pinterest-share"><a class="share-popup" href="' . $pinterestshare . '" title="Pin this on Pinterest"><i class="fa fa-pinterest"></i> Pin it</a></li>';
	}
	if ( !$hideemail ) {
		echo '<li class="email-share"><a href="' . $emailshare . '" title="Email this to a Friend"><i class="fa fa-envelope-o"></i> Email</a></li>';
	} ?>
</ul>
