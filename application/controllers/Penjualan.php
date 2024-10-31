<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
    function __construct(){  
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }
        $this->load->model('M_penjualan');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['penjualan'] = $this->M_penjualan->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('penjualan/v_penjualan', $data);
        $this->load->view('v_footer'); 
    }
    
    public function insert_penjualan()
    {

        $z = $this->input->POST('tanggal_penjualan');
        $x = $this->input->POST('kode_penjualan');
        $c = $this->input->POST('nama_barang_dijual');
        $v = $this->input->POST('jumlah_barang_dijual');
        $b = $this->input->POST('harga_total_penjualan');
        $n = $this->input->POST('nama_pelanggan');
        $m = $this->input->POST('status_pengiriman');
        
        $data = array(
            'tanggal_penjualan' => $z,
            'kode_penjualan' => $x,
            'nama_barang_dijual' => $c,
            'jumlah_barang_dijual' => $v,
            'harga_total_penjualan' => $b,
            'nama_pelanggan' => $n,
            'status_pengiriman' => $m,
        );
        

        $this->M_penjualan->insert_data($data);
        $this->session->set_flashdata('success','data berhasil di tambah');

        redirect('Penjualan');
    }

    public function update_penjualan()
    {
        $id = $this->input->POST('id_penjualan');
        $z = $this->input->POST('tanggal_penjualan');
        $x = $this->input->POST('kode_penjualan');
        $c = $this->input->POST('nama_barang_dijual');
        $v = $this->input->POST('jumlah_barang_dijual');
        $b = $this->input->POST('harga_total_penjualan');
        $n = $this->input->POST('nama_pelanggan');
        $m = $this->input->POST('status_pengiriman');


        $data = array(
            'tanggal_penjualan' => $z,
            'kode_penjualan' => $x,
            'nama_barang_dijual' => $c,
            'jumlah_barang_dijual' => $v,
            'harga_total_penjualan' => $b,
            'nama_pelanggan' => $n,
            'status_pengiriman' => $m,
        );


        $where = array('id_penjualan' => $id);
        $this->M_penjualan->update_data($data, $where);
        $this->session->set_flashdata('edit','data berhasil di update');
        redirect('Penjualan');   
    }

    public function hapus_penjualan($id)
    {
        $where = array('id_penjualan' => $id);
        $this->M_penjualan->hapus_data($where);
        $this->session->set_flashdata('delete','data berhasil di hapus');
        redirect('Penjualan');
    }
}

