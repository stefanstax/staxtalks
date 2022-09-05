<?php

// Shortcode to display clients in a grid
function building_client_shortcode()
{
	ob_start();
	get_template_part('templates/sections/projects', "part");
	return ob_get_clean();
}

add_shortcode('clients_grid', 'building_client_shortcode');

// Shortcode to display posts in a grid
// function building_post_shortcode()
// {
// 	ob_start();
// 	get_template_part('templates/sections/tableofcontents', "part");
// 	return ob_get_clean();
// }

// add_shortcode('table_of_contents', 'building_post_shortcode');

// Shortcode to display clients in a grid
function building_blog_shortcode()
{
	ob_start();
	get_template_part('templates/sections/blogs', "part");
	return ob_get_clean();
}

add_shortcode('blogs_grid', 'building_blog_shortcode');

function building_faq_shortcode()
{
	ob_start();
	get_template_part('templates/sections/faq', "part");
	return ob_get_clean();
}

add_shortcode('faq_grid', 'building_faq_shortcode');

function building_confessions_shortcode()
{
	ob_start();
	get_template_part('templates/sections/confessions', "part");
	return ob_get_clean();
}

add_shortcode('confessions_grid', 'building_confessions_shortcode');

function building_affiliates_shortcode()
{
	ob_start();
	get_template_part('templates/sections/affiliates', "part");
	return ob_get_clean();
}

add_shortcode('affiliates_grid', 'building_affiliates_shortcode');
