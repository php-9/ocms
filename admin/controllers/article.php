<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('doc_model'); 
		$this->load->model('cat_model');

	}
	
	
	
	public function index(){		
		$column_id=isset($_GET['cat_id']) ? $_GET['cat_id'] : 0;
		$page = isset($_GET['per_page']) ? $_GET['per_page'] : 1;
		$cat=$this->cat_model->one('column',$column_id);
		if($cat){
			$data['catId']=$cat['id'];
		}else{
			$data['catId']='';
		}

		//当前栏目的子孙栏目				    
		$catSons=$this->cat_model->all('column',$column_id);				
		//组织子孙id数组
		$sonArr=array();
		$sonArr[]=$column_id;//本栏目id
		foreach ($catSons as $v) {
			$sonArr[]=$v['id'];
		}
		
		$data['cate']=$this->cat_model->all('column',0);//获取所有栏目列表


		//分页
		$pagesize=20;//每页数量
		
		$this->load->library('pagination');
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 2;
		$config['base_url']=site_url('c=article&cat_id=').$column_id;
		$config['total_rows']=$this->doc_model->get_num($column_id,$sonArr);//记录总数
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


				

		$data['doc']=$this->doc_model->get_all($column_id,$pagesize,($page-1)*$pagesize,$sonArr);
		
		$this->load->view('article',$data);	
		
		
		
		
		
	}


	public function insert(){
		$data['cate']=$this->cat_model->all('column',0);
		$this->load->view('article_insert',$data);


	}
	
	public function insert_pass(){
		//图片上传
		$config['upload_path'] = '../upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite']=FALSE;
		$config['encrypt_name']=TRUE;
		$config['max_size'] = '1024';	
		$this->load->library('upload', $config);		
		if($this->upload->do_upload('thumbnail') ){
			$file_data=$this->upload->data();
			$data['thumbnail']=$file_data['file_name'];
			
		}
		


		$data['cate']=$this->input->post('cate');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');		
		$data['AddTime']=time();

		$this->session->set_userdata('cate_cache',$data['cate']);  //缓存最近选择的栏目




		if($this->doc_model->insert($data)){

			echo "<script language='javascript'>alert('文章添加成功');location.href='".site_url('c=article')."'</script>";
			
		}else{
			echo "<script language='javascript'>alert('添加失败');history.back(1)</script>";	
		}
	
		
		
		
	}
	
	public function delete(){
		$id=$_GET['art_id'];
		$query=$this->doc_model->delete($id);
		if($query){
			echo "<script language='javascript'>location.href='".site_url('c=article')."'</script>";	
		}else{
			echo "<script language='javascript'>alert('删除失败');history.back(1)</script>";	
		}
	
	
	
	}

	public function update(){
		$id=$_GET['art_id'];
		$data['cate']=$this->cat_model->all('column',0);
		$data['doc_one']=$this->doc_model->get_one($id);
		
		$this->load->view('article_update',$data);

	}
	
	public function update_pass(){

			$id=$_GET['art_id'];

			//图片上传
			$config['upload_path'] = '../upload';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite']=FALSE;
			$config['encrypt_name']=TRUE;
			$config['max_size'] = '1024';	
			$this->load->library('upload', $config);		
			if($this->upload->do_upload('thumbnail') ){

				$file_data=$this->upload->data();
				$data['thumbnail']=$file_data['file_name'];
				
			}

		
		
		$data['cate']=$this->input->post('cate');
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		


		
		
			
		if($this->doc_model->update($id,$data)){
		
			echo "<script language='javascript'>location.href='".site_url('c=article')."'</script>";
			
		}else{
			echo "<script language='javascript'>alert('修改失败');history.back(1)</script>";	
		}	
	
	
	}



}

?>

