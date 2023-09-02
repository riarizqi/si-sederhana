<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
   private $view    = "backend/v_home/";
   private $redirect   = "Home";

   public function __construct(){
      parent::__construct();
      IsAdmin();
   }

   public function index(){
      $data = array(
         'judul'   => "BERANDA",
         'sub'   => "Halaman Beranda"
      );
     $this->template->load('backend/template',$this->view.'read', $data);
   }

}
