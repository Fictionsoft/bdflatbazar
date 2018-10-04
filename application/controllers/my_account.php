<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class My_account extends CI_Controller {

  public function __construct() {
    parent::__construct();
    //$this->output->enable_profiler(TRUE);
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  public function index() {
    if ($this->input->post()) {
      $this->MProfiles->update($this->session->userdata('user_id'));
      if($this->input->post('password')){
        $this->MUsers->update_password($this->session->userdata('user_id'));
      }
      redirect('my_account', 'refresh');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'home';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_profile';
      
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['profile'] = $this->MProfiles->get_by_user_id($this->session->userdata('user_id'));
      $this->load->vars($data);
      $this->load->view('template');
    }
  }

  public function property() {
    $data = array();
    $data['title'] = 'Welcome Flatbazar.';
    $data['menu'] = 'home';
    $data['leftbar'] = 'leftbar_my_property';
    $data['content'] = 'my_property';
    $data['latest'] = $this->MPosts->get_latest(5);
    $user_id = $this->session->userdata('user_id');
    $data['apt_sales'] = $this->MApartment_sales->get_all($user_id);
    $data['apt_rents'] = $this->MApartment_rents->get_all($user_id);
    $data['land_sales'] = $this->MLand_sales->get_all($user_id);
    $data['land_rents'] = $this->MLand_rents->get_all($user_id);
    $data['rents'] = $this->MRents->get_all($user_id);
    $data['commercial_sales'] = $this->MCommercial_sales->get_all($user_id);
    $data['commercial_rents'] = $this->MCommercial_rents->get_all($user_id);
    $data['hostel_rents'] = $this->MHostel_rents->get_all($user_id);
    $data['mess_rents'] = $this->MMess_rents->get_all($user_id);
    $data['sublet_rents'] = $this->MSublet_rents->get_all($user_id);
    $data['wearhouse_rents'] = $this->MWearhouse_rents->get_all($user_id);
    $this->load->vars($data);
    $this->load->view('template');
  }

  public function apt_sale_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MApartment_sales->update($id);
        $apt = $this->MApartment_sales->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          if ($apt['perspective_view']) {
            $path = './uploads/apt_sale/' . $apt['perspective_view'];
            unlink($path);
          }
        }
        if ($_FILES['floor_plan']['name']) {
          if ($apt['floor_plan']) {
            $path = './uploads/apt_sale/' . $apt['floor_plan'];
            unlink($path);
          }
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
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'apt_sale';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_apt_sale_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['apt'] = $this->MApartment_sales->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);
      $this->load->view('template', $data);
    }
  }

  public function apt_sale_delete($id) {
    $apt = $this->MApartment_sales->get_by_id($id);
    if ($apt['perspective_view']) {
      $path = './uploads/apt_sale/' . $apt['perspective_view'];
      unlink($path);
    }
    if ($apt['floor_plan']) {
      $path = './uploads/apt_sale/' . $apt['floor_plan'];
      unlink($path);
    }
    $this->MApartment_sales->delete($id);
    redirect('my_account/property');
  }

  public function apt_rent_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MApartment_rents->update($id);
        $apt = $this->MApartment_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          if ($apt['perspective_view']) {
            $path = './uploads/apt_rent/' . $apt['perspective_view'];
            unlink($path);
          }
        }
        if ($_FILES['floor_plan']['name']) {
          if ($apt['floor_plan']) {
            $path = './uploads/apt_rent/' . $apt['floor_plan'];
            unlink($path);
          }
        }
      } else {
        $id = $this->MApartment_rents->create($this->session->userdata('user_id'));
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
          $this->MApartment_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
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
          $this->MApartment_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'apt_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_apt_rent_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['apt'] = $this->MApartment_rents->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);
      $this->load->view('template', $data);
    }
  }

  public function apt_rent_delete($id) {
    $apt = $this->MApartment_rents->get_by_id($id);
    if ($apt['perspective_view']) {
      $path = './uploads/apt_rent/' . $apt['perspective_view'];
      unlink($path);
    }
    if ($apt['floor_plan']) {
      $path = './uploads/apt_rent/' . $apt['floor_plan'];
      unlink($path);
    }
    $this->MApartment_rents->delete($id);
    redirect('my_account/property');
  }

  public function land_sale_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MLand_sales->update($id);
        $land = $this->MLand_sales->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          if ($land['perspective_view']) {
            $pfile = './uploads/land_sale/' . $land['perspective_view'];
            unlink($pfile);
          }
        }
        if ($_FILES['floor_plan']['name']) {
          if ($land['floor_plan']) {
            $ffile = './uploads/land_sale/' . $land['floor_plan'];
            unlink($ffile);
          }
        }
      } else {
        $id = $this->MLand_sales->create($this->session->userdata('user_id'));
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
          $this->MLand_sales->add_pic('perspective_view', $filedata1['file_name'], $id);
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
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'land_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_land_sale_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['land'] = $this->MLand_sales->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function land_sale_delete($id) {
    $land = $this->MLand_sales->get_by_id($id);
    if ($land['perspective_view']) {
      $pfile = './uploads/land_sale/' . $land['perspective_view'];
      unlink($pfile);
    }
    if ($land['floor_plan']) {
      $ffile = './uploads/land_sale/' . $land['floor_plan'];
      unlink($ffile);
    }
    $this->MLand_sales->delete($id);
    redirect('my_account/property');
  }

  public function land_rent_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MLand_rents->update($id);
        $land = $this->MLand_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          if ($land['perspective_view']) {
            $pfile = './uploads/land_rent/' . $land['perspective_view'];
            unlink($pfile);
          }
        }
        if ($_FILES['floor_plan']['name']) {
          if ($land['floor_plan']) {
            $ffile = './uploads/land_rent/' . $land['floor_plan'];
            unlink($ffile);
          }
        }
      } else {
        $id = $this->MLand_rents->create($this->session->userdata('user_id'));
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/land_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MLand_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/land_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MLand_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'land_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_land_rent_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['land'] = $this->MLand_rents->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function land_rent_delete($id) {
    $land = $this->MLand_rents->get_by_id($id);
    if ($land['perspective_view']) {
      $pfile = './uploads/land_rent/' . $land['perspective_view'];
      unlink($pfile);
    }
    if ($land['floor_plan']) {
      $ffile = './uploads/land_rent/' . $land['floor_plan'];
      unlink($ffile);
    }
    $this->MLand_rents->delete($id);
    redirect('my_account/property');
  }

  public function commercial_sale_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MCommercial_sales->update($id);
        $commercial = $this->MCommercial_sales->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/comm_sale/' . $commercial['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/comm_sale/' . $commercial['floor_plan'];
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
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'commercial_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_commercial_sale_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['commercial'] = $this->MCommercial_sales->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function commercial_sale_delete($id) {
    $rent = $this->MCommercial_sales->get_by_id($id);
    if ($rent['perspective_view']) {
      $pfile = './uploads/comm_sale/' . $rent['perspective_view'];
      unlink($pfile);
    }
    if ($rent['floor_plan']) {
      $ffile = './uploads/comm_sale/' . $rent['floor_plan'];
      unlink($ffile);
    }
    $this->MCommercial_sales->delete($id);
    redirect('my_account/property');
  }

  public function commercial_rent_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MCommercial_rents->update($id);
        $commercial = $this->MCommercial_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/comm_rent/' . $commercial['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/comm_rent/' . $commercial['floor_plan'];
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
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'commercial_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_commercial_rent_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['commercial'] = $this->MCommercial_rents->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function commercial_rent_delete($id) {
    $rent = $this->MCommercial_rents->get_by_id($id);
    if ($rent['perspective_view']) {
      $pfile = './uploads/comm_rent/' . $rent['perspective_view'];
      unlink($pfile);
    }
    if ($rent['floor_plan']) {
      $ffile = './uploads/comm_rent/' . $rent['floor_plan'];
      unlink($ffile);
    }
    $this->MCommercial_rents->delete($id);
    redirect('my_account/property');
  }
  
  public function hostel_rent_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MHostel_rents->update($id);
        $hostel = $this->MHostel_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/hostel_rent/' . $hostel['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/hostel_rent/' . $hostel['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MHostel_rents->create($this->session->userdata('user_id'));
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/hostel_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MHostel_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/hostel_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MHostel_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'commercial_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_hostel_rent_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['hostel'] = $this->MHostel_rents->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function hostel_rent_delete($id) {
    $rent = $this->MHostel_rents->get_by_id($id);
    if ($rent['perspective_view']) {
      $pfile = './uploads/hostel_rent/' . $rent['perspective_view'];
      unlink($pfile);
    }
    if ($rent['floor_plan']) {
      $ffile = './uploads/hostel_rent/' . $rent['floor_plan'];
      unlink($ffile);
    }
    $this->MHostel_rents->delete($id);
    redirect('my_account/property');
  }

  public function mess_rent_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MMess_rents->update($id);
        $mess = $this->MMess_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/mess_rent/' . $mess['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/mess_rent/' . $mess['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MMess_rents->create($this->session->userdata('user_id'));
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/mess_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MMess_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/mess_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MMess_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'commercial_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_mess_rent_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['mess'] = $this->MMess_rents->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function mess_rent_delete($id) {
    $rent = $this->MMess_rents->get_by_id($id);
    if ($rent['perspective_view']) {
      $pfile = './uploads/mess_rent/' . $rent['perspective_view'];
      unlink($pfile);
    }
    if ($rent['floor_plan']) {
      $ffile = './uploads/mess_rent/' . $rent['floor_plan'];
      unlink($ffile);
    }
    $this->MMess_rents->delete($id);
    redirect('my_account/property');
  }
  
  public function sublet_rent_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MSublet_rents->update($id);
        $sublet = $this->MSublet_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/sublet_rent/' . $sublet['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/sublet_rent/' . $sublet['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MSublet_rents->create($this->session->userdata('user_id'));
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/sublet_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MSublet_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/sublet_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MSublet_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'commercial_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_sublet_rent_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['sublet'] = $this->MSublet_rents->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function sublet_rent_delete($id) {
    $rent = $this->MCommercial_rents->get_by_id($id);
    if ($rent['perspective_view']) {
      $pfile = './uploads/sublet_rent/' . $rent['perspective_view'];
      unlink($pfile);
    }
    if ($rent['floor_plan']) {
      $ffile = './uploads/sublet_rent/' . $rent['floor_plan'];
      unlink($ffile);
    }
    $this->MCommercial_rents->delete($id);
    redirect('my_account/property');
  }
  
  public function wearhouse_rent_save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MWearhouse_rents->update($id);
        $wearhouse = $this->MWearhouse_rents->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          $path = './uploads/wearhouse_rent/' . $wearhouse['perspective_view'];
          unlink($path);
        }
        if ($_FILES['floor_plan']['name']) {
          $path = './uploads/wearhouse_rent/' . $wearhouse['floor_plan'];
          unlink($path);
        }
      } else {
        $id = $this->MWearhouse_rents->create($this->session->userdata('user_id'));
      }

      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/wearhouse_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MWearhouse_rents->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/wearhouse_rent/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MWearhouse_rents->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('my_account/property');
    } else {
      $data = array();
      $data['title'] = 'Welcome Flatbazar.';
      $data['menu'] = 'commercial_rent';
      $data['leftbar'] = 'leftbar_general';
      $data['content'] = 'my_wearhouse_rent_save';
      $data['latest'] = $this->MPosts->get_latest(5);
      $data['wearhouse'] = $this->MWearhouse_rents->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all();
      $this->load->view('template', $data);
    }
  }

  public function wearhouse_rent_delete($id) {
    $rent = $this->MWearhouse_rents->get_by_id($id);
    if ($rent['perspective_view']) {
      $pfile = './uploads/wearhouse_rent/' . $rent['perspective_view'];
      unlink($pfile);
    }
    if ($rent['floor_plan']) {
      $ffile = './uploads/wearhouse_rent/' . $rent['floor_plan'];
      unlink($ffile);
    }
    $this->MWearhouse_rents->delete($id);
    redirect('my_account/property');
  }

}
