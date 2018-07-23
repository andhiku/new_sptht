<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai_cf extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Nilai_model');
	}

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		$data['contents'] = 'nilai_cf/nilai_cflist';
		$data['nilaicf_data'] = $this->Nilai_model->get_nilai();
		$this->load->view('templates/index',$data);
		echo "tes";	
	}

	public function create(){
		if (isset($_POST['submit'])) {
			$this->Nilai_model->Insert_nilai();
			redirect('nilai_cf/index');
		}
		$data['contents'] = 'nilai_cf/nilai_cftambah';
		$this->load->view('templates/index', $data);
	
	}

	public function edit(){
		if (isset($_POST['submit'])) {
			$this->Nilai_model->edit_nilai();
			redirect('nilai_cf/index');
		}
		$id = $this->uri->segment(3);
		$data['nilai_cf'] = $this->Nilai_model->getById($id);
		$data['contents'] = 'nilai_cf/nilai_cfedit';
		$this->load->view('templates/index', $data);
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Nilai_model->hapus_nilai($id);
		redirect('nilai_cf/index');

	}


}

