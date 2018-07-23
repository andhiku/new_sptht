<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Pasien_model');
	}

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		$data['contents'] = 'pasien/pasien_list';
		$data['pasien_data'] = $this->Pasien_model->get_pasien();
		$this->load->view('templates/index',$data);		
	}

	// public function create(){
	// 	if (isset($_POST['submit'])) {
	// 		$this->Nilai_model->Insert_gejala();
	// 		redirect('gejala/index');
	// 	}
	// 	$data['contents'] = 'gejala/gejala_tambah';
	// 	$this->load->view('templates/index', $data);
	
	// }

	// public function edit(){
	// 	if (isset($_POST['submit'])) {
	// 		$this->Gejala_model->edit_gejala();
	// 		redirect('gejala/index');
	// 	}
	// 	$id = $this->uri->segment(3);
	// 	$data['gejala'] = $this->Gejala_model->getById($id);
	// 	$data['contents'] = 'gejala/gejala_edit';
	// 	$this->load->view('templates/index', $data);
	// }

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Pasien_model->hapus_pasien($id);
		redirect('pasien/index');

	}


}

