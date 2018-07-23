<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class diagnosa extends CI_Controller {
	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('Diagnosa_model');
	// }

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		// $data['contents'] = 'user/registrasi';
		// $data['diagnosa_data'] = $this->Diagnosa_model->get_diagnosa();
		$this->load->view('user/course');		
	}
}