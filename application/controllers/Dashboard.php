<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	// function __construct(){
	// 	parent::__construct();
	// 	if($this->session->userdata('is_login')== FALSE){redirect('admin');}
	// 	$this->load->model('Penyakit_model');
	// }
	

	public function admin()
	{
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/index',$data);		
	}

	public function user()
	{
		$data['contents'] = 'user/home';
		$this->load->view('templates/user/index',$data);		
	} 

	public function diagnosa()
	{
		$this->load->view('user/course');
	}

	public function about()
	{
		$this->load->view('user/about-us');
	}

	public function contact()
	{
		$this->load->view('user/contact');
	}
}


