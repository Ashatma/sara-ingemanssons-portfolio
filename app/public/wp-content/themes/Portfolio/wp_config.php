<?php

	define( 'WP_DEBUG', true );

	if ( WP_DEBUG ) {

		define( 'SCRIPT_DEBUG', true );

		define( 'WP_DEBUG_LOG', true );

		define( 'WP_DEBUG_DISPLAY', true );

		@ini_set( 'display_errors', 1 );

	}

?>