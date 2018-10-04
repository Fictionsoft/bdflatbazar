<?php



if (!defined('BASEPATH'))

  exit('No direct script access allowed');



class MLeading_developers extends CI_Model {



  function __construct() {

    parent::__construct();

  }



  function get_by_id($id) {

    $data = array();

    $this->db->where('id', $id);

    $this->db->limit(1);

    $q = $this->db->get('leading_developers');

    if ($q->num_rows() > 0) {

      foreach ($q->result_array() as $row) {

        $row['apartments'] = $this->MLeading_apartments->get_type_by_developer_id($row['id']);

        $row['commercials'] = $this->MLeading_commercials->get_type_by_developer_id($row['id']);

        $row['lands'] = $this->MLeading_lands->get_type_by_developer_id($row['id']);

        $data = $row;

      }

    }



    $q->free_result();

    return $data;

  }



  function get_latest($limit = 10) {

    $data = array();

    $this->db->order_by('id', 'DESC');

    $this->db->limit($limit);

    $q = $this->db->get('leading_developers');

    if ($q->num_rows() > 0) {

      foreach ($q->result_array() as $row) {

        $data[] = $row;

      }

    }



    $q->free_result();

    return $data;

  }

  public function get_featured($limit = NULL) {

    $data = array();

    $this->db->from('leading_developers');

    if($limit){

      $this->db->limit($limit);

    }

    $this->db->where('featured', 1);

    $this->db->order_by('id', 'DESC');

    $q = $this->db->get();

    if ($q->num_rows() > 0) {

      foreach ($q->result_array() as $row) {

        $data[] = $row;

      }

    }



    $q->free_result();

    return $data;

  }
  
  

  function get_all() {

    $data = array();

    $this->db->order_by('id', 'DESC');

    $q = $this->db->get('leading_developers');

    if ($q->num_rows() > 0) {

      foreach ($q->result_array() as $row) {

        $data[] = $row;

      }

    }



    $q->free_result();

    return $data;

  }



  function create() {

    $data = array(

        'user_id' => $this->session->userdata('user_id'),

        'name' => $this->input->post('name'),

        'profile' => $this->input->post('profile'),

        'management' => $this->input->post('management'),

        'experience' => $this->input->post('experience'),

		'contact' => $this->input->post('contact'),

        'hotline' => $this->input->post('hotline'),

		'email' => $this->input->post('email'),

        'web' => prep_url($this->input->post('web')),

        'type' => $this->input->post('type'),

        'created' => date('Y-m-d H:i:s', time())

    );

    $this->db->insert('leading_developers', $data);



    return $this->db->insert_id();

  }



  function add_pic($field, $value, $id) {

    $data = array(

        $field => $value

    );



    $this->db->where('id', $id);

    $this->db->update('leading_developers', $data);

  }



  function update($id) {

    $data = array(

        'user_id' => $this->session->userdata('user_id'),

        'name' => $this->input->post('name'),

        'profile' => $this->input->post('profile'),

        'management' => $this->input->post('management'),

        'experience' => $this->input->post('experience'),

		'contact' => $this->input->post('contact'),

        'hotline' => $this->input->post('hotline'),

		'email' => $this->input->post('email'),

        'web' => prep_url($this->input->post('web')),

        'type' => $this->input->post('type'),

		

        'modified' => date('Y-m-d H:i:s', time())

    );



    $this->db->where('id', $id);

    $this->db->update('leading_developers', $data);

  }


  public function toggle($value, $id) {

    $data = array('featured' => $value);

    $this->db->where('id', $id);

    $this->db->update('leading_developers', $data);

  }

  function delete($id) {

    $this->db->where('id', $id);

    $this->db->delete('leading_developers');

  }



}