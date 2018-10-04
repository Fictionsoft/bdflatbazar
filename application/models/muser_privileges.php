<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MUser_privileges extends CI_Model {
  
  public $tablename;

  function __construct() {
    parent::__construct();
    $this->tablename = 'user_privileges';
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get($this->tablename);
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  function get_by_ref_user($ref_user) {
    $data = array();
    $this->db->where('ref_user', $ref_user);
    $this->db->limit(1);
    $q = $this->db->get($this->tablename);
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all() {
    $data = array();
    $q = $this->db->get($this->tablename);
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
        'ref_user' => $this->input->post('ref_user'),
        'so_entry' => $this->input->post('so_entry'),
        'so_list' => $this->input->post('so_list'),
        'so_edit' => $this->input->post('so_edit'),
        'so_delete' => $this->input->post('so_delete'),
        'so_coupon' => $this->input->post('so_coupon'),
        'bs_entry' => $this->input->post('bs_entry'),
        'bs_list' => $this->input->post('bs_list'),
        'bs_edit' => $this->input->post('bs_edit'),
        'bs_delete' => $this->input->post('bs_delete'),
        'gi_entry' => $this->input->post('gi_entry'),
        'gi_list' => $this->input->post('gi_list'),
        'gi_edit' => $this->input->post('gi_edit'),
        'gi_delete' => $this->input->post('gi_delete'),
        'si_entry' => $this->input->post('si_entry'),
        'si_list' => $this->input->post('si_list'),
        'si_edit' => $this->input->post('si_edit'),
        'si_delete' => $this->input->post('si_delete'),
        'tme_entry' => $this->input->post('tme_entry'),
        'tme_list' => $this->input->post('tme_list'),
        'tme_edit' => $this->input->post('tme_edit'),
        'tme_delete' => $this->input->post('tme_delete'),
        'model_entry' => $this->input->post('model_entry'),
        'model_list' => $this->input->post('model_list'),
        'model_edit' => $this->input->post('model_edit'),
        'model_delete' => $this->input->post('model_delete'),
        'zone_entry' => $this->input->post('zone_entry'),
        'zone_list' => $this->input->post('zone_list'),
        'zone_edit' => $this->input->post('zone_edit'),
        'zone_delete' => $this->input->post('zone_delete'),
        'district_entry' => $this->input->post('district_entry'),
        'district_list' => $this->input->post('district_list'),
        'district_edit' => $this->input->post('district_edit'),
        'district_delete' => $this->input->post('district_delete'),
        'area_entry' => $this->input->post('area_entry'),
        'area_list' => $this->input->post('area_list'),
        'area_edit' => $this->input->post('area_edit'),
        'area_delete' => $this->input->post('area_delete'),
        'outlet_entry' => $this->input->post('outlet_entry'),
        'outlet_list' => $this->input->post('outlet_list'),
        'outlet_edit' => $this->input->post('outlet_edit'),
        'outlet_delete' => $this->input->post('outlet_delete'),
        'si_report' => $this->input->post('si_report'),
        'gi_report' => $this->input->post('gi_report'),
        'so_report' => $this->input->post('so_report'),
        'inv_report' => $this->input->post('inv_report'),
        'user_entry' => $this->input->post('user_entry'),
        'user_list' => $this->input->post('user_list'),
        'user_edit' => $this->input->post('user_edit'),
        'user_delete' => $this->input->post('user_delete'),
        'user_privilege' => $this->input->post('user_privilege'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert($this->tablename, $data);
  }

  function update() {
    $data = array(
        'user_id' => $this->session->userdata('user_id'),
        'ref_user' => $this->input->post('ref_user'),
        'so_entry' => $this->input->post('so_entry'),
        'so_list' => $this->input->post('so_list'),
        'so_edit' => $this->input->post('so_edit'),
        'so_delete' => $this->input->post('so_delete'),
        'so_coupon' => $this->input->post('so_coupon'),
        'bs_entry' => $this->input->post('bs_entry'),
        'bs_list' => $this->input->post('bs_list'),
        'bs_edit' => $this->input->post('bs_edit'),
        'bs_delete' => $this->input->post('bs_delete'),
        'gi_entry' => $this->input->post('gi_entry'),
        'gi_list' => $this->input->post('gi_list'),
        'gi_edit' => $this->input->post('gi_edit'),
        'gi_delete' => $this->input->post('gi_delete'),
        'si_entry' => $this->input->post('si_entry'),
        'si_list' => $this->input->post('si_list'),
        'si_edit' => $this->input->post('si_edit'),
        'si_delete' => $this->input->post('si_delete'),
        'tme_entry' => $this->input->post('tme_entry'),
        'tme_list' => $this->input->post('tme_list'),
        'tme_edit' => $this->input->post('tme_edit'),
        'tme_delete' => $this->input->post('tme_delete'),
        'model_entry' => $this->input->post('model_entry'),
        'model_list' => $this->input->post('model_list'),
        'model_edit' => $this->input->post('model_edit'),
        'model_delete' => $this->input->post('model_delete'),
        'zone_entry' => $this->input->post('zone_entry'),
        'zone_list' => $this->input->post('zone_list'),
        'zone_edit' => $this->input->post('zone_edit'),
        'zone_delete' => $this->input->post('zone_delete'),
        'district_entry' => $this->input->post('district_entry'),
        'district_list' => $this->input->post('district_list'),
        'district_edit' => $this->input->post('district_edit'),
        'district_delete' => $this->input->post('district_delete'),
        'area_entry' => $this->input->post('area_entry'),
        'area_list' => $this->input->post('area_list'),
        'area_edit' => $this->input->post('area_edit'),
        'area_delete' => $this->input->post('area_delete'),
        'outlet_entry' => $this->input->post('outlet_entry'),
        'outlet_list' => $this->input->post('outlet_list'),
        'outlet_edit' => $this->input->post('outlet_edit'),
        'outlet_delete' => $this->input->post('outlet_delete'),
        'si_report' => $this->input->post('si_report'),
        'gi_report' => $this->input->post('gi_report'),
        'so_report' => $this->input->post('so_report'),
        'inv_report' => $this->input->post('inv_report'),
        'user_entry' => $this->input->post('user_entry'),
        'user_list' => $this->input->post('user_list'),
        'user_edit' => $this->input->post('user_edit'),
        'user_delete' => $this->input->post('user_delete'),
        'user_privilege' => $this->input->post('user_privilege'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('ref_user', $this->input->post('ref_user'));
    $this->db->update($this->tablename, $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete($this->tablename);
  }

}