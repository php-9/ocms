<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cat_model extends CI_Model{
    public function __construct(){
		parent::__construct();		
	}

	public $catArr=array();//栏目数组
	

	public function all($table,$catId=0){
		
		$this->catArr=array();//重置数组
		$cats = array();		
		$cats = $this->db->order_by('sort','asc')->get($table)->result_array();		
		$this->sortCat($cats,$catId);		
		return $this->catArr;

	}

	public function sortCat($catsArr,$cat,$level=-1){//弟归处理栏目
		$level++;
		foreach ($catsArr as $v) {
			
			if($v['pid']==$cat){
				$v['level']=$level;				
				$this->catArr[]=$v;					
				$this->sortCat($catsArr,$v['id'],$level);

			}
			
		}
		
	}

	public function countArt($catId){
		
		$sql="select * from `doc` where cate={$catId}";


		return count($this->db->query($sql)->result_array() );
		

	}

	public function add($table,$data){
		return $this->db->insert($table,$data);
	}
	public function one($table,$id){
		return $this->db->where('id',$id)->get($table)->row_array();
	}
	public function update($table,$data,$id){
		return $this->db->update($table,$data,array('id'=>$id));
	}
	public function del($table,$id){
		return $this->db->delete($table,array('id'=>$id));
	}
	


	




}