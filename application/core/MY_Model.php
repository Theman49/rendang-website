<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    public function __construct() {
       parent::__construct();
    }
 	public function getDataFromQuery($sql){
        $data = $this->db->query($sql);
        return $data->result_array();
    }
}

class another_model extends MY_Model {
    public function __construct() {
       parent::__construct();
    }
}

?>