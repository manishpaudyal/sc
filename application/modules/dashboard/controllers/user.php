<?php
class Other extends My_Controller {

	function __construct() {
		parent::__construct();
		
	}

	public function index() {
		// echo 'hello';
		$this->template->load('layouts/_main_layout', 'user/index', $this->data);
	}
	

	
}
?>