<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_Controller extends CI_Controller{
	public $cfg;
	public $menu;
	public function __construct(){
		parent::__construct();
	    $this->load->model('config_model');
		$this->load->model('cat_model');
		$this->cfg = $this->config_model->get_one();//网站设置
		$this->menu = $this->cat_model->all('column');//网站导航		
	}
	
}
