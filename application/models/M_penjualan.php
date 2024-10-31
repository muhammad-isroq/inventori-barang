<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjualan extends CI_Model {

    function tampil_data(){
       return $this->db->get('penjualan');
    }

    function insert_data($data){
        return $this->db->insert('penjualan', $data);
    }

    function edit_data($where){
        return $this->db->get_where('penjualan', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('penjualan', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('penjualan');

    } 
        
}
