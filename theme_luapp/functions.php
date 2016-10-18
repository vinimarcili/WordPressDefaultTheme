<?php
/**
 * @package WordPress
 * @subpackage Theme_Luapp
 * @since Theme Lunnar Application 1.0
 */

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Theme Lunnar Application 1.0
 */

define( 'LUAPP_PATH', get_template_directory() . '/' );

define( 'LUAPP_INC', LUAPP_PATH . 'inc/' );

// Include the customizer functionality
require_once LUAPP_INC . 'customizer.php';

//Include the enqueues
require_once LUAPP_INC . 'enqueues.php';

//Include the theme_functions
require_once LUAPP_INC . 'theme_functions.php';

// Include the cusom appearance menu, to footer, header...
require_once LUAPP_INC . 'admin_custom.php';

// Include Bootstrap Nav Walker
require_once LUAPP_INC . 'wp_bootstrap_navwalker.php';
