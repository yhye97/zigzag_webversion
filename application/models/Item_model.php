<?php

// item
class Item_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all_item()
    {
        $query = $this->db->get('t_items');
        if($query != NULL){
            return $query -> result();
        }
        return false;
    }

    // 하나의 id로 item 가져오기
    function get_one_item_by_id($id){
        $this->db->select('I_ID');
        $this->db->where('I_ID',$id);
        $query = $this->db->get('t_items');
        if($query){
            return $query->row();
        }
        return false;
    }

    // 하나의 name로 item 가져오기
    function get_items_by_name($name){
        $this->db->select();
        $this->db->like('I_Name',$name);
        $this->db->or_like('I_Details',$name);
        $this->db->from('t_items');
        $query = $this->db->get()->result();
        if($query){
            return $query;
        }
        return false;
    }

    function insert_item($name, $img, $sid, $details, $price, $url)
    {
        $data=array('I_Name'=>$name, 'I_IMG'=>$img, 'S_ID'=>$sid, 'I_Details'=>$details, 'I_Price'=>$price, 'I_URL'=>$url);
		$this->db->insert('t_items',$data);
        
    }
   //수정
   function update_item($I_index,$data)
   {
       $query= $this->db->get("SELECT count(*) FROM t_items WHERE I_ID==$id");
       
       if($query===0){
           $this->db->where('I_ID',$I_index);
           $this->db->update('t_items',$data);
       }
       
   }

    function remove_item($I_index)
    {
        $this->db->where('I_ID',$I_index);
        $this->db->delete('t_items');
    }

      //추가
      function get_items_byShop($Sid){
        $this->db->select('I_ID');
        $this->db->from('t_items');
        $this->db->where('S_ID',$Sid);
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
        return false;
    }

     //추가
     function get_last_item_id(){
        $this->db->select_max('I_ID');
        $this->db->from('t_items');
        $query= $this->db->get();
        if($query){
            return $query->row();
        }
        return false;
    }

    //추가
    function get_item_BySid($S_id)
    {
        $this->db->select();
        $this->db->from("t_items");
        $this->db->where('S_ID',$S_id);
        $query = $this->db->get();
        if($query != NULL){
            return $query->result();
        }
        return false;
    }

}