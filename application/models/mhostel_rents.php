<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MHostel_rents extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->select('hostel.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('hostel_rents AS hostel');
    $this->db->join('districts', 'districts.id = hostel.district_id');
    $this->db->join('areas', 'areas.id = hostel.area_id');
    $this->db->join('users', 'users.id = hostel.user_id');
    $this->db->where('hostel.id', $id);
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
    $this->db->select('hostel.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('hostel_rents AS hostel');
    $this->db->join('districts', 'districts.id = hostel.district_id');
    $this->db->join('areas', 'areas.id = hostel.area_id');
    $this->db->join('users', 'users.id = hostel.user_id');
    if ($user_id) {
      $this->db->where('hostel.user_id', $user_id);
    }
    $this->db->limit(8);
    $this->db->order_by('hostel.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_featured($limit = NULL) {
    $data = array();
    $this->db->select('hostel.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('hostel_rents AS hostel');
    $this->db->join('districts', 'districts.id = hostel.district_id');
    $this->db->join('areas', 'areas.id = hostel.area_id');
    $this->db->join('users', 'users.id = hostel.user_id');
    if($limit){
      $this->db->limit($limit);
    }
    $this->db->where('hostel.featured', 1);
    $this->db->order_by('hostel.id', 'DESC');
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
    $this->db->select('hostel.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('hostel_rents AS hostel');
    $this->db->join('districts', 'districts.id = hostel.district_id');
    $this->db->join('areas', 'areas.id = hostel.area_id');
    $this->db->join('users', 'users.id = hostel.user_id');
    if ($user_id) {
      $this->db->where('hostel.user_id', $user_id);
    }
    $this->db->order_by('hostel.id', 'DESC');
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
    $this->db->from('hostel_rents');
    
    return $this->db->count_all_results();
  }

  public function get_area_list($district_id = NULL) {
    $data = array();
    $this->db->select('hostel.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('hostel_rents AS hostel');
    $this->db->join('districts', 'districts.id = hostel.district_id');
    $this->db->join('areas', 'areas.id = hostel.area_id');
    $this->db->join('users', 'users.id = hostel.user_id');
    $this->db->group_by('hostel.area_id');
    if ($district_id) {
      $this->db->where('hostel.district_id', $district_id);
    }
    $this->db->order_by('hostel.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $row['total_by_area'] = MHostel_rents::count_by_area($row['area_id']);
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($area_id = NULL, $hostel_id = NULL) {
    $data = array();
    $this->db->select('hostel.*, districts.name as district_name, areas.name as area_name, users.name as user_name, users.email, profiles.phone');
    $this->db->from('hostel_rents AS hostel');
    $this->db->join('districts', 'districts.id = hostel.district_id');
    $this->db->join('areas', 'areas.id = hostel.area_id');
    $this->db->join('users', 'users.id = hostel.user_id');
	$this->db->join('profiles', 'profiles.user_id = users.id','left');
    if($hostel_id){
      $this->db->where('hostel.id', $hostel_id);
    }
    if ($area_id) {
      $this->db->where('hostel.area_id', $area_id);
    }
    $this->db->order_by('hostel.id', 'DESC');
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
        'total_members' => $this->input->post('total_members'),
        'total_bed' => $this->input->post('total_bed'),
        'current_members' => $this->input->post('current_members'),
        'required_members' => $this->input->post('required_members'),
        'food' => $this->input->post('food'),
        'kitchen' => $this->input->post('kitchen'),
        'attached_bath' => $this->input->post('attached_bath'),
        'member_occupation' => $this->input->post('member_occupation'),
        'details' => $this->input->post('details'),
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('hostel_rents', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('hostel_rents', $data);
  }

  function update($id) {
    $data = array(
        'title' => $this->input->post('title'),
        'house' => $this->input->post('house'),
        'road' => $this->input->post('road'),
        'sector' => $this->input->post('sector'),
        'area_id' => $this->input->post('area_id'),
        'district_id' => $this->input->post('district_id'),
        'total_members' => $this->input->post('total_members'),
        'total_bed' => $this->input->post('total_bed'),
        'current_members' => $this->input->post('current_members'),
        'required_members' => $this->input->post('required_members'),
        'food' => $this->input->post('food'),
        'kitchen' => $this->input->post('kitchen'),
        'attached_bath' => $this->input->post('attached_bath'),
        'member_occupation' => $this->input->post('member_occupation'),
        'details' => $this->input->post('details'),
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('hostel_rents', $data);
  }

  function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('hostel_rents', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('hostel_rents');
  }

}