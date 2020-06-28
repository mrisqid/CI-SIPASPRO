<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index($offset = 0)
	{
		$this->load->model('Admin_model');
		// limit
		$config['base_url'] = site_url('admin/dashboard');
		$config['total_rows'] = $this->Admin_model->total_jadwal();
		$config['per_page'] = 2;

		$data['jadwal'] = $this->Admin_model->dashboard_jadwal($config['per_page'], $offset);

		$this->load->view('home', $data);
	}
}

/* End of file Home.php */
