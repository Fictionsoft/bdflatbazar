<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Client extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  function index() {
    $data['title'] = 'Welcome to Sales Distribution System.';
    $data['menu'] = 'client';
    $data['content'] = 'admin/user/home';
    $data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }
  
  function user_list() {
    $data['title'] = 'Welcome to Sales Distribution System.';
    $data['menu'] = 'user';
    $data['content'] = 'admin/user/list';
    $data['users'] = $this->MUsers->get_all();
    $data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function add() {
    if ($this->input->post('email')) {
      $this->MUsers->create();
      $this->session->set_flashdata('message', 'User created');
      redirect('user/user_list', 'refresh');
    } else {
      $data['title'] = 'Welcome to Sales Distribution System.';
      $data['menu'] = 'user';
      $data['content'] = 'admin/user/entry';
      $data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function edit($id = NULL) {
    if ($this->input->post('email')) {
      $this->MUsers->update($this->input->post('id'));
      $this->session->set_flashdata('message', 'User updated');
      redirect('user/user_list', 'refresh');
    } else {
      $data['title'] = 'Welcome to Sales Distribution System.';
      $data['menu'] = 'user';
      $data['content'] = 'admin/user/edit';
      $data['user'] = $this->MUsers->get_by_id($id);
      $data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function delete() {
    $this->MUsers->delete($this->input->post('id'));
    echo "<h1>User deleted.</h1>";
  }

  function privileges($id = NULL) {
    if ($this->input->post()) {
      if ($this->MUser_privileges->get_by_ref_user($this->input->post('ref_user'))) {
        $this->MUser_privileges->update();
        redirect('user/user_list', 'refresh');
      } else {
        $this->MUser_privileges->create();
        redirect('user/user_list', 'refresh');
      }
    } else {
      $data['title'] = 'Welcome to Sales Distribution System.';
      $data['content'] = 'admin/user/privileges';
      $data['menu'] = 'user';
      $data['user'] = $this->MUsers->get_by_id($this->session->userdata('user_id'));
      $data['ref_user'] = $this->MUsers->get_by_id($id);
      $data['privilege'] = $this->MUser_privileges->get_by_ref_user($id);
      $data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

}