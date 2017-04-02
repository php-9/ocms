<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Column extends Home_Controller {
	public function __construct(){
		parent::__construct();		
		$this->load->model('doc_model');		
		$this->load->model('page_model');
		
		
	}
	//文章列表

	public function col(){
		$catId=$_GET['cat_id'];

		$pag=isset($_GET['per_page']) ? $_GET['per_page'] : 1;//分页页码		


		$data['cat']=$this->cat_model->one('column',$catId);//获取当前栏目

                $parent=$this->cat_model->getParent('column',$catId);//获取上级栏目
        
                //获取下级栏目
                $catSons=$this->cat_model->getSons('column',$catId);
                //获取同级栏目
                $catThis=$this->cat_model->getBrothers('column',$catId);

        if($catSons){//存在下级栏目
                $data['sideTitle']=$data['cat']['name'];
                $data['sideCats']=$catSons;

        }elseif($parent){
                
                $data['sideTitle']=$parent['name'];
                $data['sideCats']=$catThis;                        

        }else{
                 $data['sideTitle']=$data['cat']['name'];
                 $data['sideCats']=$catThis;                
        }

        switch ($data['cat']['attr']) {
                case '1'://单页
                    $page=$this->page_model->getRow($catId);//获取单页
                    $data['body']=$page['content'];
                    $this->load->view($data['cat']['page'],$data);
                    break;
                case '2'://外链
                    echo "<script>window.open('".$data['cat']['elink']."');history.back();</script>";//新窗口打开外部链接
                    break;
                case '3'://内链
                    header("Location: ".site_url().'?c=column&m=col&cat_id='.$data['cat']['ilink']);
                    break;        
                
                default://列表
                    //栏目文章列表
                    //当前栏目的子孙栏目                 
                    $catSons=$this->cat_model->all('column',$catId);                
                    //组织子孙id数组
                    $sonArr=array();
                    $sonArr[]=$catId;//本栏目id
                    foreach ($catSons as $v) {
                        $sonArr[]=$v['id'];
                    }

                    //分页
                    $pagesize=1 ;//每页数量     
                    $this->load->library('pagination');
                    $config['use_page_numbers'] = TRUE;
                    $config['num_links'] = 2;
                    $config['base_url']=site_url('c=column&m=col&cat_id=').$catId;
                    $config['total_rows']=$this->doc_model->get_num($catId,$sonArr);//记录总数
                    $config['per_page']=$pagesize;      
                    $config['full_tag_open'] ="<div class='page'>";
                    $config['full_tag_close'] ="</div>";
                    $config['first_link'] = false;
                    $config['last_link'] = false;
                    $config['full_tag_open'] = '<ul>';
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
                    $data['doc']=$this->doc_model->get_all($catId,$pagesize,($pag-1)*$pagesize,$sonArr);                                        
                    $this->load->view($data['cat']['list'],$data);
                    break;
            }    



		
	}


	
	//文章详情
	public function doc(){
		
		$id=$_GET['art_id'];

		$data['doc']=$this->doc_model->get_one($id);
		
		$data['cat']=$this->cat_model->one('column',$data['doc']['cate']);//获取当前栏目

		$parent=$this->cat_model->getParent('column',$data['doc']['cate']);//获取上级栏目

		if($parent){			
                        $data['sideTitle']=$parent['name'];
                       
		}else{
			
                        $data['sideTitle']=$data['cat']['name'];
                       
		}
		
		$data['sideCats']=$this->cat_model->getBrothers('column',$data['doc']['cate']);//获取同级分类

		$this->load->view($data['cat']['doc'],$data);
	}				

	
}

