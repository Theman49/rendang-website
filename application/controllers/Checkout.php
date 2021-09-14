<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {
	public function index()
	{
		$id_session = $this->session->userdata('id_session');
		$dataCart['contentData'] = $this->ModelCart->getFromCart();

		$title = "Checkout | Rendangku";
		$data['title'] = $title;
		$this->load->view('head', $data);
		$this->load->view('checkout', $dataCart);
	}
	
}
