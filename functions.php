<?php

function getBgColor() {
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