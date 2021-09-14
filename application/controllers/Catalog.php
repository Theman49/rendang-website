<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends MY_Controller {
	public function index()
	{
		if(!isset($_SESSION['id_session'])){
			$this->session->set_userdata('id_session', time());
		}

		$dataCatalog = $this->ModelCatalog->getTable('catalog');
		
		$title = "Catalog | Rendangku";
		$title = $this->session->userdata('id_session');
		$this->template($title, "catalog", $dataCatalog);
	}
	public function detail($id)
	{
		$dataDetail = $this->ModelCatalog->getWhere('catalog', 'id_menu', $id);
		$dataMenuLain = $this->ModelCatalog->getTable('catalog');
		$contentData = array(
			'dataDetail' => $dataDetail[0],
			'dataMenuLain' => $dataMenuLain,
		);

		$namaMenu = $dataDetail[0];

		$title = "Detail Menu | Rendangku";
		$data['title'] = $title;
		$data['namaMenu'] = $namaMenu['nama_menu'];
		$this->load->view('head', $data);
		$this->load->view('navbar');
		$this->load->view('path', $data);
		$this->load->view('detail-menu', $contentData);
		$this->load->view('footer');
	}
	public function addToCart(){
		// echo $_POST['jumlahOrder'];
		// echo $this->session->userdata('id_session');
		$idMenu = $_POST['idMenu'];
		$totalHarga = $_POST['totalHarga'];

		$data = array(
			
			'id_session' => $this->session->userdata('id_session'),
			'id_menu' => $idMenu,
			'jumlah_order' => $_POST['jumlahOrder'],
			'total_harga' => $totalHarga
		);
		

		$insert = $this->db->insert('cart', $data);
		if($insert){
			$script = "<script>alert('Success');window.location.href = \"catalog/detail/".$idMenu."\"</script>";
			echo $script;
		}else{
			echo "gagal";
		}
	}
	
}
