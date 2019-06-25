<?php
class Manager_model extends CI_Model {

function __construct()
{
    // Call the Model constructor
    parent::__construct();
}
function get_all_manager()
{
    $this->db->get('t_managers');
}

function insert_manager($m_id, $s_id)
{
    $data = array(
        'M_ID' => $m_id,
        'S_ID' => $s_id
    );
    $this->db->insert('t_managers', $data);
}

function s_insert_manager($m_id)
{
    $data = array(
        'M_ID' => $m_id,
    );
    $this->db->insert('t_managers', $data);
}

function update_manager($s_id)
{
    $data = array(
    'S_ID' => $s_id
);
$this->db->where('M_ID',$m_id);
$this->db->update('t_managers', $data);
}

function remove_manager($s_id)
{
$this->db->where('S_ID', $s_id);
$this->db->delete('t_managers');
}

//추가
function get_SID_byMID($m_id)
{
    $this->db->select("S_ID");
    $this->db->from("t_managers");
    $this->db->where('M_ID',$m_id);
    $query= $this->db->get();
    if($query){
        return $query->row();
    }
    return false;
}


}