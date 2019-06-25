<?php

// user
class User_model extends CI_Model {

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_all_user()
    {
        $this->db->select();
        $this->db->from('t_users');
        $query = $this->db->get()->result();
        if($query != NULL){
            return $query;
        }
        return false;
    }

    /*
    public function get_pw($id){
        $this->db->select('U_PW');
        $this->db->where('U_ID',$id);
        $this->db->from('t_users');
        $data = $this->db->get();
        if($data){
            return $data->row();
        }
        return false;
    }*/

    
    public function do_login($id){
        $this->db->select('U_Index, U_PW, U_Name, U_Ismanager');
        $this->db->where('U_ID',$id);
        $this->db->from('t_users');
        $data = $this->db->get();
    
        if($data){
            return $data->row();
        }
       
        return false;
    }
    

    /* 테스트용
    public function do_login($id,$password){
       

        $this->db->select('U_Index, U_Name, U_Ismanager');
        $this->db->where('U_ID',$id);
        $this->db->from('t_users');
        $data = $this->db->get();
    
        if($data){
            return $data->row();
        }
       
        return false;
    }
    */

    public function get_user_name($id){

		$this->db->select('U_Name');
       $this->db->from('t_users');
       $this->db->where('U_Index',$id);
        $query = $this->db->get();
           return $query->row();
    }

    public function get_user_phone($id){
		// $this->db->select();
		$this->db->select('U_Phone');
		$this->db->from('t_users');
		$this->db->where('U_Index',$id);
		$query = $this->db->get();
		return $query->row();
	}

    public function get_one_user($id){
        $this->db->select('U_ID');
        $this->db->where('U_ID',$id);
        $query = $this->db->get('t_users');
        if($query){
            return $query->row();
        }
        return false;
    }

    public function get_user_id($id){
        // $this->db->select();
        $this->db->select('U_ID');
        $this->db->from('t_users');
        $this->db->where('U_Index',$id);
        $query = $this->db->get();
        return $query->row();
     }

    public function insert_user($data)
    {
		$this->db->insert('t_users',$data);
    }

    public function update_user($U_index,$data)
    {
        $query= $this->db->query("SELECT count(*) FROM user WHERE U_ID==$id");
        
        if($query===0){
            $this->db->where('U_Index',$U_index);
            $this->db->update('t_users',$data);
        }
        
    }

    public function remove_user($U_index)
    {
        $this->db->where('U_Index',$U_index);
        $this->db->delete('t_users');
    }
    
}