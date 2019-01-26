<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model
{
//	Insert Query
	function insert_data($table_name, $data) {
		$query = $this->db->insert($table_name, $data);
		return $query;
	}
	//fetch all data
	function get_all_info($table_name) {
		$query = $this->db->get($table_name);
		return $query->result();
	}
	//Delete row
	function delete_info($table_id, $deleted_id, $table_name) {
		$this->db->where($table_id, $deleted_id);
		$query = $this->db->delete($table_name);
		return $query;
	}

}
