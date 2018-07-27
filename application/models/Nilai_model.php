<?php

class Nilai_model extends CI_Model {

	public function get_nilai()
	{

		//perhatikan baik2 kalau coding,,jangan ada spasi kayak tadi
		$query=$this->db->query("select * from gejala_penyakit");
		return $query->result_array();
	}

	public function insert_nilai(){
		$gejala_id= $this->input->post('gejala_id');
		$penyakit_id= $this->input->post('penyakit_id');
		$md= $this->input->post('md');
		$mb= $this->input->post('mb');
	
		$query = $this->db->query(" INSERT INTO gejala_penyakit (gejala_id, penyakit_id, md, mb)
									VALUES
									('$gejala_id','$penyakit_id','$md','$mb') ");
		
		return $query;
	}

	public function edit(){
		$this->load->view('nilai_cfedit');
	}
	public function getById($id){
		return	$query =  $this->db->query(" select * from gejala_penyakit where id='$id' ")->row_array();
	}

	public function edit_nilai(){
		$id= $this->input->post('id');
		$gejala_id= $this->input->post('gejala_id');
		$penyakit_id= $this->input->post('penyakit_id');
		$md= $this->input->post('md');
		$mb= $this->input->post('mb');

		$query = $this->db->query(" UPDATE gejala_penyakit SET gejala_id='$gejala_id', penyakit_id='$penyakit_id', md='$md', mb='$mb'
									WHERE id='$id' ");
		return $query;
	}

	public function hapus_nilai($id){
		$query = $this->db->query(" DELETE FROM gejala_penyakit WHERE id='$id' ");
		return $query;
	}

	public function getlistgejalaid()
	{
		return $this->db->get('gejala');
	}

	function get_by_gejala($gejala){
         $sql = "select distinct penyakit_id,p.kd_penyakit,p.nm_penyakit,p.nama_obat from gejala_penyakit gp inner join tbl_penyakit p on gp.penyakit_id=p.id where gejala_id in (".$gejala.") order by penyakit_id,gejala_id";
         return $this->db->query($sql);
     }

     function get_gejala_by_penyakit($id,$gejala=null){
         $sql = "select distinct gejala_id,md,mb from gejala_penyakit where penyakit_id=".$id;
         if($gejala!=null)
            $sql=$sql." and gejala_id in (".$gejala.")";
        $sql=$sql." order by gejala_id";
         return $this->db->query($sql);
     }
}
