<?php
class Column extends Admin_Controller
{
        
        public function __construct() 
        {
            parent::__construct();
            $this->load->model('page_model');
            $this->load->model('cat_model');

			 
		}

        //分类列表
        public function index()
        {	
                        
			$column=$this->cat_model->all('column',0);

            $column_com=array();

            foreach($column as $v){
                
                    $v['artcount']=$this->cat_model->countArt($v['id']);
                    $column_com[]=$v;

      
            }



			$data['column']=$column_com;
			
			
			$this->load->view('column',$data);
						
        }

        //增加栏目
        public function insert(){
            
            $data['cats']=$this->cat_model->all('column');


            
            
            $this->load->view('column_add',$data);

        }

        //添加栏目
        public function insert_pass(){

        	$data['pid']=$this->input->post('pcat');
        	$data['name']=$this->input->post('name');
            $data['attr']=$this->input->post('attr');        	         
            $data['elink']=$this->input->post('elink');
            $data['ilink']=$this->input->post('ilink');
            $data['page']=$this->input->post('page');
            $data['list']=$this->input->post('list');
            $data['doc']=$this->input->post('doc');
        	
        	if($this->cat_model->add('column',$data) ){
                $cat_id=$this->db->insert_id();//获取刚插入的栏目id
                //栏目为单页,判断是否要添加单页
                if($data['attr']=='1' && !$this->page_model->get_one_catid($cat_id) ){
                   $this->page_model->insert(array('cat'=>$cat_id,'title'=>'系统添加','content'=>'内容'));
                }
        		echo "<script language='javascript'>location.href='".site_url('c=column')."'</script>";
        	}else{
        		echo "<script language='javascript'>alert('添加失败');history.back(-1)</script>";//
        	}
        	


        }

        public function del(){

            $id=$_GET['cat_id'];           
        	
				if($this->cat_model->del('column',$id)){
					 echo "<script language='javascript'>location.href='".site_url('c=column')."'</script>";
				}else{
					echo "<script language='javascript'>alert('删除失败,请重试!');history.back(-1)</script>";//
				}

        }

        public function update(){
            $id=$_GET['cat_id']; 
        	$data['cats']=$this->cat_model->all('column');        	
        	$data['cat']=$this->cat_model->one('column',$id);

        	$this->load->view('column_edit',$data);

        }

        public function update_pass(){
        	$id=$this->input->post('id');
        	$data['pid']=$this->input->post('pcat');
        	$data['name']=$this->input->post('name');
        	$data['sort']=$this->input->post('sort');
                       
            $data['attr']=$this->input->post('attr');                    
            $data['elink']=$this->input->post('elink');
            $data['ilink']=$this->input->post('ilink');
            
            $data['page']=$this->input->post('page');
            $data['list']=$this->input->post('list');
            $data['doc']=$this->input->post('doc');
          

        	
        	
        	
        	if($this->cat_model->update('column',$data,$id) ){


                //栏目为单页,判断是否要添加单页
                if($data['attr']=='1' && !$this->page_model->get_one_catid($id) ){
                   $this->page_model->insert(array('cat'=>$id,'title'=>'系统添加','content'=>'内容'));
                }

        		echo "<script language='javascript'>location.href='".site_url('c=column')."'</script>";
        	}else{
        		echo "<script language='javascript'>alert('修改失败');history.back(-1)</script>";//
        	}

        }
		

		

}
?>
