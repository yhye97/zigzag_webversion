<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FavShoppingmall_model extends CI_Model {

function __construct()
{
    // Call the Model constructor
    parent::__construct();
}

function get_user_favShoppingmall($u_index)
{
    $this->db->where('U_Index',$u_index);
    $query = $this->db->get('t_FavShoppingmalls');
    if($query != NULL){
        return $query -> result();
    }
    return false;
}

//수정!
function get_all_favShoppingmall()
{
    $query = $this->db->get('t_FavShoppingmalls');
    return $query->result();
}
//수정!
function get_user_favsm($u_index)
{
    $this->db->select('t_shoppingmalls.S_ID, S_Name, S_IMG, S_Detail, S_URL');
    $this->db->from('t_shoppingmalls');
    $this->db->join('t_favshoppingmalls', 't_shoppingmalls.S_ID = t_favshoppingmalls.S_ID');
    $this->db->where('U_Index', $u_index);
    $query = $this->db->get();
    return $query->result();
}
//수정!
function insert_favShoppingmall($u_index, $s_id)
{
        $this->db->set('U_Index', $u_index);
        $this->db->set('S_ID', $s_id);
        $this->db->insert('t_FavShoppingmalls');
}
//수정!
function remove_favShoppingmall($u_index, $s_id)
{
    $this->db->where('U_Index', $u_index);
    $this->db->where('S_ID', $s_id);
    $this->db->delete('t_FavShoppingmalls');
}

//추가
function remove_FavShop_byShop($S_id){
    $this->db->where('S_ID', $S_id);
    $this->db->delete('t_favshoppingmalls');
}


}