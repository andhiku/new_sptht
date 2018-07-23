<?php

class Penyakit_model extends CI_Model {

	public function get_penyakit()
	{

		//perhatikan baik2 kalau coding,,jangan ada spasi kayak tadi
		$query=$this->db->query("select * from tbl_penyakit");
		return $query->result_array();
	}

	public function insert_penyakit(){
		$kd_penyakit= $this->input->post('kd_penyakit');
		$nm_penyakit= $this->input->post('nm_penyakit');
		$nama_obat= $this->input->post('nama_obat');
	
		$query = $this->db->query(" INSERT INTO tbl_penyakit (kd_penyakit, nm_penyakit, nama_obat)
									VALUES
									('$kd_penyakit','$nm_penyakit','$nama_obat') ");
		
		return $query;
	}

	public function edit(){
		$this->load->view('penyakit_edit');
	}
	public function getById($id){
		return	$query =  $this->db->query(" select * from tbl_penyakit where id='$id' ")->row_array();
	}

	public function edit_penyakit(){
		$id= $this->input->post('id');
		$kd_penyakit= $this->input->post('kd_penyakit');
		$nm_penyakit= $this->input->post('nm_penyakit');
		$nama_obat= $this->input->post('nama_obat');

		$query = $this->db->query(" UPDATE tbl_penyakit SET kd_penyakit='$kd_penyakit', nm_penyakit='$nm_penyakit', nama_obat='$nama_obat'
									WHERE id='$id' ");
		return $query;
	}

	public function hapus_penyakit($id){
		$query = $this->db->query(" DELETE FROM tbl_penyakit WHERE id='$id' ");
		return $query;
	}
}
