<?php
// shoppingmall_categories_relation
class Shoppingmall_categories_relation_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	//쇼핑몰-카테고리 릴레이션 전체 불러오기
    function get_all_shopingmall_categories_relation()
    {
        $query = $this->db->get('t_shoppingmall_categories_relation');
        if($querty != NULL){
            return $query -> result();
        }
        return false;
    }
	//한 쇼핑몰의 카테고리들 가져오기
	 function get_one_shoppingmall_categories($shopingmall_index){
        $this->db->select('S_CartID');
        $this->db->where('S_ID',$shopingmall_index);
        $query = $this->db->get('t_shoppingmall_categories_relation');
        if($query){
            return $query;
        }
        return false;
    }
	//한 쇼핑몰 카테고리에 해당되는 모든 쇼핑몰 가져오기
	function get_all_categories_shoppingmalls($scartid){
        $this->db->select('S_ID');
        $this->db->where('S_CartID',$scartid);
        $query = $this->db->get('t_shoppingmall_categories_relation');
        if($query){
            return $query;
        }
        return false;
    }
	//쇼핑몰-카테고리 릴레이션 추가하기
    function insert_shopingmall_categories_relation($data)
    {
        /*
		$this->db->$query("SELECT count(*) FROM t_shoppingmall_categories_relation WHERE S_CartID==$scartid && S_ID == $shoppingmall_index");
		//중복체크하기
		if($query==0)
		{*/
			$this->db->insert('t_shoppingmall_categories_relation',$data);
		//}	
    }

    //쇼핑몰-카테고리 릴레이션 추가하기
    function m_insert_shopingmall_categories_relation($shoppingmall_index,$scartid )
    {
		$data=array('S_ID' => $shoppingmall_index,'S_CartID'=> $scartid);
		$this->db->insert('t_shoppingmall_categories_relation',$data);
    }


	//쇼핑몰-카테고리 릴레이션 수정하기
    function update_shopingmall_categories_relation($shopingmall_index,$scartid)
    {
		$this->db->$query("SELECT count(*) FROM t_shoppingmall_categories_relation WHERE S_CartID==$scartid && S_ID == $shoppingmall_index");
		
		//중복체크하기
		if($query==0)
		{
        	$this->db->where('S_ID',$shopingmall_index);
        	$this->db->update('S_CartID',$scartid);
		}
    }

    //쇼핑몰-카테고리 릴레이션 제거하기
    function remove_shopingmall_category($shopingmall_index)
    {
        $this->db->where('S_ID',$shopingmall_index);
        $this->db->delete('t_shoppingmall_categories_relation');
    }

     //추가
     function remove_shoppingmall_category($sid)
     {
         $this->db->where('S_ID',$sid);
         $this->db->delete('t_shoppingmall_categories_relation');
     }
     
    
}