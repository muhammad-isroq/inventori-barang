<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_pembelian');
    }

    public function index() {
        $data['pembelian'] = $this->M_pembelian->getAllPembelian();
        $data['barang'] = $this->M_pembelian->getBarang();
        $data['supplier'] = $this->M_pembelian->getSupplier();
        $data['pembelian'] = $this->M_pembelian->getAllPembelian();
        $this->load->view('pembelian/v_pembelian', $data);
    }

    public function simpan() {
    $data = [
        'id_barang' => $this->input->post('id_barang'),
        'id_supplier' => $this->input->post('id_supplier'),
        'tgl_pembelian' => $this->input->post('tgl_pembelian'),
        'kode_pembelian' => $this->input->post('kode_pembelian'),
        'jumlah_barang' => $this->input->post('jumlah_barang'),
        'harga_total' => $this->input->post('harga_total'),
        'status_pembayaran' => $this->input->post('status_pembayaran')
    ];
    
    $this->M_pembelian->insertPembelian($data);
    redirect('pembelian');
}

public function update() {
    $id = $this->input->post('id_pembelian');
    $data = [
        'id_barang' => $this->input->post('id_barang'),
        'id_supplier' => $this->input->post('id_supplier'),
        'tgl_pembelian' => $this->input->post('tgl_pembelian'),
        'kode_pembelian' => $this->input->post('kode_pembelian'),
        'jumlah_barang' => $this->input->post('jumlah_barang'),
        'harga_total' => $this->input->post('harga_total'),
        'status_pembayaran' => $this->input->post('status_pembayaran')
    ];
    
    $this->M_pembelian->updatePembelian($id, $data);
    redirect('pembelian');
}


}
