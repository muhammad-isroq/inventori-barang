<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

    function tampil_data(){
       return $this->db->get('barang');
    }

    function insert_data($data){
        return $this->db->insert('barang', $data);
    }

    function edit_data($where){
        return $this->db->get_where('barang', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('barang', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('barang');

    } 
        
}
