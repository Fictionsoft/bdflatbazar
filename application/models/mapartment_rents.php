<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MApartment_rents extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('apartment_rents AS apt');
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

  function get_latest($user_id = NULL) {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('apartment_rents AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
    if ($user_id) {
      $this->db->where('apt.user_id', $user_id);
    }
    $this->db->limit(8);
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

  function get_featured() {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('apartment_rents AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
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

  function get_all($user_id = NULL) {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('apartment_rents AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
    if ($user_id) {
      $this->db->where('apt.user_id', $user_id);
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
  
  public function count_by_area($area_id = NULL) {
    $this->db->select('id');
    if ($area_id) {
      $this->db->where('area_id', $area_id);
    }
    $this->db->from('apartment_rents');
    
    return $this->db->count_all_results();
  }

  public function get_area_list($district_id = NULL) {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('apartment_rents AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
    $this->db->group_by('apt.area_id');
    if ($district_id) {
      $this->db->where('apt.district_id', $district_id);
    }
    $this->db->order_by('apt.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $row['total_by_area'] = MApartment_rents::count_by_area($row['area_id']);
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($area_id = NULL, $hostel_id = NULL) {
    $data = array();
    $this->db->select('apt.*, districts.name as district_name, areas.name as area_name, users.name as user_name, users.email, profiles.phone');
    $this->db->from('apartment_rents AS apt');
    $this->db->join('districts', 'districts.id = apt.district_id');
    $this->db->join('areas', 'areas.id = apt.area_id');
    $this->db->join('users', 'users.id = apt.user_id');
	$this->db->join('profiles', 'profiles.user_id = users.id','left');
    if($hostel_id){
      $this->db->where('apt.id', $hostel_id);
    }
    if ($area_id) {
      $this->db->where('apt.area_id', $area_id);
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

  function create($user_id = NULL) {
    $data = array(
        'user_id' => $user_id,
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
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
		'details' => $this->input->post('details'),
		'owner_name' => $this->input->post('owner_name'),
		'owner_number' => $this->input->post('owner_number'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('apartment_rents', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('apartment_rents', $data);
  }

  function update($id) {
    $data = array(
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
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
		'details' => $this->input->post('details'),
		'owner_name' => $this->input->post('owner_name'),
		'owner_number' => $this->input->post('owner_number'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('apartment_rents', $data);
  }

  function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('apartment_rents', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('apartment_rents');
  }

}