<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("ModelUser"); //load model mahasiswa
    }

	
	
	public function index()
	{
		$this->load->view('welcome_message');
		
	}

	public function verification(){
		
		$data = [
			'username'=> $this->input->post('username'),
			'password'=> $this->input->post('password'),
		];

		// var_dump($data);
		$check = $this->ModelUser->verification($data['username'], $data['password']);

		if($check){
			redirect(base_url('dashboard'));
		}else{
			$this->load->view('welcome_message');
		}
		
		
	}
}
