<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_routing extends CI_Controller {

    function __construct(){
     parent::__construct();
     $this->load->model('model');
 }



 public function produk()
 {
   $this->load->view('produk');
} 

public function login(){
	$this->load->view('login');
}

public function kustom($id){
 $data['product'] = $this->model->get_by_id($id);
 $session_data = $this->session->userdata("id");
 $data['user'] = $this->model->select_by_id_user($session_data)->row();
 $this->load->view('kustom',$data);
}
public function login_admin(){
    $this->load->view('login_admin');
}

public function pembayaran($id_ker){
// $data['user'] = $this->model->get_by_user();
	$session_data = $this->session->userdata("id");
	$data['user'] = $this->model->select_by_id_user($session_data)->row();
	// $data['product'] = $this->db->get('keranjang');
	$data['product'] = $this->model->get_by_keranjang($id_ker);
	$data['model'] = $this->model->select_by_id_model($id_ker)->row();
	$this->load->view('pembayaran',$data);
}
public function konfirmasi($id_ker){
// $data['user'] = $this->db->get('user');
	$session_data = $this->session->userdata("id");
	$data['user'] = $this->model->select_by_id_user($session_data)->row();
	// $data['products'] = $this->db->get('keranjang');
	$data['product'] = $this->model->get_by_keranjang($id_ker);
	$data['model'] = $this->model->select_by_id_model($id_ker)->row();
	$this->load->view('konfirmasi',$data);
}

public function bukti_pesanan($id_ker){
// $data['user'] = $this->db->get('user');
	$session_data = $this->session->userdata("id");
	$data['user'] = $this->model->select_by_id_user($session_data)->row();
	// $data['products'] = $this->db->get('keranjang');
	$data['product'] = $this->model->get_by_keranjang($id_ker);
	$data['model'] = $this->model->select_by_id_model($id_ker)->row();
	$this->load->view('form_bukti_pesanan',$data);

	$this->load->helper('domppdf');
		        
	$this->load->library('dompdf_gen');

	$html = $this->load->view('form_bukti_pesanan',$data,true);
		
	$filename = "bukti pesanan.pdf";
	$paper = 'A4';
	$orientation = 'potrait';
	$paper_size  = 'A4'; //paper size
		 
	$this->dompdf->set_paper($paper_size, $orientation);
	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("$filename", array('Attachment'=>1));

	redirect('c_routing/konfirmasi');
}

public function klien_kelolainformasi(){
    $this->load->view('klien_kelolainformasi');
}

public function klien_welcome(){
 	$data['username'] = $this->session->userdata('username');
 	$data['email'] = $this->session->userdata('email');
	$this->load->view('klien_welcome',$data);
}

// public function klien_profile_new(){
// 	$session_data = $this->session->userdata("id");
// 	$data['user'] = $this->model->select_by_id_user($session_data)->row();
// 	$this->load->view('klien_profile',$data);
// }   

}
// public function do_upload()
// {
//     $config['upload_path']          = './uploads/';
//     $config['allowed_types']        = 'gif|jpg|png|jpeg';
//     $config['max_size']             = 100;
//     $config['max_width']            = 1024;
//     $config['max_height']           = 768;

//     $this->load->library('upload', $config);

//     if ( ! $this->upload->do_upload('userfile'))
//     {
//         $error = array('error' => $this->upload->display_errors());

//         $this->load->view('upload_form', $error);
//     }
//     else
//     {
//         $data = array('upload_data' => $this->upload->data());

//         $this->load->view('upload_success', $data);
//     }
// }
// }