<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Land extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  public function index() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'lands';
    $data['content'] = 'admin/land/sale_list';
    $data['lands'] = $this->MLand_sales->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  public function sale_save($id = NULL) {
    if ($this->input->post()) {
      //$this->output->enable_profiler(TRUE);
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MLand_sales->update($id);
        $apt = $this->MLand_sales->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/land_sale/' . $apt['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/land_sale/' . $apt['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MLands->create();
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/land_sale/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MLands->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/land_sale/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MLand_sales->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/land');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'lands';
      $data['content'] = 'admin/land/sale_save';
      $data['land'] = $this->MLand_sales->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  public function sale_delete() {
    $this->MLand_sales->delete($this->input->post('id'));
    echo "<h1>Land deleted.</h1>";
  }
  
  public function sale_featured($id = NULL) {
    $land = $this->MLand_sales->get_by_id($id);
    if ($land['featured'] == 1) {
      $this->MLand_sales->toggle(0, $id);
    } else {
      $this->MLand_sales->toggle(1, $id);
    }
    redirect('admin/land');
  }
  
  public function rent() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'lands';
    $data['content'] = 'admin/land/rent_list';
    $data['lands'] = $this->MLand_rents->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }
  
  public function rent_save($id = NULL) {
    if ($this->input->post()) {
      //$this->output->enable_profiler(TRUE);
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MLands->update($id);
        $apt = $this->MLands->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/land/' . $apt['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/land/' . $apt['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MLands->create();
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/land/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MLands->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/land/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MLands->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/land');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'lands';
      $data['content'] = 'admin/land/save';
      $data['land'] = $this->MLands->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  public function rent_delete() {
    $this->MLands->delete($this->input->post('id'));
    echo "<h1>Land deleted.</h1>";
  }
  
  public function rent_featured($id = NULL) {
    $land = $this->MLand_sales->get_by_id($id);
    if ($land['featured'] == 1) {
      $this->MLand_sales->toggle(0, $id);
    } else {
      $this->MLand_sales->toggle(1, $id);
    }
    redirect('admin/land');
  }

}
