<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dohtml extends Home_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('doc_model');
		$this->load->model('page_model');
	}
	public function make_index(){//生成首页
		ob_start();

		$docs=$this->doc_model->all();//获取所有文档
		$docs_new=array();
		foreach ($docs as $v) {
			$v['url']='../../html/article_'.$v['id'].'.html';
			$docs_new[]=$v;
		}

		//组织url
		$data['docs']=	$docs_new;	
		$this->load->view('index',$data);

		if( file_put_contents('./index.html', ob_get_clean()) ){

			echo '<b>生成index.html成功.</b>';
		}else{
			echo '<b>生成index.html失败.</b>';
		}	

	}


	public function make_all(){//生成所有页面
		//生成首页
		$this->make_index();

		//生成列表页
		$list=$this->cat_model->all('column');
		foreach ($list as $v) {			
			$list_=$this->cat_model->one('column',$v['id']);
			if( $list_['attr']=='0' ){
				$this->make_list($v['id']);//生成列表页
			}

			
		}


		//生成单页
		$pages=$this->page_model->getAll();//获取所有单页
		foreach ($pages as $v) {
			$this->make_page($v['id']);//生成单页
		}

		//生成文档页
		$articles=$this->doc_model->all();//获取所有文档
		foreach ($articles as $v) {//循环文章
			$this->make_article($v['id']);//生成文章
		}
		
	}


	public function make_article($id){//生成单个文档

		ob_start();
		//准备数据
		$data['doc']=$this->doc_model->get_one($id);		
		$data['cat']=$this->cat_model->one('column',$data['doc']['cate']);//获取当前栏目
		$parent=$this->cat_model->getParent('column',$data['doc']['cate']);//获取上级栏目
		if($parent){			
                        $data['sideTitle']=$parent['name'];
                       
		}else{			
                        $data['sideTitle']=$data['cat']['name'];
                       
		}		
		$sideCats=$this->cat_model->getBrothers('column',$data['doc']['cate']);//获取同级分类


		//组织边栏url
		$sideCats_new=array();
		foreach ($sideCats as $v) {
		    switch ($v['attr']) {
		        case '2':
		            $v['url']=$v['elink'].'" target="_blank';
		            break;
		        case '3':
		            $v['url']='../../html/list_'.$v['ilink'].'_1.html';
		            break;
		        
		        default:
		            $v['url']='../../html/list_'.$v['id'].'_1.html';
		            break;
		    }
		    
		    $sideCats_new[]=$v;
		}
		//END组织边栏url

		$data['sideCats']=$sideCats_new;
		$this->load->view($data['cat']['doc'],$data);

		//开始生成
		if( file_put_contents("./html/article_{$id}.html", ob_get_clean()) ){

			echo "<p>生成 [article_{$id}.html] 文章成功.</p>";
		}else{
			echo "<p>生成 [article_{$id}.html] 文章失败.</p>";
		}
	}



	public function make_page($id){
		ob_start();
		$page=$this->page_model->getOne($id);		

		$data['cat']=$this->cat_model->one('column',$page['cat']);//获取当前栏目

        $parent=$this->cat_model->getParent('column',$page['cat']);//获取上级栏目
        //获取下级栏目
        $catSons=$this->cat_model->getSons('column',$page['cat']);
        //获取同级栏目
        $catThis=$this->cat_model->getBrothers('column',$page['cat']);

        if($catSons){//存在下级栏目
                $data['sideTitle']=$data['cat']['name'];
                $sideCats=$catSons;

        }elseif($parent){
                
                $data['sideTitle']=$parent['name'];
                $sideCats=$catThis;                        

        }else{
                 $data['sideTitle']=$data['cat']['name'];
                 $sideCats=$catThis;                
        }

        //组织边栏url
        $sideCats_new=array();
        foreach ($sideCats as $v) {
        	switch ($v['attr']) {
        	    case '2':
        	        $v['url']=$v['elink'].'" target="_blank';
        	        break;
        	    case '3':
        	        $v['url']='../../html/list_'.$v['ilink'].'_1.html';
        	        break;
        	    
        	    default:
        	        $v['url']='../../html/list_'.$v['id'].'_1.html';
        	        break;
        	}
            
            $sideCats_new[]=$v;
        }
        //END组织边栏url
        $data['sideCats']=$sideCats_new;

		$data['body']=$page['content'];
		$this->load->view($data['cat']['page'],$data);

		//开始生成
		if( file_put_contents("./html/list_{$data['cat']['id']}_1.html", ob_get_clean()) ){

			echo "<p>生成 [list_{$data['cat']['id']}_1.html] 单页成功.</p>";
		}else{
			echo "<p>生成 [list_{$data['cat']['id']}_1.html] 单页失败.</p>";
		}
	}


	public function make_list($id,$pag=1){//生成列表页

								

				$data['cat']=$this->cat_model->one('column',$id);//获取当前栏目

		        $parent=$this->cat_model->getParent('column',$id);//获取上级栏目
		        //获取下级栏目
		        $catSons=$this->cat_model->getSons('column',$id);
		        //获取同级栏目
		        $catThis=$this->cat_model->getBrothers('column',$id);

		        if($catSons){//存在下级栏目
		                $data['sideTitle']=$data['cat']['name'];
		                $sideCats=$catSons;

		        }elseif($parent){
		                
		                $data['sideTitle']=$parent['name'];
		                $sideCats=$catThis;                        

		        }else{
		                 $data['sideTitle']=$data['cat']['name'];
		                 $sideCats=$catThis;                
		        }


		        //组织边栏url
		        $sideCats_new=array();
		        foreach ($sideCats as $v) {
		        	switch ($v['attr']) {
		        	    case '2':
		        	        $v['url']=$v['elink'].'" target="_blank';
		        	        break;
		        	    case '3':
		        	        $v['url']='../../html/list_'.$v['ilink'].'_1.html';
		        	        break;
		        	    
		        	    default:
		        	        $v['url']='../../html/list_'.$v['id'].'_1.html';
		        	        break;
		        	}
		            
		            $sideCats_new[]=$v;
		        }
		        //END组织边栏url
		         $data['sideCats']=$sideCats_new;

            	//栏目文章列表
                //当前栏目的子孙栏目                 
                $catSons=$this->cat_model->all('column',$id);                
                //组织子孙id数组
                $sonArr=array();
                $sonArr[]=$id;//本栏目id
                foreach ($catSons as $v) {
                    $sonArr[]=$v['id'];
                }

    			//分页

    			$pagesize=1 ;//每页数量	

    			$allnums=$this->doc_model->get_num($id,$sonArr);//记录总数	


				$nums= intval( floor($allnums/$pagesize) );//页数
				
				$i=1;//内循环变量
				do {
						ob_start();	
						$this->load->library('pagination');					
						$config['dohtml']="ok";
						$config['suffix']='.html';
						$config['p']=$i;									
						$config['use_page_numbers'] = TRUE;
						$config['num_links'] = 2;
						$config['base_url']="../../html/list_{$id}_";
						$config['total_rows']=$allnums;//记录总数
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
		        	    $docs=$this->doc_model->get_all($id,$pagesize,($i-1)*$pagesize,$sonArr);

		        	    //组织文章url
		        	    $docs_new=array();
		        	    foreach ($docs as $v) {
		        	    	$v['url']='../../html/article_'.$v['id'].'.html';
		        	    	$docs_new[]=$v;
		        	    }
		        	    //END组织边栏url
		        	    $data['doc']=$docs_new;


						$data['body']='';
						$this->load->view($data['cat']['list'],$data);
						//开始生成
						if( file_put_contents("./html/list_{$data['cat']['id']}_{$i}.html", ob_get_clean()) ){

							echo "<p>生成 [list_{$data['cat']['id']}_{$i}.html] 列表页成功.</p>";
						}else{
							echo "<p>生成 [list_{$data['cat']['id']}_{$i}.html] 列表页失败.</p>";
						}
						$i++;
				} while ($i<=$nums);

	}





}

