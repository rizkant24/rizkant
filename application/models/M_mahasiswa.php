<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_mahasiswa extends CI_Model {

public $table = "tbl_mahasiswa";

 public function data() {
 $query = "SELECT * FROM $this->table ORDER BY nim ASC";
 return $this->db->query($query)->result();
  }

public function simpan() {
 $data = array(
 'nim' => $this->input->post('nim'),
 'nama' => $this->input->post('nama'),
 'jeniskelamin' => $this->input->post('jeniskelamin'),
 'programstudi' => $this->input->post('programstudi'),
 'jenjang' => $this->input->post('jenjang'),
 'semester' => $this->input->post('semester'),
 'notelp' => $this->input->post('notelp')
 );
 $this->db->insert($this->table, $data);
 }


	public function update() {
	 $data = array(
	 'nama' => $this->input->post('nama'),
	 'jeniskelamin' => $this->input->post('jeniskelamin'),
	 'programstudi' => $this->input->post('programstudi'),
	 'jenjang' => $this->input->post('jenjang'),
	 'semester' => $this->input->post('semester'),
	 'notelp' => $this->input->post('notelp')
	 );
	 $nim = $this->input->post('nim');
	 $this->db->where('nim', $nim);
	 $this->db->update($this->table, $data);
	}
}