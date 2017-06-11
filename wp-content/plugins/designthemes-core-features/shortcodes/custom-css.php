<?php

function dttheme_generate_random_number( $sc ) {

	$random_number = array(rand(), rand(), rand(), rand());
	shuffle($random_number);
	$random_number = implode('', $random_number);

	return $sc.'-'.$random_number;
}

function dttheme_generate_custom_css( $css ) {
	wp_register_style( 'veda-custom-shortcode-css', '', array(), null, 'all' );
	wp_enqueue_style( 'veda-custom-shortcode-css' );
	wp_add_inline_style('veda-custom-shortcode-css', $css);		
}

add_action( 'wp_head', 'codex_wp_head',999 );
function codex_wp_head() {
	ob_start();
}

add_action( 'wp_footer', 'codex_wp_footer',999 );
function codex_wp_footer() {
	$content = ob_get_clean();
	$regex = "#<style id='veda-custom-shortcode-css-inline-css' type='text/css'>([^<]*)</style>#";
	preg_match($regex, $content, $matches);
	$style = isset($matches[0]) ? $matches[0] : '';
	$content = str_replace($style,'',$content);
	$content = str_replace('</head>',$style.'</head>',$content);	
	echo $content;
}

function dttheme_generate_iconbox_css( $unique_class, $attributes ) {
	
	$css = '';

	//Type 1
	if(!array_key_exists('type', $attributes)) {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type1 .icon-wrapper span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type1 .icon-content h4::before {';
			$css .= 'background:'.$attributes['color'].';';	
		$css .= '}';
	}

	//Type 2
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type2') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type2 .icon-wrapper span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 3
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type3') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type3 .icon-wrapper span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type3:hover {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type3:hover .icon-content h4 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type3.dt-sc-rounded .icon-wrapper {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 4
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type4') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type4 .icon-wrapper span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 5
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type5') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type5 .icon-wrapper {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 5-A
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type5') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type5.no-icon-bg .icon-wrapper span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 5-B
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type5') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type5.no-icon .icon-content h4, .'.$unique_class.'.dt-sc-icon-box.type5.no-icon {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 6
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type6') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type6 .icon-wrapper span, .'.$unique_class.'.dt-sc-icon-box.type6 .icon-content h4 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type6 .icon-content a.dt-sc-button {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type6:hover {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 7
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type7') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type7 .icon-wrapper span {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type7:hover {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 8
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type8') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type8 .icon-content h4 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 9
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type9') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type9 .icon-wrapper span, .'.$unique_class.'.dt-sc-icon-box.type9 .icon-content h5, .'.$unique_class.'.dt-sc-icon-box.type9 .icon-content h4 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 10
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type10') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type10:hover .icon-content h4 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type10 .icon-wrapper:after {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type10 {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 11
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type11') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type11:before, .'.$unique_class.'.dt-sc-icon-box.type11 .dt-sc-button:before, .'.$unique_class.'.dt-sc-icon-box.type11 .dt-sc-button:after, .'.$unique_class.'.dt-sc-icon-box.type11 .dt-sc-button:hover {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type11 .icon-wrapper span, .'.$unique_class.'.dt-sc-icon-box.type11 .dt-sc-button {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type11 .dt-sc-button {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 12
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type12') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type12 {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 13
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type13') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type13 .icon-wrapper, .'.$unique_class.'.dt-sc-icon-box.type13:hover {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 14
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type14') {
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type14 .icon-content h4 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-icon-box.type14:hover {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}

	return $css;

}

function dttheme_generate_contactinfo_css( $unique_class, $attributes ) {
	
	$css = '';

	//Type 1
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type1') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Type 2
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type2') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type2 {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type2 span {';
			$css .= 'background:'.$attributes['color'].';';	
		$css .= '}';
	}
	
	//Type 3
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type3') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type3 {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type3 span {';
			$css .= 'color:'.$attributes['color'].';';	
		$css .= '}';
	}
	
	//Type 4
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type4') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type4 span:after {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type4 {';
			$css .= 'border-color:'.$attributes['color'].';';	
		$css .= '}';
	}
	
	//Type 5
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type5') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type5 .dt-sc-contact-icon, .'.$unique_class.'.dt-sc-contact-info.type5:hover {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type5:hover .dt-sc-contact-icon span {';
			$css .= 'color:'.$attributes['color'].';';	
		$css .= '}';
	}
	
	//Type 6
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type6') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type6 {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 7
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type7') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type7 span:after {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 8
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type8') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type8 span {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type8:hover {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}

	return $css;

}


function dttheme_generate_post_css( $unique_class, $attributes ) {
	
	$css = '';

	//Default
	if(!array_key_exists('style', $attributes)) {
		$css .= '.'.$unique_class.'.default.blog-entry .entry-details .dt-sc-button, .'.$unique_class.'.default.blog-entry .entry-title h4 a:after, .'.$unique_class.'.default.blog-entry .entry-format a {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.default.blog-entry:hover .entry-title h4 a, .'.$unique_class.'.default.blog-entry a:not(.dt-sc-button):hover, .'.$unique_class.'.default.blog-entry .entry-thumb .date {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.default.blog-entry:hover {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Entry Date Left
	if(array_key_exists('style', $attributes) && $attributes['style'] == 'entry-date-left') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Entry Date Author Left
	if(array_key_exists('style', $attributes) && $attributes['style'] == 'entry-date-author-left') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Blog Medium Style
	if(array_key_exists('style', $attributes) && $attributes['style'] == 'blog-medium-style') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Medium Highlight
	if(array_key_exists('style', $attributes) && $attributes['style'] == 'blog-medium-style dt-blog-medium-highlight') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Medium Skin Highlight
	if(array_key_exists('style', $attributes) && $attributes['style'] == 'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}		

	return $css;

}

function dttheme_generate_pricingtable_css( $unique_class, $attributes ) {
	
	$css = '';

	$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
		$css .= 'color:'.$attributes['color'].';';
	$css .= '}';
	
	return $css;

}

function dttheme_generate_pricingtable_minimal_css( $unique_class, $attributes ) {
	
	$css = '';

	$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
		$css .= 'color:'.$attributes['color'].';';
	$css .= '}';
	
	return $css;

}

function dttheme_generate_pricingtable_type2_css( $unique_class, $attributes ) {
	
	$css = '';

	$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
		$css .= 'color:'.$attributes['color'].';';
	$css .= '}';
	
	return $css;

}

function dttheme_generate_events_css( $unique_class, $attributes ) {
	
	$css = '';

	//Type 1
	if(!array_key_exists('type', $attributes)) {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Type 2
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type2') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Type 3
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type3') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Type 4
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type4') {
		$css .= '.'.$unique_class.'.dt-sc-contact-info.type1 span {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}

	//Type 5
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type5') {
		$css .= '.'.$unique_class.'.dt-sc-event.type5:hover .events-cost-booking .dt-sc-event-cost .event-booking-price, .'.$unique_class.'.dt-sc-event.type5:hover h2.entry-title a, .'.$unique_class.'.dt-sc-event.type5 .dt-sc-event-thumb .dt-sc-event-date {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-event.type5 .dt-sc-events-read-more {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}

	return $css;

}

function dttheme_generate_imagecaption_css( $unique_class, $attributes ) {
	
	$css = '';

	//Type 1
	if(!array_key_exists('type', $attributes)) {
		$css .= '.'.$unique_class.'.dt-sc-image-caption .dt-sc-image-wrapper .icon-wrapper:before {';
			$css .= 'border-bottom-color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-image-caption .dt-sc-image-content a.dt-sc-button {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}

	//Type 2
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type2') {
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type2 .dt-sc-image-content {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type2:hover .dt-sc-image-content {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 3
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type3') {
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type3 .dt-sc-image-content h3 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 4
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type4') {
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type4 {';
			$css .= 'border-color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 5
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type5') {
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type5 .dt-sc-image-title h3 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 7
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type7') {
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type7 .dt-sc-image-content h3 {';
			$css .= 'color:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 8
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type8') {
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type8 .dt-sc-image-content:before {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}
	
	//Type 9
	if(array_key_exists('type', $attributes) && $attributes['type'] == 'type9') {
		$css .= '.'.$unique_class.'.dt-sc-image-caption.type9 .dt-sc-image-overlay .dt-sc-button {';
			$css .= 'background:'.$attributes['color'].';';
		$css .= '}';
	}

	return $css;

}
?>