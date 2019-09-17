<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pemesanan extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('model');
	}


	public function getImage($id){
		$this->model->get_by_id($id);
	}
	public function insert_order($id_ker){
		$id_user = $this->input->post('id_user');
		$id_model = $this->input->post('id_model');
		$warna = $this->input->post('warna');
		$jeniskain = $this->input->post('jeniskain');
		$ketebalan = $this->input->post('ketebalan');
		$ukuran = $this->input->post('ukuran');
		$ukuransendiri = $this->input->post('ukuransendiri');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$total_harga = $jumlah*$harga;
		$status = $this->input->post('status');


		$dataInput = array(
			'id_user' => $id_user,
			'id_model' => $id_model,
			'warna' => $warna,
			'jeniskain' => $jeniskain,
			'ketebalan' => $ketebalan,
			'ukuran' => $ukuran,
			'ukuransendiri' => $ukuransendiri,
			'jumlah' => $jumlah,
			'total_harga' => $total_harga,
			'status' => $status
		);

		$this->model->insert_into_keranjang($dataInput);
		// $this->view_keranjang($id_ker);
		redirect(site_url('c_pemesanan/view_keranjang'."/".$id_ker));
		// $session_data = $this->session->userdata("id");
		// $data['user'] = $this->model->select_by_id_user($session_data)->row();
  		// $data['product'] = $this->model->get_by_keranjang($id_ker);
  		// $this->load->view('keranjang',$data);

	}

	function view_keranjang($id_ker){
		$session_data = $this->session->userdata("id");
		$data['user'] = $this->model->select_by_id_user($session_data)->row();
        $data['product'] = $this->model->get_by_keranjang($id_ker);
        $this->load->view('keranjang',$data);
	}

	function edit_order($id_keranjang,$id_user,$id_model){ 
		$data['warna'] = $this->input->post('warna');
		$data['jeniskain'] = $this->input->post('jeniskain');
		$data['ketebalan'] = $this->input->post('ketebalan');
		$data['ukuran'] = $this->input->post('ukuran');
		$data['ukuransendiri'] = $this->input->post('ukuransendiri');
		$data['jumlah'] = $this->input->post('jumlah');

		$this->model->update_keranjang($id_keranjang, $data);

		redirect(site_url('c_pemesanan/view_keranjang'."/".$id_model));
		// $session_data = $this->session->userdata("id");
		// $data['user'] = $this->model->select_by_id_user($session_data)->row();
		// $data['product'] = $this->model->get_by_keranjang($id_model,$id_user);
  //       $this->load->view('keranjang',$data);
	
	}

	function delete_order($id_keranjang,$id_user,$id_model){ 
		$this->load->model('model'); 
		$this->model->delete_order($id_keranjang); 

		redirect(site_url('c_pemesanan/view_keranjang'."/".$id_model));
		// $session_data = $this->session->userdata("id");
		// $data['user'] = $this->model->select_by_id_user($session_data)->row();
		// $data['product'] = $this->model->get_by_keranjang($id_model,$id_user);
  		// $this->load->view('keranjang',$data);
	}

	function delete_orders(){
		$id_keranjang = $this->input->post('hapus');
		$id_user = $this->input->post('user');
		$id_model = $this->input->post('model');
		echo "id keranjang = ". $id_keranjang;
		echo "id user = ". $id_user;
		echo "id model = ". $id_model;
		$this->load->model('model'); 
		$this->model->delete_order($id_keranjang); 
		$data['product'] = $this->model->get_by_keranjang($id_model,$id_user);
        $this->load->view('keranjang',$data);
	}

}