<?php

function getBodyClass() {
	$classes = array(
		'bg--tomato',
		'bg--coral',
		'bg--mediumseagreen',
		'bg--lightseagreen',
		'bg--mediumturquoise',
		'bg--cornflowerblue',
	);

	return $classes[rand(0, ( count( $classes ) - 1 ) )];
}

?>