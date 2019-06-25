<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->model('user_model');
			$this->load->model('manager_model');
			$this->load->model('item_model');
			$this->load->view('header');
			$this->load->view('footer');
	}

	public function index()
	{
		$this->load->view('welcome_message');		// 메인 화면
	}

}
