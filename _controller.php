<?php
// --------------------------------------------------
// IMPORT DEPENDENCIES
// --------------------------------------------------
// Functions
require_once './functions.php';


// --------------------------------------------------
// INITIAL VALIDATION
// --------------------------------------------------
if ( $_SERVER['REQUEST_METHOD'] !== 'GET' ) {

	echo json_encode( 'Service accepts GET requests only.' );
	exit();

} else if ( empty( $_GET ) ) {

	echo json_encode( 'Received empty request' );
	exit();

}


// --------------------------------------------------
// HANDLE REQUEST
// --------------------------------------------------
$qs = $_GET;

if ( strtolower( $qs['type'] ) === 'quote' ) {
	echo json_encode( getRandomQuoteData() ); /// TEMP
}
?>
