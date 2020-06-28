<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		if ($this->session->userdata('role_id') == 1) {
			redirect('admin');
		} elseif ($this->session->userdata('role_id') == 2) {
			redirect('user');
		}
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|valid_email',
			[
				'required' => 'Email harus diisi!',
				'valid_email' => 'Format email salah!'
			]
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'trim|required|min_length[6]',
			[
				'required' => 'Password harus diisi!',
				'min_length' => 'Minimal 6 karakter!'
			]
		);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Halaman Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->Auth_model->login($email);

		if ($user) {
			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					}
					redirect('user');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				  Password yang dimasukkan salah!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  				Akun ini dinonaktifkan! Silahkan hubungi admin.</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  			Akun belum terdaftar!</div>');
			redirect('auth');
		}
	}

	public function register()
	{
		$data['title'] = 'Halaman Register';
		$this->form_validation->set_rules(
			'nama',
			'Nama Lengkap',
			'trim|required',
			['required' => 'Nama Lengkap harus diisi!']
		);
		$this->form_validation->set_rules(
			'nim',
			'Nomor Induk Mahasiswa (NIM)',
			'trim|required|is_unique[user.nim]|max_length[7]|min_length[7]',
			[
				'required' => 'NIM harus diisi!',
				'is_unique' => 'NIM sudah terdaftar!',
				'min_length' => 'Hanya menerima 7 karakter!',
				'max_length' => 'Hanya menerima 7 karakter!'
			]
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|is_unique[user.email]|valid_email',
			[
				'required' => 'Email harus diisi!',
				'valid_email' => 'Format email salah!',
				'is_unique' => 'Email sudah terdaftar!'
			]
		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'trim|required|min_length[6]',
			[
				'required' => 'Password harus diisi!',
				'min_length' => 'Minimal 6 karakter!'
			]
		);
		$this->form_validation->set_rules(
			'password2',
			'Konfirmasi Password',
			'trim|required|matches[password1]',
			[
				'required' => 'Konfirmasi password harus diisi!',
				'matches' => 'Password tidak sama!'
			]
		);

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/register');
			$this->load->view('templates/auth_footer');
		} else {
			# code...
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', TRUE)),
				'nim' => htmlspecialchars($this->input->post('nim', TRUE)),
				'email' => htmlspecialchars($this->input->post('email')),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date' => date('Y-m-d H:i:s')
			];

			$this->Auth_model->register($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Akun berhasil dibuat. Silahkan login!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Berhasil keluar!</div>');
		redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}

/* End of file Auth.php */
