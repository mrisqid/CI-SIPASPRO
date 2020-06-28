<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function get_user()
	{
		$query = $this->db->get_where('user', ['email' => $this->session->userdata('email')]);
		return $query->row_array();
	}

	public function get_data_user()
	{
		$this->db->where('role_id', 2);
		$query = $this->db->get('user');

		return $query->result_array();
	}

	public function get_id_user($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('user');

		return $query->row_array();
	}

	public function jumlah_user()
	{
		$this->db->where('role_id', 2);
		return $this->db->count_all_results('user');
	}

	public function jumlah_pendaftar($id)
	{
		$this->db->where('id_jadwal', $id);

		return $this->db->count_all_results('jadwal_user');
	}

	public function dashboard_jadwal($limit, $offset)
	{
		$filter = $this->input->get('find');
		$this->db->like('judul', $filter);
		$this->db->or_like('mhs', $filter);
		$this->db->limit($limit, $offset);
		$this->db->order_by('tgl', 'desc');
		$query = $this->db->get('jadwal');

		return $query->result_array();
	}

	public function jadwal_aktif()
	{
		$this->db->where('is_active', 1);
		return $this->db->count_all_results('jadwal');
	}

	public function add_jadwal($data)
	{
		$this->db->insert('jadwal', $data);
		return $this->db->insert_id();
	}

	public function get_jadwal()
	{
		$query = $this->db->get('jadwal');
		return $query->result_array();
	}

	public function total_jadwal()
	{
		return $this->db->count_all('jadwal');
	}

	public function get_id_jadwal($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('jadwal');

		return $query->row_array();
	}

	public function delete_jadwal($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jadwal');

		return $this->db->affected_rows();
	}

	public function update_jadwal($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('jadwal', $post);

		return $this->db->affected_rows();
	}

	public function data_user()
	{
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function add_user($data)
	{
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');

		return $this->db->affected_rows();
	}

	public function get_jadwal_user($id)
	{
		$this->db->where('id_jadwal', $id);
		$this->db->from('jadwal_user');
		$this->db->join('user', 'user.id = jadwal_user.id_user');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_mhs_jadwal($id)
	{
		$this->db->where('id_user', $id);
		$this->db->where('status', 1);
		$this->db->from('jadwal_user');
		$this->db->join('jadwal', 'jadwal.id = jadwal_user.id_jadwal');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function jumlah_kehadiran($id)
	{
		$this->db->where('id_user', $id);
		$this->db->where('status', 1);

		return $this->db->count_all_results('jadwal_user');
	}

	public function absen($id, $status, $idj)
	{
		$this->db->set('status', $status);
		$this->db->where('id_user', $id);
		$this->db->where('id_jadwal', $idj);
		$this->db->update('jadwal_user');

		return $this->db->affected_rows();
	}

	public function status_jadwal($id, $status)
	{
		$this->db->set('is_active', $status);
		$this->db->where('id', $id);
		$this->db->update('jadwal');

		return $this->db->affected_rows();
	}

	public function status($id, $status)
	{
		$this->db->set('is_active', $status);
		$this->db->where('id', $id);
		$this->db->update('user');

		return $this->db->affected_rows();
	}

	public function update_profil($email, $post)
	{
		$this->db->where('email', $email);
		$this->db->update('user', $post);

		return $this->db->affected_rows();
	}

	public function change_password($email, $newpassword)
	{
		$this->db->set('password', $newpassword);
		$this->db->where('email', $email);
		$this->db->update('user');

		return $this->db->affected_rows();
	}
}

/* End of file Admin_model.php */
