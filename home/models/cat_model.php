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

		//获取网站设置
		$cfg=$this->db->get('config')->row_array();
		//组织栏目url
		$columns=array();
		if($cfg['ishtml']){
					foreach ($this->catArr as $v) {
						switch ($v['attr']) {
							case '2':
								$v['url']=$v['elink'].'" target="_blank';
								break;
							case '3'://内链
								$v['url']='../../html/list_'.$v['ilink'].'_1.html';
								break;	
							default:
								$v['url']='../../html/list_'.$v['id'].'_1.html';
								break;
						}
						
						$columns[]=$v;
					}

		}else{
					foreach ($this->catArr as $v) {
						switch ($v['attr']) {
							case '2':
								$v['url']=$v['elink'].'" target="_blank';
								break;
							case '3':
								$v['url']='../../index.php?c=column&m=col&cat_id='.$v['ilink'];
								break;
							
							default:
								$v['url']='../../index.php?c=column&m=col&cat_id='.$v['id'];
								break;
						}
						
						$columns[]=$v;
					}
		}


		return $columns;

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