<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MAreas extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('areas');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all($district_id = NULL) {
    $data = array();
    if($district_id){
      $this->db->where('district_id', $district_id);
    }
    $q = $this->db->get('areas');
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
        'district_id' => $this->input->post('district_id'),
        'name' => $this->input->post('name'),
        'status' => $this->input->post('status'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('areas', $data);
    return $this->db->insert_id();
  }

  function update($id) {
    $data = array(
        'district_id' => $this->input->post('district_id'),
        'name' => $this->input->post('name'),
        'status' => $this->input->post('status'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('areas', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('areas');
  }

}