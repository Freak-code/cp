<?php
class M_login extends CI_Model{
			
	function cek($data) {
		return $this->db->get_where('users',$data)->num_rows();
	}
	
	function data($data) {
		return $this->db->get_where('users',$data)->result();	
	}
}