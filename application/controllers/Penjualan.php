<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penjualan extends CI_Controller{
  private $view     = "backend/v_penjualan/";
  private $redirect = "penjualan";

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_penjualan');
    $this->load->model('M_produk');
    IsAdmin();
  }

  function index(){
  $read = $this->M_penjualan->GetAll();
    $data = array(
      'judul'   => "DATA Penjualan",
      'sub'   => "Lihat Penjualan",
      'read'=> $read
    );
    //$this->load->view($this->view.'read', $data);
    $this->template->load('backend/template',$this->view.'read', $data);
  }

  public function create(){
    $data = array(
      'judul'   => "DATA Penjualan",
      'sub'   => "Tambah Penjualan",
      'kategori'    => $this->M_penjualan->GetAll(),
      'create'    => ''
    );
    //$this->load->view($this->view.'create', $data);
    $this->template->load('backend/template',$this->view.'create', $data);
  }

  public function save(){
       //img_penjualan
       $name_imgpenjualan = $_FILES['img_penjualan']['name'];
       $type_imgpenjualan = $_FILES['img_penjualan']['type'];
       $tmp_imgpenjualan  = $_FILES['img_penjualan']['tmp_name'];
       //upload img
       if (!empty($tmp_imgpenjualan)){
          if ($type_imgpenjualan != "image/jpeg" AND $type_imgpenjualan != "image/jpg" AND $type_imgpenjualan != "image/png"){
          echo "<script>alert('Format yang digunakan jpeg|jpg|png');</script>";
          redirect($this->redirect,'refresh');
          }
       else{
       $img_penjualan = UploadImg($_FILES['img_penjualan'],'./assets/img_penjualan/','penjualan',500);
       $data = array(
          'judul_penjualan'=> $this->input->post('judul_penjualan'),
          'id_kategori'=> $this->input->post('id_kategori'),
          'st_penjualan'=> 'Blokir',
          'isi_penjualan'=> $this->input->post('isi_penjualan'),
          'tgl_penjualan'=> date('Y-m-d'),
          'jam_penjualan'=> date('H:i:s'),
          'kd_Penjualan'   => $this->session->userdata('kd_Penjualan'),
          'img_penjualan'=>   $img_penjualan
       );
       $this->M_penjualan->save($data);
       redirect($this->redirect,'refresh');
       }
       }
    }

  public function edit(){
    $kd   = $this->uri->segment(3);
    $data = array(
      'judul'   => "DATA Penjualan",
      'sub'   => "Ubah Penjualan",
      'kategori'    => $this->M_penjualan->GetAll(),
      'edit'    => $this->M_penjualan->edit($kd)
    );
    //$this->load->view($this->view.'edit', $data);
    $this->template->load('backend/template',$this->view.'edit', $data);
  }

  public function update(){
        $kd = $this->uri->segment(3);
        //img_penjualan
        $name_imgpenjualan = $_FILES['img_penjualan']['name'];
        $type_imgpenjualan = $_FILES['img_penjualan']['type'];
        $tmp_imgpenjualan  = $_FILES['img_penjualan']['tmp_name'];
        //upload img
        if (!empty($tmp_imgpenjualan)){
           if ($type_imgpenjualan != "image/jpeg" AND $type_imgpenjualan != "image/jpg" AND $type_imgpenjualan != "image/png"){
              echo "<script>alert('Format yang digunakan jpeg|jpg|png');</script>";
              redirect($this->redirect,'refresh');
           }
           else{
              $img_penjualan = UploadImg($_FILES['img_penjualan'],'./assets/img_penjualan/','penjualan',500);
              $data = array(
                 'judul_penjualan'=> $this->input->post('judul_penjualan'),
                 'id_kategori'=> $this->input->post('id_kategori'),
                 'isi_penjualan'=> $this->input->post('isi_penjualan'),
                 'tgl_penjualan'=> $this->input->post('tgl_penjualan'),
                 'jam_penjualan'=> $this->input->post('jam_penjualan'),
                 'kd_Penjualan'   => $this->session->userdata('kd_Penjualan'),
                 'img_penjualan'         => $img_penjualan
              );
           }
        }
        else{
           $data = array(
              'judul_penjualan'=> $this->input->post('judul_penjualan'),
              'id_kategori'=> $this->input->post('id_kategori'),
              'isi_penjualan'=> $this->input->post('isi_penjualan'),
              'tgl_penjualan'=> $this->input->post('tgl_penjualan'),
              'jam_penjualan'=> $this->input->post('jam_penjualan'),
              'kd_Penjualan'   => $this->session->userdata('kd_Penjualan'),
              );
        }
        $this->M_penjualan->update($kd,$data);
        redirect($this->redirect,'refresh');
     }


  public function delete(){
  $kd = $this->uri->segment(3);
    $data = array(
      'kd_Penjualan' => $kd
    );
  $this->M_penjualan->delete($data);
  redirect($this->redirect,'refresh');
  }

}
