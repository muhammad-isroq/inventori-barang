<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stok extends CI_Model {

    public function getBarang() {
        return $this->db->get('barang')->result();
    }

    public function insertStok($data) {
        return $this->db->insert('stok', $data);
    }

    public function getAllStok() {
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');        
        return $this->db->get()->result();
    }

    public function updateStok($id, $data) {
        $this->db->where('id_stok', $id);
        return $this->db->update('stok', $data);
    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('stok');

    }

    public function laporan(){
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        return $this->db->get()->result();
    }

    public function laporanOktober(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-10-01';
        $tanggal_akhir = '2024-10-31';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanNovember(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-11-01';
        $tanggal_akhir = '2024-11-30';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

}
