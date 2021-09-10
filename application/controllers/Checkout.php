<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {
	public function index()
	{
		$title = "Checkout | Rendangku";
		$data['title'] = $title;
		$this->load->view('head', $data);
		$this->load->view('checkout');
	}
	
}
