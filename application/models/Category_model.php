<?php
// shopingmall category + item category
class Category_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all_item_category(){
        $this->db->select();
        $this->db->from('t_i_categories');
        $query = $this->db->get();
        if($query){
            return $query -> result();
        }
        return false;
    }

    function get_one_shopingmall_category($cate_name){
        $this->db->select('S_CartID');
        $this->db->where('S_CartName',$cate_name);
        $query = $this->db->get('t_s_categories');
        if($query){
            return $query->row();
        }
        return false;
    }

     function get_one_item_category($cate_name){
        $this->db->select('I_CartID');
        $this->db->where('I_CartName',$cate_name);
        $query = $this->db->get('t_i_categories');
        if($query){
            return $query->row();
        }
        return false;
    }

    function insert_shopingmall_category($data)
    {
        $this->db->insert('t_i_categories',$data);
    }

     function insert_item_category($data)
    {
        $this->db->insert('t_s_categories',$data);
    }

    function update_shopingmall_category($shopingmall_index,$data)
    {
        $this->db->where('S_CartID',$shopingmall_index);
        $this->db->update('t_s_categories',$data);
    }

    function update_item_category($item_index,$data)
    {
        $this->db->where('I_CartID',$item_index);
        $this->db->update('t_i_categories',$data);
    }

    function remove_shopingmall_category($shopingmall_index)
    {
        $this->db->where('S_CartID',$shopingmall_index);
        $this->db->delete('t_s_categories');
    }

    function remove_item_category($item_index)
    {
        $this->db->where('I_CartID', $item_index);
        $this->db->delete('t_i_categories');
    }

       //수정
    function get_all_shopingmall_category()
    {
        $query = $this->db->get('t_s_categories');
        if($query != NULL){
            return $query -> result();
        }
        return false;
    }

      //수정
    function get_one_shoppingmall_category($cate_name){
        $this->db->select('S_CartID');
        $this->db->where('S_CartName',$cate_name);
        $query = $this->db->get('t_s_categories');
        if($query){
            return $query->result();
        }
        return false;
    }

}