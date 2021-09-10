<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {
	public function index()
	{
		$title = "Cart | Rendangku";
		$this->template($title, 'cart');
	}
	
}
