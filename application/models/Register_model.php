<?php

class Register_model extends CI_Model {

	public function get_register()
	{

		//perhatikan baik2 kalau coding,,jangan ada spasi kayak tadi
		$query=$this->db->query("select * from pasien");
		return $query->result_array();
	}

	public function insert_regist(){
		$nama= $this->input->post('nama');
		$umur= $this->input->post('umur');
		$jenkel= $this->input->post('jenkel');
		$alamat= $this->input->post('alamat');
	
		$query = $this->db->query(" INSERT INTO pasien (nama, umur, jenkel, alamat)
									VALUES
									('$nama','$umur','$jenkel','$alamat') ");
		
		return $query;
	}

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

	// public function hapus_gejala($id){
	// 	$query = $this->db->query(" DELETE FROM tbl_gejala WHERE id='$id' ");
	// 	return $query;
	// }
}
