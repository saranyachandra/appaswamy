<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webmodel extends CI_Model
{
    protected $table = 'blog_post';

	function __construct()
    {
        parent::__construct();
    }
    public function get_banner_img()
    {       
        $this->db->select('*');
        $this->db->from('banner');   
        $query = $this->db->get();
        return $query->row();


    }
    public function get_press_details()
    {       
        $this->db->select('*');
        $this->db->from('press');   
        $query = $this->db->get();
        return $query->result();
    }
    public function get_press_details_home()
    {       
        $this->db->select('*');
        $this->db->from('press');  
        $this->db->order_by('press_id', 'DESC');  
        $this->db->limit('4');        
        return $this->db->get()->result();
    }
    public function get_property_details_home()
    {       
        $this->db->select('*');
        $this->db->from('property');  
        $this->db->join('property_banner', 'property_banner.property_id = property.property_id');  
        $this->db->group_by('property_banner.property_id');
        $this->db->order_by('property.property_id', 'DESC');  
        $this->db->limit('3');         
        $this->db->where('status = 1');       
        return $this->db->get()->result();
    }
    public function get_property_details()
    {       
        $this->db->select('*');
        $this->db->from('property');  
        $this->db->join('property_banner', 'property_banner.property_id = property.property_id');  
        $this->db->group_by('property_banner.property_id');         
        $this->db->where('status = 1');       
        return $this->db->get()->result();
    }

    public function get_count() {
       return  $this->db->count_all($this->table);

    }
    public function get_count_magazine($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }
    function blog_search($keyword)
    {
        $this->db->like('title',$keyword);
        $query  =   $this->db->get('blog_post');
        return $query->result();
    }

}