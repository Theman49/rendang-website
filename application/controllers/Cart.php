<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {
	public function index()
	{
		$id_session = $this->session->userdata('id_session');
		$dataCart = $this->ModelCart->getFromCart();
		

		$title = "Cart | Rendangku";
		$this->template($title, 'cart', $dataCart, $this);
	}

	public function updateCart(){
		$id_session = $this->session->userdata('id_session');
		$id_menu = $_POST['idMenu'];
		$jumlah_order = $_POST['jumlahOrder'];
		$total_harga = $_POST['totalHarga'];

		$insert = $this->ModelCart->updateCart($id_session, $id_menu, $jumlah_order, $total_harga);
		if($insert){
// 			echo $id_session." ".$id_menu." ".$jumlah_order." ".$total_harga." "."Sukses ".$insert;
			redirect('cart');
		}else{
			echo "Gagal";
		}
	}
	
	public function hapusDariCart($id_menu){
		$hapus = $this->ModelCart->hapusDariCart($id_menu);
		if($hapus){
// 			echo $hapus." sukses";
			redirect('cart');
		}else{
			echo "Gagal";
		}
	}
}
