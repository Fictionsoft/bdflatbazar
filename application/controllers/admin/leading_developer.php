<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Leading_developer extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  function index() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'leading_developers';
    $data['content'] = 'admin/leading_developer/list';
    $data['developers'] = $this->MLeading_developers->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->view('admin/dashboard', $data);
  }

  function devs_featured($id = NULL) {
    $devs = $this->MLeading_developers->get_by_id($id);
    if ($devs['featured'] == 1) {
      $this->MLeading_developers->toggle(0, $id);
    } else {
      $this->MLeading_developers->toggle(1, $id);
    }
    redirect('admin/leading_developer');
  }
  
  function save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id')) {
        $id = $this->input->post('id');
        $this->MLeading_developers->update($id);
        if ($_FILES['logo']['name']) {
          $leading = $this->MLeading_developers->get_by_id($id);
          $path = './uploads/leading/' . $leading['logo'];
          unlink($path);
        }
        if ($_FILES['banner']['name']) {
          $leading = $this->MLeading_developers->get_by_id($id);
          $path = './uploads/leading/' . $leading['banner'];
          unlink($path);
        }
      } else {
        $id = $this->MLeading_developers->create();
      }

      if ($_FILES['logo']['name']) {
        $logo = $id . '_logo';
        $config['file_name'] = $logo;
        $config['upload_path'] = './uploads/leading/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("logo")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MLeading_developers->add_pic('logo', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['banner']['name']) {
        $banner = $id . '_banner';
        $config['file_name'] = $banner;
        $config['upload_path'] = './uploads/leading/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("banner")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MLeading_developers->add_pic('banner', $filedata2['file_name'], $id);
        }
      }
      $this->session->set_flashdata('message', 'Leading Developer Saved.');
      redirect('admin/leading_developer', 'refresh');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'leading_developers';
      $data['content'] = 'admin/leading_developer/save';
      $data['leading'] = $this->MLeading_developers->get_by_id($id);
      $this->load->view('admin/dashboard', $data);
    }
  }
  
  function delete() {
    $this->MLeading_developers->delete($this->input->post('id'));
    echo "<h1>Leading Developer deleted.</h1>";
  }

  function add_page($developer_id) {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'leading_developers';
    $data['content'] = 'admin/leading_developer/add_page';
    $data['developer_id'] = $developer_id;
    $data['apts'] = $this->MLeading_apartments->get_all($developer_id);
    $data['lands'] = $this->MLeading_lands->get_all($developer_id);
    $data['commercials'] = $this->MLeading_commercials->get_all($developer_id);
    $this->load->view('admin/dashboard', $data);
  }
  
  function apt_featured($developer_id, $id = NULL) {
    $apt = $this->MLeading_apartments->get_by_id($id);
    if ($apt['featured'] == 1) {
      $this->MLeading_apartments->toggle(0, $id);
    } else {
      $this->MLeading_apartments->toggle(1, $id);
    }
	redirect('admin/leading_developer/add_page/' . $developer_id);
  }
  function apt_save($developer_id, $id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') == "") {
        $id = $this->MLeading_apartments->create($this->session->userdata('user_id'));
      } else {
        $id = $this->input->post('id');
        $this->MLeading_apartments->update($id);
        $apt = $this->MLeading_apartments->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          if ($apt['perspective_view']) {
            $path = './uploads/leading/apts/' . $apt['perspective_view'];
            unlink($path);
          }
        }
        if ($_FILES['floor_plan']['name']) {
          if ($apt['floor_plan']) {
            $path = './uploads/leading/apts/' . $apt['floor_plan'];
            unlink($path);
          }
        }
      }
      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/leading/apts/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MLeading_apartments->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/leading/apts/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MLeading_apartments->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/leading_developer/add_page/' . $developer_id, 'refresh');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'leading_developers';
      $data['developer_id'] = $developer_id;
      $data['apt'] = $this->MLeading_apartments->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);
      $data['content'] = 'admin/leading_developer/apt_save';
      $this->load->view('admin/dashboard', $data);
    }
  }

  function apt_delete($id) {
    $apt = $this->MLeading_apartments->get_by_id($id);
    if ($apt['perspective_view']) {
      $path = './uploads/leading/apts/' . $apt['perspective_view'];
      unlink($path);
    }
    if ($apt['floor_plan']) {
      $path = './uploads/leading/apts/' . $apt['floor_plan'];
      unlink($path);
    }
    $this->MLeading_apartments->delete($id);
    redirect('admin/leading_developer/add_page', 'refresh');
  }

  function land_featured($developer_id, $id = NULL) {
    $land = $this->MLeading_lands->get_by_id($id);
    if ($land['featured'] == 1) {
      $this->MLeading_lands->toggle(0, $id);
    } else {
      $this->MLeading_lands->toggle(1, $id);
    }
	redirect('admin/leading_developer/add_page/' . $developer_id);
  }
  function land_save($developer_id, $id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') == "") {
        $id = $this->MLeading_lands->create($this->session->userdata('user_id'));
      } else {
        $id = $this->input->post('id');
        $this->MLeading_lands->update($id);
        $apt = $this->MLeading_lands->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          if ($apt['perspective_view']) {
            $path = './uploads/leading/lands/' . $apt['perspective_view'];
            unlink($path);
          }
        }
        if ($_FILES['floor_plan']['name']) {
          if ($apt['floor_plan']) {
            $path = './uploads/leading/lands/' . $apt['floor_plan'];
            unlink($path);
          }
        }
      }
      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/leading/lands/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MLeading_lands->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/leading/lands/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MLeading_lands->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/leading_developer/add_page/'.$developer_id, 'refresh');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'leading_developers';
      $data['developer_id'] = $developer_id;
      $data['content'] = 'admin/leading_developer/land_save';
      $data['land'] = $this->MLeading_lands->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);
      $this->load->view('admin/dashboard', $data);
    }
  }
  
  function land_delete($id) {
    $land = $this->MLeading_lands->get_by_id($id);
    if ($land['perspective_view']) {
      $path = './uploads/leading/lands/' . $land['perspective_view'];
      unlink($path);
    }
    if ($land['floor_plan']) {
      $path = './uploads/leading/lands/' . $land['floor_plan'];
      unlink($path);
    }
    $this->MLeading_lands->delete($id);
    redirect('admin/leading_developer/add_page', 'refresh');
  }

  function comm_featured($developer_id, $id = NULL) {
    $commercial = $this->MLeading_commercials->get_by_id($id);
    if ($commercial['featured'] == 1) {
      $this->MLeading_commercials->toggle(0, $id);
    } else {
      $this->MLeading_commercials->toggle(1, $id);
    }
	redirect('admin/leading_developer/add_page/' . $developer_id);
  }
  function commercial_save($developer_id, $id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') == "") {
        $id = $this->MLeading_commercials->create($this->session->userdata('user_id'));
      } else {
        $id = $this->input->post('id');
        $this->MLeading_commercials->update($id);
        $commercial = $this->MLeading_commercials->get_by_id($id);
        if ($_FILES['perspective_view']['name']) {
          if ($commercial['perspective_view']) {
            $path = './uploads/leading/commercials/' . $commercial['perspective_view'];
            unlink($path);
          }
        }
        if ($_FILES['floor_plan']['name']) {
          if ($commercial['floor_plan']) {
            $path = './uploads/leading/commercials/' . $commercial['floor_plan'];
            unlink($path);
          }
        }
      }
      if ($_FILES['perspective_view']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/leading/commercials/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("perspective_view")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MLeading_commercials->add_pic('perspective_view', $filedata1['file_name'], $id);
        }
      }
      if ($_FILES['floor_plan']['name']) {
        $config['file_name'] = $id . '_fplan';
        $config['upload_path'] = './uploads/leading/commercials/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("floor_plan")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata2 = $this->upload->data();
          $this->MLeading_commercials->add_pic('floor_plan', $filedata2['file_name'], $id);
        }
      }
      redirect('admin/leading_developer/add_page/'.$developer_id, 'refresh');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'leading_developers';
      $data['developer_id'] = $developer_id;
      $data['content'] = 'admin/leading_developer/commercial_save';
      $data['commercial'] = $this->MLeading_commercials->get_by_id($id);
      $data['districts'] = $this->MDistricts->get_all();
      $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);
      $this->load->view('admin/dashboard', $data);
    }
  }
  
  function commercial_delete($id) {
    $commercial = $this->MLeading_commercials->get_by_id($id);
    if ($commercial['perspective_view']) {
      $path = './uploads/leading/commercials/' . $commercial['perspective_view'];
      unlink($path);
    }
    if ($commercial['floor_plan']) {
      $path = './uploads/leading/commercials/' . $commercial['floor_plan'];
      unlink($path);
    }
    $this->MLeading_commercials->delete($id);
    redirect('admin/leading_developer/add_page', 'refresh');
  }

}
