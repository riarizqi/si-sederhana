<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanggapanpembeli extends CI_Controller{
  private $view    = "backend/v_tanggapanpembeli/";
  private $redirect = "Tanggapanpembeli";

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_tanggapanpembeli');
    IsAdmin();
  }

   function index()
   {
   $read = $this->M_tanggapanpembeli->GetAll();
   $data = array(
     'judul'    => "DATA Tanggapan Pembeli",
     'sub'    => "Lihat Tanggapan Pembeli",
     'read'=> $read
   );
   //$this->load->view($this->view.'read', $data);
    $this->template->load('backend/template',$this->view.'read', $data);
   }

   public function create(){
      $data = array(
        'judul'   => "DATA Tanggapan Pembeli",
        'sub'   => "Tambah Tanggapan Pembeli",
        'create'   => ''
      );
    $this->template->load('backend/template',$this->view.'create', $data);
    }

    public function save(){
      $data = array(
           'id_customer'=> $this->input->post('id_customer'),
           'nama_customer'=> $this->input->post('nama_customer')
        );
        $this->M_tanggapanpembeli->save($data);
        redirect($this->redirect,'refresh');
    }

    public function edit(){
    $kd   = $this->uri->segment(3);
      $data = array(
        'judul'   => "DATA Tanggapan Pembeli",
        'sub'   => "Ubah Tanggapan Pembeli",
        'edit'   => $this->M_tanggapanpembeli->edit($kd)
      );
    $this->template->load('backend/template',$this->view.'edit', $data);
    }

    public function update(){
     $kd = $this->uri->segment(3);
      $data = array(
        'nama_customer'=> $this->input->post('nama_customer')
      );
      $this->M_tanggapanpembeli->update($kd,$data);
      redirect($this->redirect,'refresh');
    }

    public function delete(){
    $kd = $this->uri->segment(3);
      $data = array(
        'id_customer' => $kd
      );
    $this->M_tanggapanpembeli->delete($data);
    redirect($this->redirect,'refresh');
    }

  }
