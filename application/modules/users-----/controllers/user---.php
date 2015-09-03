<?php
class User extends Admin_Controller{
	
	public function __construct(){

		parent::__construct();
	}

	public function index(){
		//echo 'hello'; die(); 
		//Fetch all the user in databse
		$this->login();
		//$this->data['users']=$this->user_m->get_many();

		//Load Users in View
		//$this->data['subview']='admin/user/index';
		//$this->load->view('admin/_layout_main', $this->data);
	}

	public function edit($id=NULL)
	{	
		//Fetch a  single user if exists or set new user	 
		if($id){
			$this->data['user']=$this->user_m->get($id);
			count($this->data['user'])||$this->data['errors'][]='User Could Not be found';
		}
		else{
			$this->data['user']=$this->user_m->get_new();
		}

		//Set up the form
		$rules=$this->user_m->rules_admin;
		$id|| $rules['password'] .= '|required';
		$this->form_validation->set_rules($rules);

		//Process the Form (Either Save or Edit) 
		if ($this->form_validation->run()==TRUE) {
			$data=$this->user_m->array_from_post(array('fullname','username','password'));
			$data['password']=$this->user_m->hash($data['password']);
			$this->user_m->save($data, $id);
			redirect('admin/user');
		}

		//Load the view
		$this->data['subview']='admin/user/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function delete($id){
		$this->user_m->delete($id);
		redirect('admin/user');
	}

	public function login(){

		//validate form input
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_rules('usertype', 'Usertype', 'required');
		
		$this->data['error_message'] = '';

		if ($this->form_validation->run() == true) {
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			
						

			if ($this->user_m->login($username, $password)) {
			 	$user_type = $this->session->userdata('user_type');

				dump($username = $this->input->post('username'));
				
				if($user_type == 'ADMIN') {
					redirect('admin/dashboard');
				}
				elseif($user_type == 'SUPERADMIN') {
					redirect('superadmin/dashboard');
				}else{
						redirect('user/dashboard');
				}
			}
			else {
				// Error Message
				$this->data['error_message'] = 'प्रयोगकर्ताको नाम / पासवोर्ड मिलेन । ';
			}

		}
		// Load view
		$this->data['subview']='admin/user/login';
		$this->load->view('layouts/login', $this->data);
	}

	public function logout(){
		$this->user_m->logout();
		redirect('admin/user/login');

	}

	public function _unique_username($str)
	{
		//Do Not validate if the same username already exists
		//Unless it's the username for currently being updated.

		$id=$this->uri->segment(4);
		$this->db->where('username', $this->input->post('username'));
		!$id|| $this->db->where('id !=', $id);
		$user=$this->user_m->get();
		
		if(count($user)){
			$this->form_validation->set_message('_unique_username', '% should be unique');
			return FALSE;
		}
		return TRUE;
	}

}