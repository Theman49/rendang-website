<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends MY_Controller {
	public function index()
	{
		$title = "Catalog | Rendangku";
		$this->template($title, "catalog");
	}
	public function detail($id)
	{
		$title = "Detail Menu | Rendangku";
		$data['title'] = $title;
		$data['namaMenu'] = $id;
		$this->load->view('head', $data);
		$this->load->view('navbar');
		$this->load->view('path', $data);
		$this->load->view('detail-menu');
		$this->load->view('footer');
	}
	
}
