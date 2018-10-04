<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MLand_rents extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_rents AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    $this->db->where('land.id', $id);
    $this->db->limit(1);
    $q = $this->db->get();
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
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_rents AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    if ($user_id) {
      $this->db->where('land.user_id', $user_id);
    }
    $this->db->limit(4);
    $this->db->order_by('land.id', 'DESC');
    $q = $this->db->get();
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
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_rents AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    $this->db->where('land.featured', 1);
    $this->db->order_by('land.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  public function get_all($user_id = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_rents AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    if ($user_id) {
      $this->db->where('land.user_id', $user_id);
    }
    $this->db->order_by('land.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function count_by_area($area_id = NULL) {
    $this->db->select('id');
    if ($area_id) {
      $this->db->where('area_id', $area_id);
    }
    $this->db->from('land_rents');
    
    return $this->db->count_all_results();
  }

  public function get_area_list($district_id = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_rents AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    $this->db->group_by('land.area_id');
    if ($district_id) {
      $this->db->where('land.district_id', $district_id);
    }
    $this->db->order_by('land.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $row['total_by_area'] = MLand_rents::count_by_area($row['area_id']);
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($area_id = NULL, $hostel_id = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name, users.email, profiles.phone');
    $this->db->from('land_rents AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
	$this->db->join('profiles', 'profiles.user_id = users.id','left');
    if($hostel_id){
      $this->db->where('land.id', $hostel_id);
    }
    if ($area_id) {
      $this->db->where('land.area_id', $area_id);
    }
    $this->db->order_by('land.id', 'DESC');
    $q = $this->db->get();
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
        'title' => $this->input->post('title'),
        'house' => $this->input->post('house'),
        'road' => $this->input->post('road'),
        'sector' => $this->input->post('sector'),
        'area_id' => $this->input->post('area_id'),
        'district_id' => $this->input->post('district_id'),
        'land_type' => $this->input->post('land_type'),
        'size' => $this->input->post('size'),
		'size_type' => $this->input->post('size_type'),
        'front_road_size' => $this->input->post('front_road_size'),
        'project_name' => $this->input->post('project_name'),
        'land_status' => $this->input->post('land_status'),
        'handover_time' => $this->input->post('handover_time'),
        'company_name' => $this->input->post('company_name'),
        'road_details' => $this->input->post('road_details'),
        'details' => $this->input->post('details'),
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'price_total' => $this->input->post('price_total'),
        'advance_price' => $this->input->post('advance_price'),
        'status' => $this->input->post('status'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('land_rents', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('land_rents', $data);
  }

  function update($id) {
    $data = array(
        'title' => $this->input->post('title'),
        'house' => $this->input->post('house'),
        'road' => $this->input->post('road'),
        'sector' => $this->input->post('sector'),
        'area_id' => $this->input->post('area_id'),
        'district_id' => $this->input->post('district_id'),
        'land_type' => $this->input->post('land_type'),
        'size' => $this->input->post('size'),
		'size_type' => $this->input->post('size_type'),
        'front_road_size' => $this->input->post('front_road_size'),
        'project_name' => $this->input->post('project_name'),
        'land_status' => $this->input->post('land_status'),
        'handover_time' => $this->input->post('handover_time'),
        'company_name' => $this->input->post('company_name'),
        'road_details' => $this->input->post('road_details'),
        'details' => $this->input->post('details'),
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'price_total' => $this->input->post('price_total'),
        'advance_price' => $this->input->post('advance_price'),
        'status' => $this->input->post('status'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('land_rents', $data);
  }
  
  function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('land_rents', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('land_rents');
  }

}