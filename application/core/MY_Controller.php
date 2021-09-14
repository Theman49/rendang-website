<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct() {
       parent::__construct();
    }

    public function template($title, $content, $contentData = '', $controller = ''){
      $data['title'] = $title;
      $data['contentData'] = $contentData;
      $data['controller'] = $controller;
      $this->load->view('head', $data);
      $this->load->view('navbar');
      $this->load->view($content, $data);
      $this->load->view('footer');
   }
}

class another_controller extends MY_Controller {
    public function __construct() {
       parent::__construct();
    }
}

?>