<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MLands extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('lands');
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
    $q = $this->db->get('lands');
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
    $q = $this->db->get('lands');
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
    $this->db->select('lands.*, users.name as user_name');
    $this->db->from('lands');
    $this->db->join('users', 'users.id = lands.user_id');
    if ($user_id) {
      $this->db->where('lands.user_id', $user_id);
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
        'plot_no' => $this->input->post('plot_no'),
        'road' => $this->input->post('road'),
        'house' => $this->input->post('house'),
        'sector' => $this->input->post('sector'),
        'country' => $this->input->post('country'),
        'district' => $this->input->post('district'),
        'area' => $this->input->post('area'),
        'zip' => $this->input->post('zip'),
        'land_type' => $this->input->post('land_type'),
        'size' => $this->input->post('size'),
        'size_type' => $this->input->post('size_type'),
        'land_status' => $this->input->post('land_status'),
        'road_details' => $this->input->post('road_details'),
        'details' => $this->input->post('details'),
        'price_sft' => $this->input->post('price_sft'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('lands', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('lands', $data);
  }

  function update($id) {
    $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'plot_no' => $this->input->post('plot_no'),
        'road' => $this->input->post('road'),
        'house' => $this->input->post('house'),
        'sector' => $this->input->post('sector'),
        'country' => $this->input->post('country'),
        'district' => $this->input->post('district'),
        'area' => $this->input->post('area'),
        'zip' => $this->input->post('zip'),
        'land_type' => $this->input->post('land_type'),
        'size' => $this->input->post('size'),
        'size_type' => $this->input->post('size_type'),
        'land_status' => $this->input->post('land_status'),
        'road_details' => $this->input->post('road_details'),
        'details' => $this->input->post('details'),
        'price_sft' => $this->input->post('price_sft'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('lands', $data);
  }
  
  function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('lands', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('lands');
  }

}