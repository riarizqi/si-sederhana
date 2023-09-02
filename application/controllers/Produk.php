<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller{
  private $view    = "backend/v_produk/";
  private $redirect = "produk";

  public function __construct()
  {
    parent::__construct();
    IsAdmin();
    $this->load->model('M_produk');
  }

   function index()
   {
   $read = $this->M_produk->GetAll();
   $data = array(
     'judul'    => "DATA produk",
     'sub'    => "Lihat produk",
     'read'=> $read
   );
   //$this->load->view($this->view.'read', $data);
    $this->template->load('backend/template',$this->view.'read', $data);
   }

   public function create(){
      $data = array(
        'judul'   => "DATA produk",
        'sub'   => "Tambah produk",
        'create'   => ''
      );
    $this->template->load('backend/template',$this->view.'create', $data);
    }

    public function save(){
      $data = array(
           'kd_produk'=> $this->input->post('kd_produk'),
           'nama_produk'=> $this->input->post('nama_produk')
        );
        $this->M_produk->save($data);
        redirect($this->redirect,'refresh');
    }

    public function edit(){
    $kd   = $this->uri->segment(3);
      $data = array(
        'judul'   => "DATA produk",
        'sub'   => "Ubah produk",
        'edit'   => $this->M_produk->edit($kd)
      );
    $this->template->load('backend/template',$this->view.'edit', $data);
    }

    public function update(){
     $kd = $this->uri->segment(3);
      $data = array(
        'nama_produk'=> $this->input->post('nama_produk')
      );
      $this->M_produk->update($kd,$data);
      redirect($this->redirect,'refresh');
    }

    public function delete(){
    $kd = $this->uri->segment(3);
      $data = array(
        'kd_produk' => $kd
      );
    $this->M_produk->delete($data);
    redirect($this->redirect,'refresh');
    }

  }
