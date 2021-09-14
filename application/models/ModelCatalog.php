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
        public function getWhereStr($table, $whereCol, $where){
            $sql = "SELECT * FROM $table WHERE $whereCol = '$where'";
            $data = $this->db->query($sql);
            return $data->result_array();
        }
        public function update($table, $whereCol, $where, $setCol, $value){
            $sql = "UPDATE $table SET $setCol = '$value' WHERE $whereCol = '$where' ";
            $this->db->query($sql);
        }
	}
?>