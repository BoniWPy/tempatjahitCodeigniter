<?php

Class model extends CI_Model{

	function __construct(){
		parent::__construct();

	}

  function model(){
    $this->db->select('*');
    $this ->db->from('model');
    $query=$this->db->get();
    return $query->result_array();
  }
  function get_by_id($id){
    $this->db->select('*');
    $this ->db->from('model');
  // $this->db->join('keranjang', 'model.id = keranjang.id_model');
   $this ->db->where('id', $id);

    $query=$this->db->get();
    return $query->result_array();
  }

  function get_by_keranjang($id_ker){
    $this->db->select('*');
    $this->db->from('keranjang');
    $this->db->join('model', 'model.id = keranjang.id_model');
    $this ->db->where('id_model', $id_ker);
    // $this ->db->where('id_user', $id_user);
    return $this->db->get();
  }
   function get_by_user(){
    $this->db->select('*');
    $this->db->from('user');
    return $this->db->get();
  }


  function insert_into_keranjang($data){
    return $this->db->insert('keranjang', $data);
  }
  function update_keranjang($id_keranjang, $data)
  {
    $this->db->where('id_keranjang', $id_keranjang);
    $this->db->update('keranjang', $data);
  } 
  function insert_into_user($data){
    return $this->db->insert('user', $data);
  }
  function update_user($id_user, $data)
  {
    $this->db->where('id', $id_user);
    $this->db->update('user', $data);
  }  
  function delete_user($id){ 
    $this->db->where('id',$id); 
    $this->db->delete('user'); 
    return;
  }
  function view_all_orderan_user($id_user)
  {
    $this->db->select('*');
    $this->db->from('keranjang');
    $this->db->where('id_user', $id_user);

    return $this->db->get();    
  }
  function delete_order($id_keranjang){ 
    $this->db->where('id_keranjang',$id_keranjang); 
    $this->db->delete('keranjang'); 
    return;
  }

  function select_by_id_user($id_user)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id', $id_user);

    return $this->db->get();    
  }

  function select_by_id_model($id_model)
  {
    $this->db->select('*');
    $this->db->from('model');
    $this->db->where('id', $id_model);

    return $this->db->get();    
  }

}

?>
