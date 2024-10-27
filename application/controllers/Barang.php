<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    function __construct(){  
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }
        $this->load->model('M_barang');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['barang'] = $this->M_barang->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('barang/v_barang', $data);
        $this->load->view('v_footer'); 
    }
    
    public function insert_barang()
    {

        $z = $this->input->POST('nama_barang');
        $x = $this->input->POST('kode_barang');
        $c = $this->input->POST('deskripsi_barang');
        $v = $this->input->POST('kategori_barang');
        $b = $this->input->POST('stok_tersedia');
        $n = $this->input->POST('satuan');
        $m = $this->input->POST('harga');
        
        $data = array(
            'nama_barang' => $z,
            'kode_barang' => $x,
            'deskripsi_barang' => $c,
            'kategori_barang' => $v,
            'stok_tersedia' => $b,
            'satuan' => $n,
            'harga' => $m,
        );
        

        $this->M_barang->insert_data($data);
        $this->session->set_flashdata('success','data berhasil di tambah');

        redirect('Barang');
    }

    public function update_barang()
    {
        $id = $this->input->POST('id_barang');
        $z = $this->input->POST('nama_barang');
        $x = $this->input->POST('kode_barang');
        $c = $this->input->POST('deskripsi_barang');
        $v = $this->input->POST('kategori_barang');
        $b = $this->input->POST('stok_tersedia');
        $n = $this->input->POST('satuan');
        $m = $this->input->POST('harga');


        $data = array(
            'nama_barang' => $z,
            'kode_barang' => $x,
            'deskripsi_barang' => $c,
            'kategori_barang' => $v,
            'stok_tersedia' => $b,
            'satuan' => $n,
            'harga' => $m,
        );


        $where = array('id_barang' => $id);
        $this->M_barang->update_data($data, $where);
        $this->session->set_flashdata('edit','data berhasil di update');
        redirect('Barang');   
    }

    public function hapus_barang($id)
    {
        $where = array('id_barang' => $id);
        $this->M_barang->hapus_data($where);
        $this->session->set_flashdata('delete','data berhasil di update');
        redirect('Barang');
    }
}

