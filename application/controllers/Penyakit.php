<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('is_login')==FALSE){redirect('admin');}
		$this->load->model('Penyakit_model');
	}

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		$data['contents'] = 'penyakit/penyakit_list';
		$data['penyakit_data'] = $this->Penyakit_model->get_penyakit();
		$this->load->view('templates/index',$data);		
	}

	public function create(){
		if (isset($_POST['submit'])) {
			$this->Penyakit_model->Insert_penyakit();
			redirect('Penyakit/index');
		}
		$data['contents'] = 'penyakit/penyakit_tambah';
		$this->load->view('templates/index', $data);
	
	}

	public function edit(){
		if (isset($_POST['submit'])) {
			$this->Penyakit_model->edit_penyakit();
			redirect('Penyakit/index');
		}
		$id = $this->uri->segment(3);
		$data['Penyakit'] = $this->Penyakit_model->getById($id);
		$data['contents'] = 'penyakit/penyakit_edit';
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Penyakit_model->hapus_penyakit($id);
		redirect('Penyakit/index');

	}


}

