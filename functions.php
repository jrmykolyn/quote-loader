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

function getRandomQuoteData() {
    $data = file_get_contents( './data/quotes.csv' );
    $data_arr = array_filter( explode( "\n", $data ), strlen );

    $quote_index = rand( 0, ( count($data_arr) - 1 ) );
    $quote = $data_arr[$quote_index];
    $quote_arr = explode( '|||' , $quote );

    return $quote_arr;
}

function getRandomQuoteElem( $options = array() ) {
	$quote_arr = getRandomQuoteData();

	return include( './includes/quote/_quote.php' );
}

?>