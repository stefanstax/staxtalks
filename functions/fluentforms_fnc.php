<?php

// ! Login form 
add_action('fluentform_before_insert_submission', function ($insertData, $data, $form) {

	if($form->id != 4) { // 23 is your form id. Change the 23 with your own login for ID
			return;
	}

	$redirectUrl = home_url(); // You can change the redirect url after successful login

	// if you have a field as refer_url as hidden field and value is: {http_referer} then
	// We can use that as a redirect URL. We will redirect if it's the same domain
	// If you want to redirect to a fixed URL then remove the next 3 lines
	if(!empty($data['refer_url']) && strpos($data['refer_url'], site_url()) !== false) {
			$redirectUrl = $data['refer_url'];
	}

	if (get_current_user_id()) { // user already registered
			wp_send_json_success([
					'result' => [
							'redirectUrl' => $redirectUrl,
							'message' => 'Login successful. Redirecting now...'
					]
			]);
	}

	$email = \FluentForm\Framework\Helpers\ArrayHelper::get($data, 'email'); // your form should have email field
	$password = \FluentForm\Framework\Helpers\ArrayHelper::get($data, 'password'); // your form should have password field

	if(!$email || !$password) {
			wp_send_json_error([
					'errors' => ['Please provide email and password']
			], 423);
	}

	$user = get_user_by_email($email);
	if($user && wp_check_password($password, $user->user_pass, $user->ID)) {
			wp_clear_auth_cookie();
			wp_set_current_user($user->ID);
			wp_set_auth_cookie($user->ID);
			/* user is not logged in.
			* If you use wp_send_json_success the the submission will not be recorded
			* If you remove the wp_send_json_success then it will record the data in fluentform
			* in that case you should redirect the user on form submission settings
			*/
			wp_send_json_success([
					'result' => [
							'redirectUrl' => $redirectUrl,
							'message' => 'Login successful, Please wait while we redirect you.'
					]
			]);
	} else {
			// password or user don't match
			wp_send_json_error([
					'errors' => ['Email / password is not correct']
			], 423);
	}
}, 10, 3);