<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Rent extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  public function index($type = NULL) {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'rents';
    $data['content'] = 'admin/rent/list';
    if ($type == "hostel") {
      $data['rents'] = $this->MHostel_rents->get_all();
    } elseif ($type == "mess") {
      $data['rents'] = $this->MMess_rents->get_all();
    } elseif ($type == "sublet") {
      $data['rents'] = $this->MSublet_rents->get_all();
    } elseif ($type == "wearhouse") {
      $data['rents'] = $this->MWearhouse_rents->get_all();
    }
    $data['type'] = $type;
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->view('admin/dashboard', $data);
  }

  public function save($type = NULL, $id = NULL) {
    if ($this->input->post()) {
      //$this->output->enable_profiler(TRUE);
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MRents->update($id);
        $rent = $this->MRents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/rent/' . $rent['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/rent/' . $rent['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MRents->create();
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/commercial/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MRents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MRents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/rent');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'rents';
      if ($type == "hostel") {
        $data['rents'] = $this->MHostel_rents->get_by_id($id);
        $data['content'] = 'admin/apartment/rent_save';
      } elseif ($type == "mess") {
        $data['rents'] = $this->MMess_rents->get_by_id($id);
      } elseif ($type == "sublet") {
        $data['rents'] = $this->MSublet_rents->get_by_id($id);
      } elseif ($type == "wearhouse") {
        $data['rents'] = $this->MWearhouse_rents->get_by_id($id);
      }
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  public function delete($type, $id) {
    if ($type == "hostel") {
      $data['rents'] = $this->MHostel_rents->delete($id);
    } elseif ($type == "mess") {
      $data['rents'] = $this->MMess_rents->delete($id);
    } elseif ($type == "sublet") {
      $data['rents'] = $this->MSublet_rents->delete($id);
    } elseif ($type == "wearhouse") {
      $data['rents'] = $this->MWearhouse_rents->delete($id);
    }
    
    redirect('admin/rent/index/' . $type, 'refresh');
  }

  function featured($type = NULL, $id = NULL) {
    $i = 0;
    if ($type == "hostel") {
      $rent = $this->MHostel_rents->get_by_id($id);
    } elseif ($type == "mess") {
      $rent = $this->MMess_rents->get_by_id($id);
    } elseif ($type == "sublet") {
      $rent = $this->MSublet_rents->get_by_id($id);
    } elseif ($type == "wearhouse") {
      $rent = $this->MWearhouse_rents->get_by_id($id);
    }
    if ($rent['featured'] == 1) {
      $i = 0;
    } else {
      $i = 1;
    }
    if ($type == "hostel") {
      $rent = $this->MHostel_rents->toggle($i, $id);
    } elseif ($type == "mess") {
      $rent = $this->MMess_rents->toggle($i, $id);
    } elseif ($type == "sublet") {
      $rent = $this->MSublet_rents->toggle($i, $id);
    } elseif ($type == "wearhouse") {
      $rent = $this->MWearhouse_rents->toggle($i, $id);
    }
    redirect('admin/rent/index/' . $type, 'refresh');
  }

}
