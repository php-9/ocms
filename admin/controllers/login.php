<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('manage_model');
	}	
	public function index(){
		if($this->session->userdata('manage_id')){
			header("location: ".site_url('c=main'));
		}
		$this->load->view('login');
	}
	public function login(){

		$this->load->view('login');
	}	
	public function check(){
			$data['username']=$this->input->post('username');
			$data['password']=md5($this->input->post('password') );			
			if($manage=$this->manage_model->check_login($data)){		
				$this->session->set_userdata('manage_id',$manage['id']);
				$this->session->set_userdata('manage_username',$manage['username']);
				
				
			   header("location: ".site_url('c=main'));
			
			}else{
				
				echo "<script language='javascript'>alert('帐号或密码不正确');history.back(1)</script>";
			}

	
		
		
	}
	

	


}
