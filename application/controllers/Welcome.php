<?php

class Welcome extends CI_Controller {
 function __construct(){
     parent::__construct();
     $this->load->model('model');
 }

	public function index()
	{
		$session_data = $this->session->userdata("id");
		$data['user'] = $this->model->select_by_id_user($session_data)->row();
		
		$data['products'] = $this->db->get('model');
		
		$this->load->view('home',$data);

	}
}
