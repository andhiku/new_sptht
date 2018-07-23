<?php

class Pasien_model extends CI_Model {

	public function get_pasien()
	{

		//perhatikan baik2 kalau coding,,jangan ada spasi kayak tadi
		$query=$this->db->query("select * from pasien");
		return $query->result_array();
	}

	// public function insert_gejala(){
	// 	$kd_penyakit= $this->input->post('kd_gejala');
	// 	$nm_penyakit= $this->input->post('gejala');
	
	// 	$query = $this->db->query(" INSERT INTO tbl_gejala (kd_gejala, gejala)
	// 								VALUES
	// 								('$kd_gejala','$gejala') ");
		
	// 	return $query;
	// }

	// public function edit(){
	// 	$this->load->view('gejala_edit');
	// }
	// public function getById($id){
	// 	return	$query =  $this->db->query(" select * from tbl_gejala where id='$id' ")->row_array();
	// }

	// public function edit_gejala(){
	// 	$id= $this->input->post('id');
	// 	$kd_gejala= $this->input->post('kd_gejala');
	// 	$gejala= $this->input->post('gejala ');

	// 	$query = $this->db->query(" UPDATE tbl_gejala SET kd_gejala='$kd_gejala', gejala='$gejala'
	// 								WHERE id='$id' ");
	// 	return $query;
	// }

	public function hapus_pasien($id){
		$query = $this->db->query(" DELETE FROM pasien WHERE id='$id' ");
		return $query;
	}
}
