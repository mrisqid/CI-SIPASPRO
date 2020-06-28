<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		admin_logged_in();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['title'] = 'Profil';
		$data['user'] = $this->Admin_model->get_user();

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/profil', $data);
		$this->load->view('templates/admin/footer');
	}

	public function dashboard($offset = 0)
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->Admin_model->get_user();
		$data['total'] = $this->Admin_model->total_jadwal();
		$data['juser'] = $this->Admin_model->jumlah_user();
		$data['jaktif'] = $this->Admin_model->jadwal_aktif();

		// limit
		$config['base_url'] = site_url('admin/dashboard');
		$config['total_rows'] = $this->Admin_model->total_jadwal();
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
		$data['jadwal'] = $this->Admin_model->dashboard_jadwal($config['per_page'], $offset);

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/admin/footer');
	}

	public function jadwal_detail($id)
	{
		$data['title'] = 'Detail Jadwal';
		$data['user'] = $this->Admin_model->get_user();
		$data['jadwal'] = $this->Admin_model->get_id_jadwal($id);

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/jadwal_detail', $data);
		$this->load->view('templates/admin/footer');
	}

	// Kelola Jadwal

	public function jadwal()
	{
		$data['title'] = 'Kelola Jadwal';
		$data['user'] = $this->Admin_model->get_user();
		$data['jadwal'] = $this->Admin_model->get_jadwal();

		// Validasi tambah jadwal
		$this->form_validation->set_rules(
			'judul',
			'Judul Proposal',
			'trim|required',
			[
				'required' => 'Judul harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'mhs',
			'Nama Mahasiswa',
			'trim|required',
			[
				'required' => 'Nama mahasiswa harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'nimm',
			'NIM Mahasiswa',
			'trim|required|is_unique[jadwal.nim]|min_length[7]|max_length[7]',
			[
				'required' => 'NIM mahasiswa harus diisi!',
				'is_unique' => 'NIM sudah ada!',
				'min_length' => 'NIM hanya menerima 7 karakter!',
				'max_length' => 'NIM hanya menerima 7 karakter!'
			]
		);
		$this->form_validation->set_rules(
			'dospem',
			'Dosen Pembimbing',
			'trim|required',
			[
				'required' => 'Dosen pembimbing harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'penguji1',
			'Dosen Penguji 1',
			'trim|required',
			[
				'required' => 'Dosen penguji 1 harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'penguji2',
			'Dosen Penguji 2',
			'trim|required',
			[
				'required' => 'Dosen penguji 2 harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'tgl',
			'Tanggal',
			'trim|required',
			[
				'required' => 'Tanggal harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'waktua',
			'Waktu Mulai',
			'trim|required',
			[
				'required' => 'Waktu mulai harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'waktub',
			'Waktu Akhir',
			'trim|required',
			[
				'required' => 'Waktu akhir harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'lokasi',
			'Lokasi',
			'trim|required',
			[
				'required' => 'Lokasi harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'kuota',
			'Kuota',
			'trim|required',
			[
				'required' => 'Kuota harus diisi!'
			]
		);


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/admin/header', $data);
			$this->load->view('templates/admin/sidebar', $data);
			$this->load->view('templates/admin/topbar', $data);
			$this->load->view('admin/jadwal', $data);
			$this->load->view('templates/admin/footer');
		} else {
			$this->tambah_jadwal();
		}
	}

	private function tambah_jadwal()
	{
		$data = [
			'judul' => $this->input->post('judul'),
			'mhs' => $this->input->post('mhs'),
			'nim' => $this->input->post('nimm'),
			'dospem' => $this->input->post('dospem'),
			'penguji1' => $this->input->post('penguji1'),
			'penguji2' => $this->input->post('penguji2'),
			'tgl' => $this->input->post('tgl'),
			'waktua' => $this->input->post('waktua'),
			'waktub' => $this->input->post('waktub'),
			'lokasi' => $this->input->post('lokasi'),
			'kuota' => $this->input->post('kuota'),
			'is_active' => 1
		];
		// upload file
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|png|jpg';
		$config['max_size'] = '2048';

		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
		if (!empty($this->upload->data('file_name'))) {
			$data['file'] = $this->upload->data('file_name');
		}

		$result = $this->Admin_model->add_jadwal($data);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Data berhasil ditambahkan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/jadwal');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Data gagal ditambahkan!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/jadwal');
		}
	}

	public function hapus_jadwal($id)
	{
		$result = $this->Admin_model->delete_jadwal($id);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Data berhasil dihapus!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/jadwal');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Data gagal dihapus!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/jadwal');
		}
	}

	public function edit_jadwal($id)
	{
		$data['title'] = 'Edit Jadwal';
		$data['user'] = $this->Admin_model->get_user();
		$data['jadwal'] = $this->Admin_model->get_id_jadwal($id);

		// Validasi edit jadwal
		$this->form_validation->set_rules(
			'ejudul',
			'Judul Proposal',
			'trim|required',
			[
				'required' => 'Judul harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'emhs',
			'Nama Mahasiswa',
			'trim|required',
			[
				'required' => 'Nama mahasiswa harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'enim',
			'NIM Mahasiswa',
			'trim|required|min_length[7]|max_length[7]',
			[
				'required' => 'NIM mahasiswa harus diisi!',
				'min_length' => 'NIM hanya menerima 7 karakter!',
				'max_length' => 'NIM hanya menerima 7 karakter!'
			]
		);
		$this->form_validation->set_rules(
			'edospem',
			'Dosen Pembimbing',
			'trim|required',
			[
				'required' => 'Dosen pembimbing harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'epenguji1',
			'Dosen Penguji 1',
			'trim|required',
			[
				'required' => 'Dosen penguji 1 harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'epenguji2',
			'Dosen Penguji 2',
			'trim|required',
			[
				'required' => 'Dosen penguji 2 harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'etgl',
			'Tanggal',
			'trim|required',
			[
				'required' => 'Tanggal harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'ewaktua',
			'Waktu Mulai',
			'trim|required',
			[
				'required' => 'Waktu mulai harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'ewaktub',
			'Waktu Akhir',
			'trim|required',
			[
				'required' => 'Waktu akhir harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'elokasi',
			'Lokasi',
			'trim|required',
			[
				'required' => 'Lokasi harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'ekuota',
			'Kuota',
			'trim|required',
			[
				'required' => 'Kuota harus diisi!'
			]
		);

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('templates/admin/header', $data);
			$this->load->view('templates/admin/sidebar', $data);
			$this->load->view('templates/admin/topbar', $data);
			$this->load->view('admin/edit_jadwal', $data);
			$this->load->view('templates/admin/footer');
		} else {
			# code...
			$post = [
				'judul' => $this->input->post('ejudul'),
				'mhs' => $this->input->post('emhs'),
				'nim' => $this->input->post('enim'),
				'dospem' => $this->input->post('edospem'),
				'penguji1' => $this->input->post('epenguji1'),
				'penguji2' => $this->input->post('epenguji2'),
				'tgl' => $this->input->post('etgl'),
				'waktua' => $this->input->post('ewaktua'),
				'waktub' => $this->input->post('ewaktub'),
				'lokasi' => $this->input->post('elokasi'),
				'kuota' => $this->input->post('ekuota'),
				'is_active' => 1
			];
			// upload file
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'pdf|png|jpg';
			$config['max_size'] = '2048';

			$this->load->library('upload', $config);
			$this->upload->do_upload('efile');
			if (!empty($this->upload->data('file_name'))) {
				$post['file'] = $this->upload->data('file_name');
			}

			$result = $this->Admin_model->update_jadwal($id, $post);
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
				redirect('admin/jadwal');
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
				redirect('admin/jadwal');
			}
		}
	}

	// End of kelola jadwal 

	// Kelola audiens
	public function audiens()
	{
		$data['title'] = 'Kelola Audiens';
		$data['user'] = $this->Admin_model->get_user();
		$data['jadwal'] = $this->Admin_model->get_jadwal();

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/audiens', $data);
		$this->load->view('templates/admin/footer');
	}

	public function daftar_audiens($id)
	{
		$data['title'] = 'Daftar Audiens';
		$data['user'] = $this->Admin_model->get_user();
		$data['jadwal'] = $this->Admin_model->get_jadwal_user($id);
		$data['djadwal'] = $this->Admin_model->get_id_jadwal($id);

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/daftar_audiens', $data);
		$this->load->view('templates/admin/footer');
	}

	public function absen_hadir()
	{
		$idj = $this->input->post('idj');
		$id	= $this->input->post('ids');
		$status = 1;
		$result = $this->Admin_model->absen($id, $status, $idj);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Audien berhasil dinyatakan hadir!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/daftar_audiens/' . $idj);
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Audien gagal dinyatakan hadir!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/daftar_audiens/' . $idj);
		}
	}

	public function absen_alfa()
	{
		$idj = $this->input->post('iidj');
		$id	= $this->input->post('iids');
		$status = 2;
		$result = $this->Admin_model->absen($id, $status, $idj);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Audien berhasil dinyatakan tidak hadir!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/daftar_audiens/' . $idj);
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Audien gagal dinyatakan tidak hadir!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/daftar_audiens/' . $idj);
		}
	}

	public function jadwal_aktif($id)
	{
		$status = 1;
		$result = $this->Admin_model->status_jadwal($id, $status);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Jadwal berhasil diaktifkan kembali!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/audiens');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Jadwal gagal diaktifkan!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/audiens');
		}
	}

	public function jadwal_off($id)
	{
		$status = 0;
		$result = $this->Admin_model->status_jadwal($id, $status);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Jadwal berhasil dikunci!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/audiens');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Jadwal gagal dikunci!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/audiens');
		}
	}

	public function cetak_absen($id)
	{
		setlocale(LC_ALL, 'id-ID', 'id_ID');
		$data['jadwal'] = $this->Admin_model->get_jadwal_user($id);
		$data['djadwal'] = $this->Admin_model->get_id_jadwal($id);
		$data['tgl'] = strftime('%A, %d %B %Y', strtotime($data['djadwal']['tgl']));
		$namafile = $data['djadwal']['judul'];

		$this->load->library('Pdf');

		$this->pdf->set_option('isRemoteEnabled', TRUE);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Absensi-$namafile.pdf";
		$this->pdf->load_view('laporan_pdf', $data);
	}
	// End of kelola audiens

	// Cetak Kartu mahasiswa
	public function laporan()
	{
		$data['title'] = 'Cetak Kartu Mahasiswa';
		$data['user'] = $this->Admin_model->get_user();
		$data['mhs'] = $this->Admin_model->get_data_user();

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/laporan', $data);
		$this->load->view('templates/admin/footer');
	}

	public function kartu($id)
	{
		$data['title'] = 'Cetak Kartu Mahasiswa';
		$data['user'] = $this->Admin_model->get_user();
		$data['jadwal'] = $this->Admin_model->get_mhs_jadwal($id);
		$data['duser'] = $this->Admin_model->get_id_user($id);

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/kartu_mhs', $data);
		$this->load->view('templates/admin/footer');
	}

	public function unduh_kartu($id)
	{
		setlocale(LC_ALL, 'id-ID', 'id_ID');
		$data['user'] = $this->Admin_model->get_id_user($id);
		$data['jadwal'] = $this->Admin_model->get_mhs_jadwal($id);
		$namafile = $data['user']['nama'];

		$this->load->library('Pdf');

		$this->pdf->set_option('isRemoteEnabled', TRUE);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Kartu-$namafile.pdf";
		$this->pdf->load_view('kartu', $data);
	}

	// End of cetak kartu mahasiswa

	// Kelola user
	public function users()
	{
		$data['title'] = 'Kelola User';
		$data['user'] = $this->Admin_model->get_user();
		$data['duser'] = $this->Admin_model->data_user();

		// Validasi tambah user
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required', [
			'required' => 'Nama lengkap harus diisi!'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|is_unique[user.nim]|min_length[7]|max_length[7]', [
			'required' => 'NIM harus diisi!',
			'is_unique' => 'NIM sudah terdaftar!',
			'min_length' => 'NIM hanya menerima 7 karakter!',
			'max_length' => 'NIM hanya menerima 7 karakter!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]|valid_email', [
			'required' => 'Email harus diisi!',
			'is_unique' => 'Email sudah tedaftar!',
			'valid_email' => 'Format email salah!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]', [
			'required' => 'Password harus diisi!',
			'min_length' => 'Password minimal 6 karakter!'
		]);
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|matches[password1]', [
			'required' => 'Konfirmasi password harus diisi!',
			'matches' => 'Konfirmasi password tidak sama!'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/admin/header', $data);
			$this->load->view('templates/admin/sidebar', $data);
			$this->load->view('templates/admin/topbar', $data);
			$this->load->view('admin/users', $data);
			$this->load->view('templates/admin/footer');
		} else {
			$this->tambah_user();
		}
	}

	public function tambah_user()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'email' => $this->input->post('email'),
			'image' => 'default.jpg',
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role_id' => $this->input->post('role'),
			'is_active' => 1
		];

		$result = $this->Admin_model->add_user($data);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Data berhasil ditambahkan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/users');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Data gagal ditambahkan!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/users');
		}
	}

	public function status_aktif($id)
	{
		$status = 1;
		$result = $this->Admin_model->status($id, $status);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Akun berhasil diaktifkan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/users');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Akun gagal diaktifkan!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/users');
		}
	}

	public function status_off($id)
	{
		$status = 0;
		$result = $this->Admin_model->status($id, $status);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Akun berhasil dinonaktifkan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/users');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Akun gagal dinonaktifkan!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/users');
		}
	}

	public function hapus_user($id)
	{
		$result = $this->Admin_model->delete_user($id);
		if ($result) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
			  		Data berhasil dihapus!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/users');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Data gagal dihapus!
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
  				</div>'
			);
			redirect('admin/users');
		}
	}
	// end of kelola user

	// Change Profil
	public function ubah_profil()
	{
		$data['title'] = 'Ubah Profil';
		$data['user'] = $this->Admin_model->get_user();

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
			$this->load->view('templates/admin/header', $data);
			$this->load->view('templates/admin/sidebar', $data);
			$this->load->view('templates/admin/topbar', $data);
			$this->load->view('admin/ubah_profil', $data);
			$this->load->view('templates/admin/footer');
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
		$result = $this->Admin_model->update_profil($email, $post);
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
			redirect('admin/ubah_profil');
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
			redirect('admin/ubah_profil');
		}
	}

	public function ubah_password()
	{
		$data['title'] = 'Ubah Password';
		$data['user'] = $this->Admin_model->get_user();

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
			$this->load->view('templates/admin/header', $data);
			$this->load->view('templates/admin/sidebar', $data);
			$this->load->view('templates/admin/topbar', $data);
			$this->load->view('admin/ubah_password', $data);
			$this->load->view('templates/admin/footer');
		} else {
			# code...
			$this->cpassword();
		}
	}

	public function cpassword()
	{
		$user = $this->Admin_model->get_user();
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
			redirect('admin/ubah_password');
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
				redirect('admin/ubah_password');
			} else {
				$newpassword = password_hash($upassword, PASSWORD_DEFAULT);

				$result = $this->Admin_model->change_password($email, $newpassword);
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
					redirect('admin/ubah_password');
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
					redirect('admin/ubah_password');
				}
			}
		}
	}

	// End of change profil

	public function petunjuk()
	{
		$data['title'] = 'Petunjuk Aplikasi';
		$data['user'] = $this->Admin_model->get_user();

		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar', $data);
		$this->load->view('templates/admin/topbar', $data);
		$this->load->view('admin/petunjuk', $data);
		$this->load->view('templates/admin/footer');
	}
}

/* End of file Admin.php */
