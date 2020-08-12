<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package astabud
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function astabud_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'astabud_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function astabud_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'astabud_pingback_header');

function add_file_types_to_uploads($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');