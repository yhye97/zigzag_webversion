<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finditem extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->model('user_model');
			$this->load->model('manager_model');
			$this->load->model('item_categories_relation_model');
			$this->load->model('category_model');
			$this->load->view('header');
            $this->load->view('footer');
			$this->load->model('item_model');
			$this->load->model('item_categories_relation_model');
			
	}

	public function index()
	{
		$data['keyword'] = false;
		$getdata = $this->category_model->get_all_item_category();
		$category_index = array();
		$category_name = array();
	
		foreach($getdata as $el){
			array_push($category_index,$el->I_CartID);
			array_push($category_name,$el->I_CartName);
		}
		$data['category_index'] = $category_index;
		$data['category_name'] = $category_name;

		$this->load->view('find_item',$data);		// 메인 화면
	}

	public function find_item(){
		$keyword = $this->input->post('item_name');
		$getdata = $this->item_model->get_items_by_name($keyword);
		$item_index = array();
		$name = array();
		$img = array();
		$shop_index = array();
		$price = array();
		$surl = array();
		$data = false;
		$data['category_name'] = false;
				
		if($getdata!=false){		// 상품결과가 있으면
			foreach($getdata as $el){
				array_push($item_index,$el->I_ID);
				array_push($name,$el->I_Name);
				array_push($img,$el->I_IMG);
				array_push($shop_index,$el->S_ID);
				array_push($price,$el->I_Price);
				array_push($surl,$el->I_URL);
			}
			$data['item_index'] = $item_index;
			$data['name'] = $name;
			$data['img'] = $img;
			$data['shop_index'] = $shop_index;
			$data['price'] = $price;
			$data['surl'] = $surl;
			$data['keyword'] = $keyword;

			$this->load->view('item_result',$data);
		}
		else{		// 상품결과가 없으면
			$data['keyword'] = $keyword;
			$this->load->view('find_item',$data);
		}
	}

	// 카테고리에 해당하는 상품 보여주기
	public function show_category(){
		$category_index = $this->input->post('category_index');
		$category_name = $this->input->post('cate_name');
		$getdata = $this->item_categories_relation_model->get_all_categories_items($category_index);

		$item_index = array();
		$name = array();
		$img = array();
		$shop_index = array();
		$price = array();
		$surl = array();
		$data = false;
		$data['keyword'] = false;

		if($getdata!=false){		// 상품결과가 있으면
			foreach($getdata as $el){
				array_push($item_index,$el->I_ID);
				array_push($name,$el->I_Name);
				array_push($img,$el->I_IMG);
				array_push($shop_index,$el->S_ID);
				array_push($price,$el->I_Price);
				array_push($surl,$el->I_URL);
			}
			$data['item_index'] = $item_index;
			$data['name'] = $name;
			$data['img'] = $img;
			$data['shop_index'] = $shop_index;
			$data['price'] = $price;
			$data['surl'] = $surl;
			$data['category_name'] = $category_name;
			$this->load->view('item_result',$data);
		}
		else{		// 상품결과가 없으면
			$data['keyword'] = 'none';
			$this->load->view('find_item',$data);
		}
	}



}
