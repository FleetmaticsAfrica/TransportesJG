<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function transport_solutions_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'transport-solutions' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	transport_solutions_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'transport_solutions_register_recommended_plugins' );