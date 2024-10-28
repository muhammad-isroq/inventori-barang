<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pembelian extends CI_Model {

	function tampil_data(){
		//return $this->db->get('pembelian');

        $query = $this->db->query("SELECT pembelian.*,
                            barang.nama_barang,                                                        
                            supplier.nama_supplier
                        FROM pembelian
                        INNER JOIN barang ON barang.id_barang = pembelian.id_barang
                        INNER JOIN supplier ON supplier.id_supplier = pembelian.id_supplier
                        ");

            return $query;
	}

    function insert_data($data){
        return $this->db->insert('pembelian',$data);
    }

    function edit_data($where){
        return $this->db->get_where('pembelian',$where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('pembelian',$data);
    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('pembelian');
    }

    function tampil_rm($id){
      $query = $this->db->query("SELECT pembelian.*,
                            barang.nama_barang,                            
                            supplier.nama_supplier
                        FROM pembelian
                        INNER JOIN barang ON barang.id_barang = pembelian.id_barang
                        INNER JOIN supplier ON supplier.id_supplier = pembelian.id_supplier
                        WHERE pembelian.id_pembelian = '$id'
                        ");

            return $query;  
    }

    function tampil_riwayat($id){
        $query = $this->db->query("SELECT pembelian.*,
                            barang.nama_barang,                            
                            supplier.nama_supplier
                        FROM pembelian
                        INNER JOIN barang ON barang.id_barang = pembelian.id_barang
                        INNER JOIN supplier ON supplier.id_supplier = pembelian.id_supplier
                        WHERE pembelian.id_barang = '$id'
                        ");

            return $query;  
    }
}
