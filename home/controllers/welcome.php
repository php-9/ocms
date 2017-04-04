<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends Home_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('config_model');
		$this->load->model('cat_model');
		$this->load->model('doc_model');		
		$this->load->model('column_model'); 

		
	}
	public function index(){		
		$data['docs']=$this->doc_model->all();//获取所有文档		
		$this->load->view('index.htm',$data);
	}





}

