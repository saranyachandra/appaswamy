<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('Propertymodel');
		$this->load->model('Pressmodel');
		if($this->session->userdata('admin_id') == '') { 
			redirect('Login/index');
		}
	}
	
	public function dashboard()
	{
		$result['activeTab'] = "dashboard";

		$tot_res = 'SELECT count(property_id) as total FROM property where type="Residential" ';
		$result['total_res']=$this->db->query($tot_res)->row();

		$tot_com = 'SELECT count(property_id) as total FROM property where type="Commercial" ';
		$result['total_com']=$this->db->query($tot_com)->row();

		$result['property_details'] = $this->Propertymodel->get_property_details_dashboard();	
		$this->load->view('admin/index',$result);
	}

	public function create_blog()
	{
		$result['activeTab'] = "apps";
		$this->load->view('admin/create_blog',$result);
	}

	public function insert_blog()
	{	
		$response = array();
	 
			if($this->Pressmodel->insert_blog_details())
				{		 	
					$this->session->set_flashdata('success', 'Blog updated successfully...');
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}
		echo json_encode($response); 
		
	}
	public function update_blog()
	{
		$response = array();			
			if($this->Pressmodel->update_blog_det())
				{ 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}
		echo json_encode($response); 
	}
	public function blog_details()
	{		
		$result['activeTab'] = "apps";		
	  	$result['details']  = $this->Pressmodel->get_blog_details();	  	  	
		$this->load->view('admin/blog_details',$result);
	}
	public function edit_blog($blog_id)
	{		
		$result['activeTab'] = "apps";		
	  	$result['details']  = $this->Pressmodel->edit_blog_by_id($blog_id);	  	  	
		$this->load->view('admin/edit_blog_details',$result);
	}

	public function delete_blog($id)
	{
	    $response = array();
	    if($this->Pressmodel->delete_blog_by_id($id))
				{		 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}		
		echo json_encode($response);
	}
	
	public function create_property()
	{
		$result['activeTab'] = "forms";
		$property_query = "select * FROM features WHERE Active = 1 ";
        $result['details']  = $this->db->query($property_query)->result();

		$this->load->view('admin/create_property',$result);		
	}

	public function insert_property()
	{		
		$response = array();
           if($this->Propertymodel->property())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	public function property_details()
	{		
		$result['activeTab'] = "forms";		
		$result['property_details'] = $this->Propertymodel->get_property_details();	  	
		$this->load->view('admin/property_details',$result);
	}
	public function edit_property($id)
	{		
		$result['activeTab'] = "forms";	

		$property_query = "select * FROM property WHERE property_id = '$id' ";
        $result['details']  = $this->db->query($property_query)->row();

        $faq_query = "select * FROM property_faq WHERE property_id = '$id' ";
        $result['faq']  = $this->db->query($faq_query)->result();

        $banner_query = "select * FROM property_banner WHERE property_id = '$id' ";
        $result['banner']  = $this->db->query($banner_query)->result();

        $banner_query = "select * FROM property_floorplan WHERE property_id = '$id' ";
        $result['floor_plan']  = $this->db->query($banner_query)->result(); 

        $property_feat = "select feature_name FROM features WHERE Active = 1 ";
        $result['features']  = $this->db->query($property_feat)->result();

		$this->load->view('admin/edit_property_details',$result);
	}
	public function edit_property_overview()
	{		
		$response = array();
           if($this->Propertymodel->edit_property())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	public function edit_property_faq()
	{		
		$response = array();
           if($this->Propertymodel->edit_property_faq())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	//Edit property floor plan 
	public function edit_property_floor_plan(){
		$response = array();
           if($this->Propertymodel->edit_property_floor_plan())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	public function delete_floorplan()
	{
	    $response = array();
	    $id = $_POST['id'];  
	    $sql= $this->db->query("delete from property_floorplan where floor_id='".$id."'");
	    if($sql == true)
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
		echo json_encode($response);
	}
	public function delete_faq()
	{
	   $response = array();
	   $faq_id = $_POST['id'];  
	   $sql= $this->db->query("delete from property_faq where faq_id='".$faq_id."'");
	    if($sql == true)
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
		echo json_encode($response);
	}

	public function delete_property_banner()
	{
	   $response = array();
	   $id = $_POST['id'];  
	   $sql= $this->db->query("delete from property_banner where banner_id='".$id."'");
	    if($sql == true)
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
		echo json_encode($response);
	}
	public function property_banner_update()
	{		
		$response = array();
           if($this->Propertymodel->property_banner_update_by())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	public function edit_property_specification()
	{		
		$response = array();
           if($this->Propertymodel->edit_property_specification())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	public function edit_property_feature()
	{		
		$response = array();
           if($this->Propertymodel->edit_property_feature())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
	public function create_press()
	{
		$result['activeTab'] = "press";
		$this->load->view('admin/create_press',$result);
	}

	public function insert_press()
	{		
		$response = array();
           if($this->Pressmodel->add_press())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }        	
        echo json_encode($response);
	}
	public function delete_property($id)
	{
	    $response = array();
	    if($this->Propertymodel->delete_property_by_id($id))
				{		 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}		
		echo json_encode($response);
	}
	public function press_details()
	{		
		$result['activeTab'] = "press";		
		$result['details'] = $this->Pressmodel->get_press_details(); 	  	
		$this->load->view('admin/press_details',$result);
	}
	public function delete_press($id)
	{
	    $response = array();
	    if($this->Pressmodel->delete_press_by_id($id))
				{		 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}		
		echo json_encode($response);
	}
	public function edit_press($id)
	{		
		$result['activeTab'] = "press";		
	  	$result['details']  = $this->Pressmodel->edit_press_by_id($id);	  	  	
		$this->load->view('admin/edit_press_details',$result);
	}
	public function update_press()
	{
		$response = array();			
			if($this->Pressmodel->update_press_det())
				{ 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}
		echo json_encode($response); 
	}
}
