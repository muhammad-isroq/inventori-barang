<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index(){
		$this->load->view('V_login');
	}

	public function login(){
		$user = $this->input->post('username', true);
		$pass = md5($this->input->post('password', true));

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() !=FALSE){
			$where = array(
				'username' => $user,
				'password' => $pass
				);

			$cekLogin = $this->M_login->cek_login($where);

			if($cekLogin->num_rows() > 0){
				$dataLogin = $cekLogin->row();
				$sess_data = array(
					'login' => 'OK',
					'username' => $user,
					'role' => $dataLogin->role
				);

				$this->session->set_userdata($sess_data);

				if($dataLogin->role == 'admin'){
					redirect('Dashboard_admin');
				} elseif($dataLogin->role == 'petugas'){
					redirect('Dashboard_petugas');
				} else {
					$this->session->set_flashdata('error', 'Role tidak dikenal');
					redirect('Auth');
				}
			} else {
				$this->session->set_flashdata('error', 'Username atau password salah');
				redirect('Auth');
			}
		} else{
			$this->load->view('V_login');
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('Auth');
    }
}

?>