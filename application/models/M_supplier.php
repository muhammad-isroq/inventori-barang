<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {

    function tampil_data(){
       return $this->db->get('supplier');
    }

    function insert_data($data){
        return $this->db->insert('supplier', $data);
    }

    function edit_data($where){
        return $this->db->get_where('supplier', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('supplier', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('supplier');

    } 
        
}
