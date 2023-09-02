<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengiriman extends CI_Controller{
  private $view     = "backend/v_pengiriman/";
  private $redirect = "pengiriman";

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pengiriman');
    $this->load->model('M_produk');
    IsAdmin();
  }

  function index(){
  $read = $this->M_pengiriman->GetAll();
    $data = array(
      'judul'   => "DATA Pengiriman",
      'sub'   => "Lihat Pengiriman",
      'read'=> $read
    );
    //$this->load->view($this->view.'read', $data);
    $this->template->load('backend/template',$this->view.'read', $data);
  }

  public function create(){
    $data = array(
      'judul'   => "DATA Pengiriman",
      'sub'   => "Tambah Pengiriman",
      'kategori'    => $this->M_pengiriman->GetAll(),
      'create'    => ''
    );
    //$this->load->view($this->view.'create', $data);
    $this->template->load('backend/template',$this->view.'create', $data);
  }

  public function save(){
       $data = array(
          'nama_produk'=> $this->input->post('nama_produk'),
          'kategori'=> $this->input->post('kategori'),
          'st_pengiriman'=> $this->input->post('st_pengiriman'),
          'jumlah'=> $this->input->post('isi_pengiriman'),
          'tgl_pengiriman'=> date('Y-m-d'),
          'jam_pengiriman'=> date('H:i:s'),
          'alamat_tujuan'=> $this->input->post('alamat_tujuan'),
          'kd_produk'   => $this->session->userdata('kd_produk'),
       );
       $this->M_pengiriman->save($data);
       redirect($this->redirect,'refresh');
    }

  public function edit(){
    $kd   = $this->uri->segment(3);
    $data = array(
      'judul'   => "DATA Pengiriman",
      'sub'   => "Ubah Pengiriman",
      'kategori'    => $this->M_pengiriman->GetAll(),
      'edit'    => $this->M_pengiriman->edit($kd)
    );
    //$this->load->view($this->view.'edit', $data);
    $this->template->load('backend/template',$this->view.'edit', $data);
  }

  public function update(){
        $kd = $this->uri->segment(3);
              $data = array(
                 'nama_produk'=> $this->input->post('nama_produk'),
                 'kategori'=> $this->input->post('kategori'),
                 'alamat_tujuan'=> $this->input->post('alamat_tujuan'),
                 'tgl_pengiriman'=> $this->input->post('tgl_pengiriman'),
                 'jam_pengiriman'=> $this->input->post('jam_pengiriman'),
                 'kd_produk'   => $this->session->userdata('kd_produk'),
              );
        $this->M_pengiriman->update($kd,$data);
        redirect($this->redirect,'refresh');
     }


  public function delete(){
  $kd = $this->uri->segment(3);
    $data = array(
      'kd_produk' => $kd
    );
  $this->M_pengiriman->delete($data);
  redirect($this->redirect,'refresh');
  }

}
