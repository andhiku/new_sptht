<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		// $data['contents'] = 'user/registrasi';
		$data['register_data'] = $this->Register_model->get_register();
		$this->load->view('user/registrasi',$data);		
	}

	public function create(){
		if (isset($_POST['submit'])) {
			$this->Register_model->Insert_regist();
			redirect('diagnosa/index');
		}
		$this->load->view('pasien/pasien_list');	
		
	
	}

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

	// public function hapus(){
	// 	$id = $this->uri->segment(3);
	// 	$this->Gejala_model->hapus_gejala($id);
	// 	redirect('gejala_list/index');

	// }


}

