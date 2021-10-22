<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();		
		$this->load->model('Bannermodel');
		if($this->session->userdata('admin_id') == '') { 
			redirect('Login/index');
		}
	}
	
	public function create_banner()
	{
		$result['activeTab'] = "dashboard";
		$this->load->view('admin/banner',$result);
	}
	public function insert_banner()
	{	
		$response = array();

		if($this->Bannermodel->insert_banner())
			{		 	
				$response['status'] = 'success'; 			
			}
		else 
			{	
				$response['status'] = 'failed';
			}
		echo json_encode($response); 
		
	}

	public function banner_details()
	{
		$result['activeTab'] = "dashboard";		
		$this->db->select('*');
	  	$this->db->from('banner'); 	
	  	$result['details']  = $this->db->get()->row();	  	
	  		
		$this->load->view('admin/banner_details',$result);
	}
	public function update_banner()
	{
		$response = array();
		
			if($this->Bannermodel->update_banner())
				{ 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}
		echo json_encode($response); 
	}

	public function create_mobile_banner()
	{
		$result['activeTab'] = "dashboard";
		$this->load->view('admin/mobile_banner',$result);
	}

}
