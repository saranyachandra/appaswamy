<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('');		
	}
	
	public function index()
	{		
		$this->load->view('web/index');
	}

	public function property()
	{		
			$this->db->select('*');
            $this->db->from('property');  
            $this->db->join('property_banner', 'property_banner.property_id = property.property_id');  
            $this->db->group_by('property_banner.property_id');         
            $this->db->where('status = 1');

            $data['property'] = $this->db->get()->result();   
           // print_r($data['property']) ;    	

			$this->load->view('web/property',$data);
	}

	public function magazine()
	{	
		//SELECT * FROM `blog_post` where updated_date not in(SELECT max(updated_date) FROM `blog_post`); without show last row

		$this->db->select('*');
	  	$this->db->from('blog_post'); 	
	  	$result['details']  = $this->db->get()->result();

	  	$result['last_row'] = $this->db->order_by('blog_id',"desc")
            ->limit(1)
            ->get('blog_post')
            ->row();  
		
		$this->load->view('web/magazine',$result);
	}
	
	public function magazine_details($blog_id)
	{		
		
		$this->db->select('*');
	  	$this->db->from('blog_post');
	  	$this->db->where('blog_id',$blog_id);	
	  	$result['details']  = $this->db->get()->row();	  	  	
		$this->load->view('web/magazine_details',$result);
	}

	


}