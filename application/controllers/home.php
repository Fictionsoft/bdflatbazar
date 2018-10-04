<?php



if (!defined('BASEPATH'))

  exit('No direct script access allowed');



class Home extends CI_Controller {



  public function index() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'home';

    $data['featured'] = $this->MPosts->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['apartments'] = $this->MApartment_sales->get_featured();

    $data['lands'] = $this->MLand_sales->get_featured();

    $data['commercials'] = $this->MCommercial_sales->get_featured();
	
	
	$data['leading_apartments'] = $this->MLeading_apartments->get_featured();

    $data['leading_lands'] = $this->MLeading_lands->get_featured();

    $data['leading_commercials'] = $this->MLeading_commercials->get_featured();
	
	//for all leading projects
	$data['all_leading_projects'] = array();

	foreach ($data['leading_apartments'] as $apartment)

	{
		$apartment['data_type'] = "apt";
		$apartment['uploads_folder'] = "apts/";
		$data['all_leading_projects'][] = $apartment;
	}

	foreach ($data['leading_lands'] as $land)

	{
		$land['data_type'] = "land";
		$land['uploads_folder'] = "lands/";
		$data['all_leading_projects'][] = $land;
	}

	foreach ($data['leading_commercials'] as $commercial)

	{
		$commercial['data_type'] = "comm";
		$commercial['uploads_folder'] = "commercials/";
		$data['all_leading_projects'][] = $commercial;
	}
	//
	

    $data['hostels'] = $this->MHostel_rents->get_featured();

    $data['messes'] = $this->MMess_rents->get_featured();

    $data['sublets'] = $this->MSublet_rents->get_featured();

    $data['wearhouses'] = $this->MWearhouse_rents->get_featured();	

	//for all rents

	$data['allrents'] = array();

	foreach ($data['hostels'] as $hostel)

	{

		$hostel['renttype'] = "hostel_rent";

		$data['allrents'][] = $hostel;

	}

	foreach ($data['messes'] as $mess)

	{

		$mess['renttype'] = "mess_rent";

		$data['allrents'][] = $mess;

	}

	foreach ($data['sublets'] as $sublet)

	{

		$sublet['renttype'] = "sublet_rent";

		$data['allrents'][] = $sublet;

	}

	foreach ($data['wearhouses'] as $wearhouse)

	{

		$wearhouse['renttype'] = "wearhouse_rent";

		$data['allrents'][] = $wearhouse;

	}

	//	

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $this->load->view('template', $data);

  }



  public function register_1() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'register_1';

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $this->load->view('template', $data);

  }



  public function register_2() {

    if (!$this->input->post('type')) {

      redirect('home/register_1', 'refresh');

    } else {

      $data = array();

      $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

      $data['menu'] = 'home';

      $data['leftbar'] = 'leftbar_general';

      $data['content'] = 'register_2';

      $data['latest'] = $this->MPosts->get_latest(5);

      $data['leading'] = $this->MLeading_developers->get_featured();

      $data['type'] = $this->input->post('type');

      $this->load->view('template', $data);

    }

  }



  public function register_3() {

    if ($this->input->post()) {

      $password = random_string();



      $id = $this->MUsers->create($password);

      $this->MProfiles->create($id);



      /// Start Sending Mail to the user email address

      $this->email->from('info@bdflatbazar.com', 'BD Flat Bazar');

      $this->email->to(trim($this->input->post('email')));

      $this->email->subject('Your Login Details');

      $msg = "Dear" . $this->input->post('first_name') . "\r\n";

      $msg .= "Welcome to BD Flat Bazar. \r\n Your Login Information \r\n";

      $msg .= "User Name : " . trim($this->input->post('email')) . "\r\n";

      $msg .= "Password : " . $password . "\r\n";

      $msg .= "Visit Us now : http://bdflatbazar.com/ \r\n";

      $this->email->message($msg);

      $this->email->send();

      ///End sending mail

      redirect('home/complete', 'refresh');

    } else {

      $data = array();

      $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

      $data['menu'] = 'home';

      $data['leftbar'] = 'leftbar_general';

      $data['content'] = 'register_3';

      $data['latest'] = $this->MPosts->get_latest(5);

      $data['leading'] = $this->MLeading_developers->get_featured();

      $this->load->view('template', $data);

    }

  }



  public function complete() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'complete';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'register_complete';

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $this->load->view('template', $data);

  }



  public function requirments_details($id) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'req_details';

    $data['requirement'] = $this->MPosts->get_by_id($id);

    $data['latest'] = $this->MPosts->get_latest(15);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $this->load->vars($data);

    $this->load->view('template');

  }



  public function req_query($id = NULL) {

    if ($this->input->post()) {



      //* Start Sending Mail to the user email address

      $this->email->from('info@bdflatbazar.com', 'BD Flat Bazar');

      $this->email->to('query@bdflatbazar.com');

      $this->email->subject('SomeOne Query About Requirment.');

      $msg = "Dear Admin" . $this->input->post('first_name') . "\r\n";

      $msg .= "We Receive a query on ID :" . $this->input->post('id') . " \r\n \r\n";

      $msg .= "Name : " . trim($this->input->post('name')) . "\r\n";

      $msg .= "Email : " . trim($this->input->post('email')) . "\r\n";

      $msg .= "Cell : " . trim($this->input->post('cell_no')) . "\r\n";



      $this->email->message($msg);

      $this->email->send();

      ///End sending mail */

      redirect('home/req_success', 'refresh');

    } else {

      $data = array();

      $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

      $data['menu'] = 'home';

      $data['content'] = 'home';

      $data['id'] = $id;

      $this->load->vars($data);

      $this->load->view('req_query');

    }

  }



  public function req_success() {

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $this->load->vars($data);

    $this->load->view('req_success');

  }



  public function leading_developer_list() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'leading_developer_list';

    $data['developers'] = $this->MLeading_developers->get_all();

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->view('template', $data);

  }



  public function leading_developer($id) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'leading_developer_details';

    $data['developer'] = $this->MLeading_developers->get_by_id($id);

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $this->load->view('template', $data);

  }



  public function leading_project_list($developer_id, $data_type, $project_type) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'leading_project_list';

    if ($data_type == "apt") {

      $row = $this->MLeading_apartments->get_by_developer_id($developer_id, $project_type);

    } elseif ($data_type == "comm") {

      $row = $this->MLeading_commercials->get_by_developer_id($developer_id, $project_type);

    } elseif ($data_type == "land") {

      $row = $this->MLeading_lands->get_by_developer_id($developer_id, $project_type);

    }
	
	$data['projects'] = $row;

    $data['data_type'] = $data_type;

    $data['developer'] = $this->MLeading_developers->get_by_id($developer_id);

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $this->load->view('template', $data);

  }



  public function leading_project_details($developer_id, $data_type, $id) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'leading_project_details';

    $data['developer'] = $this->MLeading_developers->get_by_id($developer_id);

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);
	
	$data['data_type'] = $data_type;
	
	if ($data_type == "apt") {

      $row = $this->MLeading_apartments->get_list(NULL, NULL, $id);

    } elseif ($data_type == "comm") {

      $row = $this->MLeading_commercials->get_list(NULL, NULL, $id);

    } elseif ($data_type == "land") {

      $row = $this->MLeading_lands->get_list(NULL, NULL, $id);

    }
	
	$data['projects'] = $row;
	
    $this->load->view('template', $data);

  }



  public function buy_area_list($type) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'buy_area_list';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;

	

	($this->input->post('vtype')) ? $data['vtype'] = $this->input->post('vtype'):$data['vtype'] = 'All';



    if ($type == "apt_sale") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MApartment_sales->get_area_list($district['id'], $data['vtype']);

        $row[] = $district;

      }

    } elseif ($type == "land") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MLand_sales->get_area_list($district['id'], $data['vtype']);

        $row[] = $district;

      }

    } elseif ($type == "comm") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MCommercial_sales->get_area_list($district['id'], $data['vtype']);

        $row[] = $district;

      }

    }



    $data['buy_list'] = $row;

    $this->load->view('template', $data);

  }



  public function buy_property_list($type, $area_id = NULL, $vtype = NULL) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'buy_property_list';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;



    if ($type == "apt_sale") {

      $row = $this->MApartment_sales->get_list($area_id, NULL, $vtype);

    } elseif ($type == "land") {

      $row = $this->MLand_sales->get_list($area_id, NULL, $vtype);

    } elseif ($type == "comm") {

      $row = $this->MCommercial_sales->get_list($area_id, NULL, $vtype);

    }



    $data['property_list'] = $row;

    $this->load->view('template', $data);

  }



  public function buy_property_details($type, $id) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'buy_property_details';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;



    if ($type == "apt_sale") {

      $row = $this->MApartment_sales->get_list(NULL, $id);

    } elseif ($type == "land") {

      $row = $this->MLand_sales->get_list(NULL, $id);

    } elseif ($type == "comm") {

      $row = $this->MCommercial_sales->get_list(NULL, $id);

    }



    $data['property_list'] = $row;

    $this->load->view('template', $data);

  }



  public function tolet_area_list($type) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'tolet_area_list';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;



    if ($type == "apt_sale") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MApartment_rents->get_area_list($district['id']);

        $row[] = $district;

      }

    } elseif ($type == "land") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MLand_rents->get_area_list($district['id']);

        $row[] = $district;

      }

    } elseif ($type == "comm") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MCommercial_rents->get_area_list($district['id']);

        $row[] = $district;

      }

    } elseif ($type == "hostel_rent") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MHostel_rents->get_area_list($district['id']);

        $row[] = $district;

      }

    } elseif ($type == "mess_rent") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MMess_rents->get_area_list($district['id']);

        $row[] = $district;

      }

    } elseif ($type == "sublet_rent") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MSublet_rents->get_area_list($district['id']);

        $row[] = $district;

      }

    } elseif ($type == "wearhouse_rent") {

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MWearhouse_rents->get_area_list($district['id']);

        $row[] = $district;

      }

    }



    $data['buy_list'] = $row;

    $this->load->view('template', $data);

  }



  public function tolet_property_list($type, $area_id) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'tolet_property_list';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;



    if ($type == "apt_sale") {

      $row = $this->MApartment_rents->get_list($area_id);

    } elseif ($type == "land") {

      $row = $this->MLand_rents->get_list($area_id);

    } elseif ($type == "comm") {

      $row = $this->MCommercial_rents->get_list($area_id);

    } elseif ($type == "hostel_rent") {

      $row = $this->MHostel_rents->get_list($area_id);

    } elseif ($type == "mess_rent") {

      $row = $this->MMess_rents->get_list($area_id);

    } elseif ($type == "sublet_rent") {

      $row = $this->MSublet_rents->get_list($area_id);

    } elseif ($type == "wearhouse_rent") {

      $row = $this->MWearhouse_rents->get_list($area_id);

    }



    $data['property_list'] = $row;

    $this->load->view('template', $data);

  }



  public function tolet_property_details($type, $id) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'tolet_property_details';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;



    if ($type == "apt_sale") {

      $row = $this->MApartment_rents->get_list(NULL, $id);

    } elseif ($type == "land") {

      $row = $this->MLand_rents->get_list(NULL, $id);

    } elseif ($type == "comm") {

      $row = $this->MCommercial_rents->get_list(NULL, $id);

    } elseif ($type == "hostel_rent") {

      $row = $this->MHostel_rents->get_list(NULL, $id);

    } elseif ($type == "mess_rent") {

      $row = $this->MMess_rents->get_list(NULL, $id);

    } elseif ($type == "sublet_rent") {

      $row = $this->MSublet_rents->get_list(NULL, $id);

    } elseif ($type == "wearhouse_rent") {

      $row = $this->MWearhouse_rents->get_list(NULL, $id);

    }



    $data['property_list'] = $row;

    $this->load->view('template', $data);

  }



  public function post_area_list($type) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'post_area_list';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;



    if ($type == "buy") {

      $type_array = array('Buy', 'Sell');

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MPosts->get_area_list($district['id'], $type_array);

        $row[] = $district;

      }

    } elseif ($type == "rent") {

      $type_array = array('Rent', 'Rent Out');

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MPosts->get_area_list($district['id'], $type_array);

        $row[] = $district;

      }

    } elseif ($type == "joint") {

      $type_array = array('Joint Venture');

      foreach ($data['districts'] as $district) {

        $district['area'] = $this->MPosts->get_area_list($district['id'], $type_array);

        $row[] = $district;

      }

    }



    $data['post_list'] = $row;

    $this->load->view('template', $data);

  }



  public function post_property_list($type, $area_id = NULL) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'post_property_list';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;

    if ($type == "buy") {

      $type_array = array('Buy', 'Sell');

      $row = $this->MPosts->get_list($area_id, $type_array);

    } elseif ($type == "rent") {

      $type_array = array('Rent', 'Rent Out');

      $row = $this->MPosts->get_list($area_id, $type_array);

    } elseif ($type == "joint") {

      $type_array = array('Joint Venture');

      $row = $this->MPosts->get_list($area_id, $type_array);

    }

    $data['property_list'] = $row;

    $this->load->view('template', $data);

  }



  public function post_property_details($type, $id) {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'home';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'post_property_details';

    $data['developer'] = $this->MLeading_developers->get_latest();

    $data['latest'] = $this->MPosts->get_latest(5);

    $data['leading'] = $this->MLeading_developers->get_featured();

    $data['districts'] = $this->MDistricts->get_all();

    $data['areas'] = $this->MAreas->get_all($data['districts'][0]['id']);

    $data['type'] = $type;

    $row = $this->MPosts->get_list(NULL, NULL, $id);

    $data['property_list'] = $row;

    $this->load->view('template', $data);

  }



  public function contact() {

    if ($this->input->post()) {

      //*Start Sending Mail to the user email address

      $this->email->from($this->input->post('email'), 'Web Site');

      $this->email->to('info@bdflatbazar.com');

      $this->email->subject($this->input->post('subject'));

      $msg = $this->input->post('message') . "\r\n";

      $this->email->message($msg);

      $this->email->send();

      ///End sending mail

      redirect('home/contact_success', 'refresh');

    } else {

      $data = array();

      $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

      $data['menu'] = 'contact';

      $data['leftbar'] = 'leftbar_general';

	  $data['leading'] = $this->MLeading_developers->get_featured();

      $data['content'] = 'contact';

      $data['latest'] = $this->MPosts->get_latest(5);

      $this->load->vars($data);

      $this->load->view('template');

    }

  }



  public function contact_success() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'contact';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'contact_success';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }



  public function under() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'under';

    $data['leftbar'] = 'leftbar_general';

    $data['content'] = 'under';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }





public function buyproperty() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'buyproperty';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'buyproperty';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }





public function tolet() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'tolet';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'tolet';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }



public function materials() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'materials';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'materials';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }



public function prospect() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'prospect';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'prospect';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }



public function service() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'service';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'service';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }





public function archetect() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'archetect';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'archetect';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function construct() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'construct';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'construct';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function interior() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'interior';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'interior';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function security() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'security';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'security';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function furniture() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'furniture';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'furniture';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function superstore() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'superstore';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'superstore';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function cable() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'cable';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'cable';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function internet() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'internet';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'internet';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }



public function legals() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'legals';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'legals';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

public function others() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'others';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'others';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  public function cement() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'cement';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'cement';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  public function rod() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'rod';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'rod';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  public function paint() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'paint';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'paint';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  public function dump() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'dump';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'dump';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  public function glass() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'glass';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'glass';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');
  }

  public function tiles() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'tiles';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'tiles';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  public function electric() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'electric';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'electric';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

   public function offer() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'offer';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'offer';

    $data['latest'] = $this->MOffers->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  public function loan() {

    $data = array();

    $data['title'] = 'Welcome Bdflatbazar ltd:Apartment, Real Estate, Flat, Plot,Land, To-let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh.';

    $data['menu'] = 'loan';

    $data['leftbar'] = 'leftbar_general';

	 $data['leading'] = $this->MLeading_developers->get_featured();

    $data['content'] = 'loan';

    $data['latest'] = $this->MPosts->get_latest(5);

    $this->load->vars($data);

    $this->load->view('template');

  }

  

  }

  





