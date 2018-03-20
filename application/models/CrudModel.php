<?php 
 
class CrudModel extends CI_Model{
	function viewdbase(){
		return $this->db->get('pengajuanformulir');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    
    function update_data($data,$table,$where){	
        $this->db->where('email', $where);
        $this->db->update($table, $data);
    }
    
    function delete_data($table, $where){
	   $this->db->where('email', $where);
	   $this->db->delete($table);
    }
}