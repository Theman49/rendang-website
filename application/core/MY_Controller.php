<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct() {
       parent::__construct();
    }

    public function template($title,$content){
      $data['title'] = $title;
      $this->load->view('head', $data);
      $this->load->view('navbar');
      $this->load->view($content);
      $this->load->view('footer');
   }
}

class another_controller extends MY_Controller {
    public function __construct() {
       parent::__construct();
    }
}

?>