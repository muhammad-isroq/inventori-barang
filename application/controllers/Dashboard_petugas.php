<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_petugas extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('login')) || $this->session->userdata('role') != 'petugas'){
            redirect('Auth');
        }
        $this->load->model('M_user');
    }

    public function index(){
        
        $this->load->view('v_header');
        $this->load->view('petugas/v_petugas');
        $this->load->view('v_footer');
    }

   
}
?>
