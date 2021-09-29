( function( api ) {

	// Extends our custom "transport-solutions" section.
	api.sectionConstructor['transport-solutions'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );