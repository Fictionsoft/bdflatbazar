<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MLand_sales extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function get_by_id($id) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_sales AS land');
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
  
  public function get_latest($user_id = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_sales AS land');
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
  
  public function get_featured($limit = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_sales AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    if($limit){
      $this->db->limit($limit);
    }
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
  
  public function count_by_area($area_id = NULL, $land_status = NULL) {
    $this->db->select('id');
    if ($area_id) {
      $this->db->where('area_id', $area_id);
    }
	if ($land_status && $land_status != "All") {
      $this->db->where('land_status', $land_status);
    }
    $this->db->from('land_sales');
    
    return $this->db->count_all_results();
  }

  public function get_area_list($district_id = NULL, $land_status = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_sales AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    $this->db->group_by('land.area_id');
    if ($district_id) {
      $this->db->where('land.district_id', $district_id);
    }
	if ($land_status && $land_status != "All") {
      $this->db->where('land.land_status', $land_status);
    }
    $this->db->order_by('land.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $row['total_by_area'] = MLand_sales::count_by_area($row['area_id']);
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($area_id = NULL, $land_id = NULL, $land_status = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name, users.email, profiles.phone');
    $this->db->from('land_sales AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
	$this->db->join('profiles', 'profiles.user_id = users.id','left');
    if($land_id){
      $this->db->where('land.id', $land_id);
    }
    if ($area_id) {
      $this->db->where('land.area_id', $area_id);
    }
	if ($land_status && $land_status != "All") {
      $this->db->where('land.land_status', $land_status);
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

  public function get_all($user_id = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('land_sales AS land');
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

  public function create($user_id) {
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
        'sale_price' => $this->input->post('sale_price'),
		'price_type' => $this->input->post('price_type'),
        'total_price' => $this->input->post('total_price'),
        'status' => $this->input->post('status'),
		
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('land_sales', $data);

    return $this->db->insert_id();
  }

  public function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('land_sales', $data);
  }

  public function update($id) {
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
        'sale_price' => $this->input->post('sale_price'),
		'price_type' => $this->input->post('price_type'),
        'total_price' => $this->input->post('total_price'),
        'status' => $this->input->post('status'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('land_sales', $data);
  }
  
  public function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('land_sales', $data);
  }

  public function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('land_sales');
  }

}