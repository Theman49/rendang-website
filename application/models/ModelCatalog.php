<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ModelCatalog extends MY_Model {
	   public function getTable($table){
            $sql = "SELECT * FROM $table";
            $data = $this->db->query($sql);
            return $data->result_array();
        }
        public function getWhere($table, $whereCol, $where){
            $sql = "SELECT * FROM $table WHERE $whereCol = $where";
            $data = $this->db->query($sql);
            return $data->result_array();
        }
	}
?>