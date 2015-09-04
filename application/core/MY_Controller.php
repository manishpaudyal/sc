<?php 
class MY_Controller extends MX_Controller{
	
	public $data =array();
	
	function __construct(){
		parent::__construct();
		$this->data['errors']=array();
		$this->data['site_name']=config_item('site_name');
		$this->load->library(array('ion_auth','form_validation'));


		//Login Check
		$exception_uris= array(
			'auth/login',
			'auth/logout'
		); 
		if(in_array(uri_string(), $exception_uris)==FALSE){
			if (!$this->ion_auth->logged_in())
			{
				// redirect them to the login page
				redirect('auth/login', 'refresh');
			}
		}
	}
}