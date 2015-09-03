<?php
class Admin extends Admin_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		
		$this->template->load('layouts/admin', 'admin/index', $this->data);
	}
	

	
}
?>