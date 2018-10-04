<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Commercial extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  public function index() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'commercials';
    $data['content'] = 'admin/commercial/sale_list';
    $data['commercials'] = $this->MCommercial_sales->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }
  
  public function sale_save($id = NULL) {
    if ($this->input->post()) {
      //$this->output->enable_profiler(TRUE);
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MCommercial_sales->update($id);
        $apt = $this->MCommercial_sales->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/comm_sale/' . $apt['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/comm_sale/' . $apt['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MCommercial_sales->create();
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/comm_sale/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MCommercial_sales->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/comm_sale/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MCommercial_sales->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/commercial');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'commercials';
      $data['content'] = 'admin/commercial/sale_save';
      $data['commercial'] = $this->MCommercial_sales->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  public function sale_delete() {
    $this->MCommercials->delete($this->input->post('id'));
    echo "<h1>Commercial deleted.</h1>";
  }
  
  public function sale_featured($id = NULL) {
    $land = $this->MCommercial_sales->get_by_id($id);
    if ($land['featured'] == 1) {
      $this->MCommercial_sales->toggle(0, $id);
    } else {
      $this->MCommercial_sales->toggle(1, $id);
    }
    redirect('admin/commercial');
  }
  
  public function rent() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'commercials';
    $data['content'] = 'admin/commercial/rent_list';
    $data['commercials'] = $this->MCommercial_rents->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }
  
  public function rent_save($id = NULL) {
    if ($this->input->post()) {
      //$this->output->enable_profiler(TRUE);
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MCommercial_rents->update($id);
        $apt = $this->MCommercial_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/comm_rent/' . $apt['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/comm_rent/' . $apt['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MCommercial_rents->create();
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/comm_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MCommercial_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/comm_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MCommercial_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/commercial/rent');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'commercials';
      $data['content'] = 'admin/commercial/rent_save';
      $data['commercial'] = $this->MCommercial_rents->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function rent_delete() {
    $this->MCommercial_rents->delete($this->input->post('id'));
    echo "<h1>Commercial Rent deleted.</h1>";
  }

}
