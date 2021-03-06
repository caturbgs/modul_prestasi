<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsageGuzzle extends Member_controller {
	public function __construct()
	{
		parent::__construct();
	}
	

	public function getSomething($token='')
	{
		$data = array();
		$token = ""; // if youre using token

		// select one request below based on your condition
		$retr  = $this->customguzzle->getBearerToken('something-service/get-something',$token,'application/json'); 
		$retr  = $this->customguzzle->getBasicToken('something-service/get-something','application/json');
		$retr  = $this->customguzzle->getBlankToken('something-service/get-something','application/json');
		
		if ($retr['data']) {
			$data['error'] = false;
			$data['type'] = 'success';
			$data['data'] = json_decode($retr['data']);
			
			header('Content-Type: application/x-json; charset=utf-8');	
			echo  json_encode(array('data' =>  $data));
		}
		else{
			// you can run get refresh token here couse if token basic or bearer has expired this section will be executed
			exit();
		}
	}

	public function updateProfile(){
		$data = array();
		$post = $this->input->post(); // it's to store your post params from frontend/xhttp request application
		$token =  ""; // if youre using token	

		$retr = $this->customguzzle->postBearerToken('authentication-service/update-user-profile',$token,'application/form-data',$post);	
		$retr = $this->customguzzle->postBasicToken('authentication-service/update-user-profile','application/form-data',$post);	
		$retr = $this->customguzzle->postBlank('authentication-service/update-user-profile',$token,'application/form-data',$post);	

		if ($retr['data']) {
			$data['error'] = false;
			$data['type'] = 'success';
			$data['data'] = json_decode($retr['data']);

			header('Content-Type: application/x-json; charset=utf-8');	
			echo  json_encode(array('data' =>  $data));
			
		}
		else{
			// you can run get refresh token here couse if token basic or bearer has expired this section will be executed
			exit();
		}
	}

		
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */
