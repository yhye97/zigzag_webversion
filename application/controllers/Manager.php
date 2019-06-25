<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->model('shoppingmall_model');
			$this->load->model('shoppingmall_ranking_model');
            $this->load->model('Manager_model');
            $this->load->model('item_model');
            $this->load->model('shoppingmall_categories_relation_model');
			$this->load->model('item_categories_relation_model');
			$this->load->model('category_model');
			$this->load->model('Favitem_model');
			$this->load->model('Favshoppingmall_model');
            $this->load->view('header');
            $this->load->view('manager_nav');
			$this->load->view('footer');
			
	}

	public function index()
	{
        if($this->session->userdata('user_id')!=null && $this->session->userdata('ismanager')==1){
            $getcat = $this->category_model->get_all_shopingmall_category();
            $cat = array();
    
            foreach($getcat as $el){
                array_push($cat, $el->S_CartName);
            }
    
            $data['cat']=$cat;
    
            $this->load->view('add_shop',$data);
            
        }else{
            echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
        }
	}

	public function add_shop(){
		if($this->session->userdata('ismanager')==1){
            $getcat = $this->category_model->get_all_shopingmall_category();
            $cat = array();
    
            foreach($getcat as $el){
                array_push($cat, $el->S_CartName);
            }
    
            $data['cat']=$cat;
    
            $this->load->view('add_shop',$data);
            
        }else{
            echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
        }
		
	}

	public function insert_shop(){
		if($this->session->userdata('ismanager')==1){
			$shop_name = $this->input->post('shop_name');
			$shop_info = $this->input->post('shop_info');
			$shop_URL = $this->input->post('shop_url');
			$shop_img = $this->input->post('shop_img');
			$shop_cat = $this->input->post('shop_cat');
	  
			
			if($shop_name != NULL){
			   $this->shoppingmall_model->insert_shoppingmall($shop_name, $shop_img, $shop_info, $shop_URL);
			   
			   //sid 불러오기
			   $sid=$this->shoppingmall_model->get_last_shop_id()->S_ID;
			   
			   $this->shoppingmall_ranking_model->insert_shoppingmall($sid);
			   $manager_index = $this->session->userdata('user_id');
			   $this->Manager_model->insert_manager($manager_index,$sid);
			   foreach($shop_cat as $el){
				  if($el[0] != NULL){
					 $this->shoppingmall_categories_relation_model->m_insert_shopingmall_categories_relation($sid,$el[0]);
				  }
			   }
			   $this->load->view('after_add');
			}

	
		}else{
			echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
		}
        
     }

    public function add_item(){
		if($this->session->userdata('ismanager')==1){
			$getcat = $this->category_model->get_all_item_category();
			$cat = array();

			foreach($getcat as $el){
				array_push($cat, $el->I_CartName);
			}

			$data['cat']=$cat;

			$this->load->view('add_item',$data);
			
		}else{
		echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
	}
		
	}

    public function insert_item(){
		if($this->session->userdata('ismanager')!=1){
			echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
		}else{
        $manager_index = $this->session->userdata('user_id');
        $mySID = $this->Manager_model->get_SID_byMID($manager_index)->S_ID;
  
        $item_name = $this->input->post('item_name');
        $item_info = $this->input->post('item_info');
        $item_URL = $this->input->post('item_url');
        $item_img = $this->input->post('item_img');
        $item_cat = $this->input->post('item_cat');
        $item_price = $this->input->post('item_price');
  
        if($item_name != NULL){
           $this->item_model->insert_item($item_name, $item_img, $mySID, $item_info, $item_price, $item_URL);
           $Iid = $this->item_model->get_last_item_id()->I_ID;
           foreach($item_cat as $el){
              if($el[0] != NULL){
                 $this->item_categories_relation_model->insert_item_categories_relation($Iid,$el[0]);
              }
           }
           $this->load->view('after_add');
		}
	}
     }

	public function delete_item(){
		if($this->session->userdata('ismanager')!=1){
			echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
		}else{
        $manager_index = $this->session->userdata('user_id');
		$mySID = $this->Manager_model->get_SID_byMID($manager_index);
		if($mySID){
		$myItem = $this->item_model->get_item_BySid($mySID->S_ID);
		$id = array();
		$name = array();
		$info = array();
		$URL = array();
		$img = array();
		$price = array();

		foreach($myItem as $el){
			array_push($id, $el->I_ID);
			array_push($name, $el->I_Name);
			array_push($img, $el->I_IMG);
			array_push($info, $el->I_Details);
			array_push($price, $el->I_Price);
			array_push($URL, $el->I_URL);
		}

		$data['id']=$id;
		$data['name']=$name;
		$data['img']=$img;
		$data['info']=$info;
		$data['price']=$price;
		$data['url']=$URL;

		$this->load->view('delete_item',$data);
	}else{
		echo "<script>alert('삭제할 상품이 없습니다.');history.back();</script>";
	}
}
	}

	public function delete_shoppingmall(){
		if($this->session->userdata('ismanager')!=1){
			echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
		}else{
        $manager_index = $this->session->userdata('user_id');
		$mySID = $this->Manager_model->get_SID_byMID($manager_index);
		if($mySID){
		$getShop = $this->shoppingmall_model->m_get_one_shoppingmall($mySID->S_ID);

		$data['id']=$getShop->S_ID;
		$data['name']=$getShop->S_Name;
		$data['img']=$getShop->S_IMG;
		$data['info']=$getShop->S_Detail;
		$data['url']=$getShop->S_URL;
		
		$this->load->view('delete_shoppingmall', $data);}else{
			echo "<script>alert('삭제할 쇼핑몰이 없습니다.');history.back();</script>";
		}
	}
	}
	
	public function del_item(){
		if($this->session->userdata('ismanager')!=1){
			echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
		}else{
		$item_id = $this->input->post('id');
		$this->item_model->remove_item($item_id);

		//카테고리 삭제
		$this->item_categories_relation_model->remove_item_category($item_id);
		//관심상품 삭제
		$this->Favitem_model->remove_FavItem_byItem($item_id);


		$this->load->view('after_delete');
		}

	}

	public function del_shop(){
		if($this->session->userdata('ismanager')!=1){
			echo "<script>alert('쇼핑몰 매니저만 사용가능합니다.');history.back();</script>";
		}else{
		$S_id = $this->input->post('id');
		$this->shoppingmall_model->remove_shoppingmall($S_id);
		$this->load->view('after_delete');
	
		//카테고리 삭제
		$this->shoppingmall_categories_relation_model->remove_shoppingmall_category($S_id);
		//관심쇼핑몰 삭제
		$this->Favshoppingmall_model->remove_FavShop_byShop($S_id);

		$this->Manager_model->remove_manager($S_id);

		//해당 쇼핑몰 id를 가진 상품 배열 생성
		$S_item=array();
		$getItem=$this->item_model->get_items_byShop($S_id);

		foreach($getItem as $el){
			array_push($S_item,$el->I_ID);
		}
		//아이템 처리
		foreach($S_item as $el){
			$this->item_model->remove_item($el);
			$this->item_categories_relation_model->remove_item_category($el);
			$this->Favitem_model->remove_FavItem_byItem($el);
		}
	}
	}
	
}
