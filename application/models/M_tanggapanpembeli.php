<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tanggapanpembeli extends CI_Model{
  private $table     = 'tanggapanpembeli';
  private $pk     = 'id_customer';

  public function GetAll()
  {
    $this->db->order_by("nama_customer", 'asc');
    return $this->db->get($this->table);
  }

  public function save($data){
   return $this->db->insert($this->table, $data);
 }

 public function edit($kd){
   $this->db->where($this->pk, $kd);
   return $this->db->get($this->table)->row_array();
 }

 public function update($kd,$data){
   $this->db->where($this->pk, $kd);
   return $this->db->update($this->table, $data);
 }

 public function delete($data){
   $this->db->where($data);
   return $this->db->delete($this->table);
 }

}
