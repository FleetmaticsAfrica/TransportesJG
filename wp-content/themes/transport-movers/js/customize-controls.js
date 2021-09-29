( function( api ) {

	// Extends our custom "transport-movers" section.
	api.sectionConstructor['transport-movers'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );