<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index() {
    if ($this->input->post('email')) {
      $this->form_validation->set_rules('email', 'Username', 'trim|required|valid_email|xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() == TRUE) {
        $email = $this->input->post('email');
        $pw = substr(do_hash($this->input->post('password')), 0, 16);
        $this->MUsers->verify($email, $pw);

        if ($this->session->userdata('user_type') == "admin") {
          redirect('admin/post', 'refresh');
        } else if ($this->session->userdata('user_type') == "user") {
          redirect('', 'refresh');
        } else {
          redirect('', 'refresh');
        }
      } else {
        redirect('login', 'refresh');
      }
    } else {
      $data = array();
      $data['title'] = 'Admin Panel.';
      $data['content'] = 'login';
      $this->load->vars($data);
      $this->load->view('template');
    }
  }

  public function logout() {
    $data = array();
    $data['user_id'] = $this->session->userdata('user_id');
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();

    $this->session->set_flashdata('error', "Successfully loged out!");
    redirect('', 'refresh');
  }

}
