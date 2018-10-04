<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MProfiles extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('profiles');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_by_user_id($user_id) {
    $data = array();
    $this->db->where('user_id', $user_id);
    $q = $this->db->get('profiles');
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
    $q = $this->db->get('profiles');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create($user_id) {
    $data = array(
        'user_id' => $user_id,
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
         'phone' => $this->input->post('phone'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('profiles', $data);

    return $this->db->insert_id();
  }

  function update($user_id) {
    $data = array(
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'phone' => $this->input->post('phone'),
        'secondary_email' => $this->input->post('secondary_email'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('user_id', $user_id);
    $this->db->update('profiles', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('profiles');
  }

}