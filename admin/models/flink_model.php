<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Flink_model extends CI_Model{		
    public function __construct(){
		parent::__construct();		
	}

	//取所有记录
	public function all(){		
		return $this->db->order_by('id DESC')->get('flink')->result_array();							
	}
	//取单条记录
	public function one($id){		
		return $this->db->where('id',$id)->get('flink')->row_array();	
	
	}

	//添加记录
	public function add($data){
		
		return $this->db->insert('flink',$data);
		
	
	}

	//修改
	public function update($id,$data){

		return $this->db->where('id',$id)->update('flink',$data);
		
	}

	//删除
	public function delete($id){
	
		return $this->db->delete('flink',array('id'=>$id));
	}
	


	




}