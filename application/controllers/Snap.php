<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-hLRSbIlTDGurT2bIS56GROoo', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {
    	$nama = $this->input->post('nama');
    	$email = $this->input->post('email');
    	$kota = $this->input->post('kota');
    	$alamat = $this->input->post('alamat');
    	$kodePos = $this->input->post('kodePos');
    	$telepon = $this->input->post('telepon');

    	$totalHarga = $this->input->post('totalHarga');
    	$namaMenu = $this->input->post('namaMenu');
    	$quantities = $this->input->post('quantities');
    	$hargaMenu = $this->input->post('hargaMenu');

    	// $order = $this->ModelCart->getFromCart();
    	// $menu = $this->db->get_where('catalog', array('id_menu' => $order[0]['id_menu']));

    	// die($order);
		
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $totalHarga, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => 'a1',
		  'price' => $hargaMenu[0],
		  'quantity' => $quantities[0],
		  'name' => $namaMenu[0]
		);

		// Optional
		// $item2_details = array(
		//   'id' => 'a2',
		//   'price' => 20000,
		//   'quantity' => 2,
		//   'name' => "Empal Serundeng"
		// );

		// Optional
		$item_details =  [];

		for($i=0;$i<count($namaMenu);$i++){
			$item = array(
				'id' => 'order'.$i+1,
				'price' => $hargaMenu[$i],
				'quantity' => $quantities[$i],
				'name' => $namaMenu[$i]
			);
			array_push($item_details, $item);
		}




		// Optional
		$billing_address = array(
		  'first_name'    => $nama,
		  'last_name'     => "",
		  'address'       => $alamat,
		  'city'          => $kota,
		  'postal_code'   => $kodePos,
		  'phone'         => $telepon,
		  'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => $nama,
		  'last_name'     => "",
		  'address'       => $alamat,
		  'city'          => $kota,
		  'postal_code'   => $kodePos,
		  'phone'         => $telepon,
		  'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $nama,
		  'last_name'     => "",
		  'email'         => $email,
		  'phone'         => $telepon,
		  'billing_address'  => $billing_address,
		  'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'day', 
            'duration'  => 1
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'), true);
    	// echo 'RESULT <br><pre>';
    	// var_dump($result);
    	// echo '</pre>' ;
    	$time = time();
    	$expireTime = time()+(3600 * 24); //expire 1 day
    	$nama = $this->input->post('nama_pembeli');
    	$data = array(
    		'order_id' => $result['order_id'],
    		'id_session' => $this->session->userdata('id_session'),
    		'nama_pembeli' => $nama,
    		'gross_amount' => $result['gross_amount'],
    		'payment_type' => $result['payment_type'],
			'status_code' => $result['status_code'],
    		'bank' => $result['va_numbers'][0]['bank'],
    		'va_number' => $result['va_numbers'][0]['va_number'],
    		'transaction_time' => $time,
    		'expire_time' => $expireTime,
    		'pdf_url' => $result['pdf_url'],
    	);

		

		$id_session = $this->session->userdata('id_session');
		$sql = "SELECT * FROM cart WHERE id_session = $id_session";
		$dataCart = $this->ModelCatalog->getDataFromQuery($sql);
		$count = count($dataCart);
		$cek = 0;
		// insert to checkout table
		foreach($dataCart as $row){
			$dataItem = array(
				'order_id' => $result['order_id'],
				'id_session' => $id_session,
				'id_menu' => $row['id_menu'],
				'jumlah_order' => $row['jumlah_order'],
				'total_harga' => $row['total_harga']
			);
			$insert = $this->db->insert('checkout', $dataItem);
			if($insert){
				$cek += 1;
			}
		}

		// deleting from cart
		$delete = $this->db->delete('cart', array('id_session'=>$id_session));

		// insert to midtrans table
		if($cek == $count){
			$insert = $this->db->insert('transaksi_midtrans', $data);
			if($insert){
				redirect('transaction');
			}else{
				echo "gagal";
			}
		}



    	
    }
}
