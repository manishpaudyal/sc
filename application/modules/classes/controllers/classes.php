<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('classes_m');
	}


	
	public function index(){
    	// Fetch the classes
		$this->classes_m->set_published();
		$this->data['classes'] = $this->classes_m->get();
    	
    	// Return 404 if not found
    	count($this->data['classes']) || show_404(uri_string());
		
    	// Redirect if slug was incorrect
    	// $requested_slug = $this->uri->segment(3);
    	// $set_slug = $this->data['classes']->classname;
    	// if ($requested_slug != $set_slug) {
    	// 	redirect('classes/' . $this->data['classes']->id . '/' . $this->data['classes']->classname, 'location', '301');
    	// }
    	
    	// Load view
    	//add_meta_title($this->data['classes']->classname);
    	$this->data['subview']='index';
		$this->_render_page('layouts/_main_layout', $this->data);
    }

	 

    public function edit($id=NULL)
	{	
		//Fetch a  single agent if exists or set new agent		
		if($id){
			$this->data['classes']=$this->classes_m->get($id);
			count($this->data['classes'])||$this->data['errors'][]='agent Could Not be found';
		}
		else{
			$this->data['classes']=$this->classes_m->get_new();
		}

		//agents for dropdown
		//$this->data['agents_no_parents']=$this->agent_m->get_no_parents();
		//dump($this->data['agents_no_parents']);

		//Set up the form
		$rules=$this->classes_m->rules;
		$this->form_validation->set_rules($rules);

		//Process the Form (Either Save or Edit) 
		if ($this->form_validation->run()==TRUE) {
			$data=$this->classes_m->array_from_post(array(
				'classname','description'));
			$this->classes_m->save($data, $id);
			redirect('classes/classes');
		}

		//Load the view
		$this->data['subview']='edit';
		$this->_render_page('layouts/_main_layout', $this->data);
		
	}

	function delete($id){
		$this->classes_m->delete($id);
		redirect('classes/classes');
	}

	function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}

}

