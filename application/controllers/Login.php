<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->helper('password');
			$this->load->model('user_model');
			$this->load->view('header');
			$this->load->view('footer');
			
	}

	public function index()
	{
		$this->load->view('before_login');		// 메인 화면

	}

	// 로그인
	public function login_access(){
		$id = $this->input->post('id');
		$password = $this->input->post('password');
		$getdata = $this->user_model->do_login($id);
		
		if($getdata &&  password_verify($password, $getdata->U_PW)){
			$newdata = array(
				'user_id'  => $getdata->U_Index,
				'user_name' => $getdata->U_Name,
				'ismanager' => $getdata->U_Ismanager,	// 1이면 매니저
				'is_login' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect();
		}
		else{
			$this->session->set_flashdata('message','로그인에 실패했습니다.\n아이디와 비밀번호를 다시 한 번 확인해주세요.');
			redirect('login');
		}
		
	}

	// 로그아웃
	public function logout(){
		$this->session->sess_destroy();
		echo "<script>alert('로그아웃 되었습니다.'); location.replace('http://localhost/index.php');</script>";
	}


}
