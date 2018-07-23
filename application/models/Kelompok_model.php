<?php

class Kelompok_model extends CI_Model {

	public function get_kelompok()
	{

		//perhatikan baik2 kalau coding,,jangan ada spasi kayak tadi
		$query=$this->db->query("select * from kelompok_gejala");
		return $query->result_array();
	}

	public function insert_kelompok(){
		$nama= $this->input->post('nama');
		$keterangan= $this->input->post('keterangan');
	
		$query = $this->db->query(" INSERT INTO kelompok_gejala (nama, keterangan)
									VALUES
									('$nama','$keterangan') ");
		
		return $query;
	}

	public function edit(){
		$this->load->view('kelompok_gejalaedit');
	}
	public function getById($id){
		return	$query =  $this->db->query(" select * from kelompok_gejala where id='$id' ")->row_array();
	}

	public function edit_kelompok(){
		$id= $this->input->post('id');
		$nama= $this->input->post('nama');
		$keterangan= $this->input->post('keterangan');

		$query = $this->db->query(" UPDATE kelompok_gejala SET nama='$nama', keterangan='$keterangan'
									WHERE id='$id' ");
		return $query;
	}

	public function hapus_kelompok($id){
		$query = $this->db->query(" DELETE FROM kelompok_gejala WHERE id='$id' ");
		return $query;
	}
}
