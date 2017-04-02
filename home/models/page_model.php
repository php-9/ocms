<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page_model extends CI_Model{		
    public function __construct(){
		parent::__construct();
		
	}

	public function getRow($catId){//根据栏目id获取单页
		return $this->db->get_where('page',array('cat'=>$catId))->row_array();
	}

	public function getAll(){//获取所有单页
		return $this->db->get('page')->result_array();
	}

	public function getOne($id){//获取一条记录
		return $this->db->get_where('page',array('id'=>$id))->row_array();
	}



}