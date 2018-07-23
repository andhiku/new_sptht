<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gejala extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Gejala_model');
	}

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		$data['contents'] = 'gejala/gejala_list';
		$data['gejala_data'] = $this->Gejala_model->get_gejala();
		$this->load->view('templates/index',$data);		
	}

	public function create(){
		if (isset($_POST['submit'])) {
			$this->Gejala_model->Insert_gejala();
			redirect('gejala/index');
		}
		$data['contents'] = 'gejala/gejala_tambah';
		$this->load->view('templates/index', $data);
	
	}

	public function edit(){
		if (isset($_POST['submit'])) {
			$this->Gejala_model->edit_gejala();
			redirect('gejala/index');
		}
		$id = $this->uri->segment(3);
		$data['gejala'] = $this->Gejala_model->getById($id);
		$data['contents'] = 'gejala/gejala_edit';
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Gejala_model->hapus_gejala($id);
		redirect('gejala/index');

	}


}

