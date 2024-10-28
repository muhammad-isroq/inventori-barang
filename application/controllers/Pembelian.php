<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
    function __construct(){  
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }
        $this->load->model('M_pembelian');
        $this->load->model('M_barang');
        $this->load->model('M_supplier');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['pembelian'] = $this->M_pembelian->tampil_data()->result_array();
        
        $data['barang'] = $this->M_barang->tampil_data()->result_array();
        $data['supplier'] = $this->M_supplier->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('pembelian/v_pembelian', $data);
        $this->load->view('v_footer'); 
    }
    
    public function insert_pembelian()
    {
        $c = $this->input->POST('barang');
        $n = $this->input->POST('supplier');
        $z = $this->input->POST('tgl_pembelian');
        $x = $this->input->POST('kode_pembelian');
        $v = $this->input->POST('jumlah_barang');
        $b = $this->input->POST('harga_total');
        $m = $this->input->POST('status_pembayaran');
        
        $data = array(
            'id_barang' => $c,
            'id_supplier' => $n,
            'tgl_pembelian' => $z,
            'kode_pembelian' => $x,
            'jumlah_barang' => $v,
            'harga_total' => $b,
            'status_pembayaran' => $m
        );
        
        $this->M_pembelian->insert_data($data);
        $this->session->set_flashdata('success','data berhasil di tambah');

        redirect('Pembelian');
    }

    public function update_pembelian()
    {
        $id = $this->input->POST('id_pembelian');
        $c = $this->input->POST('barang');
        $n = $this->input->POST('supplier');
        $z = $this->input->POST('tgl_pembelian');
        $x = $this->input->POST('kode_pembelian');
        $v = $this->input->POST('jumlah_barang');
        $b = $this->input->POST('harga_total');
        $m = $this->input->POST('status_pembayaran');

        $data = array(
            'id_barang' => $c,
            'id_supplier' => $n,
            'tgl_pembelian' => $z,
            'kode_pembelian' => $x,
            'jumlah_barang' => $v,
            'harga_total' => $b,
            'status_pembayaran' => $m
        );

        $where = array('id_pembelian' => $id);
        $this->M_pembelian->update_data($data, $where);
        $this->session->set_flashdata('edit','data berhasil di update');
        redirect('Pembelian');    
    }

    public function hapus_pembelian($id)
    {
        $where = array('id_pembelian' => $id);
        $this->M_pembelian->hapus_data($where);
        $this->session->set_flashdata('delete','data berhasil di update');
        redirect('Pembelian');
    }
}

