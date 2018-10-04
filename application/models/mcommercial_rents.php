<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MCommercial_rents extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('commercial_rents AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    $this->db->where('commercial.id', $id);
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
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('commercial_rents AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    if ($user_id) {
      $this->db->where('commercial.user_id', $user_id);
    }
    $this->db->limit(4);
    $this->db->order_by('commercial.id', 'DESC');
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
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('commercial_rents AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    if ($user_id) {
      $this->db->where('commercial.user_id', $user_id);
    }
    $this->db->order_by('commercial.id', 'DESC');
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
    $this->db->from('commercial_rents');
    
    return $this->db->count_all_results();
  }

  public function get_area_list($district_id = NULL) {
    $data = array();
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('commercial_rents AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    $this->db->group_by('commercial.area_id');
    if ($district_id) {
      $this->db->where('commercial.district_id', $district_id);
    }
    $this->db->order_by('commercial.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $row['total_by_area'] = MCommercial_rents::count_by_area($row['area_id']);
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($area_id = NULL, $hostel_id = NULL) {
    $data = array();
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name, users.email, profiles.phone');
    $this->db->from('commercial_rents AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
	$this->db->join('profiles', 'profiles.user_id = users.id','left');
    if($hostel_id){
      $this->db->where('commercial.id', $hostel_id);
    }
    if ($area_id) {
      $this->db->where('commercial.area_id', $area_id);
    }
    $this->db->order_by('commercial.id', 'DESC');
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
        'user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'house' => $this->input->post('house'),
        'road' => $this->input->post('road'),
        'sector' => $this->input->post('sector'),
        'area_id' => $this->input->post('area_id'),
        'district_id' => $this->input->post('district_id'),
        'project_type' => $this->input->post('project_type'),
        'size' => $this->input->post('size'),
        'front_road_size' => $this->input->post('front_road_size'),
        'project_name' => $this->input->post('project_name'),
        'project_status' => $this->input->post('project_status'),
        'handover_time' => $this->input->post('handover_time'),
        'company_name' => $this->input->post('company_name'),
        'details' => $this->input->post('details'),
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
        'validity' => $this->input->post('validity'),
		'floor' => $this->input->post('floor'),
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
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('commercial_rents', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('commercial_rents', $data);
  }

  function update($id) {
    $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'house' => $this->input->post('house'),
        'road' => $this->input->post('road'),
        'sector' => $this->input->post('sector'),
        'area_id' => $this->input->post('area_id'),
        'district_id' => $this->input->post('district_id'),
        'project_type' => $this->input->post('project_type'),
        'size' => $this->input->post('size'),
        'front_road_size' => $this->input->post('front_road_size'),
        'project_name' => $this->input->post('project_name'),
        'project_status' => $this->input->post('project_status'),
        'handover_time' => $this->input->post('handover_time'),
        'company_name' => $this->input->post('company_name'),
        'details' => $this->input->post('details'),
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
        'validity' => $this->input->post('validity'),
		'floor' => $this->input->post('floor'),
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
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('commercial_rents', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('commercial_rents');
  }

}