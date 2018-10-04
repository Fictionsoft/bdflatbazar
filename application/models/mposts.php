<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MPosts extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->select('posts.*, districts.name as district_name, areas.name as area_name');
    $this->db->from('posts');
    $this->db->join('districts', 'districts.id = posts.district_id');
    $this->db->join('areas', 'areas.id = posts.area_id');
    $this->db->where('posts.id', $id);
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function count_by_area($area_id = NULL, $type = NULL) {
    $this->db->select('id');
    if ($type) {
      $this->db->where_in('type', $type);
    }
    if ($area_id) {
      $this->db->where('area_id', $area_id);
    }
    $this->db->from('posts');
    
    return $this->db->count_all_results();
  }

  public function get_area_list($district_id = NULL, $type = NULL) {
    $data = array();
    $this->db->select('posts.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('posts');
    $this->db->join('districts', 'districts.id = posts.district_id');
    $this->db->join('areas', 'areas.id = posts.area_id');
    $this->db->join('users', 'users.id = posts.user_id','left');
    $this->db->group_by('posts.area_id');
    if ($type) {
      $this->db->where_in('posts.type', $type);
    }
    if ($district_id) {
      $this->db->where('posts.district_id', $district_id);
    }
    $this->db->order_by('posts.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $row['total_by_area'] = MPosts::count_by_area($row['area_id'], $type);
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($area_id = NULL, $type = NULL, $id = NULL) {
    $data = array();
    $this->db->select('posts.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('posts');
    $this->db->join('districts', 'districts.id = posts.district_id');
    $this->db->join('areas', 'areas.id = posts.area_id');
    $this->db->join('users', 'users.id = posts.user_id','left');
    if($id){
      $this->db->where('posts.id', $id);
    }
    if($type){
      $this->db->where_in('posts.type', $type);
    }
    if ($area_id) {
      $this->db->where('posts.area_id', $area_id);
    }
    $this->db->order_by('posts.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_latest($limit = 4) {
    $data = array();
    $this->db->order_by('id', 'DESC');
    $this->db->limit($limit);
    $q = $this->db->get('posts');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all() {
    $data = array();
    $this->db->select('posts.*, districts.name as district_name, areas.name as area_name');
    $this->db->from('posts');
    $this->db->join('districts', 'districts.id = posts.district_id');
    $this->db->join('areas', 'areas.id = posts.area_id');
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
        'email' => $this->input->post('email'),
        'name' => $this->input->post('name'),
        'phone' => $this->input->post('phone'),
        'cell' => $this->input->post('cell'),
        'title' => $this->input->post('title'),
        'details' => $this->input->post('details'),
        'type' => $this->input->post('type'),
        'place' => $this->input->post('place'),
        'district_id' => $this->input->post('district_id'),
        'area_id' => $this->input->post('area_id'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('posts', $data);

    return $this->db->insert_id();
  }

  function add_picture($picture, $id) {
    $data = array(
        'picture' => $picture
    );

    $this->db->where('id', $id);
    $this->db->update('posts', $data);
  }

  function update($id) {
    $data = array(
        'email' => $this->input->post('email'),
        'name' => $this->input->post('name'),
        'phone' => $this->input->post('phone'),
        'cell' => $this->input->post('cell'),
        'title' => $this->input->post('title'),
        'details' => $this->input->post('details'),
        'type' => $this->input->post('type'),
        'place' => $this->input->post('place'),
        'district_id' => $this->input->post('district_id'),
        'area_id' => $this->input->post('area_id'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('posts', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('posts');
  }

}