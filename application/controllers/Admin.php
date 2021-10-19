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

	public function create_banner()
	{
		$result['activeTab'] = "dashboard";
		$this->load->view('admin/banner',$result);
	}

	public function insert_banner()
	{	
		$response = array();

		$config1['upload_path'] = './assets/admin/uploads/main_banner';   
		$config1['allowed_types'] = '*';  
		$config1['max_size'] = '30720';   
		$config1['encrypt_name'] = TRUE;   

		$this->load->library('upload', $config1); 
		$this->upload->do_upload('banner_img_1'); 
		$banner_upload1=$this->upload->data();  

		$config2['upload_path'] = './assets/admin/uploads/main_banner';   
		$config2['allowed_types'] = '*'; 
		$config2['max_size'] = '30720';  
		$config2['encrypt_name'] = TRUE;

		$this->upload->initialize($config2); 
		$this->upload->do_upload('banner_img_2');  
		$banner_upload2=$this->upload->data(); 

		$config3['upload_path'] = './assets/admin/uploads/main_banner';   
		$config3['allowed_types'] = '*'; 
		$config3['max_size'] = '30720';  
		$config3['encrypt_name'] = TRUE;

		$this->upload->initialize($config3); 
		$this->upload->do_upload('banner_img_3');  
		$banner_upload3=$this->upload->data(); 

		$config4['upload_path'] = './assets/admin/uploads/main_banner';   
		$config4['allowed_types'] = '*'; 
		$config4['max_size'] = '30720';  
		$config4['encrypt_name'] = TRUE;

		$this->upload->initialize($config4); 
		$this->upload->do_upload('banner_img_4');  
		$banner_upload4=$this->upload->data(); 

		$config5['upload_path'] = './assets/admin/uploads/main_banner';   
		$config5['allowed_types'] = '*'; 
		$config5['max_size'] = '30720';  
		$config5['encrypt_name'] = TRUE;

		$this->upload->initialize($config5); 
		$this->upload->do_upload('banner_img_5');  
		$banner_upload5=$this->upload->data(); 


		  	$add_banner = array(								
									'banner_img1' 		=> $banner_upload1['file_name'],									
									'banner_img2' 		=> $banner_upload2['file_name'],
									'banner_img3' 		=> $banner_upload3['file_name'],
									'banner_img4' 		=> $banner_upload4['file_name'],
									'banner_img5' 		=> $banner_upload5['file_name'],						  
									'create_at' 		=> date('Y-m-d'),
								);
		    $insert =  $this->db->insert('banner', $add_banner);
		    if($insert == true)
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
	  	//print_r($result['details']);	
		$this->load->view('admin/banner_details',$result);
	}
	public function update_banner()
	{
			$response = array();

			if(!empty($_FILES['banner_img_new1']['name'])){
				$config1['upload_path'] = './assets/admin/uploads/main_banner';   
				$config1['allowed_types'] = '*';  
				$config1['max_size'] = '30720';   
				$config1['encrypt_name'] = TRUE;   

				$this->load->library('upload', $config1); 
				$this->upload->do_upload('banner_img_new1'); 
				$img_upload1 = $this->upload->data();
				$banner_upload1 = $img_upload1['file_name'];

			}
			else{
				$banner_upload1 = $this->input->post('banner_img_1');				
			}

			if(!empty($_FILES['banner_img_new2']['name'])){
				$config1['upload_path'] = './assets/admin/uploads/main_banner';   
				$config1['allowed_types'] = '*';  
				$config1['max_size'] = '30720';   
				$config1['encrypt_name'] = TRUE;   

				$this->load->library('upload', $config1); 
				$this->upload->do_upload('banner_img_new2'); 
				$img_upload2 = $this->upload->data();
				$banner_upload2 = $img_upload2['file_name'];
			}
			else{
				$banner_upload2 = $this->input->post('banner_img_2');				
			}

			if(!empty($_FILES['banner_img_new3']['name'])){
				$config1['upload_path'] = './assets/admin/uploads/main_banner';   
				$config1['allowed_types'] = '*';  
				$config1['max_size'] = '30720';   
				$config1['encrypt_name'] = TRUE;   

				$this->load->library('upload', $config1); 
				$this->upload->do_upload('banner_img_new3'); 
				$img_upload3 = $this->upload->data();
				$banner_upload3 = $img_upload3['file_name'];
			}
			else{
				$banner_upload3 = $this->input->post('banner_img_3');				
			}
			if(!empty($_FILES['banner_img_new4']['name'])){
				$config1['upload_path'] = './assets/admin/uploads/main_banner';   
				$config1['allowed_types'] = '*';  
				$config1['max_size'] = '30720';   
				$config1['encrypt_name'] = TRUE;   

				$this->load->library('upload', $config1); 
				$this->upload->do_upload('banner_img_new4'); 
				$img_upload4 = $this->upload->data();
				$banner_upload4 = $img_upload4['file_name'];
			}
			else{
				$banner_upload4 = $this->input->post('banner_img_4');				
			}
			if(!empty($_FILES['banner_img_new5']['name'])){
				$config1['upload_path'] = './assets/admin/uploads/main_banner';   
				$config1['allowed_types'] = '*';  
				$config1['max_size'] = '30720';   
				$config1['encrypt_name'] = TRUE;   

				$this->load->library('upload', $config1); 
				$this->upload->do_upload('banner_img_new5'); 
				$img_upload5 = $this->upload->data();
				$banner_upload5 = $img_upload5['file_name'];
			}
			else{
				$banner_upload5 = $this->input->post('banner_img_5');				
			}

			$id=$this->input->post('banner_id');
			
		  	$update_banner = array(									
									'banner_img1' 		=> $banner_upload1,									
									'banner_img2' 		=> $banner_upload2,
									'banner_img3' 		=> $banner_upload3,											  
									'banner_img4' 		=> $banner_upload4,										
									'banner_img5'       => $banner_upload5,
									'create_at' 		=> date('Y-m-d'),
								);
			$update = $this->db->where('banner_id', $id)->update('banner', $update_banner);
			if($update == true)
				{ 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}
		echo json_encode($response); 
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
