<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    function __construct(){  
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }
        $this->load->model('M_supplier');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['supplier'] = $this->M_supplier->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('supplier/v_supplier', $data);
        $this->load->view('v_footer'); 
    }
    
    public function insert_supplier()
    {

        $z = $this->input->POST('nama_supplier');
        $x = $this->input->POST('kontak_supplier');
        $c = $this->input->POST('alamat_supplier');
        $v = $this->input->POST('produk');
        $b = $this->input->POST('transaksi_terakhir');        
        
        $data = array(
            'nama_supplier' => $z,
            'kontak_supplier' => $x,
            'alamat_supplier' => $c,
            'produk' => $v,
            'transaksi_terakhir' => $b,
            
        );
        

        $this->M_supplier->insert_data($data);
        $this->session->set_flashdata('success','data berhasil di tambah');

        redirect('Supplier');
    }

    public function update_supplier()
    {
        $id = $this->input->POST('id_supplier');
        $z = $this->input->POST('nama_supplier');
        $x = $this->input->POST('kontak_supplier');
        $c = $this->input->POST('alamat_supplier');
        $v = $this->input->POST('produk');
        $b = $this->input->POST('transaksi_terakhir');        

        $data = array(
            'nama_supplier' => $z,
            'kontak_supplier' => $x,
            'alamat_supplier' => $c,
            'produk' => $v,
            'transaksi_terakhir' => $b,
            
        );


        $where = array('id_supplier' => $id);
        $this->M_supplier->update_data($data, $where);
        $this->session->set_flashdata('edit','data berhasil di update');
        redirect('Supplier');   
    }

    public function hapus_supplier($id)
    {
        $where = array('id_supplier' => $id);
        $this->M_supplier->hapus_data($where);
        $this->session->set_flashdata('delete','data berhasil di update');
        redirect('Supplier');
    }

    public function laporan(){
        $data['supplier'] = $this->M_supplier->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('supplier/v_laporan', $data);
        $this->load->view('v_footer'); 
    }
}

