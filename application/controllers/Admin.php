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
		$config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
		$config1['max_size'] = '30720';   
		$config1['encrypt_name'] = TRUE;   

		$this->load->library('upload', $config1); 
		$this->upload->do_upload('banner_img_1'); 
		$banner_upload1=$this->upload->data();  

		$config2['upload_path'] = './assets/admin/uploads/main_banner';   
		$config2['allowed_types'] = 'jpg|jpeg|bmp|png'; 
		$config2['max_size'] = '30720';  
		$config2['encrypt_name'] = TRUE;

		$this->upload->initialize($config2); 
		$this->upload->do_upload('banner_img_2');  
		$banner_upload2=$this->upload->data(); 

		$config3['upload_path'] = './assets/admin/uploads/main_banner';   
		$config3['allowed_types'] = 'jpg|jpeg|bmp|png'; 
		$config3['max_size'] = '30720';  
		$config3['encrypt_name'] = TRUE;

		$this->upload->initialize($config3); 
		$this->upload->do_upload('banner_img_3');  
		$banner_upload3=$this->upload->data(); 

		$config4['upload_path'] = './assets/admin/uploads/main_banner';   
		$config4['allowed_types'] = 'jpg|jpeg|bmp|png'; 
		$config4['max_size'] = '30720';  
		$config4['encrypt_name'] = TRUE;

		$this->upload->initialize($config4); 
		$this->upload->do_upload('banner_img_4');  
		$banner_upload4=$this->upload->data(); 

		$config5['upload_path'] = './assets/admin/uploads/main_banner';   
		$config5['allowed_types'] = 'jpg|jpeg|bmp|png'; 
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
				$config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
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
				$config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
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
				$config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
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
				$config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
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
				$config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
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

		$config['upload_path'] = './assets/admin/uploads/banner';   // Directory 
		$config['allowed_types'] = 'jpg|jpeg|bmp|png';  //type of images allowed
		$config['max_size'] = '30720';   //Max Size
		$config['encrypt_name'] = TRUE;   // For unique image name at a time

		$this->load->library('upload', $config);  //File Uploading library
		$this->upload->do_upload('banner_img');  // input name which have to upload 
		$banner_upload=$this->upload->data();   //variable which store the path

		$config2['upload_path'] = './assets/admin/uploads/thumb';   // Directory 
		$config2['allowed_types'] = 'jpg|jpeg|bmp|png'; //type of images allowed
		$config2['max_size'] = '30720';   //Max Size
		$config2['encrypt_name'] = TRUE;   // For unique image name at a time


		$this->upload->initialize($config2); 
		$this->upload->do_upload('thumb_img');  // File Name
		$thumb_upload=$this->upload->data(); // 

		  	$add_blog = array(									
									'title' 			=> $this->input->post('blog_title'),									
									'author' 		    => $this->input->post('blog_author'),
									'updated_date' 		=> $this->input->post('blog_date'),
									'banner_img' 		=> $banner_upload['file_name'],
									'thumb_img' 		=> $thumb_upload['file_name'],									  
									'description' 		=> $this->input->post('editor'),										
									'updated_date'      => $this->input->post('facebook'),
									'create_at' 		=> date('Y-m-d'),

								);
		    $insert =  $this->db->insert('blog_post', $add_blog);
		    if($insert == true)
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
			$id=$this->input->post('blog_id');
			
		  	$update_blog = array(									
									'title' 			=> $this->input->post('blog_title'),									
									'author' 		    => $this->input->post('blog_author'),
									'updated_date' 		=> $this->input->post('blog_date'),											  
									'description' 		=> $this->input->post('editor'),										
									'updated_date'      => $this->input->post('blog_date'),
									'create_at' 		=> date('Y-m-d'),

								);
			$update = $this->db->where('blog_id', $id)->update('blog_post', $update_blog);
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
	public function get_blog_details()
	{		
		$result['activeTab'] = "apps";
		
		$this->db->select('*');
	  	$this->db->from('blog_post'); 	
	  	$result['details']  = $this->db->get()->result();	  	  	
		$this->load->view('admin/blog_details',$result);
	}
	public function edit_blog_by_id($blog_id)
	{		
		$result['activeTab'] = "apps";		
		$this->db->select('*');
	  	$this->db->from('blog_post');
	  	$this->db->where('blog_id',$blog_id);	
	  	$result['details']  = $this->db->get()->row();	  	  	
		$this->load->view('admin/edit_blog_details',$result);
	}

	public function delete_blog_by_id($id)
	{
	    $active_update = array( 'Active' => 1 );    
	    $update = $this->db->where('blog_id', $id)->update('blog_post', $active_update);	   

	    if($update == true)
				{		 	
					$this->session->set_flashdata('success', 'Blog updated successfully...');
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}		
		
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

	public function get_press_details()
	{		
		$result['activeTab'] = "press";		
		$this->db->select('*');
	  	$this->db->from('press'); 	
	  	$result['details']  = $this->db->get()->result();	  	  	
		$this->load->view('admin/press_details',$result);
	}
}
