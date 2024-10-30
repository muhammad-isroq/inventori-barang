<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembelian extends CI_Model {

    public function getBarang() {
        return $this->db->get('barang')->result();
    }

    public function getSupplier() {
        return $this->db->get('supplier')->result();
    }

    public function insertPembelian($data) {
        return $this->db->insert('pembelian', $data);
    }

    public function getAllPembelian() {
        $this->db->select('pembelian.*, barang.nama_barang, supplier.nama_supplier');
        $this->db->from('pembelian');
        $this->db->join('barang', 'pembelian.id_barang = barang.id_barang');
        $this->db->join('supplier', 'pembelian.id_supplier = supplier.id_supplier');
        return $this->db->get()->result();
    }

    public function updatePembelian($id, $data) {
    $this->db->where('id_pembelian', $id);
    return $this->db->update('pembelian', $data);
}

}
