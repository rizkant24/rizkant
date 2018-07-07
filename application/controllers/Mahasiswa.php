<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	 
	 public function __construct() {
		 parent::__construct();
		 $this->load->model('m_mahasiswa');
 	 }

	 public function index() {
		 $data = array(
		 'title' => 'Data Mahasiswa',
		 'mhs' => $this->m_mahasiswa->data()
		 );
		 $this->load->view('list', $data);
  	 }

public function tambah() {
	 if (isset($_POST['submit'])) {
	 	$nim = $this->input->post('nim');
	 	$query = $this->db->get_where('tbl_mahasiswa', array('nim' => $nim));
	 if($query->num_rows() == 0) {
		 $this->m_mahasiswa->simpan();
		 $this->session->set_flashdata('simpan', 'mahasiswa baru berhasil tersimpan ...');
		 redirect();
	 } else {
	 	$this->session->set_flashdata('gagal', 'Terjadi kesalahan, mahasiswa sudah ada ...');
		redirect();
	 }
	 } else {
	 $this->load->view('tambah');
	 }
 }
 
public function edit() {
 if (isset($_POST['submit'])) {
 $this->m_mahasiswa->update();
 $this->session->set_flashdata('update', 'mahasiswa berhasil diperbaharui ...');
 redirect('mahasiswa');

 } else {
 if ($nim = $this->uri->segment(3)) {
 $data = array(
 'mhs'=> $this->db->get_where('tbl_mahasiswa', array('nim' => $nim))->row_array()
 );
 $this->load->view('edit', $data);
 } else {
 redirect();
  }
  }
 }
 public function hapus() {
 if ($nim = $this->uri->segment(3)) {
 if(!empty($nim)) {
 $this->db->where('nim', $nim);
 $this->db->delete('tbl_mahasiswa');
 }
 $this->session->set_flashdata('hapus', 'mahasiswa berhasil terhapus ...');
 redirect();

 } else {
 redirect();
 }
 }

} 