<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->library('grocery_CRUD');
		if($this->session->userdata('logged_in')!=1) { redirect('login/index','location'); };
	}
	
	public function index()
	{
		$data['title'] = "Main Section";

		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
	}
	
	
}