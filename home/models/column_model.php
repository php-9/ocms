<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Column_model extends CI_Model{
    public function __construct(){
		parent::__construct();
		
	}

	public function get_artcount($id){




		
		$sql="select * from `doc` where cate='$id'";


		return count($this->db->query($sql)->result_array() );
		

	}
	


	




}