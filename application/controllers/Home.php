<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();		
		$this->load->model('Webmodel');
		$this->load->library("pagination");
	}
	
	public function index()
	{		
		$data['banner_img'] = $this->Webmodel->get_banner_img();
		$data['press'] = $this->Webmodel->get_press_details_home();
		$data['property'] = $this->Webmodel->get_property_details_home();
		$this->load->view('web/index',$data);		
	}

	public function property()
	{		
		$data['property'] = $this->Webmodel->get_property_details();
		$this->load->view('web/property',$data);
	}
	public function property_details($id)
	{		
		
			$property_query = "select * FROM property WHERE property_id = '$id' ";
			$data['property_details']  = $this->db->query($property_query)->row();

			$faq_query = "select * FROM property_faq WHERE property_id = '$id' ";
			$data['property_faq']  = $this->db->query($faq_query)->result();

			$banner_query = "select * FROM property_banner WHERE property_id = '$id' ";
			$data['property_banner']  = $this->db->query($banner_query)->result();

			$floorplan_query = "select * FROM property_floorplan WHERE property_id = '$id' ";
			$data['floorplan_details']  = $this->db->query($floorplan_query)->result();
           
            //print_r($data['floorplan_details']);

			$this->load->view('web/property_details',$data);
	}

	public function magazine()
	{	
		//SELECT * FROM `blog_post` where updated_date not in(SELECT max(updated_date) FROM `blog_post`); without show last row
		$config = array();
		$config["base_url"] = base_url() . "web/magazine";
		$config["total_rows"] = $this->Webmodel->get_count();
		$config["per_page"] = 5;
        $config["uri_segment"] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $result["links"] = $this->pagination->create_links();
        $result['details'] = $this->Webmodel->get_count_magazine($config["per_page"], $page);

	  	$result['last_row'] = $this->db->order_by('blog_id',"desc")
            ->limit(1)
            ->get('blog_post')
            ->row();  
       //  print_r($result['authors']);
		
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

	public function press()
	{	
		$data['details'] = $this->Webmodel->get_press_details();
		$this->load->view('web/press_coverage',$data);
	}

	public function contact_us()
	{	
		$this->load->view('web/contact_us');
	}
	public function disclaimer()
	{	
		$this->load->view('web/disclaimer');
	}
	public function guide_for_nri()
	{	
		$this->load->view('web/guide-for-nri');
	}
}