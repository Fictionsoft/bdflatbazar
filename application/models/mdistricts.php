<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MDistricts extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('districts');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all() {
    $data = array();
    $q = $this->db->get('districts');
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
        'name' => $this->input->post('name'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('districts', $data);
    return $this->db->insert_id();
  }

  function update($id) {
    $data = array(
        'user_id' => $this->session->userdate('user_id'),
        'name' => $this->input->post('name'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('districts', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('districts');
  }

}