<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Flink extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('flink_model'); 
	}
	
	
	
	public function index(){

		$data['links']=$this->flink_model->all();				
		$this->load->view('flink',$data);		
	}


	public function add(){
		
		$this->load->view('flink_add');


	}
	
	public function add_pass(){


		//图片上传
		$config['upload_path'] = '../upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite']=FALSE;
		$config['encrypt_name']=TRUE;
		$config['max_size'] = '1024';	
		$this->load->library('upload', $config);		
		if($this->upload->do_upload('thumb') ){
			$file_data=$this->upload->data();
			$data['thumb']=$file_data['file_name'];
			
		}
		
		$data['tit']=$this->input->post('tit');
		$data['url']=$this->input->post('url');		
		$data['addtime']=time();
		if($this->flink_model->add($data)){

			echo "<script language='javascript'>alert('添加成功');location.href='".site_url('c=flink')."'</script>";
			
		}else{
			echo "<script language='javascript'>alert('添加失败');history.back(1)</script>";	
		}
	
		
		
		
	}
	
	public function del(){
		$id=$_GET['id'];		
		if($this->flink_model->delete($id)){
			echo "<script language='javascript'>location.href='".site_url('c=flink')."'</script>";	
		}else{
			echo "<script language='javascript'>alert('删除失败');history.back(1)</script>";	
		}
	
	
	
	}

	public function edit(){
		$id=$_GET['id'];
		$data['flink']=$this->flink_model->one($id);		
		$this->load->view('flink_edit',$data);

	}
	
	public function edit_pass(){

		$id=$_GET['id'];

		//图片上传
		$config['upload_path'] = '../upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite']=FALSE;
		$config['encrypt_name']=TRUE;
		$config['max_size'] = '1024';	
		$this->load->library('upload', $config);		
		if($this->upload->do_upload('thumb') ){
			$file_data=$this->upload->data();
			$data['thumb']=$file_data['file_name'];
			
		}

		
		$data['tit']=$this->input->post('tit');
		$data['url']=$this->input->post('url');
		$data['lastedit']=time();//更新时间		
		
		if($this->flink_model->update($id,$data)){
		
			echo "<script language='javascript'>location.href='".site_url('c=flink')."'</script>";
			
		}else{
			echo "<script language='javascript'>alert('修改失败');history.back(1)</script>";	
		}	
	
	
	}



}

?>

