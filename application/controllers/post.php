<?php



if (!defined('BASEPATH'))

  exit('No direct script access allowed');



class Post extends CI_Controller {



  public function index() {

    $data = array();

    $data['title'] = 'Welcome Flatbazar.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'post_requirement';

    $data['latest'] = $this->MPosts->get_latest(15);

    

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $this->load->view('template', $data);

  }



  public function submit_requirment() {

    if ($this->input->post()) {

	  require_once('assets/plugin/recaptchalib.php');
	  $privatekey = "6Lct6eYSAAAAABwHokaA81bLRydLygiEDbRnvAUm";
	  $resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);
	
	  if (!$resp->is_valid) {
		// What happens when the CAPTCHA was entered incorrectly
		die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
			 "(reCAPTCHA said: " . $resp->error . ")");
	  } else {
      		$id = $this->MPosts->create();
	  }

//      if ($_FILES['picture']['name']) {

//        $config['file_name'] = $id;

//        $config['upload_path'] = './upload/post/';

//        $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';

//        $config['max_size'] = '5120';

//        $this->upload->initialize($config);

//

//        if (!$this->upload->do_upload("picture")) {

//          $error = array('error' => $this->upload->display_errors());

//          print_r($error);

//        } else {

//          $filedata = $this->upload->data();

//          $this->MPosts->add_picture($filedata['file_name'], $id);

//

//          $con['image_library'] = 'gd2';

//          $con['source_image'] = './upload/post/' . $filedata['file_name'];

//

//          $con['new_image'] = './upload/post/' . mythumb($filedata['file_name']);

//          $con['maintain_ratio'] = TRUE;

//          $con['width'] = 300;

//          $con['height'] = 200;

//          $this->load->library('image_lib', $con);

//          $this->image_lib->resize();

//          $this->image_lib->clear();

//        }

//      }

      $data = array();

      $data['title'] = 'Welcome Flatbazar.';

      $data['menu'] = 'home';

      $data['leftbar'] = 'leftbar_general';

      $data['content'] = 'post_success';

      $data['latest'] = $this->MPosts->get_latest(5);

      $data['leading'] = $this->MLeading_developers->get_featured();

      $data['districts'] = $this->MDistricts->get_all();

      $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

      $this->load->view('template', $data);

    } else {

      redirect('post', 'refresh');

    }

  }



  public function get_area() {

    $result = "";

    $data = $this->MAreas->get_all($this->input->post('district_id'));

    foreach ($data as $key => $value) {

      $result .= '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';

    }



    echo $result;

  }



}

