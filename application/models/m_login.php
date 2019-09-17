<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_login extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function cek_admin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('admin');
        return $query->result_array();
    }
    function cek_user($email,$password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query = $this->db->get('user');
        return $query->result_array();
    }

    function cek_user_new($data){
            $query = $this->db->get_where('user', $data);
            return $query;
        }
   
}