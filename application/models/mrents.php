<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MRents extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('rents');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  function get_latest($user_id = NULL) {
    $data = array();
    if ($user_id) {
      $this->db->where('user_id', $user_id);
    }
    $this->db->limit(4);
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('rents');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  function get_featured() {
    $data = array();
    $this->db->where('featured', 1);
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('rents');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  function get_all($user_id = NULL) {
    $data = array();
    $this->db->select('rents.*, users.name as user_name');
    $this->db->from('rents');
    $this->db->join('users', 'users.id = rents.user_id');
    if ($user_id) {
      $this->db->where('rents.user_id', $user_id);
    }
    $this->db->order_by('users.name', 'ASC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create() {
    $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'holding_no' => $this->input->post('holding_no'),
        'road' => $this->input->post('road'),
        'house' => $this->input->post('house'),
        'sector' => $this->input->post('sector'),
        'country' => $this->input->post('country'),
        'district' => $this->input->post('district'),
        'area' => $this->input->post('area'),
        'zip' => $this->input->post('zip'),
        'complex' => $this->input->post('complex'),
        'size' => $this->input->post('size'),
        'floor' => $this->input->post('floor'),
        'total_floor' => $this->input->post('total_floor'),
        'building_type' => $this->input->post('building_type'),
        'rent_out' => $this->input->post('rent_out'),
        'details' => $this->input->post('details'),
        'price_sft' => $this->input->post('price_sft'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('rents', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('rents', $data);
  }

  function update($id) {
    $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'holding_no' => $this->input->post('holding_no'),
        'road' => $this->input->post('road'),
        'house' => $this->input->post('house'),
        'sector' => $this->input->post('sector'),
        'country' => $this->input->post('country'),
        'district' => $this->input->post('district'),
        'area' => $this->input->post('area'),
        'zip' => $this->input->post('zip'),
        'complex' => $this->input->post('complex'),
        'size' => $this->input->post('size'),
        'floor' => $this->input->post('floor'),
        'total_floor' => $this->input->post('total_floor'),
        'building_type' => $this->input->post('building_type'),
        'rent_out' => $this->input->post('rent_out'),
        'details' => $this->input->post('details'),
        'price_sft' => $this->input->post('price_sft'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('rents', $data);
  }
  
  function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('rents', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('rents');
  }

}