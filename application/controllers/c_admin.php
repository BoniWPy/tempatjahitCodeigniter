<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('model');
		$this->load->model('m_login');
		if ($this->session->userdata('username') == "") {
                redirect('c_routing/login_admin');
            }
	}

	public function v_admin(){
	$data['user'] = $this->db->get('user');
	$this->load->view('v_admin',$data);
	}
	public function v_admin_laporan(){
		$data['user'] = $this->db->get('user');
		$data['model'] = $this->db->get('model');
	 	$data['products'] = $this->db->get('keranjang');

		$this->load->view('v_admin_laporan',$data);
	}
	public function v_admin_tabel_laporan(){
		$data['user'] = $this->db->get('user');
		$data['model'] = $this->db->get('model');
	 	$data['products'] = $this->db->get('keranjang');
		
		// $this->load->view('v_admin_table_laporan',$data);

	    $this->load->helper('domppdf');
		        
		$this->load->library('dompdf_gen');

		$html = $this->load->view('v_admin_table_laporan',$data,true);
		
		$filename = "laporan Keuangan Pendapatan.pdf";
		$paper = 'A4';
		$orientation = 'potrait';
		$paper_size  = 'A4'; //paper size
		 
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("$filename", array('Attachment'=>1));

		redirect('c_admin/v_admin_laporan');
	}
	public function v_admin_tabel_laporan_excel(){
		$data['user'] = $this->db->get('user');
		$data['model'] = $this->db->get('model');
	 	$data['products'] = $this->db->get('keranjang');
		
		// $this->load->view('v_admin_table_laporan',$data);

	  

		$this->load->view('v_admin_tabel_laporan_excel',$data);
		
		

		// redirect('c_admin/v_admin_laporan');
	}
	public function v_admin_klien_order(){
	 	$data['user'] = $this->db->get('user');
	 	$data['products'] = $this->db->get('keranjang');
		$this->load->view('v_admin_klien_order',$data);
	}

	public function check_profile($id){
		$data['user'] = $this->model->select_by_id_user($id)->row();
		$this->load->view('check_profile',$data);
	}

	function delete_order($id_keranjang){ 
		$this->load->model('model'); 
		$this->model->delete_order($id_keranjang); 

		redirect(site_url('c_admin/v_admin_klien_order'));
		// $session_data = $this->session->userdata("id");
		// $data['user'] = $this->model->select_by_id_user($session_data)->row();
		// $data['product'] = $this->model->get_by_keranjang($id_model,$id_user);
  		// $this->load->view('keranjang',$data);
	}

	public function edit_order_status($id_ker){
		$data['status'] = $this->input->post('status');
		
		$this->model->update_keranjang($id_ker, $data);

		redirect(site_url('c_admin/v_admin_klien_order'));
	
	}

}