<?php 
 
class model_puskesmas extends CI_Model{
	function tampil_data_hasil(){  
		return $this->db->get('hasil')->result();
	}

	function dbwhere($table,$where){		
		return $this->db->get_where($table,$where)->result();
	}	

	function tampil_data_pengguna(){  
		return $this->db->get('login')->result();
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}