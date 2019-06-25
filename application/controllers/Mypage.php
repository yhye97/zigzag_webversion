<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('favshoppingmall_model');
		$this->load->model('favitem_model');
		$this->load->model('Shoppingmall_ranking_model');
		$this->load->view('header');
		$this->load->view('footer');
	}


	//마이페이지
	function index()
	{
		$id = $this->session->userdata('user_id');
		if($this->session->userdata('user_id')==null){
			alert('로그인 한 회원만 이용가능한 기능입니다!',base_url());
		}else{

		//mypage 정보
		
		$data['user_id']=$this->user_model->get_user_id($id);
		$data['user_name']=$this->user_model->get_user_name($id);
		$data['user_phone']=$this->user_model->get_user_phone($id);
		$data['user_index']=$id;

		//즐겨찾기 정보
		//S_Name, S_IMG, S_Detail, S_URL
		$getdata=$this->favshoppingmall_model->get_user_favsm($id);
		$sid=array(); //쇼핑몰 ID ==인덱스
		$sname=array(); //쇼핑몰 이름
		$simg=array(); // 쇼핑몰 사진
		$sdetails=array(); // 쇼핑몰 상세설명
		$surl=array(); //쇼핑몰 URL
		foreach($getdata as $el)
		{
			array_push($sid ,$el->S_ID);
			array_push($sname ,$el->S_Name);
			array_push($simg, $el->S_IMG);
			array_push($sdetails, $el->S_Detail);
			array_push($surl, $el->S_URL);
		}
		$data['favsmid']=$sid;
		$data['favsmname']=$sname;
		$data['favsmimg']=$simg;
		$data['favsmdetails']=$sdetails;
		$data['favsmurl']=$surl;

		//관심상품정보
		$getdata=$this->favitem_model->get_user_favItem($id);
		$iid=array(); //관심상품 ID
		$iname=array(); // 관심상품 이름
		$iimg=array();//관심상품 이미지
		$idetails=array();//관심상품 상세설명
		$iprice=array();//관심상품 가격
		$iurl=array();//관심상품 URL
		$sname=array();//관심상품 해당 쇼핑몰 이름
		$surl=array();//관심상품 쇼핑몰 URL
		foreach($getdata as $el)
		{
			array_push($iid ,$el->I_ID);
			array_push($iname ,$el->I_Name);
			array_push($iimg, $el->I_IMG);
			array_push($idetails, $el->I_Details);
			array_push($iprice, $el->I_Price);
			array_push($iurl, $el->I_URL);
			array_push($sname,$el->S_Name);
			array_push($surl,$el->S_URL);
		}
		$data['iid']=$iid;
		$data['name']=$iname;
		$data['img']=$iimg;
		$data['details']=$idetails;
		$data['price']=$iprice;
		$data['iurl']=$iurl;
		$data['sname']=$sname;
		$data['surl']=$surl;

		$this->load->view('mypage_viewpage',$data);
	}
	}

	//즐겨찾기 제거
	function favsm()
	{

		if($this->session->userdata('user_id')==null){
			alert('로그인 한 회원만 이용가능한 기능입니다!',base_url());
		}else{
		$postData = $this->input->post();
		$this->favshoppingmall_model->remove_favShoppingmall($postData['u_index'], $postData['favsmid']);
		$this->Shoppingmall_ranking_model->d_update_ranking($postData['favsmid']);
		return $this->index($postData['u_index']);}
	}

	//관심상품 제거
	function favitem()
	{

		if($this->session->userdata('user_id')==null){
			alert('로그인 한 회원만 이용가능한 기능입니다!',base_url());
		}else{
		$postData = $this->input->post();
		$this->favitem_model->remove_favItem($postData['u_index'], $postData['favitemid']);
		return $this->index($postData['u_index']);
		}
	}

	// 관심상품 추가
	public function insert_favitem(){

		if($this->session->userdata('user_id')==null){
			alert('로그인 한 회원만 이용가능한 기능입니다!',base_url());
		}else{
		$item_index = $this->input->post('item_index');
		if($item_index){
			$complete = $this->favitem_model->insert_favItem($this->session->user_id,$item_index);
			if($complete){
				//alert('관심 상품으로 등록하였습니다.',base_url('finditem/find_item'));
				echo "<script> alert('관심 상품으로 등록하였습니다.');history.go(-1); </script>";
			}
			else{
				//alert_only('이미 관심 상품으로 등록되어 있는 상품입니다!');
				echo "<script> alert('이미 관심 상품으로 등록되어 있는 상품입니다.');history.go(-1); </script>";
			}
		}
	}
	}

}
