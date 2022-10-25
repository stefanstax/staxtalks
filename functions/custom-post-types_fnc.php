<?php
// ! Clients Post Type
// Clients Custom Post Type
function clients_init()
{
	// set up product labels
	$labels = array(
		'name' => 'Clients',
		'singular_name' => 'Client',
		'add_new' => 'Add New Client',
		'add_new_item' => 'Add New Client',
		'edit_item' => 'Edit Client',
		'new_item' => 'New Client',
		'all_items' => 'All Clients',
		'view_item' => 'View Client',
		'search_items' => 'Search Clients',
		'not_found' =>  'No Clients Found',
		'not_found_in_trash' => 'No Clients found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Clients',
	);

	// register post type
	register_post_type(
		'client',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'client'),
			'query_var' => true,
			'menu_icon' => 'dashicons-networking',
			'taxonomies' => array("category", 'post_tag'),
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'thumbnail',
				'author',
				'page-attributes'
			)
		)
	);
	// register taxonomy
	register_taxonomy('client_category', 'client', array('hierarchical' => false, 'label' => 'Client Location', 'query_var' => true, 'rewrite' => array('slug' => 'client-category')));
	register_taxonomy('client_status', 'client', array('hierarchical' => false, 'label' => 'Client Status', 'query_var' => true, 'rewrite' => array('slug' => 'client-status')));
}
add_action('init', 'clients_init');

function settings()
{
	// set up product labels
	$labels = array(
		'name' => 'Content Settings',
		'singular_name' => 'Settings',
		'add_new' => 'Add New Settings',
		'add_new_item' => 'Add New Settings',
		'edit_item' => 'Edit Settings',
		'new_item' => 'New Settings',
		'all_items' => 'All Settings',
		'view_item' => 'View Settings',
		'search_items' => 'Search Settings',
		'not_found' =>  'No Settings Found',
		'not_found_in_trash' => 'No Settings found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Settings',
	);

	// register post type
	register_post_type(
		'settings',
		array(
			'labels' => $labels,
			'public' => false,
			'has_archive' => false,
			'show_ui' => true,
			'show_in_rest' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'settings'),
			'query_var' => true,
			'menu_icon' => 'dashicons-admin-settings',
			'supports' => array(
				'title',
				'custom-fields'
			)
		)
	);
}
add_action('init', 'settings');

// ! Frequently Asked Questions Post Type
// Clients Custom Post Type
function faq_init()
{
	// set up product labels
	$labels = array(
		'name' => 'Questions',
		'singular_name' => 'Question',
		'add_new' => 'Add New Question',
		'add_new_item' => 'Add New Question',
		'edit_item' => 'Edit Question',
		'new_item' => 'New Question',
		'all_items' => 'All Questions',
		'view_item' => 'View Question',
		'search_items' => 'Search Questions',
		'not_found' =>  'No Questions Found',
		'not_found_in_trash' => 'No Questions found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Questions',
	);

	// register post type
	register_post_type(
		'questions',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'question'),
			'query_var' => true,
			'menu_icon' => 'dashicons-admin-comments',
			'taxonomies' => array("category", 'post_tag'),
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'thumbnail',
				'author',
				'page-attributes'
			)
		)
	);
}
add_action('init', 'faq_init');

// ! Confessions Post Type
// Clients Custom Post Type
function confessions_init()
{
	// set up product labels
	$labels = array(
		'name' => 'Confessions',
		'singular_name' => 'Confession',
		'add_new' => 'Add New Confession',
		'add_new_item' => 'Add New Confession',
		'edit_item' => 'Edit Confession',
		'new_item' => 'New Confession',
		'all_items' => 'All Confessions',
		'view_item' => 'View Confession',
		'search_items' => 'Search Confessions',
		'not_found' =>  'No Confessions Found',
		'not_found_in_trash' => 'No Confessions found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Confessions',
	);

	// register post type
	register_post_type(
		'confessions',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'confession'),
			'query_var' => true,
			'menu_icon' => 'dashicons-open-folder',
			'taxonomies' => array("category", 'post_tag'),
			'supports' => array(
				'title',
				// 'editor',
				// 'excerpt',
				// 'trackbacks',
				// 'custom-fields',
				// 'comments',
				// 'revisions',
				// 'thumbnail',
				'author',
				// 'page-attributes'
			)
		)
	);
}
add_action('init', 'confessions_init');

// ! Affiliates Post Type
// Clients Custom Post Type
function affiliates_init()
{
	// set up product labels
	$labels = array(
		'name' => 'Affiliates',
		'singular_name' => 'Affiliate',
		'add_new' => 'Add New Affiliate',
		'add_new_item' => 'Add New Affiliate',
		'edit_item' => 'Edit Affiliate',
		'new_item' => 'New Affiliate',
		'all_items' => 'All Affiliates',
		'view_item' => 'View Affiliate',
		'search_items' => 'Search Affiliates',
		'not_found' =>  'No Affiliates Found',
		'not_found_in_trash' => 'No Affiliates found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Affiliates',
	);

	// register post type
	register_post_type(
		'affiliates',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'affiliate'),
			'query_var' => true,
			'menu_icon' => 'dashicons-open-folder',
			'taxonomies' => array("category", 'post_tag'),
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'thumbnail',
				'author',
				'page-attributes'
			)
		)
	);
}
add_action('init', 'affiliates_init');
