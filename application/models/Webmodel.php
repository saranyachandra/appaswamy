<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webmodel extends CI_Model
{
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
    

}