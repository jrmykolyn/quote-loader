$( document ).ready( function() {
	/* -------------------------------------------------- */
	/* DECLARE VARS */
	/* -------------------------------------------------- */
	var app = {
		state: 'resting'
	};

	// Define transition-related vars.
	var min_dur = 900;
	var multiplier_dur = 100;

	// Nav
	var nav = $( '.js--nav' );
	var nav_toggle = $( '.js--nav-toggle' );


	// Get DOM elements to transition.
	var elems = $( '.quote-elem.js--trans-ready' );


	// Remove 'obstruct' elem.
	var obstruct = $( '.obstruct' );
	obstruct.animate( { 'width': '0px' }, 800, 'easeInExpo' );


	// Loop over mateched elements.
	// Apply 'show' class after element-specific duration has elapsed.
	for ( var i = 0, x = elems.length; i < x; i++ ) {
		var elem = elems[i];

		( function( elem, index ) {
			setTimeout( function() {
				$( elem )
					.addClass( 'active' )
					.removeClass( 'js--trans-ready' );
			}, min_dur + ( multiplier_dur * index ) );
		} )( elem, i );
	}


	/* -------------------------------------------------- */
	/* DECLARE FUNCTIONS */
	/* -------------------------------------------------- */
	function fetchQuote( callback ) {
		console.log( window.location ); /// TEMP

		$.ajax( {
			method: 'GET',
			url: window.location.href + '/api',
			data: {
				type: 'quote',
				hidden: true
			}
		} ).then( function( response ) {
			callback( JSON.parse( response ) );
		} );
	}


	function buildAndInsertQuote( quoteArr ) {
		// Build quote.
		var output = buildQuoteElem( quoteArr );

		// Add quote to document.
		$( '.quote-wrap' ).append( output );

		// Reset 'state', remove supplementary class(es) from <body>.
		if ( app.state === 'active' ) {
			app.state = 'inactive';
			$( 'body' ).removeClass( 'fetching-data' );
		}
	}


	function buildQuoteElem( quoteArr ) {
		var quote_elem = $( '<blockquote>' )
			.addClass( 'quote-elem' );

		var quote_body = buildQuoteBody( { quoteText: quoteArr[1] } );
		var quote_footer = buildQuoteFooter( { quoteAuthor: quoteArr[0], quoteContext: quoteArr[3] } );

		// Assemble 'quote parts'
		quote_elem.append( quote_body );
		quote_elem.append( quote_footer );

		return quote_elem ;
	}


	function buildQuoteBody( data ) {
		var quote_body = $( '<div>' );
		var quote_text = $( '<span>' );

		quote_body.addClass( 'quote-elem__body' );
		quote_text.append( data.quoteText );

		quote_body.append( quote_text )

		return quote_body;
	}


	function buildQuoteFooter( data ) {
		var quote_footer = $( '<footer>' )
			.addClass( 'quote-elem__footer' );

		// Build 'author' elem. if data is available.
		if ( data.quoteAuthor ) {
			var quote_citation = $( '<cite>' )
				.addClass( 'text--attribution' )
				.append( data.quoteAuthor );

			quote_footer.append( quote_citation );
		}

		// Build 'context' elem. if data is available.
		if ( data.quoteContext ) {
			var quote_context = $( '<span>' )
				.addClass( 'text--context-alt' )
				.append( data.quoteContext );

			quote_footer.append( quote_context );
		}

		return quote_footer;
	}


	/* -------------------------------------------------- */
	/* EVENTS */
	/* -------------------------------------------------- */
	$( window ).on( 'keydown', function( e ) {
		if ( e.keyCode === 39 && app.state !== 'active' ) {
			// Update 'state'.
			app.state = 'active';

			// Add supplementary class to <body> elem.
			$( 'body' ).addClass( 'fetching-data' );

			$( '.quote-elem.active' ).removeClass( 'active' );

			setTimeout( function() {
				$( '.quote-elem' ).eq( 0 ).remove();
			}, 500 );

			setTimeout( function() {
				$( '.quote-elem' ).addClass( 'active' )
			}, 500 );

			setTimeout( function() {
				fetchQuote( buildAndInsertQuote );
			}, 500 );
		}
	} );


	nav_toggle.on( 'click', function( e ) {
		nav.toggleClass( 'is-active' );
	} );


	nav.on( 'click', function( e ) {
		if ( $( e.target ).hasClass( 'js--nav' ) ) {
			nav.toggleClass( 'is-active' );
		}
	} );

} );