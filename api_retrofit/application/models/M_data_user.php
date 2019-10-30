<?php
class M_data_user extends CI_Model{
	function tampil_data_user(){
		$hasil=$this->db->query("SELECT * from data_user");
		return $hasil;
	}
}
