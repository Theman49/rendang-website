<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LocalStorage extends CI_Controller {
        public function access($target){
            $data['random'] = time()+rand();
            $data['target'] = $target;
            $this->load->view('localStorage', $data);
        }
        public function cekSession(){
            $localStorageSession = $_POST['id_session'];
            if(!isset($_SESSION['id_session'])){
                $this->session->set_userdata('id_session', $localStorageSession);
            }
        }
    }

?>