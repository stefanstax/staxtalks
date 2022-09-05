<?php

// Global styles
function global_styles()
{
	wp_enqueue_style('global_styles', get_template_directory_uri() . '/resources/css/global-styles.css', array(), time());
	wp_enqueue_style('local_styles', get_template_directory_uri() . '/resources/css/local-styles.css', array(), time());
	wp_enqueue_style('navigation_css', get_template_directory_uri() . '/resources/css/navigation.css', array(), time());
	wp_enqueue_style('banners_css', get_template_directory_uri() . '/resources/css/banners.css', array(), time());
	wp_enqueue_style('fluentforms_css', get_template_directory_uri() . '/resources/css/fluentforms.css', array(), time());

	if (function_exists("building_client_shortcode") or function_exists("building_blog_shortcode")) {
		wp_enqueue_style('blog-layout', get_template_directory_uri() . '/resources/css/blog-layout.css', array(), time());
	}
}
add_action('wp_enqueue_scripts', 'global_styles');

function global_scripts()
{
	wp_enqueue_script('navigation_js', get_template_directory_uri() . '/resources/js/navigation.js', array(), time());

	// If current page is a blog post load table of contents function to populate 
	if (is_single()) {
		wp_enqueue_script('tableOfContents_js', get_template_directory_uri() . '/resources/js/tableOfContents.js', array(), time());
		wp_localize_script(
			"tableOfContents_js",
			"fields_js",
			array(
				'tableOfContentTracker' => get_field("toc_heading")
			)
		);
		wp_enqueue_script('stringManipulations_js', get_template_directory_uri() . '/resources/js/stringManipulations.js', array(), time());
	}

	if (is_page(["privacy-policy", "terms-and-conditions"])) {
		wp_enqueue_script('legalPages_js', get_template_directory_uri() . '/resources/js/legalPages.js', array(), time());
	}

	if (is_singular('client')) {
		wp_enqueue_script('clients_js', get_template_directory_uri() . '/resources/js/clients.js', array(), time());
	}

	if (is_page('anonymous-confessions')) {
		wp_enqueue_script('confessions_js', get_template_directory_uri() . '/resources/js/confessions.js', array(), time());
	}

	if (is_page('contact')) {
		wp_enqueue_script('contact_js', get_template_directory_uri() . '/resources/js/contact.js', array(), time());
	}
}
add_action('wp_footer', 'global_scripts');
