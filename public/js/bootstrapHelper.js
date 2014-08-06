
var BootstrapHelper = { };

/**
 * Toggles a jQuery element by removing a previous highlight
 * and then highlighting the currently selected element.
 * @param { jQuery element } $el
 * @return { void }
 */
BootstrapHelper.toggleItem = function( $el ) {
	if ( $el ) {
	
		// remove an existing active class
		$el.parent( ).find( ".active" ).removeClass( "active" );
				
		// set the clicked item to active
		$el.addClass( "active" );
	}
}
