<?php
class Favitem_model extends CI_Model {

function __construct()
{
    // Call the Model constructor
    parent::__construct();
}

function get_all_favItem()
{
    $this->db->get('t_FavItems');
}

function check_favItem($u_index, $i_id)
{
    //$this->db->select(count(*));
    $this->db->where('U_Index', $u_index);
    $this->db->where('I_ID', $i_id);
    $query = $this->db->get('t_FavItems');
    if($query->num_rows()>0)
        return false;
    else
        return true;
}

//수정!
function get_user_favItem($u_index)
{
    $this->db->select('t_items.I_ID as I_ID, I_Name, I_IMG,I_Details, I_Price, I_URL, t_shoppingmalls.S_Name, t_shoppingmalls.S_URL');
    $this->db->from('t_items');
    $this->db->join('t_favitems', 't_items.I_ID = t_favitems.I_ID');
    $this->db->join('t_shoppingmalls', 't_items.S_ID = t_shoppingmalls.S_ID');
    $this->db->where('U_Index', $u_index);
    $query = $this->db->get();
    return $query->result();
}
//수정!
function insert_favItem($u_index, $i_id)
{
    /*$this->db->select();
    $this->db->from('t_FavItems');
    $this->db->where('U_Index',$u_index);
    $this->db->where('I_ID',$i_id);
    $temp = $this->db->get()->row();*/
    $temp = $this->check_favItem($u_index,$i_id);
    if($temp){
        $this->db->set('U_Index', $u_index);
        $this->db->set('I_ID', $i_id);
        $this->db->insert('t_FavItems');
    }
    else{
        return false;
    }
    return true;
}
//수정!
function remove_favItem($u_index, $i_id)
{
    $this->db->where('U_Index', $u_index);
    $this->db->where('I_ID', $i_id);
    $this->db->delete('t_FavItems');
}


//추가
function remove_FavItem_byItem($I_id){
    $this->db->where('I_ID', $I_id);
    $this->db->delete('t_favitems');
}


}