<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('Auth');
		}
		$this->load->model('UserModel');
	}
	
	public function index()
	{
		$this->load->view('v_dashboard');
	}
}
