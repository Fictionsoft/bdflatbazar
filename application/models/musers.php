<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MUsers extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function verify($email, $pw) {
    $this->db->where('email', $email);
    $this->db->where('password', $pw);
    $this->db->limit(1);
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      $row = $q->row_array();
      $data['user_id'] = $row['id'];
      $data['user_type'] = $row['type'];
      $data['user_name'] = $row['name'];
      $data['phone'] = $row['phone'];
      $this->session->set_userdata($data);
    } else {
      $this->session->set_flashdata('error', 'Sorry, your username or password is incorrect!');
    }
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_by_email($email) {
    $data = array();
    $this->db->select('id, email, status, password');
    $this->db->where('email', $email);
    $this->db->limit(1);
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      $data = $q->row_array();
    }

    $q->free_result();
    return $data;
  }

  function get_all() {
    $data = array();
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create($password, $status = 'active') {
    $data = array(
        'email' => $this->input->post('email'),
        'password' => substr(do_hash($password), 0, 16),
        'name' => $this->input->post('first_name') . ' ' . $this->input->post('last_name'),
        'phone' => $this->input->post('phone'),
        'status' => $status,
        'type' => $this->input->post('type'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('users', $data);
    return $this->db->insert_id();
  }

  function update($id) {
    $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'email' => $this->input->post('email'),
        'password' => substr(do_hash($this->input->post('password')), 0, 16),
        'full_name' => $this->input->post('full_name'),
        'phone' => $this->input->post('phone'),
        'status' => $this->input->post('status'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('users', $data);
  }

  function update_password($id) {
    $data = array(
        'password' => substr(do_hash($this->input->post('password')), 0, 16),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('users', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('users');
  }

}