<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
				
		if($this->session->userdata('manage_id')){
			
		
		}else{
			
		
			echo "<script type='text/javascript'>top.location.href='".site_url('c=login&m=login')."';</script>";
		
		}
		
		
	}
}