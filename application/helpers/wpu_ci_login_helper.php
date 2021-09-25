<?php
function is_logged_in()
{
	$ci = get_instance();
	if (empty($ci->session->userdata('email'))) {
		$ci->Flasher_model->flashdata('You not login', 'Warning', 'danger');
		redirect('auth');
	}
}

function check_acces($role_id, $menu_id)
{
	$ci = get_instance();
	$role = $ci->db->get_where(
		'user_access_menu',
		[
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]
	)->num_rows();
	if ($role > 0) {
		return "checked='checked'";
	}
}


// function is_logged_in($menu_id = -1)
// {
// 	$ci = get_instance();
// 	if (empty($ci->session->userdata('email')) || empty($ci->session->userdata('role_id'))) {
// 		$ci->Flasher_model->flashdata('You not login','Warning','danger');
// 		redirect('auth');
// 	}else{
// 		$role = $ci->db->get_where('user_access_menu',
// 		[
// 			'role_id' => $ci->session->userdata('role_id'),
// 			'menu_id' => $menu_id
// 		])->num_rows();

// 		if ($role < 1) {
// 			redirect('auth/blocked');
// 		}
// 	}
// }
