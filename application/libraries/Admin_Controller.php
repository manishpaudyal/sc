<?php
class Admin_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->data['meta_title']='';
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		//$this->load->model('user_m');

		//Login Check
		// $exception_uris= array(
		// 	'admin/user/login',
		// 	'admin/user/logout'
		// ); 
		// if(in_array(uri_string(), $exception_uris)==FALSE){
		// 	if($this->user_m->loggedin()==FALSE){
		// 		redirect('admin/user/login');
		// 	}
		// }

	}
}