<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('v_admin');
        }else{
            redirect('v_admin');
        }
    }
    // login admin
    public function administrator() {
        $username = $this->security->xss_clean($this->input->post("username"));
        $password = $this->security->xss_clean($this->input->post("password"));
        $cek = $this->m_login->cek_admin($username,$password);
        if(count($cek) == 1){
            $this->session->set_userdata(array(
                'login'         => "login",
                'username'      => $cek[0]['username'],
                'password'      => $cek[0]['password'],
                'id'      => $cek[0]['id'],
                
            ));
            redirect('c_admin/v_admin');
        }else{
            echo "<script>alert('Username atau password salah !');
            document.location='login_admin'</script>";
        }
    }
    public function logout_admin(){
        $this->session->sess_destroy();
        redirect('c_routing/login_admin');
    }
    public function login_admin(){
        $this->load->view("login_admin");
    }

    // login user
    public function user() {
        $data = array('email' => $this->security->xss_clean($this->input->post('email', TRUE)),
                    'password' => $this->security->xss_clean($this->input->post('password', TRUE))
                    );

        $cek = $this->m_login->cek_user_new($data);
        if($cek->num_rows() == 1){
            foreach ($cek->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id'] = $sess->id;
                $sess_data['username'] = $sess->nama;
                $sess_data['email'] = $sess->email;
                $sess_data['alamat'] = $sess->alamat;
                $sess_data['telepon'] = $sess->telepon;
                $sess_data['lingkarbahu'] = $sess->lingkarbahu;
                $sess_data['lingkardada'] = $sess->lingkardada;
                $sess_data['lingkarleher'] = $sess->lingkarleher;
                $sess_data['lingkarketiak'] = $sess->lingkarketiak;
                $sess_data['lingkarperut'] = $sess->lingkarperut;
                $sess_data['lingkarpinggul'] = $sess->lingkarpinggul;
                $this->session->set_userdata($sess_data);
            }
            redirect('c_user/klien_profile');

        // $email = $this->security->xss_clean($this->input->post("email"));
        // $password = $this->security->xss_clean($this->input->post("password"));
        // $cek = $this->m_login->cek_user($email,$password);
        // if(count($cek) == 1){
        //     $this->session->set_userdata("logged_in",array(
        //         'login'=> "login",
        //         'id'=> $cek[0]['id'],
        //         'nama'=> $cek[0]['nama'],
        //         'email'=> $cek[0]['email'],
        //         'password'=> $cek[0]['password'],
        //         'alamat'=> $cek[0]['alamat'],
        //         'telepon'=> $cek[0]['telepon'],
        //         'lingkarbahu'=> $cek[0]['lingkarbahu'],
        //         'lingkardada'=> $cek[0]['lingkardada'],
        //         'lingkarleher'=> $cek[0]['lingkarleher'],
        //         'lingkarketiak'=> $cek[0]['lingkarketiak'],
        //         'lingkarperut'=> $cek[0]['lingkarperut'],
        //         'lingkarpinggul'=> $cek[0]['lingkarpinggul']
        //     ));
        //     $session_data = $this->session->userdata("logged_in");
        //     // echo $session_data['id'];
        //     $data['user'] = $this->model->select_by_id_user($session_data['id'])->row();
        //    $this->load->view('klien_profile',$data);
        // }
        }else{
            echo "<script>alert('Username atau password salah !');
            document.location='login_user'</script>";
        }
    }

    public function logout_user(){
        $this->session->sess_destroy();
        redirect('Welcome/index');
    }
    public function login_user(){
        redirect('Welcome/index');
    }

    public function insert_user(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $lingkarbahu = $this->input->post('lingkarbahu');
        $lingkardada = $this->input->post('lingkardada');
        $lingkarleher = $this->input->post('lingkarleher');
        $lingkarketiak = $this->input->post('lingkarketiak');
        $lingkarperut = $this->input->post('lingkarperut');
        $lingkarpinggul = $this->input->post('lingkarpinggul');

        $dataInput = array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'lingkarbahu' => $lingkarbahu,
            'lingkardada' => $lingkardada,
            'lingkarleher' => $lingkarleher,
            'lingkarketiak' => $lingkarketiak,
            'lingkarperut' => $lingkarperut,
            'lingkarpinggul' => $lingkarpinggul,
        );

        $this->model->insert_into_user($dataInput);
        
        $data = array('email' => $this->input->post('email', TRUE),
                    'password' => $this->input->post('password', TRUE)
                    );

        $cek = $this->m_login->cek_user_new($data);
        if($cek->num_rows() == 1){
            foreach ($cek->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id'] = $sess->id;
                $sess_data['username'] = $sess->nama;
                $sess_data['email'] = $sess->email;
                $sess_data['alamat'] = $sess->alamat;
                $sess_data['telepon'] = $sess->telepon;
                $sess_data['lingkarbahu'] = $sess->lingkarbahu;
                $sess_data['lingkardada'] = $sess->lingkardada;
                $sess_data['lingkarleher'] = $sess->lingkarleher;
                $sess_data['lingkarketiak'] = $sess->lingkarketiak;
                $sess_data['lingkarperut'] = $sess->lingkarperut;
                $sess_data['lingkarpinggul'] = $sess->lingkarpinggul;
                $this->session->set_userdata($sess_data);
            }
            redirect('c_routing/klien_welcome');
        }
    }
}