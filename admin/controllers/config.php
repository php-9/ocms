<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('config_model');
		//$this->load->model('doc_model'); 
		//$this->load->library('form_validation');
		//$this->load->helper('form');
	}
	
	public function index(){
		$data['config']=$this->config_model->get_one(1);
		$this->load->view('config',$data);
	}

	public function update(){
	
		
		  $data['title']=$this->input->post('title');
		  $data['keywords']=$this->input->post('keywords');
		  $data['description']=$this->input->post('description');
		  $data['copyright']=$this->input->post('copyright');
		  $data['qq']=$this->input->post('qq');
		  $data['tel']=$this->input->post('tel');
		  $data['ishtml']=$this->input->post('ishtml');
		 $this->config_model->update(1,$data);
		 $data['config']=$this->config_model->get_one(1);
		 $this->load->view('config',$data);

		 

		 
		 
		 
		 
	
	}
	

}


