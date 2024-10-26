<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->table = 'users';
    }

    public function get_all_petugass(){
        return $this->db->get_where($this->table, ['role' => 'petugas'])->result_array();
    }

    public function insert_petugas($data){
        return $this->db->insert($this->table, $data);
    }

    public function get_petugas_by_id($id){
        return $this->db->get_where($this->table, ['id' => $id, 'role' => 'petugas'])->row_array();
    }

    public function update_petugas($id, $data){
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete_petugas($id){
        return $this->db->where('id', $id)->delete($this->table);
    }
}
?>
