<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('config_model');
	}	
	public function index(){
		
		$this->load->view('index');
		//$this->output->enable_profiler(TRUE);
	}


}