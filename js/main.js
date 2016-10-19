$( document ).ready( function() {
	// Define transition-related vars.
	var min_dur = 800;
	var multiplier_dur = 100;


	// Get DOM elements to transition.
	var elems = $( '.js--trans-in' );


	// Loop over mateched elements.
	// Apply 'show' class after element-specific duration has elapsed.
	for ( var i = 0, x = elems.length; i < x; i++ ) {
		var elem = elems[i];

		( function( elem, index ) {
			setTimeout( function() {
				$( elem ).addClass( 'elem--show' );
			}, min_dur + ( multiplier_dur * i ) );
		} )( elem, i );
	}
} );