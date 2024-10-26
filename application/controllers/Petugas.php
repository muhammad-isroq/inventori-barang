<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('login')) || $this->session->userdata('role') != 'admin'){
            redirect('Auth');
        }
        $this->load->model('M_petugas');
    }

    public function index(){
        $data['petugass'] = $this->M_petugas->get_all_petugass();
        $this->load->view('v_header_admin');
        $this->load->view('petugas/v_petugas_list', $data);
        $this->load->view('v_footer_admin');
    }

    public function create(){
        $this->load->view('v_header_admin');
        $this->load->view('petugas/v_petugas_create');
        $this->load->view('v_footer_admin');
    }

    public function store(){
        $data = [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role' => 'petugas'
        ];
        $this->M_petugas->insert_petugas($data);
        redirect('Petugas');
    }

    public function edit($id){
        $data['petugas'] = $this->M_petugas->get_petugas_by_id($id);
        $this->load->view('v_header_admin');
        $this->load->view('petugas/v_petugas_edit', $data);
        $this->load->view('v_footer_admin');
    }

    public function update($id){
        $data = [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        ];
        $this->M_petugas->update_petugas($id, $data);
        redirect('Petugas');
    }

    public function delete($id){
        $this->M_petugas->delete_petugas($id);
        redirect('Petugas');
    }
}
?>
