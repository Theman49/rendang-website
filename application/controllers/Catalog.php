<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends MY_Controller {
	public function index()
	{
		$dataCatalog = $this->ModelCatalog->getTable('catalog');
		
		$title = "Catalog | Rendangku";
		// $title = $this->session->userdata('id_session');
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
		$id_session = $this->session->userdata('id_session');
		$id_menu = $_POST['idMenu'];
		$jumlah_order = $_POST['jumlahOrder'];
		$totalHarga = $_POST['totalHarga'];

		$data = array(
			
			'id_session' => $id_session,
			'id_menu' => $id_menu,
			'jumlah_order' => $jumlah_order,
			'total_harga' => $totalHarga
		);

		$sql = "SELECT * FROM cart WHERE id_session = '". $id_session . "' AND id_menu = " . $id_menu .";";
		$select = $this->ModelCatalog->getDataFromQuery($sql);
		if(count($select) != 0){
			$this->update($data);
		}else{
			$this->insert($data);
		}
		

		// $insert = $this->db->insert('cart', $data);
		// if($insert){
		// 	$script = "<script>alert('Success');window.location.href = \"catalog/detail/".$idMenu."\"</script>";
		// 	echo $script;
		// }else{
		// 	echo "gagal";
		// }
	}

	public function insert($data){
		$insert = $this->db->insert('cart', $data);
		if($insert){
			$script = "<script>alert('Berhasil ditambahkan ke keranjang');window.location.href = \"catalog/detail/".$data['id_menu']."\"</script>";
			echo $script;
		}else{
			echo "gagal";
		}
	}

	public function update($data){
		$update = $this->ModelCart->updateCart($data['id_session'], $data['id_menu'], $data['jumlah_order'], $data['total_harga']);
		if($update){
			$script = "<script>alert('Berhasil ditambahkan ke keranjang');window.location.href = \"catalog/detail/".$data['id_menu']."\"</script>";
			echo $script;
		}else{
			echo "gagal";
		}
	}
	
}
