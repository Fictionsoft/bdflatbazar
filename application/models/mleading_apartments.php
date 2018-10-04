<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MLeading_apartments extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function get_by_id($id) {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_apartments AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
    $this->db->where('apt.id', $id);
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
    $this->db->group_by('apt_type');
    $q = $this->db->get('leading_apartments');
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
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_apartments AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
    if($type && $type != "All"){
      $this->db->where('apt.apt_type', $type);
    }
    $this->db->where('apt.developer_id', $developer_id);
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
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_apartments AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
	
	if($limit){
      $this->db->limit($limit);
    }
    $this->db->where('apt.featured', 1);
    $this->db->order_by('apt.id', 'DESC');
	
    $q = $this->db->get();
	
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($developer_id = NULL,$area_id = NULL, $apt_id = NULL) {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name, ldev.contact, ldev.hotline, ldev.email, ldev.web');
    $this->db->from('leading_apartments AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
	$this->db->join('leading_developers AS ldev', 'ldev.id = apt.developer_id');
	if ($developer_id) {
      $this->db->where('apt.developer_id', $developer_id);
    }
	if ($area_id) {
      $this->db->where('apt.area_id', $area_id);
    }
	if($apt_id){
      $this->db->where('apt.id', $apt_id);
    }	
	$this->db->order_by('apt.id', 'DESC');
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
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_apartments AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
    if ($developer_id) {
      $this->db->where('apt.developer_id', $developer_id);
    }
    $this->db->order_by('apt.id', 'DESC');
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
        'apt_type' => $this->input->post('apt_type'),
        'size' => $this->input->post('size'),
        'common_bath' => $this->input->post('common_bath'),
        'project_name' => $this->input->post('project_name'),
        'bed' => $this->input->post('bed'),
        'veranda' => $this->input->post('veranda'),
        'company_name' => $this->input->post('company_name'),
        'car_parking' => $this->input->post('car_parking'),
        'floor' => $this->input->post('floor'),
        'attached_bath' => $this->input->post('attached_bath'),
        'living' => $this->input->post('living'),
        'dining' => $this->input->post('dining'),
        'building_facing' => $this->input->post('building_facing'),
        'flat_facing' => $this->input->post('flat_facing'),
        'front_road_size' => $this->input->post('front_road_size'),
        'handover_time' => $this->input->post('handover_time'),
        'building_type' => $this->input->post('building_type'),
        'floor_type' => $this->input->post('floor_type'),
        'project_land_size' => $this->input->post('project_land_size'),
        'lift' => $this->input->post('lift'),
        'cctv' => $this->input->post('cctv'),
        'generator' => $this->input->post('generator'),
        'intercom' => $this->input->post('intercom'),
        'concealed_phone' => $this->input->post('concealed_phone'),
        'staff_toilet' => $this->input->post('staff_toilet'),
        'staff_room' => $this->input->post('staff_room'),
        'security' => $this->input->post('security'),
        'fire_exit' => $this->input->post('fire_exit'),
        'gym' => $this->input->post('gym'),
        'club' => $this->input->post('club'),
        'swiming_pool' => $this->input->post('swiming_pool'),
        'gas' => $this->input->post('gas'),
        'price_sft' => $this->input->post('price_sft'),
        'parking_price' => $this->input->post('parking_price'),
        'utility_price' => $this->input->post('utility_price'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
		'details' => $this->input->post('details'),
		'project_type' => $this->input->post('project_type'),
		'total_apartment' => $this->input->post('total_apartment'),
		'available_apartment_size' => $this->input->post('available_apartment_size'),
		'sold_out_apart' => $this->input->post('sold_out_apart'),
		'available_floor' => $this->input->post('available_floor'),
		'per_floor_unit' => $this->input->post('per_floor_unit'),
		'water' => $this->input->post('water'),
		'electricity' => $this->input->post('electricity'),
		'community_hall' => $this->input->post('community_hall'),
		'play_ground' => $this->input->post('play_ground'),
		'helipad' => $this->input->post('helipad'),
		'roof_top' => $this->input->post('roof_top'),
		'car_parking_has' => $this->input->post('car_parking_has'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('leading_apartments', $data);

    return $this->db->insert_id();
  }

  public function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('leading_apartments', $data);
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
		'apt_type' => $this->input->post('apt_type'),
        'size' => $this->input->post('size'),
        'common_bath' => $this->input->post('common_bath'),
        'project_name' => $this->input->post('project_name'),
        'bed' => $this->input->post('bed'),
        'veranda' => $this->input->post('veranda'),
        'company_name' => $this->input->post('company_name'),
        'car_parking' => $this->input->post('car_parking'),
        'floor' => $this->input->post('floor'),
        'attached_bath' => $this->input->post('attached_bath'),
        'living' => $this->input->post('living'),
        'dining' => $this->input->post('dining'),
        'building_facing' => $this->input->post('building_facing'),
        'flat_facing' => $this->input->post('flat_facing'),
        'front_road_size' => $this->input->post('front_road_size'),
        'handover_time' => $this->input->post('handover_time'),
        'building_type' => $this->input->post('building_type'),
        'floor_type' => $this->input->post('floor_type'),
        'project_land_size' => $this->input->post('project_land_size'),
        'lift' => $this->input->post('lift'),
        'cctv' => $this->input->post('cctv'),
        'generator' => $this->input->post('generator'),
        'intercom' => $this->input->post('intercom'),
        'concealed_phone' => $this->input->post('concealed_phone'),
        'staff_toilet' => $this->input->post('staff_toilet'),
        'staff_room' => $this->input->post('staff_room'),
        'security' => $this->input->post('security'),
        'fire_exit' => $this->input->post('fire_exit'),
        'gym' => $this->input->post('gym'),
        'club' => $this->input->post('club'),
        'swiming_pool' => $this->input->post('swiming_pool'),
        'gas' => $this->input->post('gas'),
        'price_sft' => $this->input->post('price_sft'),
        'parking_price' => $this->input->post('parking_price'),
        'utility_price' => $this->input->post('utility_price'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
		'details' => $this->input->post('details'),
		'project_type' => $this->input->post('project_type'),
		'total_apartment' => $this->input->post('total_apartment'),
		'available_apartment_size' => $this->input->post('available_apartment_size'),
		'sold_out_apart' => $this->input->post('sold_out_apart'),
		'available_floor' => $this->input->post('available_floor'),
		'per_floor_unit' => $this->input->post('per_floor_unit'),
		'water' => $this->input->post('water'),
		'electricity' => $this->input->post('electricity'),
		'community_hall' => $this->input->post('community_hall'),
		'play_ground' => $this->input->post('play_ground'),
		'helipad' => $this->input->post('helipad'),
		'roof_top' => $this->input->post('roof_top'),
		'car_parking_has' => $this->input->post('car_parking_has'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('leading_apartments', $data);
  }
  
  public function toggle($value, $id) {

    $data = array('featured' => $value);

    $this->db->where('id', $id);

    $this->db->update('leading_apartments', $data);

  }

  public function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('leading_apartments');
  }

}