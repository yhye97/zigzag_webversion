<?php
// item_categories_relation
class Item_categories_relation_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	//상품-카테고리 릴레이션 전체 불러오기
    function get_all_item_categories_relation()
    {
        $query = $this->db->get('t_item_categories_relation');
        if($querty != NULL){
            return $query -> result();
        }
        return false;
    }
	//한 상품의 카테고리들 가져오기
	 function get_one_item_categories($itemid){
        $this->db->select('I_CartID');
        $this->db->where('I_ID',$itemid);
        $query = $this->db->get('t_item_categories_relation');
        if($query){
            return $query;
        }
        return false;
    }
	//한 상품 카테고리에 해당되는 모든 상품 가져오기
	function get_all_categories_items($icartid){
        $this->db->select();
        $this->db->from('t_items');
        $this->db->join('t_item_cateogories_relation', 't_items.I_ID = t_item_cateogories_relation.I_ID');
        $this->db->where('I_CartID',$icartid);
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

    function get_user_favItem($u_index)
{
   $this->db->select('I_Name, I_IMG, S_ID, I_Details, I_Price, I_URL');
   $this->db->from('t_items');
   $this->db->join('t_favitems', 't_items.I_ID = t_favitems.I_ID');
   $this->db->where('U_Index',$u_index);
   $query=$this->db->get();
   print_r($query->result());
   return $query->result();
}

	//상품-카테고리 릴레이션 추가하기
    function insert_shopingmall_categories_relation($data)
    {
		$this->db->$query("SELECT count(*) FROM t_item_categories_relation WHERE I_CartID==$icartid && I_ID == $itemid");
		//중복체크하기
		if($query==0)
		{
			$this->db->insert('t_item_categories_relation',$data);
		}	
    }

    /*
	//상품-카테고리 릴레이션 수정하기
    function update_shopingmall_categories_relation($itemid,$icartid)
    {
		$this->db->$query("SELECT count(*) FROM t_item_categories_relation WHERE I_CartID==$icartid && I_ID == $itemid");
		
		//중복체크하기
		if($query==0)
		{
        	$this->db->where('I_ID',$itemid);
        	$this->db->update('I_CartID',$icartid);
		}
    }*/

    //상품-카테고리 릴레이션 제거하기
    function remove_shopingmall_category($itemid,$icartid)
    {
        $this->db->where('I_ID',$itemid);
        $this->db->delete('t_item_categories_relation');
    }

     //상품-카테고리 릴레이션 추가하기
    //수정
    function insert_item_categories_relation($itemid,$icartid )
    {
		$data=array('I_ID' => $itemid,'I_CartID'=> $icartid);
		$this->db->insert('t_item_cateogories_relation',$data);
    }

    //상품-카테고리 릴레이션 수정하기
    //수정
    function update_shopingmall_categories_relation($itemid,$icartid)
    {
		$query= $this->db->get('SELECT count(*) FROM t_item_categories_relation WHERE I_CartID==$icartid && I_ID == $itemid');
		
		//중복체크하기
		if($query==0)
		{
        	$this->db->where('I_ID',$itemid);
        	$this->db->update('I_CartID',$icartid);
		}
    }

    //해당 상품의 모든 카테고리 제거
    //추가 (cateogories->categories로 해야됨)
    function remove_item_category($itemid)
    {
        $this->db->where('I_ID',$itemid);
        $this->db->delete('t_item_cateogories_relation');
    }
    
}