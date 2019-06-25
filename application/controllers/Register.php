<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->library('form_validation');
			$this->load->helper('password');
			$this->load->model('user_model');
			$this->load->model('manager_model');
			$this->load->view('header');
			$this->load->view('footer');
	}

	public function index()
	{
		//$this->load->session->userdata('item');
		$this->load->view('before_register');		// 메인 화면
	}

	public function go_register(){
		$this->load->view('register');
	}

	// 회원가입
	public function do_register(){
		$id = $this->input->post('id');
		$password = $this->input->post('password');
		
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$ismanager = $this->input->post('ismanager');

		$this->form_validation->set_rules('id', '아이디', 'required|is_unique[t_users.U_ID]');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
		$this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');

		if($this->form_validation->run() === false){
			$this->load->view('register');    
		}else{
		$password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
		$data = array('U_ID' => $id, 'U_PW' => $password, 'U_Name' => $name, 'U_Phone' => $phone, 'U_Ismanager' => $ismanager);
		$this->user_model->insert_user($data);
		if($ismanager == 1){
			$this->manager_model->s_insert_manager($id);
		}
		$this->load->view('after_register');
		}
	}

}
