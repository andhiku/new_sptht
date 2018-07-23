<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelompok_gejala extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kelompok_model');
	}

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		$data['contents'] = 'kelompok_gejala/kelompok_gejalalist';
		$data['kelompokgejala_data'] = $this->Kelompok_model->get_kelompok();
		$this->load->view('templates/index',$data);		
	}

	public function create(){
		if (isset($_POST['submit'])) {
			$this->Kelompok_model->Insert_kelompok();
			redirect('kelompok_gejala/index');
		}
		$data['contents'] = 'kelompok_gejala/kelompok_gejalatambah';
		$this->load->view('templates/index', $data);
	
	}

	public function edit(){
		if (isset($_POST['submit'])) {
			$this->Kelompok_model->edit_kelompok();
			redirect('kelompok_gejala/index');
		}
		$id = $this->uri->segment(3);
		$data['kelompok_gejala'] = $this->Kelompok_model->getById($id);
		$data['contents'] = 'kelompok_gejala/kelompok_gejalaedit';
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Kelompok_model->hapus_kelompok($id);
		redirect('kelompok_gejala/index');

	}


}

