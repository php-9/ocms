<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doc_model extends CI_Model{
	private static $table='doc';	
    public function __construct(){
		parent::__construct();
		
	}



	//前台

	public function home_all($category){


		


		return $this->db->where('cate',$column)->get(self::$table)->result_array();


	}


	public function all(){
		return $this->db->get(self::$table)->result_array();
	}




	
	public function insert($data){
		
		return $this->db->insert(self::$table,$data);
		
	
	}

	


	//分页记录数
	public function get_num($column_id=0,$sonArr){
		
		return $this->db->where_in('cate',$sonArr)->get('doc')->num_rows();

	}
	
	//取所有分页文档
	public function get_all($column_id,$pagesize,$limit,$sonArr){
	
		return $this->db->where_in('cate',$sonArr)->limit($pagesize,$limit)->order_by('id DESC')->get('doc')->result_array();
					
	}
	
	//取单条记录
	
	public function get_one($id){
		
		$query=$this->db->where('id',$id)
						->get(self::$table);
		if($query){
			return $query->row_array();
		}else{
			return NULL;
		}				
	
	}
	
	
		//删除
	public function delete($id){
	
		return $this->db->delete(self::$table,array('id'=>$id));
	}
	
	//修改
	public function update($id,$data){
		return $this->db->where('id',$id)
						->update(self::$table,$data);
		
	}

	




}