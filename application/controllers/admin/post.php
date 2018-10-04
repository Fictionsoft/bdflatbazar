<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Post extends CI_Controller {

  function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('', 'refresh');
    }
  }

  function index() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'post';
    $data['content'] = 'admin/post/home';
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function post_list() {
    $data['title'] = 'Welcome to Admin Panel';
    $data['menu'] = 'post';
    $data['content'] = 'admin/post/list';
    $data['posts'] = $this->MPosts->get_all();
    //$data['privileges'] = $this->MUser_privileges->get_by_ref_user($this->session->userdata('user_id'));
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function save($id = NULL) {
    if ($this->input->post()) {
      if ($this->input->post('id')) {
        $id = $this->input->post('id');
        $this->MPosts->update($id);
      } else {
        $id = $this->MPosts->create();
      }
      /*
      if ($_FILES['picture']['name']) {
        $config['file_name'] = $id;
        $config['upload_path'] = './upload/post/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['max_size'] = '5120';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("logo")) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $filedata = $this->upload->data();
          $this->MPosts->add_logo($filedata['file_name'], $id);

          $con['image_library'] = 'gd2';
          $con['source_image'] = './upload/post/' . $filedata['file_name'];

          $con['new_image'] = './upload/post/' . mythumb($filedata['file_name']);
          $con['maintain_ratio'] = TRUE;
          $con['width'] = 300;
          $con['height'] = 200;
          $this->load->library('image_lib', $con);
          $this->image_lib->resize();
          $this->image_lib->clear();
        }
      }
       * 
       */
      $this->session->set_flashdata('message', 'Post Requirement Saved.');
      redirect('admin/post/post_list', 'refresh');
    } else {
      $data['title'] = 'Welcome to Admin Panel';
      $data['menu'] = 'post';
      $data['content'] = 'admin/post/save';
      $data['post'] = $this->MPosts->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function delete() {
    $this->MPosts->delete($this->input->post('id'));
    echo "<h1>Post deleted.</h1>";
  }

}
