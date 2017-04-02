<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manage_model extends CI_Model{
    public function __construct(){
		parent::__construct();
		
	}

	public function all(){


		return $this->db->get('manage')->result_array();
		

	}

	public function get_one_username($username){

		return $this->db->get_where('manage',array('username'=>$username))->result_array();

	}

	public function check_login($data){

		return $this->db->get_where('manage',$data)->row_array();

	}



	public function insert($data){
		return $this->db->insert('manage',$data);
	}

	public function update($id,$data){
		return $this->db->where('id',$id)->update('manage',$data);
	}

	public function delete($id){
		return $this->db->where('id',$id)->delete('manage');
	}


	




}