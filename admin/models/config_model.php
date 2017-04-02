<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Config_model extends CI_Model{
     public function __construct(){
		parent::__construct();
		
	}
	//取数据
	public function get_one(){
	
		return $this->db->get('config')->row_array();
	
	}
	public function update($id,$data){
	
		$this->db->where('id',$id)
					   ->update('config',$data);
		return $this->db->affected_rows();			   
			   
		
	}
	
	


}

?>