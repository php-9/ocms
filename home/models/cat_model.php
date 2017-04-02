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

	public function getBrothers($tb,$id){//获取同级所有栏目
		$row=$this->db->where('id',$id)->get($tb)->row_array();		
		return $this->db->where('pid',$row['pid'])->order_by('sort','asc')->get($tb)->result_array();
	}


	public function getSons($tb,$id){//获取下一级栏目
		$row=$this->db->where('id',$id)->get($tb)->row_array();		
		return $this->db->where('pid',$row['id'])->order_by('sort','asc')->get($tb)->result_array();
	}

	public function getParent($tb,$id){//获取上级栏目
		$row=$this->db->where('id',$id)->get($tb)->row_array();

		return $parent=$this->db->where('id',$row['pid'])->get($tb)->row_array();



	}



	public function one($table,$id){
		return $this->db->where('id',$id)->get($table)->row_array();
	}




}