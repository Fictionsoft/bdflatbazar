<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MLeading_commercials extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function get_by_id($id) {
    $data = array();
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_commercials AS commercial');
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
  
   public function get_type_by_developer_id($developer_id) {
    $data = array();
    $this->db->where('developer_id', $developer_id);
    $this->db->group_by('project_type');
    $q = $this->db->get('leading_commercials');
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
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_commercials AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    if ($type && $type != "All") {
      $this->db->where('commercial.project_type', $type);
    }
    $this->db->where('commercial.developer_id', $developer_id);
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
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_commercials AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    if($limit){
      $this->db->limit($limit);
    }
    $this->db->where('commercial.featured', 1);
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
  
  public function get_list($developer_id = NULL, $area_id = NULL, $comm_id = NULL) {
    $data = array();
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name, ldev.contact, ldev.hotline, ldev.email, ldev.web');
    $this->db->from('leading_commercials AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    $this->db->join('leading_developers AS ldev', 'ldev.id = commercial.developer_id');
    if ($developer_id) {
      $this->db->where('commercial.developer_id', $developer_id);
    }
    if ($area_id) {
      $this->db->where('commercial.area_id', $area_id);
    }
	if($comm_id){
      $this->db->where('commercial.id', $comm_id);
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
    $this->db->select('commercial.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('leading_commercials AS commercial');
    $this->db->join('districts', 'districts.id = commercial.district_id');
    $this->db->join('areas', 'areas.id = commercial.area_id');
    $this->db->join('users', 'users.id = commercial.user_id');
    if ($developer_id) {
      $this->db->where('commercial.developer_id', $developer_id);
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
        'status' => $this->input->post('status'),
        'validity' => $this->input->post('validity'),
		'product_type' => $this->input->post('product_type'),
		'available_size' => $this->input->post('available_size'),
		'total_floor' => $this->input->post('total_floor'),
		'sold_out' => $this->input->post('sold_out'),
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
		'water' => $this->input->post('water'),
		'electricity' => $this->input->post('electricity'),
		'community_hall' => $this->input->post('community_hall'),
		'play_ground' => $this->input->post('play_ground'),
		'helipad' => $this->input->post('helipad'),
		'roof_top' => $this->input->post('roof_top'),
		'car_parking_has' => $this->input->post('car_parking_has'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('leading_commercials', $data);

    return $this->db->insert_id();
  }

  public function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('leading_commercials', $data);
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
        'status' => $this->input->post('status'),
        'validity' => $this->input->post('validity'),
		'product_type' => $this->input->post('product_type'),
		'available_size' => $this->input->post('available_size'),
		'total_floor' => $this->input->post('total_floor'),
		'sold_out' => $this->input->post('sold_out'),
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
    $this->db->update('leading_commercials', $data);
  }
  
  public function toggle($value, $id) {

    $data = array('featured' => $value);

    $this->db->where('id', $id);

    $this->db->update('leading_commercials', $data);

  }

  public function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('leading_commercials');
  }

}