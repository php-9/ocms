<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page_model extends CI_Model{
		
    public function __construct(){
		parent::__construct();
		
	}

	
	public function insert($data){
		
		return $this->db->insert('page',$data);
		
	
	}

	public function num(){//记录数
		
			return $this->db->get('page')->num_rows();
		
		
	}
	
	//取所有文档
	public function paging($pagesize,$limit){
	
			 //$this->db->limit($pagesize,$limit)->get('page')->result_array();
			 return $this->db->select('page.*,column.name as column_name,column.attr as column_attr,column.id as column_id')->join('column','column.id = page.cat','left')->limit($pagesize,$limit)->get('page')->result_array();
		
					
	}
	
	//取单条记录
	
	public function one($id){
		
		$query=$this->db->where('id',$id)
						->get('page');
		if($query){
			return $query->row_array();
		}else{
			return NULL;
		}				
	
	}

	public function get_one_catid($catid){//根据栏目id获取记录
		return $this->db->where('cat',$catid)->get('page')->row_array();
	}
	
	
		//删除
	public function delete($id){
	
		return $this->db->delete('page',array('id'=>$id));
	}
	
	//修改
	public function update($id,$data){
		return $this->db->where('id',$id)
						->update('page',$data);
		
	}

	




}