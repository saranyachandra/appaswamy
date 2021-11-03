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
		$data['title'] = 'Properties in Chennai - Appaswamy Real Estates';
		$data['banner_img'] = $this->Webmodel->get_banner_img();
		$data['press'] = $this->Webmodel->get_press_details_home();
		$data['blog'] = $this->Webmodel->get_blog_details_home();
		$data['property'] = $this->Webmodel->get_property_details_home();
		$this->load->view('web/index',$data);		
	}

	public function index_demo()
	{		
		$data['title'] = 'Properties in Chennai demo ';
		$data['banner_img'] = $this->Webmodel->get_banner_img();
		$data['press'] = $this->Webmodel->get_press_details_home();
		$data['blog'] = $this->Webmodel->get_blog_details_home();
		$data['property'] = $this->Webmodel->get_property_details_home();
		$this->load->view('web/index-demo',$data);		
	} 
	public function property()	
	{		
		$data['title'] = 'Property - Appaswamy Real Estates';
		$data['property'] = $this->Webmodel->get_property_details();
						
		$this->load->view('web/residential',$data);
	}
	public function location_filter()	
	{		
		
		$response = array();	
		$data['title'] = 'Property - Appaswamy Real Estates';
		$data['property'] = $this->Webmodel->get_location_filter();
		
		if($this->Webmodel->get_location_filter())
            {
            	$response['status'] = 'success';
            	$response['msg'] = $data['property'];            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);

	}

	public function commercial_property()	
	{		
		$data['title'] = 'Property - Appaswamy Real Estates';
		$data['property'] = $this->Webmodel->get_commercial_details();
						
		$this->load->view('web/commercial',$data);
	}
	public function property_details($id)
	{		
			$data['title'] = 'Property - Appaswamy Real Estates';
			$property_query = "select * FROM property WHERE property_id = '$id' ";
			$data['property_details']  = $this->db->query($property_query)->row();

			$faq_query = "select * FROM property_faq WHERE property_id = '$id' ";
			$data['property_faq']  = $this->db->query($faq_query)->result();

			$banner_query = "select * FROM property_banner WHERE property_id = '$id' ";
			$data['property_banner']  = $this->db->query($banner_query)->result();

			$floorplan_query = "select * FROM property_floorplan WHERE property_id = '$id' ";
			$data['floorplan_details']  = $this->db->query($floorplan_query)->result();
           
           	$currentstatus_query = "select * FROM property_current_status WHERE property_id = '$id' ";
			$data['currentstatus_details']  = $this->db->query($currentstatus_query)->result();
           
            $data['property'] = $this->Webmodel->get_property_details_home();

            $property_feat = "select feature_name FROM features WHERE Active = 1 ";
        	$data['features']  = $this->db->query($property_feat)->result();

			$this->load->view('web/property_details',$data);
	}

	
	public function magazine()
	{
		$data['title'] = 'Blogs - Appaswamy Real Estates';
		$data['last_row'] = $this->db->order_by('blog_id',"desc")
            ->limit(1)
            ->get('blog_post')
            ->row();

        $data['property'] = $this->Webmodel->get_property_details_home();    

		$this->load->library("Pagination_bootstrap");
		$links = array('next'=>'Next', 'prev'=>'Previous', 'last'=>'Last', 'first'=>'First');
		$this->pagination_bootstrap->set_links($links);	
		$this->db->limit(10);	
		$sql = $this->db->get('blog_post');	
		

		$this->pagination_bootstrap->offset(5);
		$data['details'] = $this->pagination_bootstrap->config('/Home/magazine',$sql);		

		$this->load->view('web/magazine',$data);
	}

	
	public function magazine_details($blog_id)
	{		
		$result['title'] = 'Blogs - Appaswamy Real Estates';
		$result['property'] = $this->Webmodel->get_property_details_home();
		$this->db->select('*');
	  	$this->db->from('blog_post');
	  	$this->db->where('blog_id',$blog_id);	
	  	$result['details']  = $this->db->get()->row();	  	  	
		$this->load->view('web/magazine_details',$result);
	}
	function search_keyword()
	{
	    $data['title'] = 'Blogs - Appaswamy Real Estates';
	    $keyword    =   $this->input->post('keyword');	   

	    $this->load->library("Pagination_bootstrap");
		$links = array('next'=>'Next', 'prev'=>'Previous', 'last'=>'Last', 'first'=>'First');
		$this->pagination_bootstrap->set_links($links);

		$sql = $this->db->get('blog_post');
		$this->pagination_bootstrap->offset(5);
		$data['details'] = $this->pagination_bootstrap->config('/Home/magazine',$sql);

	    $data['details']    =   $this->Webmodel->blog_search($keyword);
	   
	    $this->load->view('web/magazine',$data);
	}

	public function press()
	{	
		$data['title'] = 'Press - Appaswamy Real Estates';
		$data['details'] = $this->Webmodel->get_press_details();
		$this->load->view('web/press_coverage',$data);
	}

	public function contact_us()
	{	
		$data['title'] = 'Contact Us - Appaswamy Real Estates';
		$this->load->view('web/contact_us',$data);
	}
	public function disclaimer()
	{	
		$data['title'] = 'Contact Us - Appaswamy Real Estates';
		$this->load->view('web/disclaimer',$data);
	}
	public function guide_for_nri()
	{	
		$data['title'] = 'Guide For NRI - Appaswamy Real Estates';
		$this->load->view('web/guide-for-nri',$data);
	}
	public function indian_investor()
	{	
		$data['title'] = 'Indian Investor - Appaswamy Real Estates';
		$this->load->view('web/indian_investor',$data);
	}
	public function privacy_policy()
	{	
		$data['title'] = 'Privacy Policy - Appaswamy Real Estates';
		$this->load->view('web/privacy_policy',$data);
	}
	public function about_us()
	{	
		$data['title'] = 'About Us - Appaswamy Real Estates';
		$this->load->view('web/about_us',$data);
	}
	public function hospitality()
	{	
		$data['title'] = 'hospitality - Appaswamy Real Estates';
		$this->load->view('web/hospitality',$data);
	}
}