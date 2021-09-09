<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		echo "<script>
			const code = \"12345\"
			const input = prompt(\"password :\")
			if(input == code){
				alert(\"Welcome\")
			}else{
				alert(\"Unrestricted\")
				document.location.href = \"./home\"
			}

		</script>";
		$title = "Admin | Rendangku";
		$data['title'] = $title;

		$sql = "SELECT * FROM kategori";
		$data['kategori'] = $this->ModelAdmin->getDataFromQuery($sql);


		$this->load->view('head', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/admin-page',$data);
		$this->load->view('footer');
	}

	public function kategori()
	{
		$title = "Admin | Rendangku";
		$data['title'] = $title;

		$sql = "SELECT * FROM kategori";
		$data['kategori'] = $this->ModelAdmin->getDataFromQuery($sql);


		$this->load->view('head', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/admin-page-kategori');
		$this->load->view('footer');
	}
	
}
