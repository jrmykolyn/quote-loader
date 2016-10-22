<?php

function getBgClass( $color ) {
	$prefix = "bg--";

	return $prefix . $color;
}

function getOverlayClass( $color, $before = true ) {
	$prefix = ( $before === true ) ? 'before-overlay--' : 'after-overlay--';

	return $prefix . $color;
}

function getAccentColor() {
	$colors = array(
		'tomato',
		'coral',
		'mediumseagreen',
		'lightseagreen',
		'mediumturquoise',
		'cornflowerblue',
	);

	return $colors[rand(0, ( count( $colors ) - 1 ) )];
}

?>