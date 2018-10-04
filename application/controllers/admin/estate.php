<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Estate extends CI_Controller {

  function __construct() {
    parent::__construct();
    //$this->output->enable_profiler(TRUE);
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  public function index($type = NULL) {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'estate';
    $data['content'] = 'admin/offer/list';
    $data['offers'] = $this->MOffers->get_all();
    $this->load->view('admin/dashboard', $data);
  }

  public function save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id') != "") {
        $id = $this->input->post('id');
        $this->MOffers->update($id);
        $offer = $this->MOffers->get_by_id($id);
        if ($_FILES['picture']['name']) {
          $path = './uploads/offers/' . $offer['picture'];
          unlink($path);
        }
      } else {
        $id = $this->MOffers->create();
      }

      if ($_FILES['picture']['name']) {

        $config['file_name'] = $id . '_pview';
        $config['upload_path'] = './uploads/offers/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("picture")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata1 = $this->upload->data();
          $this->MOffers->add_pic('picture', $filedata1['file_name'], $id);
        }
      }
      redirect('admin/offer', 'refresh');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'estate';
      $data['content'] = 'admin/offer/save';
      $data['offer'] = $this->MOffers->get_by_id($id);
      $this->load->view('admin/dashboard', $data);
    }
  }

  public function delete($id) {
    $this->MOffers->delete($id);
    redirect('admin/offer', 'refresh');
  }

}
