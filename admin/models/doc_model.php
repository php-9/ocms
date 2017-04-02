<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doc_model extends CI_Model{		
    public function __construct(){
		parent::__construct();

		
	}


	public function insert($data){
		
		return $this->db->insert('doc',$data);
		
	
	}

	//分页记录数
	public function get_num($column_id,$sonArr){
		if($column_id){
			return $this->db->where_in('cate',$sonArr)->get('doc')->num_rows();
		}else{//栏目id为0
			return $this->db->get('doc')->num_rows();
		}
		

	}
	
	//取所有文档
	public function get_all($column_id,$pagesize,$limit,$sonArr){
		if($column_id){
			return $this->db->select('doc.*,column.name as column_name')->join('column','column.id = doc.cate','left')->where_in('cate',$sonArr)->limit($pagesize,$limit)->order_by('id DESC')->get('doc')->result_array();
		}else{//栏目id为0
			return $this->db->select('doc.*,column.name as column_name')->join('column','column.id = doc.cate','left')->limit($pagesize,$limit)->order_by('id DESC')->get('doc')->result_array();
		}
		
					
	}
	
	//取单条记录
	
	public function get_one($id){
		
		$query=$this->db->where('id',$id)
						->get('doc');
		if($query){
			return $query->row_array();
		}else{
			return NULL;
		}				
	
	}
	
	
	//删除
	public function delete($id){
	
		return $this->db->delete('doc',array('id'=>$id));
	}
	
	//修改
	public function update($id,$data){
		return $this->db->where('id',$id)
						->update('doc',$data);
		
	}

	




}