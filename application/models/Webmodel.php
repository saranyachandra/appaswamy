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
        $this->db->from('main_banner');   
        $query = $this->db->get();
        return $query->result();

    }
    public function get_press_details()
    {       
        $this->db->select('*');
        $this->db->from('press');  
         $this->db->where('Active = 1'); 
        $query = $this->db->get();
        return $query->result();
    }
    public function get_press_details_home()
    {       
        $this->db->select('*');
        $this->db->from('press'); 
        $this->db->where('Active = 1');
        $this->db->order_by('press_id', 'DESC');  
        $this->db->limit('2');        
        return $this->db->get()->result();
    }
    public function get_blog_details_home()
    {       
        $this->db->select('*');
        $this->db->from('blog_post');
        $this->db->where('Active = 1');  
        $this->db->order_by('blog_id', 'DESC');  
        $this->db->limit('2');        
        return $this->db->get()->result();
    }
    public function get_property_details_home()
    {       
        $this->db->select('*');
        $this->db->from('property');  
        $this->db->join('property_banner', 'property_banner.property_id = property.property_id');  
        $this->db->group_by('property.property_id');
        $this->db->order_by('property.property_id', 'DESC');  
        $this->db->limit('3');
        $this->db->where('type', 'Residential');         
        $this->db->where('status = 1');       
        return $this->db->get()->result();
    }
    public function get_property_details()
    {       
        $this->db->select('*');
        $this->db->from('property');  
        $this->db->join('property_banner', 'property_banner.property_id = property.property_id'); 
        $this->db->join('property_current_status', 'property_current_status.property_id = property.property_id');  
        $this->db->group_by('property_banner.property_id');
        $this->db->where('type', 'Residential');         
        $this->db->where('status = 1');       
        return $this->db->get()->result();
    }
    public function get_location_filter()
    {   
        $name = $this->input->post('name');  

        $this->db->select('*');
        $this->db->from('property');  
        $this->db->join('property_banner', 'property_banner.property_id = property.property_id');  
        $this->db->group_by('property_banner.property_id');
        $this->db->where('location', $name);         
        $this->db->where('status = 1');       
        return $this->db->get()->result();
    }
    public function get_commercial_details()
    {       
        $this->db->select('*');
        $this->db->from('property');  
        $this->db->join('property_banner', 'property_banner.property_id = property.property_id');  
        $this->db->group_by('property_banner.property_id');         
        $this->db->where('type', 'Commercial');   
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