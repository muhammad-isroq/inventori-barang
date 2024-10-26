<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('login')) || $this->session->userdata('role') != 'admin'){
            redirect('Auth');
        }
        $this->load->model('M_user');
    }

    public function index(){
        
        $this->load->view('admin/v_header_admin');
        $this->load->view('admin/v_admin');
        $this->load->view('admin/v_footer_admin');
    }

   
}
?>
