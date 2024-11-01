<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_stok');
    }

    public function index() {
        $data['stok'] = $this->M_stok->getAllstok();
        $data['barang'] = $this->M_stok->getBarang();        
        $data['stok'] = $this->M_stok->getAllstok();
        $this->load->view('stok/v_stok', $data);
    }

    public function simpan() {
        $data = [
            'id_barang' => $this->input->post('id_barang'),            
            'jumlah_masuk' => $this->input->post('jumlah_masuk'),
            'jumlah_keluar' => $this->input->post('jumlah_keluar'),
            'sisa_stok' => $this->input->post('sisa_stok'),
            'tgl_update_terakhir' => $this->input->post('tgl_update_terakhir'),            
        ];

        $this->M_stok->insertstok($data);
        redirect('stok');
    }

    public function update() {
        $id = $this->input->post('id_stok');
        $data = [
            'id_barang' => $this->input->post('id_barang'),            
            'jumlah_masuk' => $this->input->post('jumlah_masuk'),
            'jumlah_keluar' => $this->input->post('jumlah_keluar'),
            'sisa_stok' => $this->input->post('sisa_stok'),
            'tgl_update_terakhir' => $this->input->post('tgl_update_terakhir'),            
        ];

        $this->M_stok->updatestok($id, $data);
        redirect('Stok');
    }

    public function hapus($id){
        $where = array('id_stok' => $id);
        $this->M_stok->hapus_data($where);
        $this->session->set_flashdata('delete', 'data berhasil dihapus');
        redirect('Stok');
    }

    public function laporan(){
        $data['stok'] = $this->M_stok->getAllstok();
        $data['barang'] = $this->M_stok->getBarang();        
        $data['stok'] = $this->M_stok->getAllstok();
        $this->load->view('stok/v_laporan', $data);
    }
}
