<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */

$template_directory = get_template_directory();

/**
 * Basic theme functionality
 */
require $template_directory . '/core/includes/functions.php';

/**
 * Theme Options
 */
require $template_directory . '/core/includes/theme-options/theme-options.php';
require $template_directory . '/core/includes/theme-options/theme-options-page.php';
require $template_directory . '/core/includes/theme-options/theme-options-sanitize.php';

/**
 * Custom template tags for this theme.
 */
require $template_directory . '/core/includes/template-tags.php';

/**
 * Post layout functions.
 */
require $template_directory . '/core/includes/post-custom-layout.php';

/**
 * Support THA Theme hooks through Responsives own functions.
 */
require $template_directory . '/core/includes/tha-theme-hooks.php';
require $template_directory . '/core/includes/responsive-hooks.php';

/**
 * Theme Upsell
 */
require $template_directory . '/core/includes/upsell/theme-upsell.php';

/**
 * Implement the Custom Header feature.
 */
require $template_directory . '/core/includes/custom-header.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require $template_directory . '/core/includes/functions-extras.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require $template_directory . '/core/includes/functions-menu.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require $template_directory . '/core/includes/functions-plus.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require $template_directory . '/core/includes/functions-sidebar.php';

/**
 * Customizer additions.
 */
require $template_directory . '/core/includes/theme-options/customizer.php';

/**
 * Load Plugins compatibility file.
 */
require $template_directory . '/core/includes/functions-plugins.php';

/**
 * Load plugin dependency file.
 */
require $template_directory . '/core/includes/functions-install.php';
