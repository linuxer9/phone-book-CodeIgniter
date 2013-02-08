<?php
/*
 * Created on May 24, 2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class People extends Controller{

	function __construct(){
		parent::Controller();

		//$this->load->scaffolding('users');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('input');
		$this->load->library('validation');
	}

	function index(){
		//List all users.
		$data['title']='Index';
		$data['usersquery']=$this->db->get('users');
		$this->load->view('index_view', $data);

	}
	function add(){
		$this->validation->set_rules($this->getRules());
		if ($this->validation->run()==FALSE){
			$this->load->view('create_view');
		}else{
			//Gets the data and add it to the database.
			$username=$this->input->post('username');
			$phone=$this->input->post('phone');
			$this->db->set('username', $username);
			$this->db->set('phone', $phone);
			//Run an insert query.
			$this->db->insert('users');


			redirect('people/index');
		}
	}
	function create(){
		//Loads the create_view
		$data['title']='New';
		$this->load->view('create_view', $data);


	}
	function edit($id){
		//Sets the ID as global, and sets the values to modify.
		$data['id']=$id;
		$data['title']="Edit";
		$this->db->where('id', $id);
		$q=$this->db->get('users');
		$row=$q->row();
		$username=$row->username;
		$phone=$row->phone;
		$data['username']=$username;
		$data['phone']=$phone;
		$this->load->view('edit_view', $data);

	}
	function doedit($id){

		$this->db->where('id', $id);
		$username=$this->input->post('username');
		$phone=$this->input->post('phone');
		$data=array('username' => $username,
					'phone' => $phone);
		$this->db->update('users',$data);

		redirect('people/index');

	}
	function show($id){
	    //Fetch the id and load the view with its data.
		$data['title']='View';
		$this->db->where('id', $id);
		$q=$this->db->get('users');
		$row=$q->row();
		$data['username']=$row->username;
		$data['phone']=$row->phone;
		$this->load->view('show_view', $data);
	}

	function delete($id){
		//Deletes a record with ID=$id
		$this->db->where('id', $id);
		$this->db->delete('users');
		redirect('people/index');
	}
	function searchform(){
		$data['title']='Searching';
		$this->load->view('searchform_view', $data);
	}
	function search(){
		$username=$this->input->post('username');
		$this->db->like('username', $username);
		$searchquery=$this->db->get('users');
		$data['title']='Searching...';
		$data['query']=$searchquery;
		$this->load->view('search_view', $data);
	}
	function getRules(){
		//For Validation.
		$rules['username'] = "required|min_length[4]|max_length[20]";
		$rules['phone'] = "required|numeric|max_length[10]";
		return $rules;
	}


 }
?>
