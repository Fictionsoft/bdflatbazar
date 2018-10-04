<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MApartments extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('apartments');
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
    if ($user_id) {
      $this->db->where('user_id', $user_id);
    }
    $this->db->limit(8);
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('apartments');
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
    $this->db->where('featured', 1);
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('apartments');
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
    $this->db->select('apt.*, users.name as user_name');
    $this->db->from('apartments AS apt');
    $this->db->join('users', 'users.id = apt.user_id');
    if ($user_id) {
      $this->db->where('apt.user_id', $user_id);
    }
    $this->db->order_by('users.name', 'ASC');
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
        'apt_no' => $this->input->post('apt_no'),
        'road' => $this->input->post('road'),
        'house' => $this->input->post('house'),
        'sector' => $this->input->post('sector'),
        'country' => $this->input->post('country'),
        'district' => $this->input->post('district'),
        'area' => $this->input->post('area'),
        'zip' => $this->input->post('zip'),
        'apt_type' => $this->input->post('apt_type'),
        'size' => $this->input->post('size'),
        'floor' => $this->input->post('floor'),
        'bed' => $this->input->post('bed'),
        'dining' => $this->input->post('dining'),
        'living' => $this->input->post('living'),
        'guest' => $this->input->post('guest'),
        'attached_bath' => $this->input->post('attached_bath'),
        'common_bath' => $this->input->post('common_bath'),
        'veranda' => $this->input->post('veranda'),
        'car_parking' => $this->input->post('car_parking'),
        'lift' => $this->input->post('lift'),
        'cctv' => $this->input->post('cctv'),
        'generator' => $this->input->post('generator'),
        'intercom' => $this->input->post('intercom'),
        'concealed_phone' => $this->input->post('concealed_phone'),
        'staff_toilet' => $this->input->post('staff_toilet'),
        'staff_room' => $this->input->post('staff_room'),
        'floor_type' => $this->input->post('floor_type'),
        'building_facing' => $this->input->post('building_facing'),
        'flat_facing' => $this->input->post('flat_facing'),
        'front_road_size' => $this->input->post('front_road_size'),
        'building_size' => $this->input->post('building_size'),
        'building_type' => $this->input->post('building_type'),
        'handover_time' => $this->input->post('handover_time'),
        'price_sft' => $this->input->post('price_sft'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
        'perspective_view' => $this->input->post('perspective_view'),
        'floor_plan' => $this->input->post('floor_plan'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('apartments', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('apartments', $data);
  }

  function update($id) {
    $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'apt_no' => $this->input->post('apt_no'),
        'road' => $this->input->post('road'),
        'house' => $this->input->post('house'),
        'sector' => $this->input->post('sector'),
        'country' => $this->input->post('country'),
        'district' => $this->input->post('district'),
        'area' => $this->input->post('area'),
        'zip' => $this->input->post('zip'),
        'apt_type' => $this->input->post('apt_type'),
        'size' => $this->input->post('size'),
        'floor' => $this->input->post('floor'),
        'bed' => $this->input->post('bed'),
        'dining' => $this->input->post('dining'),
        'living' => $this->input->post('living'),
        'guest' => $this->input->post('guest'),
        'attached_bath' => $this->input->post('attached_bath'),
        'common_bath' => $this->input->post('common_bath'),
        'veranda' => $this->input->post('veranda'),
        'car_parking' => $this->input->post('car_parking'),
        'lift' => $this->input->post('lift'),
        'cctv' => $this->input->post('cctv'),
        'generator' => $this->input->post('generator'),
        'intercom' => $this->input->post('intercom'),
        'concealed_phone' => $this->input->post('concealed_phone'),
        'staff_toilet' => $this->input->post('staff_toilet'),
        'staff_room' => $this->input->post('staff_room'),
        'floor_type' => $this->input->post('floor_type'),
        'building_facing' => $this->input->post('building_facing'),
        'flat_facing' => $this->input->post('flat_facing'),
        'front_road_size' => $this->input->post('front_road_size'),
        'building_size' => $this->input->post('building_size'),
        'building_type' => $this->input->post('building_type'),
        'handover_time' => $this->input->post('handover_time'),
        'price_sft' => $this->input->post('price_sft'),
        'price_total' => $this->input->post('price_total'),
        'status' => $this->input->post('status'),
        'perspective_view' => $this->input->post('perspective_view'),
        'floor_plan' => $this->input->post('floor_plan'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('apartments', $data);
  }

  function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('apartments', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('apartments');
  }

}