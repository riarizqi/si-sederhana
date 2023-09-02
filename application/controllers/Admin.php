<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  private $view    = "backend/v_admin/";
  private $redirect = "Admin";

  public function __construct()
  {
    parent::__construct();
    IsAdmin();
    $this->load->model('M_admin');
  }

   function index()
   {
   $read = $this->M_admin->GetAll();
   $data = array(
     'judul'    => "DATA ADMIN",
     'sub'    => "Lihat Admin",
     'read'=> $read
   );
   //$this->load->view($this->view.'read', $data);
    $this->template->load('backend/template',$this->view.'read', $data);
   }

   public function create(){
      $data = array(
        'judul'   => "DATA ADMIN",
        'sub'   => "Tambah Admin",
        'create'   => ''
      );
    $this->template->load('backend/template',$this->view.'create', $data);
    }

    public function save(){
      $data = array(
           'kd_admin'=> $this->input->post('kd_admin'),
           'nama_admin'=> $this->input->post('nama_admin')
        );
        $this->M_admin->save($data);
        redirect($this->redirect,'refresh');
    }

    public function edit(){
    $kd   = $this->uri->segment(3);
      $data = array(
        'judul'   => "DATA ADMIN",
        'sub'   => "Ubah Admin",
        'edit'   => $this->M_admin->edit($kd)
      );
    $this->template->load('backend/template',$this->view.'edit', $data);
    }

    public function update(){
     $kd = $this->uri->segment(3);
      $data = array(
        'nama_admin'=> $this->input->post('nama_admin')
      );
      $this->M_admin->update($kd,$data);
      redirect($this->redirect,'refresh');
    }

    public function delete(){
    $kd = $this->uri->segment(3);
      $data = array(
        'kd_admin' => $kd
      );
    $this->M_admin->delete($data);
    redirect($this->redirect,'refresh');
    }

  }
