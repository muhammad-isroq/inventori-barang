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

    public function laporanJanuari(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-1-01';
        $tanggal_akhir = '2024-1-31';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanFebruari(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-02-01';
        $tanggal_akhir = '2024-02-29';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanMaret(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-03-01';
        $tanggal_akhir = '2024-03-30';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanApril(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-04-01';
        $tanggal_akhir = '2024-04-30';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanMei(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-05-01';
        $tanggal_akhir = '2024-05-31';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanJuni(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-06-01';
        $tanggal_akhir = '2024-06-30';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanJuli(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-07-01';
        $tanggal_akhir = '2024-07-31';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanAgustus(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-08-01';
        $tanggal_akhir = '2024-08-31';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function laporanSeptember(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-09-01';
        $tanggal_akhir = '2024-09-30';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
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
    public function laporanDesember(){        
        // Tentukan rentang tanggal
        $tanggal_mulai = '2024-12-01';
        $tanggal_akhir = '2024-12-31';
        
        $this->db->select('stok.*, barang.nama_barang, barang.kode_barang');
        $this->db->from('stok');
        $this->db->join('barang', 'stok.id_barang = barang.id_barang');
        $this->db->where('tgl_update_terakhir >=', $tanggal_mulai);
        $this->db->where('tgl_update_terakhir <=', $tanggal_akhir);
        return $this->db->get()->result();
    }


}
