<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('model');
		$this->load->model('m_login');
		if ($this->session->userdata('username') == "") {
                redirect('Welcome');
            }
	}

	

	public function edit_userr(){
		$id_user = $this->input->post('id_user');
		$tipe = $this->input->post('tipe_ubah');
		if($tipe == "profile"){
			$data['nama'] = $this->input->post('nama');
			$data['email'] = $this->input->post('email');
			$data['telepon'] = $this->input->post('telepon');
			$data['alamat'] = $this->input->post('alamat');
			$this->model->update_user($id_user, $data);
			redirect(site_url('c_user/klien_profile'));
		}else if($tipe == "ukuran"){
			$data['lingkarbahu'] = $this->input->post('lingkarbahu');
			$data['lingkardada'] = $this->input->post('lingkardada');
			$data['lingkarleher'] = $this->input->post('lingkarleher');
			$data['lingkarketiak'] = $this->input->post('lingkarketiak');
			$data['lingkarperut'] = $this->input->post('lingkarperut');
			$data['lingkarpinggul'] = $this->input->post('lingkarpinggul');
			$this->model->update_user($id_user, $data);
			redirect(site_url('c_user/klien_profile'));
		}
		
	}

	public function klien_profile(){
		$session_data = $this->session->userdata("id");
		$data['user'] = $this->model->select_by_id_user($session_data)->row();
		$this->load->view('klien_profile',$data);
	}
	public function klien_pesanan(){
		$session_data = $this->session->userdata("id");
		$data['user'] = $this->model->select_by_id_user($session_data)->row();
		$data['products'] = $this->model->view_all_orderan_user($session_data)->result();
		// $data['products'] = $this->db->get('keranjang');
		$this->load->view('klien_pesanan',$data);
	}
	public function batalkan_order($id_kerr){
		$data['status'] = "Pesanan Dibatalkan";
		$this->model->update_keranjang($id_kerr,$data);
		redirect(site_url('c_user/klien_pesanan'));
	}

	public function getuser($id){
		$this->model->get_by_id_user($id);
	}
	function delete_user($id){ 
		$this->load->model('model'); 
		$this->model->delete_user($id); 
		redirect('c_admin/v_admin'); 
	}
	function edit_user($id){
		$where = array('id' => $id);
		$data['user'] = $this->model->edit_user($where,'user')->result();
		$this->load->view('',$data);
	}
}