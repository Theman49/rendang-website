<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$object['controller'] = $this;
		$this->load->view('test', $object);
	}

	public function hello()
	{
		$kategori = $this->ModelCatalog->getWhereStr('kategori', 'id_kategori', 'A');
		echo $kategori[0]['nama_kategori'];

		if($kategori[0]['nama_kategori'] == "Paket 1"){
			$this->ModelCatalog->update('kategori', 'id_kategori', 'A', 'nama_kategori',  'Paket Hemat');
			$hasil = $this->ModelCatalog->getWhereStr('kategori', 'id_kategori', 'A');
			echo $hasil[0]['nama_kategori'];
		}
	}
}
