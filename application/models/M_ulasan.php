<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ulasan extends CI_Model{
  private $table     = 'ulasan';
  private $pk     = 'kd_ulasan';

  public function GetAll()
  {
    $this->db->order_by("nama_baju", 'asc');
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
