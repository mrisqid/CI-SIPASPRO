<?php

function admin_logged_in()
{
	$ci = get_instance();
	if (!$ci->session->userdata('email')) {
		redirect('auth');
	} elseif ($ci->session->userdata('role_id') != 1) {
		redirect('auth/blocked');
	}
}

function user_logged_in()
{
	$ci = get_instance();
	if (!$ci->session->userdata('email')) {
		redirect('auth');
	} elseif ($ci->session->userdata('role_id') != 2) {
		redirect('auth/blocked');
	}
}
