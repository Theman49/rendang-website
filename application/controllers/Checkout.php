<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {
	public function index()
	{
		$id_session = $this->session->userdata('id_session');
		$dataCart['contentData'] = $this->ModelCart->getFromCart();
		$temp= [];
		$orderMenu = $this->ModelCart->getFromCart();
		foreach($orderMenu as $row){
			$sql = "SELECT * FROM catalog WHERE id_menu = '". $row['id_menu']."'";
        		$menu = $this->ModelCatalog->getDataFromQuery($sql);
        		array_push($temp, $menu[0]);
        	}
        $dataCart['menu'] = $temp;
		$dataCart['formData'] = "";

		$title = "Checkout | Rendangku";
		$data['title'] = $title;
		$this->load->view('head', $data);
		$this->load->view('checkout', $dataCart);
	}
	
	public function form(){
		// nama_pembeli kota_pembeli alamat_pembeli kode_pos telepon
		$id_session = $this->session->userdata('id_session');
		$data = array(
			'nama_pembeli' => $_POST['nama_pembeli'],
			'kota_pembeli' => $_POST['kota_pembeli'],
			'alamat_pembeli' => $_POST['alamat_pembeli'],
			'kode_pos' => $_POST['kode_pos'],
			'telepon' => $_POST['telepon'],
		);
		$this->session->set_userdata('formData', $data);
		
		$data['contentData'] = $this->ModelCart->getFromCart();
		$title = "Checkout | Rendangku";
		$data['title'] = $title;
		$data['formData'] = "1";
		$this->load->view('head', $data);
		$this->load->view('checkout', $data);

	}
	public function pathForm(){
		// nama_pembeli kota_pembeli alamat_pembeli kode_pos telepon
		$id_session = $this->session->userdata('id_session');
		$data = array(
			'nama_pembeli' => $_SESSION['formData']['nama_pembeli'],
			'kota_pembeli' => $_SESSION['formData']['kota_pembeli'],
			'alamat_pembeli' => $_SESSION['formData']['alamat_pembeli'],
			'kode_pos' => $_SESSION['formData']['kode_pos'],
			'telepon' => $_SESSION['formData']['telepon'],
		);
		$data['contentData'] = $this->ModelCart->getFromCart();
		$title = "Checkout | Rendangku";
		$data['title'] = $title;
		$data['formData'] = "1";
		$this->load->view('head', $data);
		$this->load->view('checkout', $data);

	}


	public function pembayaran(){
		$data = array(
			'nama_pembeli' => $_SESSION['formData']['nama_pembeli'],
			'kota_pembeli' => $_SESSION['formData']['kota_pembeli'],
			'alamat_pembeli' => $_SESSION['formData']['alamat_pembeli'],
			'kode_pos' => $_SESSION['formData']['kode_pos'],
			'telepon' => $_SESSION['formData']['telepon'],
			'metode-pengiriman' => $_POST['pilihanPengiriman'],
		);

		$this->session->set_userdata('formData', $data);

		$data['contentData'] = $this->ModelCart->getFromCart();
		$title = "Checkout | Rendangku";
		$data['title'] = $title;
		$data['formData'] = "2";
		$this->load->view('head', $data);
		$this->load->view('checkout', $data);
	}

	public function pathPembayaran(){
		$data = array(
			'nama_pembeli' => $_SESSION['formData']['nama_pembeli'],
			'kota_pembeli' => $_SESSION['formData']['kota_pembeli'],
			'alamat_pembeli' => $_SESSION['formData']['alamat_pembeli'],
			'kode_pos' => $_SESSION['formData']['kode_pos'],
			'telepon' => $_SESSION['formData']['telepon'],
			'metode-pengiriman' => $_SESSION['formData']['metode-pengiriman'],
		);

		$this->session->set_userdata('formData', $data);

		$data['contentData'] = $this->ModelCart->getFromCart();
		$title = "Checkout | Rendangku";
		$data['title'] = $title;
		$data['formData'] = "2";
		$this->load->view('head', $data);
		$this->load->view('checkout', $data);
	}

}
