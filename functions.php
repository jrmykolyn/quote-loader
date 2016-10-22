<?php

function getBgClass( $color ) {
	$prefix = "bg--";

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