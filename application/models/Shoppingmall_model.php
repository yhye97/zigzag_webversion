<?php

// shopingmall
class shoppingmall_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all_shoppingmall()
    {
        $query = $this->db->get('t_shoppingmalls');
        if($query != NULL){
            return $query -> result();
        }
        return false;
    }

    function m_get_one_shoppingmall($id){
        $this->db->select();
        $this->db->from("t_shoppingmalls");
        $this->db->where('S_ID',$id);
        $query = $this->db->get();
        if($query){
            return $query->row();
        }
        return false;
    }

    function insert_shoppingmall($name, $img, $detail, $url)
    {
            $data=array('S_Name'=>$name, 'S_IMG'=>$img, 'S_Detail'=>$detail, 'S_URL'=>$url);
			$this->db->insert('t_shoppingmalls',$data);
    }

    function update_shoppingmall($S_index,$data)
    {
        $query= $this->db->query("SELECT count(*) FROM shoppingmall WHERE S_ID==$id");
        
        if($query===0){
            $this->db->where('S_ID',$S_index);
            $this->db->update('t_shoppingmalls',$data);
        }
        
    }

    function remove_shoppingmall($S_index)
    {
        $this->db->where('S_ID',$S_index);
        $this->db->delete('t_shoppingmalls');
    }

        //수정됨
        function get_one_shoppingmall($name){
            $this->db->select('S_ID');
            $this->db->where('S_Name',$name);
            $query = $this->db->get('t_shoppingmalls');
            if($query){
                return $query -> row();
            }
            return false;
        }

        //추가됨
    function get_shoppingmall_ranking()
    {   
        $this->db->select('s.S_ID,s.S_Name, s.S_IMG, s.S_Detail, s.S_URL');
        $this->db->from('t_shoppingmalls as s');
        $this->db->join('t_shoppingmall_ranking as f', 's.S_ID = f.S_ID');
        $this->db->order_by('f.FavNum', 'desc');
        $query = $this->db->get();
        if($query!=NULL){
            return $query->result();
        }
        else false;
    }
    //추가됨
    function get_shoppingmall_catranking($s_cartid)
    {   
        $this->db->select('s.S_Name, s.S_IMG, s.S_Detail, s.S_URL');
        $this->db->from('t_shoppingmalls as s');
        $this->db->join('t_shoppingmall_ranking as f', 's.S_ID = f.S_ID');
        $this->db->join('t_shoppingmall_categories_relation as c', 's.S_ID = c.S_ID');
        $this->db->where('c.S_CartID',$s_cartid);
        $this->db->order_by('f.FavNum', 'desc');
        $query = $this->db->get();
        if($query!=NULL){
            return $query->result();
        }
        else false;
    }
    //추가됨
    function search_shoppingmall($keyword)
    {
        $this->db->select();
        $this->db->from('t_shoppingmalls');
        $this->db->like('S_Name',$keyword);
        $query = $this->db->get();
        return $query->result();
    }


     //추가
     function get_last_shop_id(){
        $this->db->select_max('S_ID');
        $this->db->from('t_shoppingmalls');
        $query= $this->db->get();
        if($query){
            return $query->row();
        }
        return false;
    }
    
}