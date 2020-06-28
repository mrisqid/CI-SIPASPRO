<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		user_logged_in();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['title'] = 'Profil';
		$data['user'] = $this->User_model->get_data_user();

		$this->load->view('templates/user/header', $data);
		$this->load->view('templates/user/sidebar', $data);
		$this->load->view('templates/user/topbar', $data);
		$this->load->view('user/profil', $data);
		$this->load->view('templates/user/footer');
	}

	public function dashboard($offset = 0)
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->User_model->get_data_user();
		$data['total'] = $this->User_model->total_jadwal();
		$data['juser'] = $this->User_model->jumlah_user();
		$data['jaktif'] = $this->User_model->jadwal_aktif();

		// limit
		$config['base_url'] = site_url('user/dashboard');
		$config['total_rows'] = $this->User_model->total_jadwal();
		$config['per_page'] = 8;

		// pagination		
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['jadwal'] = $this->User_model->dashboard_jadwal($config['per_page'], $offset);

		$this->load->view('templates/user/header', $data);
		$this->load->view('templates/user/sidebar', $data);
		$this->load->view('templates/user/topbar', $data);
		$this->load->view('user/dashboard', $data);
		$this->load->view('templates/user/footer');
	}

	public function jadwal_detail($id)
	{
		$data['title'] = 'Detail Jadwal';
		$data['user'] = $this->User_model->get_data_user();
		$data['jadwal'] = $this->User_model->get_id_jadwal($id);

		$this->load->view('templates/user/header', $data);
		$this->load->view('templates/user/sidebar', $data);
		$this->load->view('templates/user/topbar', $data);
		$this->load->view('user/jadwal_detail', $data);
		$this->load->view('templates/user/footer');
	}

	// Pendaftaran jadwal oleh user
	public function daftar()
	{
		$user = $this->User_model->get_data_user();
		$data = [
			'id_jadwal' => $this->input->post('id'),
			'id_user' => $user['id'],
			'status' => 0,
			'date_created' => date('Y-m-d H:i:s')
		];

		$result = $this->User_model->daftar($data);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Anda berhasil mendaftar!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('user/dashboard');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Anda gagal mendaftar!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('user/dashboard');
		}
	}

	public function hapus()
	{
		$user = $this->User_model->get_data_user();
		$idj = $this->input->post('id');
		$ids = $user['id'];

		$result = $this->User_model->hapus($idj, $ids);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Anda berhasil membatalkan pendaftaran!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('user/dashboard');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Anda gagal membatalkan pendaftaran!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('user/dashboard');
		}
	}

	// end of pendaftaran jadwal oleh user

	public function myjadwal()
	{
		$data['title'] = 'Jadwal Saya';
		$data['user'] = $this->User_model->get_data_user();
		$id = $data['user']['id'];
		$data['jadwal'] = $this->User_model->get_user_jadwal($id);

		$this->load->view('templates/user/header', $data);
		$this->load->view('templates/user/sidebar', $data);
		$this->load->view('templates/user/topbar', $data);
		$this->load->view('user/myjadwal', $data);
		$this->load->view('templates/user/footer');
	}

	// Cetak kartu seminar proposal
	public function cetak_kartu()
	{
		$data['title'] = 'Cetak Kartu';
		$data['user'] = $this->User_model->get_data_user();
		$id = $data['user']['id'];
		$data['jadwal'] = $this->User_model->get_user_jadwal_by_status($id);

		$this->load->view('templates/user/header', $data);
		$this->load->view('templates/user/sidebar', $data);
		$this->load->view('templates/user/topbar', $data);
		$this->load->view('user/cetakkartu', $data);
		$this->load->view('templates/user/footer');
	}

	public function kartu()
	{
		setlocale(LC_ALL, 'id-ID', 'id_ID');
		$data['user'] = $this->User_model->get_data_user();
		$id = $data['user']['id'];
		$data['jadwal'] = $this->User_model->get_user_jadwal_by_status($id);
		$namafile = $data['user']['nama'];

		$this->load->library('Pdf');

		$this->pdf->set_option('isRemoteEnabled', TRUE);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Kartu-$namafile.pdf";
		$this->pdf->load_view('kartu', $data);
	}

	// end of cetak kartu seminar proposal

	// Change Profil
	public function ubah_profil()
	{
		$data['title'] = 'Ubah Profil';
		$data['user'] = $this->User_model->get_data_user();

		// form_validation
		$this->form_validation->set_rules(
			'enama',
			'Nama lengkap',
			'trim|required',
			[
				'required' => 'Nama lengkap harus diisi'
			]
		);


		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('templates/user/header', $data);
			$this->load->view('templates/user/sidebar', $data);
			$this->load->view('templates/user/topbar', $data);
			$this->load->view('user/ubah_profil', $data);
			$this->load->view('templates/user/footer');
		} else {
			# code...
			$this->update_profil();
		}
	}

	public function update_profil()
	{
		$email = $this->session->userdata('email');
		$post['nama'] = $this->input->post('enama');

		// upload file
		$config['upload_path'] = './assets/img/profil/';
		$config['allowed_types'] = 'gif|png|jpg';
		$config['max_size'] = '2048';

		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		if (!empty($this->upload->data('file_name'))) {
			$post['image'] = $this->upload->data('file_name');
		}
		$result = $this->User_model->update_profil($email, $post);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data berhasil diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
			);
			redirect('user/ubah_profil');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data gagal diubah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			  </div>'
			);
			redirect('user/ubah_profil');
		}
	}

	public function ubah_password()
	{
		$data['title'] = 'Ubah Password';
		$data['user'] = $this->User_model->get_data_user();

		// form_validation
		$this->form_validation->set_rules(
			'cpassword',
			'Password Lama',
			'trim|required',
			[
				'required' => 'Password lama harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'upassword1',
			'Password Baru',
			'trim|required|min_length[6]',
			[
				'required' => 'Password baru harus diisi!',
				'min_length' => 'Minimal 6 karakter!'
			]
		);
		$this->form_validation->set_rules(
			'upassword2',
			'Konfirmasi Password Baru',
			'trim|required|matches[upassword1]',
			[
				'required' => 'Konfirmasi password baru harus diisi!',
				'matches' => 'Password tidak sama!'
			]
		);


		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('templates/user/header', $data);
			$this->load->view('templates/user/sidebar', $data);
			$this->load->view('templates/user/topbar', $data);
			$this->load->view('user/ubah_password', $data);
			$this->load->view('templates/user/footer');
		} else {
			# code...
			$this->cpassword();
		}
	}

	public function cpassword()
	{
		$user = $this->User_model->get_data_user();
		$email = $this->session->userdata('email');
		$cpassword = $this->input->post('cpassword');
		$upassword = $this->input->post('upassword1');

		if (!password_verify($cpassword, $user['password'])) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Password lama anda salah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			  </div>'
			);
			redirect('user/ubah_password');
		} else {
			if ($cpassword == $upassword) {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Password baru tidak boleh sama dengan password lama!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				  </div>'
				);
				redirect('user/ubah_password');
			} else {
				$newpassword = password_hash($upassword, PASSWORD_DEFAULT);

				$result = $this->User_model->change_password($email, $newpassword);
				if ($result) {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Password anda berhasil diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
					);
					redirect('user/ubah_password');
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Password anda gagal diubah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			  </div>'
					);
					redirect('user/ubah_password');
				}
			}
		}
	}

	// End of change profil

	public function petunjuk()
	{
		$data['title'] = 'Petunjuk Aplikasi';
		$data['user'] = $this->User_model->get_data_user();

		$this->load->view('templates/user/header', $data);
		$this->load->view('templates/user/sidebar', $data);
		$this->load->view('templates/user/topbar', $data);
		$this->load->view('user/petunjuk', $data);
		$this->load->view('templates/user/footer');
	}
}

/* End of file User.php */
