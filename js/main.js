$( document ).ready( function() {
	/* -------------------------------------------------- */
	/* DECLARE VARS */
	/* -------------------------------------------------- */
	// Define transition-related vars.
	var min_dur = 900;
	var multiplier_dur = 100;

	// Nav
	var nav = $( '.js--nav' );
	var nav_toggle = $( '.js--nav-toggle' );


	// Get DOM elements to transition.
	var elems = $( '.js--trans-in' );


	// Remove 'obstruct' elem.
	var obstruct = $( '.obstruct' );
	obstruct.animate( { 'width': '0px' }, 800, 'easeInExpo' );


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


	/* -------------------------------------------------- */
	/* EVENTS */
	/* -------------------------------------------------- */
	nav_toggle.on( 'click', function( e ) {
		nav.toggleClass( 'is-active' );
	} );

	nav.on( 'click', function( e ) {
		if ( $( e.target ).hasClass( 'js--nav' ) ) {
			nav.toggleClass( 'is-active' );
		}
	} );

} );