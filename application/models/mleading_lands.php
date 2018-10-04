<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MLeading_lands extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function get_by_id($id) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_lands AS land');
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
  
  public function get_type_by_developer_id($developer_id) {
    $data = array();
    $this->db->where('developer_id', $developer_id);
    $this->db->group_by('land_status');
    $q = $this->db->get('leading_lands');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  public function get_by_developer_id($developer_id, $type = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_lands AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    if ($type && $type != "All") {
      $this->db->where('land.land_status', $type);
    }
    $this->db->where('land.developer_id', $developer_id);
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
    $this->db->from('leading_lands AS land');
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
  
  public function get_list($developer_id = NULL, $area_id = NULL, $land_id = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name, ldev.contact, ldev.hotline, ldev.email, ldev.web');
    $this->db->from('leading_lands AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
	$this->db->join('leading_developers AS ldev', 'ldev.id = land.developer_id');
	if ($developer_id) {
      $this->db->where('land.developer_id', $developer_id);
    }
    if ($area_id) {
      $this->db->where('land.area_id', $area_id);
    }
	if($land_id){
      $this->db->where('land.id', $land_id);
    }
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  public function get_all($developer_id = NULL) {
    $data = array();
    $this->db->select('land.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_lands AS land');
    $this->db->join('districts', 'districts.id = land.district_id');
    $this->db->join('areas', 'areas.id = land.area_id');
    $this->db->join('users', 'users.id = land.user_id');
    if ($developer_id) {
      $this->db->where('land.developer_id', $developer_id);
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
        'developer_id' => $this->input->post('developer_id'),
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
        'sale_price' => $this->input->post('sale_price'),
        'total_price' => $this->input->post('total_price'),
        'status' => $this->input->post('status'),
		'no_of_block' => $this->input->post('no_of_block'),
		'total_plots' => $this->input->post('total_plots'),
		'available_plots' => $this->input->post('available_plots'),
		'total_project_land_size' => $this->input->post('total_project_land_size'),
		'mosque' => $this->input->post('mosque'),
		'bazar' => $this->input->post('bazar'),
		'hospital' => $this->input->post('hospital'),
		'school' => $this->input->post('school'),
		'college' => $this->input->post('college'),
		'atm' => $this->input->post('atm'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('leading_lands', $data);

    return $this->db->insert_id();
  }

  public function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('leading_lands', $data);
  }

  public function update($id) {
    $data = array(
        'developer_id' => $this->input->post('developer_id'),
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
        'sale_price' => $this->input->post('sale_price'),
        'total_price' => $this->input->post('total_price'),
        'status' => $this->input->post('status'),
		'no_of_block' => $this->input->post('no_of_block'),
		'total_plots' => $this->input->post('total_plots'),
		'available_plots' => $this->input->post('available_plots'),
		'total_project_land_size' => $this->input->post('total_project_land_size'),
		'mosque' => $this->input->post('mosque'),
		'bazar' => $this->input->post('bazar'),
		'hospital' => $this->input->post('hospital'),
		'school' => $this->input->post('school'),
		'college' => $this->input->post('college'),
		'atm' => $this->input->post('atm'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('leading_lands', $data);
  }
  
  public function toggle($value, $id) {

    $data = array('featured' => $value);

    $this->db->where('id', $id);

    $this->db->update('leading_lands', $data);

  }

  public function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('leading_lands');
  }

}