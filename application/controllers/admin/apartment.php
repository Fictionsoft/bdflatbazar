<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Apartment extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  function index() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'apartments';
    $data['content'] = 'admin/apartment/sale_list';
    $data['apartments'] = $this->MApartment_sales->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  public function sale_save($id = NULL) {
    if ($this->input->post()) {
      //$this->output->enable_profiler(TRUE);
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MApartment_sales->update($id);
        $apt = $this->MApartment_sales->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/apt_sale/' . $apt['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/apt_sale/' . $apt['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MApartment_sales->create($this->session->userdata('user_id'));
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/apt_sale/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MApartment_sales->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/apt_sale/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MApartment_sales->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/apartment');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'apartments';
      $data['content'] = 'admin/apartment/sale_save';
      $data['apt'] = $this->MApartment_sales->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function sale_delete() {
    $apt = $this->MApartment_sales->get_by_id($this->input->post('id'));
    if ($apt['perspective_view']) {
      $path = './uploads/apt_sale/' . $apt['perspective_view'];
      unlink($path);
    }
    if ($apt['floor_plan']) {
      $path = './uploads/apt_sale/' . $apt['floor_plan'];
      unlink($path);
    }
    $this->MApartment_sales->delete($this->input->post('id'));
    echo "<h1>Apartment deleted.</h1>";
  }

  function sale_featured($id = NULL) {
    $apt = $this->MApartment_sales->get_by_id($id);
    if ($apt['featured'] == 1) {
      $this->MApartment_sales->toggle(0, $id);
    } else {
      $this->MApartment_sales->toggle(1, $id);
    }
    redirect('admin/apartment');
  }
  
  function rent() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'apartments';
    $data['content'] = 'admin/apartment/rent_list';
    $data['apartments'] = $this->MApartment_rents->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }
  
  public function rent_save($id = NULL) {
    if ($this->input->post()) {
      //$this->output->enable_profiler(TRUE);
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MApartment_rents->update($id);
        $apt = $this->MApartment_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/apt_rent/' . $apt['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/apt_rent/' . $apt['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MApartment_rents->create($this->session->userdata('user_id'));
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/apt_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MApartment_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/apt_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MApartment_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/apartment/rent');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'apartments';
      $data['content'] = 'admin/apartment/rent_save';
      $data['apt'] = $this->MApartment_rents->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function rent_delete() {
    $apt = $this->MApartment_rents->get_by_id($this->input->post('id'));
    if ($apt['perspective_view']) {
      $path = './uploads/apt_sale/' . $apt['perspective_view'];
      unlink($path);
    }
    if ($apt['floor_plan']) {
      $path = './uploads/apt_sale/' . $apt['floor_plan'];
      unlink($path);
    }
    $this->MApartment_rents->delete($this->input->post('id'));
    echo "<h1>Apartment deleted.</h1>";
  }

  function rent_featured($id = NULL) {
    $apt = $this->MApartment_rents->get_by_id($id);
    if ($apt['featured'] == 1) {
      $this->MApartment_rents->toggle(0, $id);
    } else {
      $this->MApartment_rents->toggle(1, $id);
    }
    redirect('admin/apartment');
  }

}