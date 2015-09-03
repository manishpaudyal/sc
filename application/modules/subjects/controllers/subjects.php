<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		
	}


	public function index() {
		
		$this->data['subview']='index';
		$this->_render_page('layouts/_main_layout', $this->data);
	}

	function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}

}

