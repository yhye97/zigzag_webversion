<?php
class Shoppingmall_ranking_model extends CI_Model {

function __construct()
{
    // Call the Model constructor
    parent::__construct();
}

function insert_shoppingmall($s_id)
{
    $this->db->set('S_ID', $s_id);
    $this->db->insert('t_shoppingmall_ranking');
}

function delete_shoppingmall($s_id)
{
    $this->db->where('S_ID', $s_id);
    $this->db->delete('t_shoppingmall_ranking');
}

function update_ranking($s_id)
{   
    $this->db->select('*');
    $this->db->where('S_ID', $s_id);
    $query = $this->db->get('t_FavShoppingmalls');
    $favNum = $query->num_rows();
    $data = array();
    $data['FavNum'] = $favNum;
    $this->db->where('S_ID', $s_id);
    $this->db->update('t_shoppingmall_ranking',$data);
}

function d_update_ranking($s_id)
{   
    $this->db->select('FavNum');
    $this->db->from('t_shoppingmall_ranking');
    $this->db->where('S_ID',$s_id);
    $temp = $this->db->get()->row()->FavNum;
    
    $data = array();
    $data['FavNum'] = $temp-1;
    $this->db->where('S_ID', $s_id);
    $this->db->update('t_shoppingmall_ranking',$data);
}
}