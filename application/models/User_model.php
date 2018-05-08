<?php 
/**
* 
*/
class User_model extends CI_Model
{
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete('user');
	}

}

?>