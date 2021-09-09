<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {
	public function index()
	{
		$title = "Home | Rendangku";
		$data['title'] = $title;
		$this->load->view('head', $data);
		$this->load->view('beranda');
		$this->load->view('footer');
	}
	
}
