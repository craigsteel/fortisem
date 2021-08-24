<?php
/**
* Social Sharing btn link
*
* @package fortisem
*/

function crunchify_social_sharing_buttons($content) {
	global $post;
	if(is_single()) {

		// Get current page URL
		$crunchifyURL = urlencode(get_permalink());

		// Get current page title
		$crunchifyTitle = str_replace( ' ', '%20', get_the_title());

		// Get Post Thumbnail for pinterest
		$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;
		$googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;

		// Based on popular demand added Pinterest too
		// $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;

		// Add sharing button at the end of page/page content
		$content .= '<!-- Crunchify.com social sharing. Get your copy here: http://crunchify.me/1VIxAsz -->';
		$content .= '<div class="crunchify-social">';
		$content .= '<h5>PLEASE SHARE ON YOUR</h5> <a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>';
		$content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>';
		$content .= '<a class="crunchify-link crunchify-linkedin" href="'.$linkedInURL.'" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>';
		$content .= '<a class="crunchify-link crunchify-google-plus" href="'.$googleURL.'" target="_blank"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>';
		// $content .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" target="_blank"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a>';
		$content .= '</div>';

		return $content;
	}else{
		// if not a post/page then don't include sharing button
		return $content;
	}
};

add_filter( 'the_content', 'crunchify_social_sharing_buttons');