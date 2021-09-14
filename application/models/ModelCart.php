<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ModelCart extends MY_Model {
	   public function getFromCart(){
            $sql = "SELECT * FROM catalog join cart WHERE catalog.id_menu = cart.id_menu AND cart.id_session = '".$this->session->userdata('id_session')."'";
            $data = $this->db->query($sql);
            return $data->result_array();
        }

        public function updateCart($id_session, $id_menu, $jumlah_order, $total_harga){
            $sql = "UPDATE cart SET jumlah_order = $jumlah_order , total_harga = $total_harga WHERE id_session = '$id_session' AND id_menu = $id_menu";
            $update = $this->db->query($sql);
            return $update;
        }
        public function hapusDariCart($id_menu){
            $sql = "DELETE FROM cart WHERE id_menu = $id_menu";
            $delete = $this->db->query($sql);
            return $delete;
        }

	}
?>