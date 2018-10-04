<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Settings extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  function index() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'settings';
    $data['content'] = 'admin/settings/district_list';
    $data['districts'] = $this->MDistricts->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function district_save($id = NULL) {
    if ($this->input->post()) {
      $this->MDistricts->create();
      $this->session->set_flashdata('message', 'District save');
      redirect('admin/settings', 'refresh');
    } else {
      if ($id) {
        $district = $this->MDistrict->get_by_id($id);
      } else {
        $district = array();
      }
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'settings';
      $data['content'] = 'admin/settings/district_save';
      //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function district_delete() {
    $this->MDistricts->delete($this->input->post('id'));
    echo "<h1>District deleted.</h1>";
  }

  function area_list() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'settings';
    $data['content'] = 'admin/settings/area_list';
    $data['areas'] = $this->MAreas->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function area_save($id = NULL) {
    if ($this->input->post()) {
      $this->MAreas->create();
      $this->session->set_flashdata('message', 'District save');
      redirect('admin/settings/area_list', 'refresh');
    } else {
      if ($id) {
        $district = $this->MAreas->get_by_id($id);
      } else {
        $district = array();
      }
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'settings';
      $data['content'] = 'admin/settings/area_save';
      $data['districts'] = $this->MDistricts->get_all();
      //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function area_delete() {
    $this->MAreas->delete($this->input->post('id'));
    echo "<h1>Area deleted.</h1>";
  }
  
  

}