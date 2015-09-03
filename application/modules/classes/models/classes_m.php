<?php
class Classes_m extends MY_Model
{
	protected $_table_name = 'classes';
	protected $_order_by = 'classname desc, id desc';
	protected $_timestamps = FALSE;
	public $rules = array(
		'classname' => array(
			'field' => 'classname', 
			'label' => 'Class Name', 
			'rules' => 'trim|required|xss_clean'
		), 
		'description' => array(
			'field' => 'description', 
			'label' => 'Description', 
			'rules' => 'trim|required|max_length[200]|xss_clean'
		)
	);

	public function get_new ()
	{
		$classes = new stdClass();
		$classes->classname = '';
		$classes->description = '';
		return $classes;
	}
	
	public function set_published(){
	//	$this->db->where('pubdate <=', date('Y-m-d'));
	}
	
	public function get_recent($limit = 3){
		
		// Fetch a limited number of recent articles
		$limit = (int) $limit;
		//$this->set_published();
		$this->db->limit($limit);
		return parent::get();
	}

}