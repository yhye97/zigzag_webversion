<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingmall extends CI_Controller {


    public function __construct()
   {
	  parent::__construct();
	  $this->load->model('shoppingmall_model');
	  $this->load->model('category_model');
      $this->load->model('favshoppingmall_model');
	  $this->load->model('shoppingmall_categories_relation_model');
	  $this->load->model('user_model');
      $this->load->model('shoppingmall_ranking_model');
      $this->load->view('header');
      $this->load->view('footer');
   }

	public function index()
	{	
        $id = $this->session->userdata('user_id');
		$name = $this->user_model->get_user_name($id);
		$getdata1 = $this->category_model->get_all_shopingmall_category();
		$category = array();
		foreach($getdata1 as $el){
			array_push($category, $el->S_CartName);
		}
		$getdata2 = $this->shoppingmall_model->get_shoppingmall_ranking();
		$s_id = array();
		$name = array();
		$img = array(); 
		$detail = array();
		$url = array();
		foreach($getdata2 as $el){
			array_push($s_id,$el->S_ID);
			array_push($name, $el->S_Name);
			array_push($img, $el->S_IMG);
			array_push($detail, $el->S_Detail);
			array_push($url, $el->S_URL);
		}
		$data['u_id'] = $id;
		$data['name'] = $name;
		$data['s_id'] = $s_id;
		$data['category'] = $category;
		$data['name'] = $name;
		$data['img'] = $img;
		$data['detail'] = $detail;
        $data['url'] = $url;
        $data['keyword'] = false;
		$this->load->view('shoppingmall',$data);
    }

   public function search()
   {	
		$keyword=$this->input->post('keyword');
		$id = $this->session->userdata('user_id');
		$getdata = $this->shoppingmall_model->search_shoppingmall($keyword);
		$name = array();
		$img = array();
        $url = array();
        $s_id = array();
        if($getdata!=false){  // 쇼핑몰 검색 결과 있으면
            foreach($getdata as $el){
                array_push($name, $el->S_Name);
                array_push($img, $el->S_IMG);
                array_push($url, $el->S_URL);
                array_push($s_id, $el->S_ID);
            }
            $data['name'] = $name;
            $data['img'] = $img;
            $data['url'] = $url;
            $data['keyword'] = $keyword;
            $data['s_id'] = $s_id;
            $data['u_id'] = $id;

            $this->load->view('shoppingmall_search', $data);
        }else{
            $data['keyword'] = 'none';
            $this->load->view('shoppingmall',$data);
        }
    }
	
	public function cat_search()
	{
		$cateName = $this->input->post('cateName');
		//print_r($cateName);
		$s_cartid = $this->category_model->get_one_shoppingmall_category($cateName);
		$c_id = $s_cartid[0]->S_CartID;
		$getdata = $this->shoppingmall_model->get_shoppingmall_catranking($c_id);
		$cat = array($cateName);
		$name = array();
		$img = array();
		$detail = array();
		$url = array();
		foreach($getdata as $el){
			array_push($name, $el->S_Name);
			array_push($img, $el->S_IMG);
			array_push($detail, $el->S_Detail);
			array_push($url, $el->S_URL);
		}
		$data['cat'] =  $cateName;
		$data['name'] = $name;
		$data['img'] = $img;
		$data['detail'] = $detail;
		$data['url'] = $url;
		$this->load->view('shoppingmall_categorysearch', $data);
		
	}

	public function add_FavShoppingmall()
	{
		$postdata=$this->input->post();

		$this->favshoppingmall_model->insert_favshoppingmall($postdata['u_id'], $postdata['s_id']);
		$this->shoppingmall_ranking_model->update_ranking($postdata['s_id']);

		echo "<script>alert('관심 쇼핑몰에 추가하였습니다!');history.back();</script>";
	}

}