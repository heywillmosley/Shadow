<?php
/*
 * -------------------------------------------------------------------
 *  Maintenance Mode
 * -------------------------------------------------------------------
 */

	# Maintenance Modes, 0 = no maintenance, 1 = scheduled maintenance, 2 = maintenance mode is active
	define('MAINTENANCE', 0 );
	
	define('MAINT_TIME', 'Today at 11:30am EST' );
	
	define('MAINT_DURATION', '1 Hour' );
	
	define('MAINT_REASON', 'for a complete brand redesign.' );
	
	# Maintenance Message
	define('MAINT_MSG', SITE_NAME . ' will be undergoing scheduled maintenance ' . MAINT_TIME . ' for ' . MAINT_DURATION . ' ' . MAINT_REASON );
	
	# Define Time enabled
	define( 'MAINT_TIME_START', '' );
	
	# Maintenance Message
	define('MAINT_ACTIVE_MSG', 'Maintenance Mode on production server is enabled.' );
	
	