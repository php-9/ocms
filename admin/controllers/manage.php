<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manage extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('manage_model');

	}

	public function index(){

		$data['manage']=$this->manage_model->all();
		$this->load->view('manage',$data);
	}

	public function insert(){
		$data['username']=trim($this->input->post('username'));
		$data['password']=trim($this->input->post('password'));


		if(!$data['username']){
			//消息提示
			$msg['url']='';
			$msg['txt']='账号不能为空';
			$msg['time']=3;
			$msg['type']=0;
			$this->load->view('msg',$msg);

		}

		if(!$data['password']){
			//消息提示
			$msg['url']='';
			$msg['txt']='密码不能为空';
			$msg['time']=3;
			$msg['type']=0;
			$this->load->view('msg',$msg);

		}

		  
		   			
		 


		$data['password']=md5($data['password']);  


		if($this->manage_model->get_one_username($data['username']) ){
								//消息提示
					   			$msg['url']='';
					   			$msg['txt']='账号已存在';
					   			$msg['time']=3;
					   			$msg['type']=0;
					   			$this->load->view('msg',$msg);
		}
		
		if($this->manage_model->insert($data)){
			echo "<script>window.location.href='".site_url('manage/index')."'</script>";
		}else{
											//消息提示
								   			$msg['url']='';
								   			$msg['txt']='增加失败';
								   			$msg['time']=3;
								   			$msg['type']=0;
								   			$this->load->view('msg',$msg);
		}


	}

	public function update(){
		$id=$_GET['user_id'];
		$data['username']=$this->input->post('username');

		$password=$this->input->post('password');
		if($password){
			$data['password']=md5($password);
		}



		if($this->manage_model->update($id,$data)){

			echo "<script>window.location.href='".site_url('c=manage')."'</script>";
		}else{
			echo "<script>alert('添加失败,请重试');history.go(-1)</script>";
		}
	}

	public function delete(){
		$id=$_GET['user_id'];
		if($this->manage_model->delete($id)){

			echo "<script>window.location.href='".site_url('c=manage')."'</script>";
		}else{
			echo "<script>alert('删除失败,请重试');history.go(-1)</script>";
		}

	}

	public function exit_login(){
		$this->session->unset_userdata('manage_id');
		$this->session->unset_userdata('manage_username');
		echo "<script>window.location.href='".site_url('c=login&m=login')."'</script>";
	}

	

}