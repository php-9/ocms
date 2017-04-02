<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->model('cat_model');
		

	}

	public function index(){
		
		$page = isset($_GET['per_page']) ? $_GET['per_page'] : 1;

		$data['cats']=$this->cat_model->all('column');

						//分页
						$pagesize=20;//每页数量
						
						$this->load->library('pagination');
						$config['use_page_numbers'] = TRUE;
						$config['num_links'] = 2;
						$config['base_url']=site_url('c=page');
						$config['total_rows']=$this->page_model->num();//记录总数
						$config['per_page']=$pagesize;						
						$config['full_tag_open'] ="<div class='page'>";
				        $config['full_tag_close'] ="</div>";
						$config['first_link'] = false;
						$config['last_link'] = false;
				        $config['full_tag_open'] = '<ul class=pagination>';
				        $config['full_tag_close'] = '</ul>';
				        $config['cur_tag_open'] = '<li class="active"><a>';
				        $config['cur_tag_close'] = '</a></li>';
				        $config['num_tag_open'] = '<li>';
				        $config['num_tag_close'] = '</li>';
				        $config['prev_tag_open'] = '<li>';
				        $config['prev_tag_close'] = '</li>';
				        $config['next_tag_open'] = '<li>';
				        $config['next_tag_close'] = '</li>';
				        $config['first_link'] = '首页';
				        $config['first_tag_open'] = '<li>';
				        $config['first_tag_close'] = '</li>';
				        $config['last_link'] = '末页';
				        $config['last_tag_open'] = '<li>';
				        $config['last_tag_close'] = '</li>';
						$this->pagination->initialize($config);
					    $data['pages']=$this->pagination->create_links();
						//分页



				$data['page']=$this->page_model->paging($pagesize,($page-1)*$pagesize);
				
				$this->load->view('page',$data);		
		
		
		
		
		
	}


	public function insert(){
		$data['cats']=$this->cat_model->all('column');
		$this->load->view('page_insert',$data);


	}
	
	public function insert_pass(){

		$data['cat']=$this->input->post('cat');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');	



		if($this->page_model->insert($data)){

			echo "<script language='javascript'>alert('单页添加成功');location.href='".site_url('c=page')."'</script>";
			
		}else{
			echo "<script language='javascript'>alert('添加失败');history.back(1)</script>";	
		}
	
		
		
		
	}
	
	public function delete(){
		$id=$_GET['page_id'];
		$query=$this->page_model->delete($id);
		if($query){
			echo "<script language='javascript'>location.href='".site_url('c=page')."'</script>";	
		}else{
			echo "<script language='javascript'>alert('删除失败');history.back(1)</script>";	
		}
	
	
	
	}

	public function update(){
		$id=$_GET['page_id'];
		$data['cats']=$this->cat_model->all('column');
		$data['page']=$this->page_model->one($id);
		
		$this->load->view('page_update',$data);

	}
	
	public function update_pass(){

		$id=$_GET['page_id'];


		
		$data['cat']=$this->input->post('cat');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');		
		
			
		if($this->page_model->update($id,$data)){
		
			echo "<script language='javascript'>location.href='".site_url('c=page')."'</script>";
			
		}else{
			echo "<script language='javascript'>alert('修改失败');history.back(1)</script>";	
		}	
	
	
	}



}

?>

